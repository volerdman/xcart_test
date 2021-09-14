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

/* form_field/edit_on_click/view.twig */
class __TwigTemplate_810900b1229ac56bfba587467d9cbb1b7d6530b94164c80bf43ab7c01d1534cf extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isEscapeValue", [], "method")) {
            // line 5
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getViewValue", [], "method"), "html", null, true);
            echo "
";
        } else {
            // line 7
            echo "  ";
            echo $this->getAttribute(($context["this"] ?? null), "getViewValue", [], "method");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/edit_on_click/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form_field/edit_on_click/view.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\form_field\\edit_on_click\\view.twig");
    }
}
