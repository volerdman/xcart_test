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

/* location/home.twig */
class __TwigTemplate_a51645078f139fe11ba5e8bd2d0b257e99a8e85609c3fe86a95d338061c606b6 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"location-node\">
    <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
        echo "\" class=\"location-title home-link\">";
        echo $this->getAttribute(($context["this"] ?? null), "getName", [], "method");
        echo "</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "location/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 4,);
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
 # Home location node
 #}

<li class=\"location-node\">
    <a href=\"{{ this.getLink() }}\" class=\"location-title home-link\">{{ this.getName()|raw }}</a>
</li>
", "location/home.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\location\\home.twig");
    }
}
