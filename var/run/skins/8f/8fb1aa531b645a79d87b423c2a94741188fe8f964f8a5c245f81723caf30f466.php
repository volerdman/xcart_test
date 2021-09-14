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

/* shopping_cart/parts/items.twig */
class __TwigTemplate_5b109c54293bc862b44d879eb26e1509a4cbe938555598cc9444a4a7f351febc extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<table class=\"selected-products\">

  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getCartItemsGroups", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "
  ";
            // line 11
            if ($this->getAttribute($context["group"], "data", [])) {
                // line 12
                echo "    <tbody class=\"group\">
      <tr>
         ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.group", "group" => $this->getAttribute($context["group"], "data", [])]]), "html", null, true);
                echo "
      </tr>
    </tbody>
  ";
            }
            // line 18
            echo "
  <tbody class=\"items\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "      <tr class=\"selected-product\">
        ";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.item", "item" => $context["item"]]]), "html", null, true);
                echo "
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  </tbody>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
  <tbody class=\"additional-items\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "cart.items"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 31
            echo "      <tr class=\"selected-product additional-item\">
        ";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
            echo "
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  93 => 32,  90 => 31,  86 => 30,  82 => 28,  74 => 25,  65 => 22,  62 => 21,  58 => 20,  54 => 18,  47 => 14,  43 => 12,  41 => 11,  38 => 10,  34 => 9,  30 => 7,);
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
 # Shopping cart items block
 #
 # @ListChild (list=\"cart.children\", weight=\"10\")
 # @ListChild (list=\"checkout.cart\", weight=\"10\")
 #}
<table class=\"selected-products\">

  {% for group in this.getCartItemsGroups() %}

  {% if group.data %}
    <tbody class=\"group\">
      <tr>
         {{ widget_list('cart.group', group=group.data) }}
      </tr>
    </tbody>
  {% endif %}

  <tbody class=\"items\">
    {% for item in group.items %}
      <tr class=\"selected-product\">
        {{ widget_list('cart.item', item=item) }}
      </tr>
    {% endfor %}
  </tbody>

  {% endfor %}

  <tbody class=\"additional-items\">
    {% for w in this.getViewList('cart.items') %}
      <tr class=\"selected-product additional-item\">
        {{ w.display() }}
      </tr>
    {% endfor %}
  </tbody>

</table>
", "shopping_cart/parts/items.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\items.twig");
    }
}
