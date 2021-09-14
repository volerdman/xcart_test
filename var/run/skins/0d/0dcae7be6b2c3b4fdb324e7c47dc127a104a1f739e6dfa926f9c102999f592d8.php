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

/* shopping_cart/parts/cartItems.includedModifiers.twig */
class __TwigTemplate_9de3b321517173006b359ddbd3bf84b9e8f03d8344830d1e956176f561c961b2 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getItemsIncludeSurchargesTotals", [0 => 1], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "  <li class='included-surcharge'>
    <strong>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Including X", ["name" => $this->getAttribute($this->getAttribute($context["row"], "surcharge", []), "getName", [], "method")]]), "html", null, true);
            echo ":</strong>
    <span class=\"value\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "cost", []), "currency" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method")]]), "html", null, true);
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/cartItems.includedModifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  40 => 9,  37 => 8,  33 => 7,  30 => 6,);
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
 # Shopping cart: cart items subtotal
 #
 # @ListChild (list=\"cart.totals\", weight=\"30\")
 #}

{% for row in this.cart.getItemsIncludeSurchargesTotals(1) %}
  <li class='included-surcharge'>
    <strong>{{ t('Including X', {'name': row.surcharge.getName()}) }}:</strong>
    <span class=\"value\">{{ widget('XLite\\\\View\\\\Surcharge', surcharge=row.cost, currency=this.cart.getCurrency()) }}
  </li>
{% endfor %}
", "shopping_cart/parts/cartItems.includedModifiers.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\cartItems.includedModifiers.twig");
    }
}
