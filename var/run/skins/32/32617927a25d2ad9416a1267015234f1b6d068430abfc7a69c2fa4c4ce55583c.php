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

/* button/dropdown_with_angle_button.twig */
class __TwigTemplate_554e68fed89a3c2f0550e9e411420ca717ff7271e805034f35498d5eec04395a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"btn-group btn-dropdown ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDropDirection", [], "method"), "html", null, true);
        echo "\" role=\"group\">

  ";
        // line 6
        $context["showCaret"] = $this->getAttribute(($context["this"] ?? null), "getShowCaret", [], "method");
        // line 7
        echo "  ";
        $context["useCaretButton"] = $this->getAttribute(($context["this"] ?? null), "getUseCaretButton", [], "method");
        // line 8
        echo "  ";
        $context["dropDirection"] = $this->getAttribute(($context["this"] ?? null), "getdropDirection", [], "method");
        // line 9
        echo "
  ";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "    <button type=\"button\"
            ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "hasName", [], "method")) {
            echo " name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 13
        echo "            ";
        if ($this->getAttribute(($context["this"] ?? null), "hasValue", [], "method")) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 14
        echo "            class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getClass", [], "method"), "html", null, true);
        echo "\"
            role=\"group\"
            ";
        // line 16
        if ( !($context["useCaretButton"] ?? null)) {
            // line 17
            echo "      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
            ";
        }
        // line 21
        echo "            ";
        if ($this->getAttribute(($context["this"] ?? null), "getButtonTitle", [], "method")) {
            // line 22
            echo "              title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getButtonTitle", [], "method"), "html", null, true);
            echo "\"
            ";
        }
        // line 23
        echo ">

      ";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "

      ";
        // line 27
        $context["iconStyle"] = $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "icon-style"], "method");
        // line 28
        echo "      ";
        if (($context["iconStyle"] ?? null)) {
            echo "<span><i class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["iconStyle"] ?? null), "html", null, true);
            echo "\"></i></span>";
        }
        // line 29
        echo "
      ";
        // line 30
        $context["buttonLabel"] = call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]);
        // line 31
        echo "      ";
        if ((twig_length_filter($this->env, ($context["buttonLabel"] ?? null)) > 0)) {
            echo "<span>";
            echo ($context["buttonLabel"] ?? null);
            echo "</span>";
        }
        // line 32
        echo "    </button>
    <button
            type=\"button\"
            class=\"btn btn-default dropdown-toggle\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\">
      ";
        // line 39
        if (($context["useCaretButton"] ?? null)) {
            // line 40
            echo "        <span class=\"caret\"></span>
      ";
        } else {
            // line 42
            echo "        <span>
          ";
            // line 43
            if ((($context["dropDirection"] ?? null) == "dropup")) {
                // line 44
                echo "            <i class=\"fa fa-angle-up\"></i>
          ";
            } else {
                // line 46
                echo "            <i class=\"fa fa-angle-down\"></i>
          ";
            }
            // line 48
            echo "        </span>
      ";
        }
        // line 50
        echo "    </button>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 52
        echo "
  ";
        // line 53
        if ($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method")) {
            // line 54
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 56
                echo "        <li>";
                echo $this->getAttribute($context["button"], "display", [], "method");
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </ul>
  ";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "button/dropdown_with_angle_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 60,  175 => 58,  166 => 56,  162 => 55,  159 => 54,  157 => 53,  154 => 52,  150 => 50,  146 => 48,  142 => 46,  138 => 44,  136 => 43,  133 => 42,  129 => 40,  127 => 39,  118 => 32,  111 => 31,  109 => 30,  106 => 29,  99 => 28,  97 => 27,  92 => 25,  88 => 23,  82 => 22,  79 => 21,  73 => 17,  71 => 16,  65 => 14,  58 => 13,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "button/dropdown_with_angle_button.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\button\\dropdown_with_angle_button.twig");
    }
}
