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

/* layout/header/mobile_header_parts/navbar/second_additional_menu.twig */
class __TwigTemplate_5bb90a4515b9a50757dc2c8c1f169be8f96c03a484a9fb8b486141115712747a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isSlidebar", [])) {
            // line 7
            echo "  <li class=\"additional-menu-wrapper\">
    <div class=\"Inset additional-menu\">
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.navbar.account.second-additional-menu"]]), "html", null, true);
            echo "
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/mobile_header_parts/navbar/second_additional_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 7,  30 => 6,);
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
 # Second additional account menu
 #
 # @ListChild (list=\"slidebar.navbar.account.additional-menu\", weight=\"2000\")
 #}
{% if this.isSlidebar %}
  <li class=\"additional-menu-wrapper\">
    <div class=\"Inset additional-menu\">
      {{ widget_list('slidebar.navbar.account.second-additional-menu') }}
    </div>
  </li>
{% endif %}
", "layout/header/mobile_header_parts/navbar/second_additional_menu.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\navbar\\second_additional_menu.twig");
    }
}
