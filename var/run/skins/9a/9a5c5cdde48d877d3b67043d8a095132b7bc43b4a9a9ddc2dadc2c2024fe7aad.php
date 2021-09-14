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

/* modules/CDev/Paypal/banner/ProductDetailsPages/nearAddToCartButton.twig */
class __TwigTemplate_88443ae02b443ded23d2888401ea88214c5c2244811e35cae2aa6c8757029424 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "productDetailsPages", "position" => "A"]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/banner/ProductDetailsPages/nearAddToCartButton.twig";
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
 # Paypal Credit banner
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"105\")
 #}

{{ widget('\\\\XLite\\\\Module\\\\CDev\\\\Paypal\\\\View\\\\Banner', page='productDetailsPages', position='A') }}", "modules/CDev/Paypal/banner/ProductDetailsPages/nearAddToCartButton.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\Paypal\\banner\\ProductDetailsPages\\nearAddToCartButton.twig");
    }
}
