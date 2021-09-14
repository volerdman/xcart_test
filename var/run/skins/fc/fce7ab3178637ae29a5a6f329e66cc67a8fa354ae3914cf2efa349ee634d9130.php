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

/* shopping_cart/parts/total.disabled.reason.twig */
class __TwigTemplate_bfea581756c0ed1dba78baabae34f6ac343735a00e3a4b960f586b9eaf36b499 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "checkCart", [], "method")) {
            // line 7
            echo "  <li class=\"disabled-reason\">
    <div class=\"reason-details\">";
            // line 8
            echo $this->getAttribute(($context["this"] ?? null), "getDisabledReason", [], "method");
            echo "</div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/total.disabled.reason.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  30 => 6,);
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
 # Shopping cart Go to checkout button
 #
 # @ListChild (list=\"cart.panel.totals\", weight=\"50\")
 #}
{% if not this.cart.checkCart() %}
  <li class=\"disabled-reason\">
    <div class=\"reason-details\">{{ this.getDisabledReason()|raw }}</div>
  </li>
{% endif %}
", "shopping_cart/parts/total.disabled.reason.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\total.disabled.reason.twig");
    }
}
