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

/* product/details/common_attributes/body.twig */
class __TwigTemplate_39d02f113732a22f334079fd7b82201f603d8d9cc1f6a40f1c59036cd4b2db87 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasAttributes", [], "method")) {
            // line 6
            echo "  <li>
    <ul class=\"extra-fields common ";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFingerprint", [], "method"), "html", null, true);
            echo "\">
      ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.common.product-attributes.elements"]]), "html", null, true);
            echo "
    </ul>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/common_attributes/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  35 => 6,  33 => 5,  30 => 4,);
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
 # Product details attributes block
 #}

{% if this.hasAttributes() %}
  <li>
    <ul class=\"extra-fields common {{ this.getFingerprint() }}\">
      {{ widget_list('product.details.common.product-attributes.elements') }}
    </ul>
  </li>
{% endif %}
", "product/details/common_attributes/body.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\details\\common_attributes\\body.twig");
    }
}
