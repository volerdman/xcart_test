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

/* button/dropdown.twig */
class __TwigTemplate_606cd40270fca7e5e4b83cf5caba77f5ca364fb42747f6b354471df957338001 extends \XLite\Core\Templating\Twig\Template
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
        echo "
      ";
        // line 33
        if ((($context["showCaret"] ?? null) &&  !($context["useCaretButton"] ?? null))) {
            // line 34
            echo "        <span>
          ";
            // line 35
            if ((($context["dropDirection"] ?? null) == "dropup")) {
                // line 36
                echo "            <i class=\"fa fa-angle-up\"></i>
          ";
            } else {
                // line 38
                echo "            <i class=\"fa fa-angle-down\"></i>
          ";
            }
            // line 40
            echo "        </span>
      ";
        }
        // line 42
        echo "    </button>
    ";
        // line 43
        if (($context["useCaretButton"] ?? null)) {
            // line 44
            echo "      <button
              type=\"button\"
              class=\"btn btn-default dropdown-toggle\"
              data-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\">
        ";
            // line 50
            if (($context["showCaret"] ?? null)) {
                // line 51
                echo "          <span class=\"caret\"></span>
        ";
            } else {
                // line 53
                echo "          <span>
            ";
                // line 54
                if ((($context["dropDirection"] ?? null) == "dropup")) {
                    // line 55
                    echo "              <i class=\"fa fa-angle-up\"></i>
            ";
                } else {
                    // line 57
                    echo "              <i class=\"fa fa-angle-down\"></i>
            ";
                }
                // line 59
                echo "          </span>
        ";
            }
            // line 61
            echo "      </button>
    ";
        }
        // line 63
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 64
        echo "
  ";
        // line 65
        if ($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method")) {
            // line 66
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 68
                echo "        <li>";
                echo $this->getAttribute($context["button"], "display", [], "method");
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    </ul>
  ";
        }
        // line 72
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "button/dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 72,  204 => 70,  195 => 68,  191 => 67,  188 => 66,  186 => 65,  183 => 64,  180 => 63,  176 => 61,  172 => 59,  168 => 57,  164 => 55,  162 => 54,  159 => 53,  155 => 51,  153 => 50,  145 => 44,  143 => 43,  140 => 42,  136 => 40,  132 => 38,  128 => 36,  126 => 35,  123 => 34,  121 => 33,  118 => 32,  111 => 31,  109 => 30,  106 => 29,  99 => 28,  97 => 27,  92 => 25,  88 => 23,  82 => 22,  79 => 21,  73 => 17,  71 => 16,  65 => 14,  58 => 13,  52 => 12,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "button/dropdown.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\button\\dropdown.twig");
    }
}
