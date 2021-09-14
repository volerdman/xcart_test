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

/* product/details/common_attributes/common.product-attributes.sku.twig */
class __TwigTemplate_2f96546f2b30a0e9eec1727fd9ffc232a6ad8e25495f0cd17f5ff1e94d3a92d4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getSKU", [], "method")) {
            // line 7
            echo "  <li class=\"identifier product-sku\">
    <div><strong class=\"type\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["SKU"]), "html", null, true);
            echo "</strong></div>
    <span class=\"value\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSKU", [], "method"), "html", null, true);
            echo "</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/common_attributes/common.product-attributes.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 8,  32 => 7,  30 => 6,);
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
 # Product details SKU main block
 #
 # @ListChild (list=\"product.details.common.product-attributes.elements\", weight=\"200\")
 #}
{% if this.getSKU() %}
  <li class=\"identifier product-sku\">
    <div><strong class=\"type\">{{ t('SKU') }}</strong></div>
    <span class=\"value\">{{ this.getSKU() }}</span>
  </li>
{% endif %}
", "product/details/common_attributes/common.product-attributes.sku.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\details\\common_attributes\\common.product-attributes.sku.twig");
    }
}
