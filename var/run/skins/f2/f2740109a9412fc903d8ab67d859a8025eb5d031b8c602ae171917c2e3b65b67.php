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

/* shopping_cart/parts/item.info.weight.twig */
class __TwigTemplate_645ecb3b4ea070d078cc3408b35c43a577c3bf2af93f3f4829fab22d414ed3ce extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getWeight", [], "method")) {
            // line 7
            echo "  <p class=\"item-weight\">
    <span>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Weight"]), "html", null, true);
            echo ":</span>
    ";
            // line 9
            echo $this->getAttribute(($context["this"] ?? null), "formatWeight", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getWeight", [], "method")], "method");
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.info.weight.twig";
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
 # Shopping cart item weight block
 #
 # @ListChild (list=\"cart.item.info\", weight=\"30\")
 #}
{% if this.item.getWeight() %}
  <p class=\"item-weight\">
    <span>{{ t('Weight') }}:</span>
    {{ this.formatWeight(this.item.getWeight())|raw }}
  </p>
{% endif %}
", "shopping_cart/parts/item.info.weight.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\item.info.weight.twig");
    }
}
