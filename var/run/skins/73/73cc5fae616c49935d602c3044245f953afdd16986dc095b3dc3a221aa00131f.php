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

/* model/form/content.twig */
class __TwigTemplate_a1bc02b0e11484eef725645f9efb6389ab738cea9d322b52329d4d1d83066e1b extends \XLite\Core\Templating\Twig\Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getFormFieldsForDisplay", [], "method"));
        foreach ($context['_seq'] as $context["section"] => $context["data"]) {
            // line 6
            echo "  <fieldset>
    ";
            // line 7
            if ($this->getAttribute(($context["this"] ?? null), "isShowSectionHeader", [0 => $context["section"]], "method")) {
                // line 8
                echo "      <legend>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "sectionParamWidget", []), "display", [], "method"), "html", null, true);
                echo "</legend>
    ";
            }
            // line 10
            echo "
    <div ";
            // line 11
            if ($this->getAttribute(($context["this"] ?? null), "isSectionCollapsible", [0 => $context["section"]], "method")) {
                echo "class=\"";
                if ($this->getAttribute(($context["this"] ?? null), "isSectionCollapsed", [0 => $context["section"]], "method")) {
                    echo "collapse";
                }
                echo "\" id=\"section-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "\" aria-expanded=\"true\"";
            }
            echo ">
      ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => ($context["section"] . ".subheader")], "method"), "html", null, true);
            echo "

      <ul class=\"table ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "-table\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "sectionParamFields", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 16
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemClass", [0 => $this->getAttribute($context["loop"], "index", []), 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["field"]], "method"), "html", null, true);
                echo "\">
            ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getFieldCommentedData", [0 => $context["field"]], "method")], "method"), "html", null, true);
                echo "
            ";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "display", [], "method"), "html", null, true);
                echo "
            ";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => "field", 1 => ["section" => $context["section"], "field" => $context["field"]]], "method"), "html", null, true);
                echo "
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    </div>

  </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 29
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "form.content"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/form/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 29,  129 => 27,  119 => 22,  102 => 19,  98 => 18,  94 => 17,  89 => 16,  72 => 15,  68 => 14,  63 => 12,  51 => 11,  48 => 10,  42 => 8,  40 => 7,  37 => 6,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "model/form/content.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\model\\form\\content.twig");
    }
}
