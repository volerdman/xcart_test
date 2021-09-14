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

/* shopping_cart/parts/item.shipping.estimator.twig */
class __TwigTemplate_968adf03bb156167ef81b49d9a8371a35aa7601a673cd88113906ba5b4b8611b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isShippingEstimatorVisible", [0 => $this->getAttribute(($context["this"] ?? null), "surcharge", [])], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ShippingEstimator\\ShippingEstimateBox"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.shipping.estimator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  33 => 7,  30 => 6,);
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
 #}

{% if this.isShippingEstimatorVisible(this.surcharge) %}
  {{ widget('XLite\\\\View\\\\ShippingEstimator\\\\ShippingEstimateBox') }}
{% endif %}
", "shopping_cart/parts/item.shipping.estimator.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\shopping_cart\\parts\\item.shipping.estimator.twig");
    }
}
