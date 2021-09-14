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

/* profile/address_book.twig */
class __TwigTemplate_3de6b8ebd1007d6f3e95d5cbe1aef95652c667724c5b0130e4dd93b4219785a8 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAddresses", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Address", "displayMode" => "text", "displayWrapper" => "1", "address" => $context["address"]]]), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Address", "displayMode" => "text", "displayWrapper" => "1"]]), "html", null, true);
        echo "

<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "profile/address_book.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  37 => 6,  33 => 5,  30 => 4,);
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
 # Address book list. Admin area.
 #}

{% for address in this.getAddresses() %}
  {{ widget('\\\\XLite\\\\View\\\\Address', displayMode='text', displayWrapper='1', address=address) }}
{% endfor %}

{{ widget('\\\\XLite\\\\View\\\\Address', displayMode='text', displayWrapper='1') }}

<div class=\"clear\"></div>
", "profile/address_book.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\profile\\address_book.twig");
    }
}
