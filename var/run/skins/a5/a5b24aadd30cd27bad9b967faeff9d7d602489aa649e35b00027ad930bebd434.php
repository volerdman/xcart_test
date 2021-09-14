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

/* settings/body.twig */
class __TwigTemplate_3f6e3b1e26c270e62aa16a5d597ee03456dd611433dfd7b3fe8c577e4c344b2e extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"settings general-settings settings-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "page", []), "html", null, true);
        echo " settings-\">
  ";
        // line 5
        if (($this->getAttribute(($context["this"] ?? null), "target", []) == "module")) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Model\\ModuleSettings", "useBodyTemplate" => "1"]]), "html", null, true);
            echo "
  ";
        }
        // line 8
        echo "  ";
        if (($this->getAttribute(($context["this"] ?? null), "target", []) != "module")) {
            // line 9
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Model\\Settings", "useBodyTemplate" => "1"]]), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "settings/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "settings/body.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\settings\\body.twig");
    }
}
