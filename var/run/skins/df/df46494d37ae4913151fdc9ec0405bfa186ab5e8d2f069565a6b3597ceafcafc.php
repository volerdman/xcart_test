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

/* modules/XPay/XPaymentsCloud/product/details/parts/common.only_registered.twig */
class __TwigTemplate_8d45df2ce5eb360a12c9c6eee14d50cbded98e8ffb815955a829e5a77750f8e2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isNotAllowedXpaymentsSubscription", [], "method")) {
            // line 8
            echo "  <span class=\"xps-only-registered-label\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This product is available only for registered users"]), "html", null, true);
            echo "
  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XPay/XPaymentsCloud/product/details/parts/common.only_registered.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  32 => 8,  30 => 7,);
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
 # Display message for anonymous customers
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"19\")
 # @ListChild (list=\"product.details.quicklook.info\", weight=\"19\")
 #}
{% if this.product.isNotAllowedXpaymentsSubscription() %}
  <span class=\"xps-only-registered-label\">
    {{ t('This product is available only for registered users') }}
  </span>
{% endif %}
", "modules/XPay/XPaymentsCloud/product/details/parts/common.only_registered.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\XPay\\XPaymentsCloud\\product\\details\\parts\\common.only_registered.twig");
    }
}
