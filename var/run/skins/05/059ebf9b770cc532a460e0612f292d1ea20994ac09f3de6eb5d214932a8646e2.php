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

/* layout/header/navbar.desktop.twig */
class __TwigTemplate_aa14533d5aa0987876e623cfaf7765e1d4d417c6ce5365aa4f03ab3359ef0b98 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"navbar navbar-inverse mobile-hidden\" role=\"navigation\" data-desktop-navbar>
    ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "shouldRender", [], "method")) {
            // line 7
            echo "    <div class=\"collapse navbar-collapse\">
      ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.menu"]]), "html", null, true);
            echo "
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.menu.after"]]), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "layout/header/navbar.desktop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{##
 # Desktop navbar (moved from top_menu.twig)
 #}

<div class=\"navbar navbar-inverse mobile-hidden\" role=\"navigation\" data-desktop-navbar>
    {% if this.shouldRender() %}
    <div class=\"collapse navbar-collapse\">
      {{ widget_list('header.menu') }}
      {{ widget_list('header.menu.after') }}
    </div>
    {% endif %}
</div>", "layout/header/navbar.desktop.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\layout\\header\\navbar.desktop.twig");
    }
}
