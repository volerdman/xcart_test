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

/* layout/header/header.right.twig */
class __TwigTemplate_43fc379295f7683200a4e5d531e1b1a9e6eb5bf6f7a33ab8ecc1eaf9a2c1f409 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        if ( !$this->getAttribute(($context["this"] ?? null), "isCheckoutLayout", [], "method")) {
            // line 7
            echo "  <div id=\"header\" class=\"header-right-bar\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.header.right", "displayMode" => "horizontal"]]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  30 => 6,);
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
 # Header right box
 #
 # @ListChild (list=\"layout.header\", weight=\"200\")
 #}
{% if not this.isCheckoutLayout() %}
  <div id=\"header\" class=\"header-right-bar\">
    {{ widget_list('layout.header.right', displayMode='horizontal') }}
  </div>
{% endif %}
", "layout/header/header.right.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\layout\\header\\header.right.twig");
    }
}
