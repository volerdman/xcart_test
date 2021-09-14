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

/* modules/CDev/MarketPrice/details/label.twig */
class __TwigTemplate_9b2f7941eb490ba7e3b2c8cd0fb5a8991dddfed92cce14b21889db394459b125 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Labels", "labels" => $this->getAttribute(($context["this"] ?? null), "getLabel", [0 => twig_constant("MARKET_PRICE_LABEL", ($context["this"] ?? null))], "method")]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/MarketPrice/details/label.twig";
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
 # Label (internal list element)
 #
 # @ListChild (list=\"product.plain_price.before\", weight=\"15\")
 #}

{{ widget('\\\\XLite\\\\View\\\\Labels', labels=this.getLabel(constant('MARKET_PRICE_LABEL', this))) }}
", "modules/CDev/MarketPrice/details/label.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\MarketPrice\\details\\label.twig");
    }
}
