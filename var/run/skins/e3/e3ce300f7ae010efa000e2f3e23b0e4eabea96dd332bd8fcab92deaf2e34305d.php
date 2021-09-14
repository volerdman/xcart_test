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

/* items_list/model/table/parts/remove.twig */
class __TwigTemplate_c99d7fbe498bb66dd6816bfc3958486431c883a3c90c53667f9e18b158de9a28 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAllowEntityRemove", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Remove", "buttonName" => ((($this->getAttribute(            // line 7
($context["this"] ?? null), "getRemoveDataPrefix", [], "method") . "[") . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getUniqueIdentifier", [], "method")) . "]"), "isCrossIcon" => $this->getAttribute(            // line 8
($context["this"] ?? null), "isCrossIcon", [], "method")]]), "html", null, true);
            // line 9
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  38 => 8,  37 => 7,  35 => 6,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "items_list/model/table/parts/remove.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\items_list\\model\\table\\parts\\remove.twig");
    }
}
