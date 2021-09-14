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

/* modules/CDev/Coupons/item.freeship.twig */
class __TwigTemplate_ba16888985d01473af9b69aa476edea91d27377e6e39b9873f912efecec4447b extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "isFreeShipping", [], "method") || $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "isShipForFree", [], "method"))) {
            // line 8
            echo "  <p class=\"item-freeship\">
  ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["FREE SHIPPING"]), "html", null, true);
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/Coupons/item.freeship.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # Shopping cart item : main
 #
 # @ListChild (list=\"cart.item.info\", weight=\"1000\")
 #}

{% if this.item.isFreeShipping() or this.item.isShipForFree() %}
  <p class=\"item-freeship\">
  {{ t('FREE SHIPPING') }}
  </p>
{% endif %}
", "modules/CDev/Coupons/item.freeship.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\Coupons\\item.freeship.twig");
    }
}
