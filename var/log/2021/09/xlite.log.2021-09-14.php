<?php die(1); ?>
Sep 14 14:49:11 XLite [notice] Warning: mkdir(): File exists in D:\openserver\domains\xcart\vendor\wikimedia\less.php\lib\Less\Cache.php on line 219
Runtime id: d55c43da6bac4031af41a4479eb76631;
Server API: apache2handler; IP: 127.0.0.1;
Request method: GET;
URI: //admin.php?target=login;

Sep 14 14:49:11 XLite [warning] Exception: Less.php cache directory couldn't be created: D:/openserver/domains/xcart/var/datacache/less/ in D:\openserver\domains\xcart\vendor\wikimedia\less.php\lib\Less\Cache.php on line 220
Runtime id: d55c43da6bac4031af41a4479eb76631;
Server API: apache2handler; IP: 127.0.0.1;
Request method: GET;
URI: //admin.php?target=login;
Backtrace:
	file <X-Cart root>/vendor\wikimedia\less.php\lib\Less\Parser.php : 147
	file <X-Cart root>/vendor\wikimedia\less.php\lib\Less\Parser.php : 129
	file <X-Cart root>/vendor\wikimedia\less.php\lib\Less\Parser.php : 116
	file <X-Cart root>/vendor\wikimedia\less.php\lib\Less\Parser.php : 86
	file <compiled classes repository>/classes\XLite\Core\LessParserAbstract.php : 139
	file <compiled classes repository>/classes\XLite\Core\LayoutAbstract.php : 1927
	file <compiled classes repository>/classes\XLite\Core\LayoutAbstract.php : 1656
	file <compiled classes repository>/classes\XLite\View\AResourcesContainerAbstract.php : 420
	file <compiled classes repository>/classes\XLite\View\AResourcesContainerAbstract.php : 498
	method XLite\View\AResourcesContainerAbstract::getAggregateCSSResources()
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\TemplateAbstract.php : 106
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\TemplateAbstract.php : 109
	file <compiled classes repository>/skins\52\52a7a76132aa9ff013ad134d3bdd25cc2024715364aa72db059fb57b9eb869ad.php : 33
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\TemplateAbstract.php : 142
	file <X-Cart root>/vendor\twig\twig\src\Template.php : 422
	file <compiled classes repository>/classes\XLite\Core\Templating\TwigEngine.php : 78
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 325
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 288
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 1030
	file <compiled classes repository>/classes\XLite\Module\XC\ThemeTweaker\View\AView.php : 453
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\Functions.php : 75
	file <compiled classes repository>/skins\ac\acc615875a2894ccb9326418c5d6b61dbddc679200b0076f26cdd4124c97d7f6.php : 33
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\TemplateAbstract.php : 142
	file <X-Cart root>/vendor\twig\twig\src\Template.php : 422
	file <compiled classes repository>/classes\XLite\Core\Templating\TwigEngine.php : 78
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 325
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 288
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 1030
	file <compiled classes repository>/classes\XLite\Module\XC\ThemeTweaker\View\AView.php : 453
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\Functions.php : 75
	file <compiled classes repository>/skins\b1\b129374a0f2f17c95e7b5889e158c69c505d80a250c98a26a62547e6e9a9deea.php : 34
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\TemplateAbstract.php : 142
	file <X-Cart root>/vendor\twig\twig\src\Template.php : 422
	file <compiled classes repository>/classes\XLite\Core\Templating\TwigEngine.php : 78
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 325
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 288
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 351
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\Extension\XCartAbstract.php : 125
	file <compiled classes repository>/skins\18\18285ec7a7f50db7c307db234c30cdad8d55f2071c8fa75d28eb7309e75b11a6.php : 58
	file <compiled classes repository>/classes\XLite\Core\Templating\Twig\TemplateAbstract.php : 142
	file <X-Cart root>/vendor\twig\twig\src\Template.php : 422
	file <compiled classes repository>/classes\XLite\Core\Templating\TwigEngine.php : 78
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 325
	file <compiled classes repository>/classes\XLite\View\AViewAbstract.php : 288
	file <compiled classes repository>/classes\XLite\View\ControllerAbstract.php : 261
	file <compiled classes repository>/classes\XLite\View\ControllerAbstract.php : 60
	file <compiled classes repository>/classes\XLite\Controller\AControllerAbstract.php : 730
	file <compiled classes repository>/classes\XLite\Module\XC\ThemeTweaker\Controller\AController.php : 25
	file <compiled classes repository>/classes\XLiteAbstract.php : 655
	file <compiled classes repository>/classes\XLite\Module\XC\MailChimp\XLite.php : 21
	file <X-Cart root>/admin.php : 18

Sep 14 14:49:35 XLite [notice] Form ID checking failure (target: login, action: login)
Runtime id: c21a4c9d60ca002bb10a3bffcd72e6b5;
Server API: apache2handler; IP: 127.0.0.1;
Request method: POST;
URI: ?target=login&action=login;

