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

/* layout/footer/main.footer.contacts.twig */
class __TwigTemplate_6117303e620a4ef5525b564bd21aec1353ab17cbcc8c178aee7f6c0949c9ae0c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"footer_contacts\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\Contacts"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/main.footer.contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,);
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
 # Footer
 #
 # @ListChild (list=\"layout.main.footer\", weight=\"50\")
 #}

<div class=\"footer_contacts\">
    {{ widget('XLite\\\\Module\\\\XC\\\\CrispWhiteSkin\\\\View\\\\Contacts') }}
</div>
", "layout/footer/main.footer.contacts.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\layout\\footer\\main.footer.contacts.twig");
    }
}
