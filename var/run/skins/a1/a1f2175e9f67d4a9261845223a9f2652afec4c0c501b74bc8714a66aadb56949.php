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

/* layout/header/mobile_header_parts/right_menu.twig */
class __TwigTemplate_5fd9d6bc9f06ba72bec88d6f02ba1db11335ec7695a12793b8fb64fc6f807792 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<li class=\"dropdown mobile_header-right_menu\">
    <div class=\"header-right-bar\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.header.right.mobile", "displayMode" => "horizontal"]]), "html", null, true);
        echo "
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "layout/header/mobile_header_parts/right_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  30 => 6,);
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
 # @ListChild (list=\"layout.header.mobile.menu\", weight=\"1000\")
 #}

<li class=\"dropdown mobile_header-right_menu\">
    <div class=\"header-right-bar\">
      {{ widget_list('layout.header.right.mobile', displayMode='horizontal') }}
    </div>
</li>", "layout/header/mobile_header_parts/right_menu.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\right_menu.twig");
    }
}
