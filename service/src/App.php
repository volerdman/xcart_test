<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

use Doctrine\Common\Cache\FilesystemCache;
use GraphQL\Type\Definition\ResolveInfo;
use Psr\Log\LoggerInterface;
use Silex\Application;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use XCart\Bus\Core\DataSourceAnnotationService;
use XCart\Bus\Core\RebuildAnnotationService;
use XCart\Bus\Core\ResolverAnnotationService;
use XCart\Bus\System\ResourceChecker;
use XCart\SilexAnnotations\AnnotationServiceProvider;
use XCart\SilexAnnotations\NameConverter\FQCNNotation;
use XCart\SilexAnnotations\RouterAnnotationService;
use XCart\SilexAnnotations\ServiceAnnotationService;

/**
 * @param array $config
 *
 * @return Application
 */
return static function ($config) {
    $app = new Application();

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    $app['xc_config'] = $config;

    $rootDir = dirname(__DIR__, 2) . '/';

    $serviceAuthCode = '06c2792b0b1db32aac9cb5eb69eabc04';
    $config          = [
        'debug'                      => $config['log_details']['level'] === (string) \LOG_DEBUG,
        'developer_mode'             => (bool) $config['performance']['developer_mode'],
        'ignore_system_modules'      => (bool) ($config['performance']['ignore_system_modules'] ?? false),
        'jwt_secret_key_legacy'      => $config['installer_details']['shared_secret_key'],
        'jwt_secret_key'             => $config['installer_details']['auth_code'],
        'authcode_reference'         => $config['installer_details']['auth_code'],
        'service_authcode_reference' => $serviceAuthCode,
        'domain'                     => '://' . $config['host_details']['http_host'],
        'domain_ssl'                 => '://' . $config['host_details']['https_host'],
        'use_admin_domain'           => !empty($config['host_details']['admin_host']),
        'webdir'                     => rtrim($config['host_details']['web_dir'], '/'),
        'admin_script'               => $config['host_details']['admin_self'],
        'affiliate_id'               => $config['affiliate']['id'] ?? null,
        'installation_lng'           => $config['installation']['installation_lng'],
        'xc_cookie_name'             => 'xid',
        'log.path'                   => $rootDir . 'var/log/',
        'marketplace.editions_url'   => $config['marketplace']['editions_url'],
        'trial.is_enabled'           => $config['service']['is_trial'] ?? false,
        'trial.end_date'             => $config['trial']['end_date'] ?? null,
        'marketplace.endpoint'       => $config['marketplace']['url'],
        'marketplace.xb_host'        => $config['marketplace']['xb_host'] ?? 'secure.x-cart.com',
        'marketplace.segment_url'    => $config['marketplace']['segment_url'],
        'bus_root_dir'               => __DIR__ . '/',
        'root_dir'                   => $rootDir,
        'cache_dir'                  => $rootDir . 'files/service',
        'file_cache_dir'             => $rootDir . 'var/datacache/bus/',
        'module_packs_dir'           => $rootDir . 'var/packs/',
        'module_packs_dir_last'      => $rootDir . 'var/packs_last/',
        'tmp_dir'                    => $rootDir . 'var/tmp/',
        'phar_is_installed'          => ResourceChecker::PharIsInstalled(),
        'email'                      => $_COOKIE['recent_login'] ?? '',
        'verify_certificate'         => (bool) $config['service']['verify_certificate'],
        'basic_auth_user'            => $config['service']['basic_auth_user'],
        'basic_auth_pass'            => $config['service']['basic_auth_pass'],
    ];

    $app['config'] = $config;
    $app['debug']  = $config['debug'];

    if (isset($app['xc_config']['other']['trusted_proxies']) && $app['xc_config']['other']['trusted_proxies']) {
        $trustedProxiesOption = str_replace(' ', '', $app['xc_config']['other']['trusted_proxies']);
        $trustedProxies       = explode(',', $trustedProxiesOption);

        Request::setTrustedProxies($trustedProxies, Request::HEADER_X_FORWARDED_ALL);
    }

    $app->register(new AnnotationServiceProvider(), [
        AnnotationServiceProvider::NAME_CONVERTER_SERVICE_NAME => new FQCNNotation(),
        AnnotationServiceProvider::ROOT_OPTION_NAME            => __DIR__,
        AnnotationServiceProvider::CACHE_SERVICE_NAME          => new FilesystemCache($app['config']['file_cache_dir']),
        AnnotationServiceProvider::SERVICES_OPTION_NAME        => [
            ServiceAnnotationService::class    => __DIR__,
            RouterAnnotationService::class     => __DIR__ . '/XCart/Bus/Controller',
            ResolverAnnotationService::class   => __DIR__ . '/XCart/Bus/Query/Resolver',
            DataSourceAnnotationService::class => __DIR__ . '/XCart/Bus/Query/Data',
            RebuildAnnotationService::class    => __DIR__ . '/XCart/Bus/Rebuild',
        ],
        ServiceAnnotationService::ARGUMENT_MAPPINGS            => [
            LoggerInterface::class                            => 'monolog',
            \XCart\Bus\System\FilesystemInterface::class      => \XCart\Bus\System\Filesystem::class,
            \XCart\Bus\System\FinderInterface::class          => \XCart\Bus\System\Finder::class,
            \XCart\Bus\Domain\Backup\BackupInterface::class   => \XCart\Bus\Domain\Backup\DirBackup::class,
            \XCart\Bus\Domain\Storage\StorageInterface::class => \XCart\Bus\Domain\Storage\PHPSerializer::class,
        ],
    ]);

    $app->register(new Silex\Provider\MonologServiceProvider());

    $app->extend('monolog', function (\Monolog\Logger $monolog, Application $app) {
        return \XCart\Bus\Core\Logger\Request::serviceConstructor($app);
    });

    $app['xCartClient.client-factory'] = $app->protect(function () use ($app) {
        $config = $app['config'];

        $handler = \GuzzleHttp\HandlerStack::create(
            new \GuzzleHttp\Handler\CurlHandler([
                'handle_factory' => new \GuzzleHttp\Handler\CurlFactory(0),
            ])
        );

        $handler->push(
            \GuzzleHttp\Middleware::log(
                $app[\XCart\Bus\Core\Logger\Request::class],
                new \GuzzleHttp\MessageFormatter(),
                $app['debug'] ? \Psr\Log\LogLevel::DEBUG : \Psr\Log\LogLevel::INFO
            )
        );

        $clientDefaults = [
            'verify'   => $config['verify_certificate'],
            'base_uri' => $config['domain'] . rtrim($config['webdir'], '/') . '/',
            'handler'  => $handler,
        ];

        if ($config['basic_auth_user'] && $config['basic_auth_pass']) {
            $clientDefaults['auth'] = [
                $config['basic_auth_user'],
                $config['basic_auth_pass'],
            ];
        }

        $guzzleClient = new \GuzzleHttp\Client($clientDefaults);

        return $guzzleClient;
    });

    $app['fileSystem'] = static function ($app) {
        return new Filesystem();
    };

    $app->before(static function (Request $request, Application $app) {
        /** @var ResourceChecker $resourceChecker */
        $resourceChecker = $app[ResourceChecker::class];
        /** @var LoggerInterface $logger */
        $logger = $app[\XCart\Bus\Core\Logger\Request::class];

        // On 64-bit system we double the memory limit required.
        if ($resourceChecker->setMemoryLimit($resourceChecker->getIntegerLength() === 8 ? '256M' : '128M')) {
            $logger->debug('Set memory limit', ['memory_limit' => $resourceChecker->getMemoryLimit()]);
        } else {
            $logger->warning('Unable to set memory limit', ['memory_limit' => $resourceChecker->getMemoryLimit()]);
        }
    });

    $app->before(static function (Request $request, Application $app) {
        $useAdminDomain = $app['config']['use_admin_domain'] ?? false;
        $currentHost = '://' . $request->getHost();

        if (PHP_SAPI !== 'cli' && $useAdminDomain && $app['config']['domain'] !== $currentHost) {
            $scheme = $request->getScheme() ?: 'http';
            $url = $request->getBaseUrl();
            return new RedirectResponse($scheme . $app['config']['domain'] . $url);
        }

        return null;
    });

    $app->before(static function (Request $request, Application $app) {
        $scheme = $request->getScheme() ?: 'http';

        $config = $app['config'];

        $domain = $request->getScheme() ? $config['domain_ssl'] : $config['domain'];

        $config['scheme'] = $scheme;
        $config['domain'] = $scheme . $domain;

        $app->offsetSet('config', $config);
    });

    $app->before(static function (Request $request, Application $app) {
        $app[ResourceChecker::class]->start();
    });

    $app->before(static function (Request $request) {
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : []);
        }
    });

    $app->before(static function (Request $request, Application $app) {
        $xc5Cookie = $request->cookies->get(
            $app['config']['xc_cookie_name']
        );

        /** @var \XCart\Bus\Client\XCart $client */
        $client = $app[\XCart\Bus\Client\XCart::class];

        $client->setAuthCookie($xc5Cookie);
    });

    $app->before(static function (Request $request, Application $app) {
        $app['x_cart.bus.user_token'] = $request->cookies->get('bus_token');

        $app['x_cart.bus.token_data'] = $app[\XCart\Bus\Auth\TokenService::class]->decodeToken(
            $app['x_cart.bus.user_token']
        );
    });

    $app->after(static function (Request $request, Response $response, Application $app) {
        $response->headers->set('Expires', 'Mon, 26 Jul 1997 05:00:00 GMT');
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate');
        $response->headers->set('Cache-Control', 'post-check=0, pre-check=0', false);
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('X-Robots-Tag', 'noindex, nofollow');
        $response->headers->set('X-Frame-Options', 'sameorigin');

        $XContentTypeOptions = $app['xc_config']['other']['x_content_type_options'] ?? null;
        if ($XContentTypeOptions !== null && 'disabled' !== $XContentTypeOptions) {
            $response->headers->set('X-Content-Type-Options', $XContentTypeOptions);
        }

        $XXSSProtection = $app['xc_config']['other']['x_xss_protection'] ?? null;
        if ($XXSSProtection !== null && 'disabled' !== $XXSSProtection) {
            $response->headers->set('X-XSS-Protection', $XXSSProtection);
        }
    });

    $app->get('/', static function (Request $request, Application $app) {
        $config = $app['config'];

        /** @var \XCart\Bus\Query\Data\InstalledModulesDataSource $installedModulesDataSource */
        $installedModulesDataSource = $app[\XCart\Bus\Query\Data\InstalledModulesDataSource::class];
        $service                    = $installedModulesDataSource->find('XC-Service');

        $domain              = $config['domain'];
        $webdir              = $config['webdir'];
        $developerMode       = $config['developer_mode'] ? 'true' : 'false';
        $ignoreSystemModules = $config['ignore_system_modules'] ? 'true' : 'false';
        $adminScript         = $config['admin_script'];
        $resourcesPath       = $webdir . '/service/static/';
        $cssResource         = $resourcesPath . 'service.css?' . $service['version'];
        $jsResource          = $resourcesPath . 'service.js?' . $service['version'];
        $favicon             = $resourcesPath . 'favicon.ico';
        $appicon             = $resourcesPath . 'icon192x192.png';

        /** @var \XCart\Bus\Query\Resolver\LanguageDataResolver $languageResolver */
        $languageResolver = $app[\XCart\Bus\Query\Resolver\LanguageDataResolver::class];

        $languages    = $languageResolver->getLanguages(null, [], null, new ResolveInfo([]));
        $languageCode = $request->get('locale') ?: $request->cookies->get('locale', 'en');
        $languageCode = in_array($languageCode, $languages, true) ? $languageCode : 'en';

        $messages = $languageResolver->getLanguageMessages(null, ['code' => $languageCode], null, new ResolveInfo([]));

        $languageMessages = [];
        foreach ($messages as $label) {
            $languageMessages[$label['name']] = $label['label'];
        }
        $languageMessages = json_encode($languageMessages);

        $response = <<<HTML
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>X-Cart online store builder</title>
        <link href={$cssResource} rel=stylesheet>
        <link rel="shortcut icon" href="{$favicon}" type="image/x-icon" />
        <link rel="icon" sizes="192x192" href="{$appicon}"/>
        <link rel="apple-touch-icon" sizes="192x192" href="{$appicon}">
    </head>
    <body>
        <div id=app></div>
        <script type=text/javascript>
            window.config = {
              host: "{$domain}",
              webdir: "{$webdir}",
              adminScript: "{$adminScript}",
              developerMode: {$developerMode},
              ignoreSystemModules: {$ignoreSystemModules},
              languages: ['{$languageCode}'],
              messages: {
                {$languageCode}: {$languageMessages}
              }
            }
        </script>
        <script type=text/javascript src={$jsResource}></script>
        <script type=text/javascript>(function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):(t=t||self).__SVGATOR_PLAYER__=n()})(this,(function(){"use strict";function t(n){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(n)}function n(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}function r(t,n){for(var r=0;r<n.length;r++){var e=n[r];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(t,e.key,e)}}function e(t,n,e){return n&&r(t.prototype,n),e&&r(t,e),t}var i=1e-5,u=Math.abs;function o(t){return t}function a(t,n,r){var e=1-r;return 3*r*e*(t*e+n*r)+r*r*r}function l(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1;return t<0||t>1||r<0||r>1?null:u(t-n)<=i&&u(r-e)<=i?o:function(o){if(o<=0)return t>0?o*n/t:0===n&&r>0?o*e/r:0;if(o>=1)return r<1?1+(o-1)*(e-1)/(r-1):1===r&&t<1?1+(o-1)*(n-1)/(t-1):1;for(var l,f=0,s=1;f<s;){var c=a(t,r,l=(f+s)/2);if(u(o-c)<i)break;c<o?f=l:s=l}return a(n,e,l)}}function f(){return 1}function s(t){return 1===t?1:0}function c(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(1===t){if(0===n)return s;if(1===n)return f}var r=1/t;return function(t){return t>=1?1:(t+=n*r)-t%r}}function v(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:2;if(Number.isInteger(t))return t;var r=Math.pow(10,n);return Math.round(t*r)/r}var h=Math.PI/180;function y(t,n,r){return t>=.5?r:n}function d(t,n,r){return 0===t||n===r?n:t*(r-n)+n}function g(t,n,r){var e=d(t,n,r);return e<=0?0:e}function m(t,n,r){return 0===t?n:1===t?r:{x:d(t,n.x,r.x),y:d(t,n.y,r.y)}}function p(t,n,r){return 0===t?n:1===t?r:{x:g(t,n.x,r.x),y:g(t,n.y,r.y)}}function b(t,n,r){var e=function(t,n,r){return Math.round(d(t,n,r))}(t,n,r);return e<=0?0:e>=255?255:e}function w(t,n,r){return 0===t?n:1===t?r:{r:b(t,n.r,r.r),g:b(t,n.g,r.g),b:b(t,n.b,r.b),a:d(t,null==n.a?1:n.a,null==r.a?1:r.a)}}function A(t,n,r){if(0===t)return n;if(1===t)return r;var e=n.length;if(e!==r.length)return y(t,n,r);for(var i=[],u=0;u<e;u++)i.push(w(t,n[u],r[u]));return i}function x(t,n,r){var e=n.length;if(e!==r.length)return y(t,n,r);for(var i=new Array(e),u=0;u<e;u++)i[u]=d(t,n[u],r[u]);return i}function k(t,n){for(var r=[],e=0;e<t;e++)r.push(n);return r}function S(t,n){if(--n<=0)return t;var r=(t=Object.assign([],t)).length;do{for(var e=0;e<r;e++)t.push(t[e])}while(--n>0);return t}var _=6,M=/\.0+$/g;function I(t){return Number.isInteger(t)?t+"":t.toFixed(_).replace(M,"")}function E(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length?t.map(I).join(n):""}function F(t){return I(t.x)+","+I(t.y)}function B(t){return t?null==t.a||t.a>=1?"rgb("+t.r+","+t.g+","+t.b+")":"rgba("+t.r+","+t.g+","+t.b+","+t.a+")":"transparent"}var j={f:null,i:p,u:function(t,n){return function(r){var e=n(r);t.setAttribute("rx",I(e.x)),t.setAttribute("ry",I(e.y))}}},q={f:null,i:function(t,n,r){return 0===t?n:1===t?r:{width:g(t,n.width,r.width),height:g(t,n.height,r.height)}},u:function(t,n){return function(r){var e=n(r);t.setAttribute("width",I(e.width)),t.setAttribute("height",I(e.height))}}},P=Math.sin,O=Math.cos,z=Math.acos,L=Math.asin,C=Math.tan,R=Math.atan2,T=Math.PI/180,V=180/Math.PI,D=Math.sqrt,N=function(){function t(){var r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,u=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,a=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0;n(this,t),this.m=[r,e,i,u,o,a],this.i=null,this.w=null,this.s=null}return e(t,[{key:"point",value:function(t,n){var r=this.m;return{x:r[0]*t+r[2]*n+r[4],y:r[1]*t+r[3]*n+r[5]}}},{key:"translateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(!t&&!n)return this;var r=this.m;return r[4]+=r[0]*t+r[2]*n,r[5]+=r[1]*t+r[3]*n,this.w=this.s=this.i=null,this}},{key:"rotateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;if(t%=360){var n=P(t*=T),r=O(t),e=this.m,i=e[0],u=e[1];e[0]=i*r+e[2]*n,e[1]=u*r+e[3]*n,e[2]=e[2]*r-i*n,e[3]=e[3]*r-u*n,this.w=this.s=this.i=null}return this}},{key:"scaleSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1;if(1!==t||1!==n){var r=this.m;r[0]*=t,r[1]*=t,r[2]*=n,r[3]*=n,this.w=this.s=this.i=null}return this}},{key:"skewSelf",value:function(t,n){if(n%=360,(t%=360)||n){var r=this.m,e=r[0],i=r[1],u=r[2],o=r[3];t&&(t=C(t*T),r[2]+=e*t,r[3]+=i*t),n&&(n=C(n*T),r[0]+=u*n,r[1]+=o*n),this.w=this.s=this.i=null}return this}},{key:"resetSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,u=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0,o=this.m;return o[0]=t,o[1]=n,o[2]=r,o[3]=e,o[4]=i,o[5]=u,this.w=this.s=this.i=null,this}},{key:"recomposeSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:null;return this.isIdentity||this.resetSelf(),t&&(t.x||t.y)&&this.translateSelf(t.x,t.y),n&&this.rotateSelf(n),r&&(r.x&&this.skewSelf(r.x,0),r.y&&this.skewSelf(0,r.y)),!e||1===e.x&&1===e.y||this.scaleSelf(e.x,e.y),i&&(i.x||i.y)&&this.translateSelf(i.x,i.y),this}},{key:"decompose",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,r=this.m,e=r[0]*r[0]+r[1]*r[1],i=[[r[0],r[1]],[r[2],r[3]]],u=D(e);if(0===u)return{origin:{x:r[4],y:r[5]},translate:{x:t,y:n},scale:{x:0,y:0},skew:{x:0,y:0},rotate:0};i[0][0]/=u,i[0][1]/=u;var o=r[0]*r[3]-r[1]*r[2]<0;o&&(u=-u);var a=i[0][0]*i[1][0]+i[0][1]*i[1][1];i[1][0]-=i[0][0]*a,i[1][1]-=i[0][1]*a;var l=D(i[1][0]*i[1][0]+i[1][1]*i[1][1]);if(0===l)return{origin:{x:r[4],y:r[5]},translate:{x:t,y:n},scale:{x:u,y:0},skew:{x:0,y:0},rotate:0};i[1][0]/=l,i[1][1]/=l,a/=l;var f=0;return i[1][1]<0?(f=z(i[1][1])*V,i[0][1]<0&&(f=360-f)):f=L(i[0][1])*V,o&&(f=-f),a=R(a,D(i[0][0]*i[0][0]+i[0][1]*i[0][1]))*V,{origin:{x:r[4],y:r[5]},translate:{x:t,y:n},scale:{x:u,y:l},skew:{x:a,y:0},rotate:f}}},{key:"toString",value:function(){return null===this.s&&(this.s="matrix("+this.m.map($).join(" ")+")"),this.s}},{key:"determinant",get:function(){var t=this.m;return t[0]*t[3]-t[1]*t[2]}},{key:"isIdentity",get:function(){if(null===this.i){var t=this.m;this.i=1===t[0]&&0===t[1]&&0===t[2]&&1===t[3]&&0===t[4]&&0===t[5]}return this.i}}]),t}(),G=/\.0+$/;function $(t){return Number.isInteger(t)?t:t.toFixed(14).replace(G,"")}Object.freeze({M:2,L:2,Z:0,H:1,V:1,C:6,Q:4,T:2,S:4,A:7});function H(t,n,r){return t+(n-t)*r}function Q(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i={x:H(t.x,n.x,r),y:H(t.y,n.y,r)};return e&&(i.a=function(t,n){return Math.atan2(n.y-t.y,n.x-t.x)}(t,n)),i}function U(t,n,r,e){var i=1-e;return i*i*t+2*i*e*n+e*e*r}function Y(t,n,r,e){return 2*(1-e)*(n-t)+2*e*(r-n)}function Z(t,n,r,e){var i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],u={x:U(t.x,n.x,r.x,e),y:U(t.y,n.y,r.y,e)};return i&&(u.a=function(t,n,r,e){return Math.atan2(Y(t.y,n.y,r.y,e),Y(t.x,n.x,r.x,e))}(t,n,r,e)),u}function J(t,n,r,e,i){var u=i*i;return i*u*(e-t+3*(n-r))+3*u*(t+r-2*n)+3*i*(n-t)+t}function K(t,n,r,e,i){var u=1-i;return 3*(u*u*(n-t)+2*u*i*(r-n)+i*i*(e-r))}function W(t,n,r,e,i){var u=arguments.length>5&&void 0!==arguments[5]&&arguments[5],o={x:J(t.x,n.x,r.x,e.x,i),y:J(t.y,n.y,r.y,e.y,i)};return u&&(o.a=function(t,n,r,e,i){return Math.atan2(K(t.y,n.y,r.y,e.y,i),K(t.x,n.x,r.x,e.x,i))}(t,n,r,e,i)),o}function X(t,n,r){var e,i=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(nt(n)){if(null!=(e=r).start&&!nt(e))return Z(n,r.start,r,t,i)}else if(nt(r)){if(n.end)return Z(n,n.end,r,t,i)}else{if(n.end)return r.start?W(n,n.end,r.start,r,t,i):Z(n,n.end,r,t,i);if(r.start)return Z(n,r.start,r,t,i)}return Q(n,r,t,i)}function tt(t,n,r){var e=X(t,n,r,!0);return e.a=function(t){return arguments.length>1&&void 0!==arguments[1]&&arguments[1]?t+Math.PI:t}(e.a)/h,e}function nt(t){return!t.type||"corner"===t.type}var rt=new N;var et={f:function(t){return t?t.join(" "):""},i:function(n,r,e){if(0===n)return r;if(1===n)return e;var i=r.length;if(i!==e.length)return y(n,r,e);for(var u,o=new Array(i),a=0;a<i;a++){if((u=t(r[a]))!==t(e[a]))return y(n,r,e);if("number"===u)o[a]=d(n,r[a],e[a]);else{if(r[a]!==e[a])return y(n,r,e);o[a]=r[a]}}return o}},it={f:null,i:x,u:function(t,n){return function(r){var e=n(r);t.setAttribute("x1",I(e[0])),t.setAttribute("y1",I(e[1])),t.setAttribute("x2",I(e[2])),t.setAttribute("y2",I(e[3]))}}},ut={f:I,i:d},ot={f:I,i:function(t,n,r){var e=d(t,n,r);return e<=0?0:e>=1?1:e}},at={f:E,i:function(t,n,r){var e,i,u,o=n.length,a=r.length;if(o!==a)if(0===o)n=k(o=a,0);else if(0===a)a=o,r=k(o,0);else{var l=(u=(e=o)*(i=a)/function(t,n){for(var r;n;)r=n,n=t%n,t=r;return t||1}(e,i))<0?-u:u;n=S(n,Math.floor(l/o)),r=S(r,Math.floor(l/a)),o=a=l}for(var f=[],s=0;s<o;s++)f.push(v(g(t,n[s],r[s]),6));return f}};function lt(t,n,r,e,i,u,o,a){return n=function(t,n,r){for(var e,i,u,o=t.length-1,a={},l=0;l<=o;l++)(e=t[l]).e&&(e.e=n(e.e)),e.v&&"g"===(i=e.v).t&&i.r&&(u=r.getElementById(i.r))&&(a[i.r]=u.querySelectorAll("stop"));return a}(t,e,a),function(e){var i,u=r(e,t,ft);return u?"c"===u.t?B(u.v):"g"===u.t?(n[u.r]&&function(t,n){for(var r=0,e=t.length;r<e;r++)t[r].setAttribute("stop-color",B(n[r]))}(n[u.r],u.v),(i=u.r)?"url(#"+i+")":"none"):"none":"none"}}function ft(t,n,r){if(0===t)return n;if(1===t)return r;if(n&&r){var e=n.t;if(e===r.t)switch(n.t){case"c":return{t:e,v:w(t,n.v,r.v)};case"g":if(n.r===r.r)return{t:e,v:A(t,n.v,r.v),r:n.r}}}return y(t,n,r)}var st={blur:p,brightness:g,contrast:g,"drop-shadow":function(t,n,r){return 0===t?n:1===t?r:{blur:p(t,n.blur,r.blur),offset:m(t,n.offset,r.offset),color:w(t,n.color,r.color)}},grayscale:g,"hue-rotate":d,invert:g,opacity:g,saturate:g,sepia:g};function ct(t,n,r){if(0===t)return n;if(1===t)return r;var e=n.length;if(e!==r.length)return y(t,n,r);for(var i,u=[],o=0;o<e;o++){if(n[o].type!==r[o].type)return n;if(!(i=st[n[o].type]))return y(t,n,r);u.push({type:n.type,value:i(t,n[o].value,r[o].value)})}return u}var vt={blur:function(t){return t?function(n){t.setAttribute("stdDeviation",F(n))}:null},brightness:function(t,n,r){return(t=yt(r,n))?function(n){n=I(n),t.map((function(t){return t.setAttribute("slope",n)}))}:null},contrast:function(t,n,r){return(t=yt(r,n))?function(n){var r=I((1-n)/2);n=I(n),t.map((function(t){t.setAttribute("slope",n),t.setAttribute("intercept",r)}))}:null},"drop-shadow":function(t,n,r){var e=r.getElementById(n+"-blur");if(!e)return null;var i=r.getElementById(n+"-offset");if(!i)return null;var u=r.getElementById(n+"-flood");return u?function(t){e.setAttribute("stdDeviation",F(t.blur)),i.setAttribute("dx",I(t.offset.x)),i.setAttribute("dy",I(t.offset.y)),u.setAttribute("flood-color",B(t.color))}:null},grayscale:function(t){return t?function(n){t.setAttribute("values",E(function(t){return[.2126+.7874*(t=1-t),.7152-.7152*t,.0722-.0722*t,0,0,.2126-.2126*t,.7152+.2848*t,.0722-.0722*t,0,0,.2126-.2126*t,.7152-.7152*t,.0722+.9278*t,0,0,0,0,0,1,0]}(n)))}:null},"hue-rotate":function(t){return t?function(n){return t.setAttribute("values",I(n))}:null},invert:function(t,n,r){return(t=yt(r,n))?function(n){n=I(n)+" "+I(1-n),t.map((function(t){return t.setAttribute("tableValues",n)}))}:null},opacity:function(t,n,r){return(t=r.getElementById(n+"-A"))?function(n){return t.setAttribute("tableValues","0 "+I(n))}:null},saturate:function(t){return t?function(n){return t.setAttribute("values",I(n))}:null},sepia:function(t){return t?function(n){return t.setAttribute("values",E(function(t){return[.393+.607*(t=1-t),.769-.769*t,.189-.189*t,0,0,.349-.349*t,.686+.314*t,.168-.168*t,0,0,.272-.272*t,.534-.534*t,.131+.869*t,0,0,0,0,0,1,0]}(n)))}:null}};var ht=["R","G","B"];function yt(t,n){var r=ht.map((function(r){return t.getElementById(n+"-"+r)||null}));return-1!==r.indexOf(null)?null:r}var dt={fill:lt,"fill-opacity":ot,stroke:lt,"stroke-opacity":ot,"stroke-width":ut,"stroke-dashoffset":{f:I,i:d},"stroke-dasharray":at,opacity:ot,transform:function(n,r,e,i){if(!(n=function(n,r){if(!n||"object"!==t(n))return null;var e=!1;for(var i in n)n.hasOwnProperty(i)&&(n[i]&&n[i].length?(n[i].forEach((function(t){t.e&&(t.e=r(t.e))})),e=!0):delete n[i]);return e?n:null}(n,i)))return null;var u=function(t,i,u){var o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null;return n[t]?e(i,n[t],u):r&&r[t]?r[t]:o};return r&&r.a&&n.o?function(t){var r=e(t,n.o,tt);return rt.recomposeSelf(r,u("r",t,d,0)+r.a,u("k",t,m),u("s",t,m),u("t",t,m)).toString()}:function(t){return rt.recomposeSelf(u("o",t,X,null),u("r",t,d,0),u("k",t,m),u("s",t,m),u("t",t,m)).toString()}},"#filter":function(t,n,r,e,i,u,o,a){if(!n.items||!t||!t.length)return null;var l=function(t,n){var r=(t=t.map((function(t){return t&&vt[t[0]]?(n.getElementById(t[1]),vt[t[0]](n.getElementById(t[1]),t[1],n)):null}))).length;return function(n){for(var e=0;e<r;e++)t[e]&&t[e](n[e].value)}}(n.items,a);return l?(t=function(t,n){return t.map((function(t){return t.e=n(t.e),t}))}(t,e),function(n){l(r(n,t,ct))}):null},"#line":it,points:{f:E,i:x},d:et,r:ut,"#size":q,"#radius":j,_:function(t,n){if(Array.isArray(t))for(var r=0;r<t.length;r++)this[t[r]]=n;else this[t]=n}},gt=function(){function t(r){n(this,t),this.list=r,this.length=r.length}return e(t,[{key:"setAttribute",value:function(t,n){for(var r=this.list,e=0;e<this.length;e++)r[e].setAttribute(t,n)}},{key:"removeAttribute",value:function(t){for(var n=this.list,r=0;r<this.length;r++)n[r].removeAttribute(t)}},{key:"style",value:function(t,n){for(var r=this.list,e=0;e<this.length;e++)r[e].style[t]=n}}]),t}(),mt=/-./g,pt=function(t,n){return n.toUpperCase()};function bt(t){return"function"==typeof t?t:y}function wt(t){return t?"function"==typeof t?t:Array.isArray(t)?function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:o;if(!Array.isArray(t))return n;switch(t.length){case 1:return c(t[0])||n;case 2:return c(t[0],t[1])||n;case 4:return l(t[0],t[1],t[2],t[3])||n}return n}(t,null):function(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:o;switch(t){case"linear":return o;case"steps":return c(n.steps||1,n.jump||0)||r;case"bezier":case"cubic-bezier":return l(n.x1||0,n.y1||0,n.x2||0,n.y2||0)||r}return r}(t.type,t.value,null):null}function At(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i=n.length-1;if(t<=n[0].t)return e?[0,0,n[0].v]:n[0].v;if(t>=n[i].t)return e?[i,1,n[i].v]:n[i].v;var u,o=n[0],a=null;for(u=1;u<=i;u++){if(!(t>n[u].t)){a=n[u];break}o=n[u]}return null==a?e?[i,1,n[i].v]:n[i].v:o.t===a.t?e?[u,1,a.v]:a.v:(t=(t-o.t)/(a.t-o.t),o.e&&(t=o.e(t)),e?[u,t,r(t,o.v,a.v)]:r(t,o.v,a.v))}function xt(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return t&&t.length?"function"!=typeof n?null:("function"!=typeof r&&(r=null),function(e){var i=At(e,t,n);return null!=i&&r&&(i=r(i)),i}):null}function kt(t,n){return t.t-n.t}function St(n,r,e,i,u){var o,a="@"===e[0],l="#"===e[0],f=dt[e],s=y;switch(a?(o=e.substr(1),e=o.replace(mt,pt)):l&&(e=e.substr(1)),t(f)){case"function":if(s=f(i,u,At,wt,e,a,r,n),l)return s;break;case"string":s=xt(i,bt(f));break;case"object":if((s=xt(i,bt(f.i),f.f))&&"function"==typeof f.u)return f.u(r,s,e,a,n)}return s?function(t,n,r){if(arguments.length>3&&void 0!==arguments[3]&&arguments[3])return t instanceof gt?function(e){return t.style(n,r(e))}:function(e){return t.style[n]=r(e)};if(Array.isArray(n)){var e=n.length;return function(i){var u=r(i);if(null==u)for(var o=0;o<e;o++)t[o].removeAttribute(n);else for(var a=0;a<e;a++)t[a].setAttribute(n,u)}}return function(e){var i=r(e);null==i?t.removeAttribute(n):t.setAttribute(n,i)}}(r,e,s,a):null}function _t(n,r,e,i){if(!i||"object"!==t(i))return null;var u=null,o=null;return Array.isArray(i)?o=function(t){if(!t||!t.length)return null;for(var n=0;n<t.length;n++)t[n].e&&(t[n].e=wt(t[n].e));return t.sort(kt)}(i):(o=i.keys,u=i.data||null),o?St(n,r,e,o,u):null}function Mt(t,n,r){if(!r)return null;var e=[];for(var i in r)if(r.hasOwnProperty(i)){var u=_t(t,n,i,r[i]);u&&e.push(u)}return e.length?e:null}function It(t,n){if(!n.duration||n.duration<0)return null;var r=function(t,n){if(!n)return null;var r=[];if(Array.isArray(n))for(var e=n.length,i=0;i<e;i++){var u=n[i];if(2===u.length){var o=null;if("string"==typeof u[0])o=t.getElementById(u[0]);else if(Array.isArray(u[0])){o=[];for(var a=0;a<u[0].length;a++)if("string"==typeof u[0][a]){var l=t.getElementById(u[0][a]);l&&o.push(l)}o=o.length?1===o.length?o[0]:new gt(o):null}if(o){var f=Mt(t,o,u[1]);f&&(r=r.concat(f))}}}else for(var s in n)if(n.hasOwnProperty(s)){var c=t.getElementById(s);if(c){var v=Mt(t,c,n[s]);v&&(r=r.concat(v))}}return r.length?r:null}(t,n.elements);return r?function(t,n){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1/0,e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],u=arguments.length>5&&void 0!==arguments[5]?arguments[5]:1,o=t.length,a=e>0?n:0;i&&r%2==0&&(a=n-a);var l=null;return function(f,s){var c=f%n,v=1+(f-c)/n;s*=e,i&&v%2==0&&(s=-s);var h=!1;if(v>r)c=a,h=!0,-1===u&&(c=e>0?0:n);else if(s<0&&(c=n-c),c===l)return!1;l=c;for(var y=0;y<o;y++)t[y](c);return h}}(r,n.duration,n.iterations||1/0,n.direction||1,!!n.alternate,n.fill||1):null}var Et=function(){function t(r){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};n(this,t),this._id=0,this._running=!1,this._animations=r,this.direction=e.direction||1,this.speed=e.speed||1,this.fps=e.fps||100,this.offset=e.offset||0}return e(t,[{key:"_start",value:function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,r=-1/0,e=null,i={},u=function u(o){t._running=!0,null==e&&(e=o);var a=Math.round((o-e+n)*t.speed),l=t.fps?1e3/t.fps:0;if(a>r+l){t.offset=a,r=a;for(var f=t._animations,s=f.length,c=0,v=0;v<s;v++)i[v]?c++:(i[v]=f[v](a,t.direction),i[v]&&c++);if(c===s)return void t._stop()}t._id=window.requestAnimationFrame(u)};this._id=window.requestAnimationFrame(u)}},{key:"_stop",value:function(){this._id&&window.cancelAnimationFrame(this._id),this._running=!1}},{key:"play",value:function(){this._running||this._start(this.offset)}},{key:"stop",value:function(){this._stop(),this.offset=0;var t=this.direction,n=this._animations;requestAnimationFrame((function(){for(var r=0;r<n.length;r++)n[r](0,t)}))}},{key:"restart",value:function(){this._stop(),this.offset=0,this._start()}},{key:"pause",value:function(){this._stop()}},{key:"reverse",value:function(){this.direction=-this.direction}}],[{key:"build",value:function(n){if(!(n=function(t){if(!t||!t.root||!Array.isArray(t.animations))return null;var n=window.document.getElementById(t.root);if(!n)return null;var r=t.animations.map((function(t){return It(n,t)})).filter((function(t){return!!t}));return r.length?{element:n,animations:r,options:t.options||void 0}:null}(n)))return null;var r=n.element,e=n.options||{},i=new t(n.animations,n.options);return function(t,n,r){var e=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null;if("click"===r){return void n.addEventListener("click",(function r(){n.removeEventListener("click",r),t.play()}))}if("hover"===r)return n.addEventListener("mouseenter",(function(){return t.play()})),void n.addEventListener("mouseleave","freeze"===e?function(){return t.pause()}:function(){return t.stop()});t.play()}(i,r,e.start,e.hover),i}}]),t}();return function(){for(var t=0,n=["ms","moz","webkit","o"],r=0;r<n.length&&!window.requestAnimationFrame;++r)window.requestAnimationFrame=window[n[r]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[n[r]+"CancelAnimationFrame"]||window[n[r]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(n){var r=Date.now(),e=Math.max(0,16-(r-t)),i=window.setTimeout((function(){n(r+e)}),e);return t=r+e,i},window.cancelAnimationFrame=window.clearTimeout)}(),Et}));</script>
        <script type="text/javascript">!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";}}();</script>
    </body>
</html>
HTML;

        return new Response($response, 200);
    });

    return $app;
};
