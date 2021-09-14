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

/* modules/XC/CustomProductTabs/tab.twig */
class __TwigTemplate_6567e6e2951a0bab768fc716ac16761392a53f3f6e9317e1d7281ef11e15e733 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-description\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "tab", []), "content", []);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/CustomProductTabs/tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  30 => 4,);
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
 # \"Tabs\" tab
 #}

<div class=\"product-description\">{{ this.tab.content|raw }}</div>", "modules/XC/CustomProductTabs/tab.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\XC\\CustomProductTabs\\tab.twig");
    }
}
