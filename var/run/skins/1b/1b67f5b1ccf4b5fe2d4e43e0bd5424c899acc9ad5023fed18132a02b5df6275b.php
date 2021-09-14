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

/* layout/content/welcome.twig */
class __TwigTemplate_bb4204de481823cdcecfd8cf7271268d663fdf49566d55453b18caa324f03daa extends \XLite\Core\Templating\Twig\Template
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
    }

    public function getTemplateName()
    {
        return "layout/content/welcome.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,);
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
 # Welcome page
 #}

{#<div class=\"head-h3\" IF=\"!disable_head\" align=\"center\" class=\"WelcomeHeader\">{t(#Welcome to X-Cart 5#)}</div>#}
", "layout/content/welcome.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\layout\\content\\welcome.twig");
    }
}
