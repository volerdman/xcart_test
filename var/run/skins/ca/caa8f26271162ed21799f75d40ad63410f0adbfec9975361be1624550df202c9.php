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

/* search_panel/filters.twig */
class __TwigTemplate_aa467c7ef8f0bda768a1276f49e2042940b8428c88c8bbbf29177e708ff2a99c extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"saved-filter-options\">

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSavedFilterOptions", [], "method"));
        foreach ($context['_seq'] as $context["fid"] => $context["filter"]) {
            // line 8
            echo "    <li class=\"filter-option filter-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["fid"], "html", null, true);
            echo "\">
      ";
            // line 9
            if ($context["fid"]) {
                // line 10
                echo "        ";
                if ($this->getAttribute(($context["this"] ?? null), "isSelectedFilter", [0 => $context["fid"]], "method")) {
                    // line 11
                    echo "           <span class=\"filter-title\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getName", [], "method"), "html", null, true);
                    echo "</span>
        ";
                } else {
                    // line 13
                    echo "           <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, $this->getAttribute(($context["this"] ?? null), "getTarget", [], "method"), "search", ["filter_id" => $context["fid"]]]), "html", null, true);
                    echo "\" class=\"filter-title\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getName", [], "method"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 15
                echo "        ";
                if ($this->getAttribute($context["filter"], "getSuffix", [], "method")) {
                    // line 16
                    echo "          <span class=\"filter-suffix\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getSuffix", [], "method"), "html", null, true);
                    echo "</span>
        ";
                }
                // line 18
                echo "        ";
                if ($this->getAttribute(($context["this"] ?? null), "isFilterRemovable", [0 => $context["filter"]], "method")) {
                    // line 19
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, $this->getAttribute(($context["this"] ?? null), "getTarget", [], "method"), "delete_search_filter", ["filter_id" => $context["fid"]]]), "html", null, true);
                    echo "\" class=\"delete-filter fa fa-times\" title=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delete filter option"]), "html", null, true);
                    echo "\"></a>
        ";
                }
                // line 21
                echo "      ";
            } else {
                // line 22
                echo "        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, $this->getAttribute(($context["this"] ?? null), "getTarget", [], "method"), "clearSearch"]), "html", null, true);
                echo "\" class=\"filter-title first clear-filter";
                if ( !$this->getAttribute(($context["this"] ?? null), "getCurrentSearchFilter", [], "method")) {
                    echo " active";
                }
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getName", [], "method"), "html", null, true);
                echo "</a>
      ";
            }
            // line 24
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fid'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "search_panel/filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  98 => 24,  86 => 22,  83 => 21,  75 => 19,  72 => 18,  66 => 16,  63 => 15,  55 => 13,  49 => 11,  46 => 10,  44 => 9,  39 => 8,  35 => 7,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "search_panel/filters.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\search_panel\\filters.twig");
    }
}
