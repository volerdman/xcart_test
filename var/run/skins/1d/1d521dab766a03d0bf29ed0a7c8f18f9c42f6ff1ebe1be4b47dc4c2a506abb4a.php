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

/* shopping_cart/parts/item.subtotal.twig */
class __TwigTemplate_861cbcd92d2f959d011753af7a335313dc67927b06a8fb0e807f3deaa655fdb0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-subtotal\">
  <span class=\"subtotal";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getExcludeSurcharges", [], "method")) {
            echo " modified-subtotal";
        }
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getDisplayTotal", [], "method"), "currency" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method")]]), "html", null, true);
        echo "</span>
  ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getExcludeSurcharges", [], "method")) {
            // line 9
            echo "    <div class=\"including-modifiers\" style=\"display: none;\">
      <table class=\"including-modifiers\" cellspacing=\"0\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getExcludeSurcharges", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["surcharge"]) {
                // line 12
                echo "          <tr>
            <td class=\"name\">";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Including X", ["name" => $this->getAttribute($context["surcharge"], "getName", [], "method")]]), "html", null, true);
                echo ":</td>
            <td class=\"value\">";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["surcharge"], "getValue", [], "method"), "currency" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method")]]), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surcharge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </table>
    </div>
  ";
        }
        // line 20
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.item.actions", "item" => $this->getAttribute(($context["this"] ?? null), "item", [])]]), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  67 => 17,  58 => 14,  54 => 13,  51 => 12,  47 => 11,  43 => 9,  41 => 8,  33 => 7,  30 => 6,);
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
 # Shopping cart item : subtotal
 #
 # @ListChild (list=\"cart.item\", weight=\"60\")
 #}
<td class=\"item-subtotal\">
  <span class=\"subtotal{% if this.item.getExcludeSurcharges() %} modified-subtotal{% endif %}\">{{ widget('XLite\\\\View\\\\Surcharge', surcharge=this.item.getDisplayTotal(), currency=this.cart.getCurrency()) }}</span>
  {% if this.item.getExcludeSurcharges() %}
    <div class=\"including-modifiers\" style=\"display: none;\">
      <table class=\"including-modifiers\" cellspacing=\"0\">
        {% for surcharge in this.item.getExcludeSurcharges() %}
          <tr>
            <td class=\"name\">{{ t('Including X', {'name': surcharge.getName()}) }}:</td>
            <td class=\"value\">{{ widget('XLite\\\\View\\\\Surcharge', surcharge=surcharge.getValue(), currency=this.cart.getCurrency()) }}</td>
          </tr>
        {% endfor %}
      </table>
    </div>
  {% endif %}
  {{ widget_list('cart.item.actions', item=this.item) }}
</td>
", "shopping_cart/parts/item.subtotal.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\item.subtotal.twig");
    }
}
