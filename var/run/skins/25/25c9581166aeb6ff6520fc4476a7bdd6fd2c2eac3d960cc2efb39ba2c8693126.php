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

/* shopping_cart/parts/item.qty.twig */
class __TwigTemplate_8e78620e944bfd83d10d3f0befdf1b7113f127f21207cad524c266615b0d7260 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-qty\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "canChangeAmount", [], "method")) {
            // line 8
            echo "    ";
            $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Update", ["item" => $this->getAttribute(($context["this"] ?? null), "item", []), "className" => "update-quantity", "validationEngine" => "1"]);            // line 9
            echo "      <div>
        ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\QuantityBox", "product" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getProduct", [], "method"), "fieldValue" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getAmount", [], "method"), "isCartPage" => "1", "orderItem" => $this->getAttribute(($context["this"] ?? null), "item", [])]]), "html", null, true);
            echo "
      </div>
    ";
            $this->endForm();            // line 13
            echo "  ";
        } else {
            // line 14
            echo "    <span class=\"non-valid-qty\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getAmount", [], "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 16
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.qty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 14,  45 => 13,  40 => 10,  37 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # Shopping cart item : quantity
 #
 # @ListChild (list=\"cart.item\", weight=\"50\")
 #}
<td class=\"item-qty\">
  {% if this.item.canChangeAmount() %}
    {% form '\\\\XLite\\\\View\\\\Form\\\\Cart\\\\Item\\\\Update' with {item: this.item, className: 'update-quantity', validationEngine: '1'} %}
      <div>
        {{ widget('\\\\XLite\\\\View\\\\Product\\\\QuantityBox', product=this.item.getProduct(), fieldValue=this.item.getAmount(), isCartPage='1', orderItem=this.item) }}
      </div>
    {% endform %}
  {% else %}
    <span class=\"non-valid-qty\">{{ this.item.getAmount() }}</span>
  {% endif %}
</td>
", "shopping_cart/parts/item.qty.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\item.qty.twig");
    }
}
