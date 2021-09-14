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

/* settings/requirement/body.twig */
class __TwigTemplate_b5a83da0941fc311632ab9c2b14621bf61abac7c0a37fd75379fdd9100f101c5 extends \XLite\Core\Templating\Twig\Template
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
        $context["requirement"] = $this->getAttribute(($context["this"] ?? null), "getRequirement", [], "method");
        // line 6
        $context["name"] = $this->getAttribute(($context["this"] ?? null), "getName", [], "method");
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isAjax", [], "method")) {
            // line 9
            echo "  <ul class=\"block\">
";
        }
        // line 11
        echo "<li class=\"requirement-line real-content ";
        if ($this->getAttribute(($context["this"] ?? null), "isOdd", [], "method")) {
            echo "dialog-box";
        } else {
            echo "highlight";
        }
        echo "\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => ["reloadParams" => ["name" =>         // line 14
($context["name"] ?? null), "odd" => $this->getAttribute(        // line 15
($context["this"] ?? null), "isOdd", [], "method")]]], "method"), "html", null, true);
        // line 17
        echo "

  <div class=\"table-column name\">
    ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["requirement"] ?? null), "title", []), "html", null, true);
        echo "
    ";
        // line 21
        if ( !$this->getAttribute(($context["requirement"] ?? null), "status", [])) {
            // line 22
            echo "      <div class=\"description\">
        ";
            // line 23
            echo $this->getAttribute(($context["requirement"] ?? null), "description", []);
            echo "
      </div>
      <div class=\"kb-description\">
        ";
            // line 26
            echo $this->getAttribute(($context["requirement"] ?? null), "kb_description", []);
            echo "
      </div>
    ";
        }
        // line 29
        echo "  </div>
  ";
        // line 30
        ob_start(function () { return ''; });
        // line 31
        echo "    <div class=\"table-column status\">
      ";
        // line 32
        if ($this->getAttribute(($context["requirement"] ?? null), "status", [])) {
            // line 33
            echo "        ";
            if ($this->getAttribute(($context["requirement"] ?? null), "skipped", [])) {
                // line 34
                echo "          <span class=\"skipped info-message\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Skipped"]), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 36
                echo "          <span class=\"passed success-message\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Passed"]), "html", null, true);
                echo "</span>
        ";
            }
            // line 38
            echo "      ";
        } else {
            // line 39
            echo "        <span class=\"failed error-message\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Failed"]), "html", null, true);
            echo "</span>
        ";
            // line 40
            if ($this->getAttribute(($context["requirement"] ?? null), "error_description", [])) {
                // line 41
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "id" => ("install_requirement_error_" . ($context["name"] ?? null)), "text" => $this->getAttribute(($context["requirement"] ?? null), "error_description", []), "caption" => "", "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
                echo "
        ";
            }
            // line 43
            echo "      ";
        }
        // line 44
        echo "    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 46
        echo "</li>
";
        // line 47
        if ($this->getAttribute(($context["this"] ?? null), "isAjax", [], "method")) {
            // line 48
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/requirement/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  136 => 47,  133 => 46,  129 => 44,  126 => 43,  120 => 41,  118 => 40,  113 => 39,  110 => 38,  104 => 36,  98 => 34,  95 => 33,  93 => 32,  90 => 31,  88 => 30,  85 => 29,  79 => 26,  73 => 23,  70 => 22,  68 => 21,  64 => 20,  59 => 17,  57 => 15,  56 => 14,  55 => 12,  46 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "settings/requirement/body.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\settings\\requirement\\body.twig");
    }
}
