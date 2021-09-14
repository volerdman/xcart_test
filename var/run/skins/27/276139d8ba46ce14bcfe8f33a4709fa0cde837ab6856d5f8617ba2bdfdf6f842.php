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

/* pager/model/table/parts/search_total.block.twig */
class __TwigTemplate_fb909b5aacbcf7cbd065ac8ec9d43cdfb5a6256e22738cd1a918f84f09616199 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"search-total-wrapper\">
  <ul>
    <li>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Search total"]), "html", null, true);
        echo ":</li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSearchTotals", [], "method"));
        foreach ($context['_seq'] as $context["k"] => $context["totals"]) {
            // line 9
            echo "      <li class=\"amount\">
        <span>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatPrice", [0 => $this->getAttribute($context["totals"], "orders_total", []), 1 => $this->getAttribute(($context["this"] ?? null), "getSearchTotalCurrency", [0 => $this->getAttribute($context["totals"], "currency_id", [])], "method")], "method"), "html", null, true);
            if ($this->getAttribute(($context["this"] ?? null), "isNeedSearchTotalsSeparator", [0 => $context["k"]], "method")) {
                echo ", ";
            }
            echo "</span>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['totals'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "pager/model/table/parts/search_total.block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  46 => 10,  43 => 9,  39 => 8,  35 => 7,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pager/model/table/parts/search_total.block.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\pager\\model\\table\\parts\\search_total.block.twig");
    }
}
