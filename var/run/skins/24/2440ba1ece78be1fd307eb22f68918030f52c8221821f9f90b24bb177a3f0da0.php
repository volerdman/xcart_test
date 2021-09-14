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

/* modules/CDev/Coupons/coupons_minilist.twig */
class __TwigTemplate_2a4119c243749d1f6d6a3e3ac0b0d035922ecc6e06a511a77b0b948a39817d0b extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isDiscountCouponSubpanelVisible", [0 => $this->getAttribute(($context["this"] ?? null), "surcharge", [])], "method")) {
            // line 10
            echo "  <ul class=\"discount-coupons-panel\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getDiscountCoupons", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["usedCoupon"]) {
                // line 12
                echo "      <li>
        <span>";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["usedCoupon"], "getPublicName", [], "method"), "html", null, true);
                echo "</span>
        ";
                // line 14
                if ($this->getAttribute(($context["this"] ?? null), "isDiscountCouponRemoveVisible", [], "method")) {
                    // line 15
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "buildUrl", [0 => "coupon", 1 => "remove", 2 => ["id" => $this->getAttribute($context["usedCoupon"], "getId", [], "method")]], "method"), "html", null, true);
                    echo "\">&times;</a>
        ";
                }
                // line 17
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usedCoupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/Coupons/coupons_minilist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  57 => 17,  51 => 15,  49 => 14,  45 => 13,  42 => 12,  38 => 11,  35 => 10,  33 => 9,  30 => 8,);
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
 # Discount coupon subpanel
 #
 # @ListChild (list=\"cart.panel.totals.modifier\")
 # @ListChild (list=\"checkout.review.selected.items.modifier\")
 # @ListChild (list=\"invoice.base.totals.modifier.name\")
 #}

{% if this.isDiscountCouponSubpanelVisible(this.surcharge) %}
  <ul class=\"discount-coupons-panel\">
    {% for usedCoupon in this.getDiscountCoupons() %}
      <li>
        <span>{{ usedCoupon.getPublicName() }}</span>
        {% if this.isDiscountCouponRemoveVisible() %}
          <a href=\"{{ this.buildUrl('coupon', 'remove', {'id': usedCoupon.getId()}) }}\">&times;</a>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
{% endif %}
", "modules/CDev/Coupons/coupons_minilist.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\modules\\CDev\\Coupons\\coupons_minilist.twig");
    }
}
