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

/* modules/CDev/Paypal/ppcm_banner/ppcm_amount_parts/product-price.twig */
class __TwigTemplate_6d936995ac814503b24330a1ea85a62556b71710e68150bba8cf3eb7e7e455d3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"ppcm-banner-amount hidden\" data-amount=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getListPrice", [], "method"), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/ppcm_banner/ppcm_amount_parts/product-price.twig";
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
 # Product price value
 #
 # @ListChild (list=\"product.plain_price.head\", weight=\"5\")
 #}

<div class=\"ppcm-banner-amount hidden\" data-amount=\"{{ this.getListPrice() }}\"></div>
", "modules/CDev/Paypal/ppcm_banner/ppcm_amount_parts/product-price.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\Paypal\\ppcm_banner\\ppcm_amount_parts\\product-price.twig");
    }
}
