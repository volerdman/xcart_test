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

/* modules/CDev/VolumeDiscounts/cart_promo.twig */
class __TwigTemplate_87f8fa20d95af2c81b82422ce37a883a9d67a60238adb53393469a9d0ac14f61 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "hasNextDiscount", [], "method")) {
            // line 6
            echo "  <li class=\"volume-discounts\">
  
  <div class=\"volume-discounts-promo\">
  
    <div class=\"banner\">
      <div class=\"banner-box\">-";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getNextDiscountValue", [], "method"), "html", null, true);
            echo "</div>
    </div>
  
    <span class=\"next\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Get X off for order amount over Y", ["X" => $this->getAttribute(($context["this"] ?? null), "getNextDiscountValue", [], "method"), "Y" => $this->getAttribute(($context["this"] ?? null), "getNextDiscountSubtotal", [], "method")]]), "html", null, true);
            echo "</span>
  
  </div>
  
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/VolumeDiscounts/cart_promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  42 => 11,  35 => 6,  33 => 5,  30 => 4,);
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
 # Promo block content for cart page
 #}

{% if this.hasNextDiscount() %}
  <li class=\"volume-discounts\">
  
  <div class=\"volume-discounts-promo\">
  
    <div class=\"banner\">
      <div class=\"banner-box\">-{{ this.getNextDiscountValue() }}</div>
    </div>
  
    <span class=\"next\">{{ t('Get X off for order amount over Y', {'X': this.getNextDiscountValue(), 'Y': this.getNextDiscountSubtotal()}) }}</span>
  
  </div>
  
  </li>
{% endif %}
", "modules/CDev/VolumeDiscounts/cart_promo.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\VolumeDiscounts\\cart_promo.twig");
    }
}
