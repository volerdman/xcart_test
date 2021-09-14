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

/* modules/XPay/XPaymentsCloud/product/details/parts/buy_apple_pay.form.twig */
class __TwigTemplate_8c9665840b993d951a72bafdd5ac163e30fc2443f3d3ec8420f188be87210df6 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\Module\\XPay\\XPaymentsCloud\\View\\Form\\Checkout\\ApplePay", ["className" => "buy-with-apple-pay-form", "buyWithApplePay" => 1]);        $this->endForm();        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XPay/XPaymentsCloud/product/details/parts/buy_apple_pay.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  30 => 6,);
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
 # Product details Buy With Apple Pay form to run checkout
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"1000\")
 #}
{% form '\\\\XLite\\\\Module\\\\XPay\\\\XPaymentsCloud\\\\View\\\\Form\\\\Checkout\\\\ApplePay' with {className: 'buy-with-apple-pay-form', buyWithApplePay: 1} %}
{% endform %}

", "modules/XPay/XPaymentsCloud/product/details/parts/buy_apple_pay.form.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\XPay\\XPaymentsCloud\\product\\details\\parts\\buy_apple_pay.form.twig");
    }
}
