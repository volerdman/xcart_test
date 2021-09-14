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

/* modules/Amazon/PayWithAmazon/checkout_button/mini_cart.twig */
class __TwigTemplate_8421cea06e43f8dec7ef7dac4c966d209d9348abda500b3213c1663b0aa8025d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isPayWithAmazonActive", [], "method")) {
            // line 7
            echo "<div id=\"payWithAmazonDiv_mini_cart_btn\" class=\"pay-with-amazon-button\">
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/checkout_button/mini_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/Amazon/PayWithAmazon/checkout_button/mini_cart.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\Amazon\\PayWithAmazon\\checkout_button\\mini_cart.twig");
    }
}
