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

/* left_menu/link.twig */
class __TwigTemplate_2575c5b7bc5e5745495e4c358edab8df7e20ae18f52d2e09044e31cccf8d784f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")) {
            echo " with-label";
        }
        echo "\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "getLink", [], "method")) {
            // line 7
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
            echo "\" class=\"link\"";
            if ($this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method")) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method"), "html", null, true);
                echo "\"";
            }
            if ($this->getAttribute(($context["this"] ?? null), "getBlankPage", [], "method")) {
                echo " target=\"_blank\"";
            }
            echo "><span class=\"icon\">";
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            echo "</span>";
            if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
                echo "<span class=\"title\">";
                echo $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method");
                echo "</span>";
            }
            echo "</a>
  ";
        } else {
            // line 9
            echo "    <span class=\"link\"";
            if ($this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method")) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method"), "html", null, true);
                echo "\"";
            }
            echo "><span class=\"icon\">";
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            echo "</span>";
            if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
                echo "<span class=\"title\">";
                echo $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method");
                echo "</span>";
            }
            echo "</span>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")) {
            // line 12
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelLink", [], "method"), "html", null, true);
            echo "\" class=\"label\"><span title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelTitle", [], "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute(($context["this"] ?? null), "getLabel", [], "method");
            echo "</span></a>
  ";
        }
        // line 14
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getActionWidget", [], "method")) {
            // line 15
            echo "    <div class=\"action-widget\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getActionWidget", [], "method"), "display", [], "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 17,  98 => 15,  95 => 14,  85 => 12,  82 => 11,  64 => 9,  41 => 7,  39 => 6,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "left_menu/link.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\left_menu\\link.twig");
    }
}
