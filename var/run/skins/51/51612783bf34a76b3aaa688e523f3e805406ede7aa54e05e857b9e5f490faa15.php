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

/* modules/XC/NewsletterSubscriptions/form/parts/success.twig */
class __TwigTemplate_4fbb303a17d41bd662c45a327f5500ac372eeb71e8bcbe51e02251f4926afd11 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSuccessMessage", [], "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/parts/success.twig";
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
 # Subscribe block
 #
 # @ListChild (list=\"NewsletterSubscriptions.footer.success-block\", weight=\"100\")
 #}

{{ this.getSuccessMessage() }}
", "modules/XC/NewsletterSubscriptions/form/parts/success.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\XC\\NewsletterSubscriptions\\form\\parts\\success.twig");
    }
}
