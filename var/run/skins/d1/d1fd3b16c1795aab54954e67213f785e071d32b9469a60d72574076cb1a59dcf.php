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

/* profiles/parts/actions.twig */
class __TwigTemplate_ad4c95bfea84e1e2d3977e152f53b1dd314ea6ccc619c600bb2b51ad12ee66d1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"actions\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Dropdown\\ProfileOperations", "useCaretButton" => false]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/parts/actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,);
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
 # Orders
 #
 # @ListChild (list=\"tabs.after.items\", zone=\"admin\", weight=\"100\")
 #}

<div class=\"actions\">
  {{ widget('\\\\XLite\\\\View\\\\Button\\\\Dropdown\\\\ProfileOperations', useCaretButton=false) }}
</div>
", "profiles/parts/actions.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\profiles\\parts\\actions.twig");
    }
}
