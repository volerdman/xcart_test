<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/CDev/Paypal/ppcm_banner/cart_page.twig */
class __TwigTemplate_d83e64c7846ae42330b07537625d8a6729df46baa335f86a30be35fd4d6e7556 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\CDev\\Paypal\\View\\PPCMBanner", "page" => "cart"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/ppcm_banner/cart_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{##
 # PayPal credit messaging banner
 #
 # @ListChild (list=\"cart.panel.totals\", weight=\"38\")
 #}

{{ widget('XLite\\\\Module\\\\CDev\\\\Paypal\\\\View\\\\PPCMBanner', page='cart') }}
", "modules/CDev/Paypal/ppcm_banner/cart_page.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\Paypal\\ppcm_banner\\cart_page.twig");
    }
}
