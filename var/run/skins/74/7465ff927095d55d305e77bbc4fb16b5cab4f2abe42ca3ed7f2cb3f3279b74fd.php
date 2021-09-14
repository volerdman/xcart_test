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

/* modules/XPay/XPaymentsCloud/product/details/parts/buy_apple_pay.twig */
class __TwigTemplate_cec19435bed4e1122b049dafc6ee0df90b95e522c2ca6c7696fd6644f5af172e extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XPay\\XPaymentsCloud\\View\\Product\\BuyWithApplePay", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XPay\\XPaymentsCloud\\View\\Product\\BuyWithApplePayPriceUpdate", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XPay/XPaymentsCloud/product/details/parts/buy_apple_pay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  30 => 9,);
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
 # Buy with Apple Pay widget container
 #
 # @ListChild (list=\"product.details.page.info.form.buttons-added.cart-buttons\", zone=\"customer\", weight=\"135\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons-added.cart-buttons\", zone=\"customer\", weight=\"135\")
 # @ListChild (list=\"product.details.page.info.form.buttons.cart-buttons\", zone=\"customer\", weight=\"135\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons.cart-buttons\", zone=\"customer\", weight=\"135\")
 #}
{{ widget('\\\\XLite\\\\Module\\\\XPay\\\\XPaymentsCloud\\\\View\\\\Product\\\\BuyWithApplePay', product=this.product) }}
{{ widget('\\\\XLite\\\\Module\\\\XPay\\\\XPaymentsCloud\\\\View\\\\Product\\\\BuyWithApplePayPriceUpdate', product=this.product) }}
", "modules/XPay/XPaymentsCloud/product/details/parts/buy_apple_pay.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\XPay\\XPaymentsCloud\\product\\details\\parts\\buy_apple_pay.twig");
    }
}
