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

/* model\body.twig */
class __TwigTemplate_7a60ea16b9ddd3cbedbfddc0dd891aa6d49a959f03388684371b87c1854c7548 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getTopInlineJSCode", [], "method")) {
            // line 6
            echo "  <script type=\"text/javascript\">";
            echo $this->getAttribute(($context["this"] ?? null), "getTopInlineJSCode", [], "method");
            echo "</script>
";
        }
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 8
($context["this"] ?? null), "getDir", [], "method") . "/header.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/header.twig"), "model\\body.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "
  ";
        // line 10
        $this->startForm($this->getAttribute(($context["this"] ?? null), "getFormClass", [], "method"), $this->getAttribute(($context["this"] ?? null), "getFormWidgetParams", [], "method"));        // line 11
        echo "
    <div class=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getContainerClass", [], "method"), "html", null, true);
        echo "\">
      ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 13
($context["this"] ?? null), "getDir", [], "method") . "/form_content.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/form_content.twig"), "model\\body.twig", 13)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 14
        echo "      ";
        if ( !$this->getAttribute(($context["this"] ?? null), "useButtonPanel", [], "method")) {
            // line 15
            echo "        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFormTemplate", [0 => "buttons"], "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFormTemplate", [0 => "buttons"], "method")), "model\\body.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 16
            echo "      ";
        }
        // line 17
        echo "      ";
        if ($this->getAttribute(($context["this"] ?? null), "useButtonPanel", [], "method")) {
            // line 18
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "buttonPanel", []), "display", [], "method"), "html", null, true);
            echo "
      ";
        }
        // line 20
        echo "    </div>

  ";
        $this->endForm();        // line 23
        echo "
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 24
($context["this"] ?? null), "getDir", [], "method") . "/footer.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/footer.twig"), "model\\body.twig", 24)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 25
        echo "
";
        // line 26
        if ($this->getAttribute(($context["this"] ?? null), "getBottomInlineJSCode", [], "method")) {
            // line 27
            echo "  <script type=\"text/javascript\">";
            echo $this->getAttribute(($context["this"] ?? null), "getBottomInlineJSCode", [], "method");
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "model\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  118 => 26,  115 => 25,  105 => 24,  102 => 23,  98 => 20,  92 => 18,  89 => 17,  86 => 16,  75 => 15,  72 => 14,  62 => 13,  58 => 12,  55 => 11,  54 => 10,  51 => 9,  41 => 8,  35 => 6,  33 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "model\\body.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\model\\body.twig");
    }
}
