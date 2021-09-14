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

/* menu/account/body.twig */
class __TwigTemplate_444fdf4cce37b9b11b26bdda2e48f8dba2b7db3f461803b1c2f5d85637cabecd extends \XLite\Core\Templating\Twig\Template
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
<div class=\"account\">

  ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "getItems", [], "method")) {
            // line 8
            echo "    <ul class=\"menu\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getItems", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", [], "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        // line 14
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "menu/account/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 12,  44 => 10,  40 => 9,  37 => 8,  35 => 7,  30 => 4,);
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
 # Quick menu
 #}

<div class=\"account\">

  {% if this.getItems() %}
    <ul class=\"menu\">
      {% for item in this.getItems() %}
        {{ item.display() }}
      {% endfor %}
    </ul>
  {% endif %}

</div>
", "menu/account/body.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\menu\\account\\body.twig");
    }
}
