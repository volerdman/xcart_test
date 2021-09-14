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

/* modules/XC/ProductComparison/mobile_header_parts/navbar/account/additional/compare.twig */
class __TwigTemplate_8cf393fd14a36272559fd77aa237c4ef107f4842dafb574463fbcbd21198b130 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CrispWhiteSkin\\View\\AddToCompare\\ProductCompareLink"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/mobile_header_parts/navbar/account/additional/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  30 => 6,);
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
 # Orders link
 #
 # @ListChild (list=\"slidebar.navbar.account.first-additional-menu\", weight=\"100\")
 #}

{{ widget('\\\\XLite\\\\Module\\\\XC\\\\CrispWhiteSkin\\\\View\\\\AddToCompare\\\\ProductCompareLink') }}
", "modules/XC/ProductComparison/mobile_header_parts/navbar/account/additional/compare.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\modules\\XC\\ProductComparison\\mobile_header_parts\\navbar\\account\\additional\\compare.twig");
    }
}
