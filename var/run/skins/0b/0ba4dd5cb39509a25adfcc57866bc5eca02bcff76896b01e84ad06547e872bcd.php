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

/* shopping_cart/parts/button.continue.twig */
class __TwigTemplate_7983f4cf22eb1a4ebc11a513399532c7e9e1cd51487a821122a7b8959978111a extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\ContinueShopping"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/button.continue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  30 => 7,);
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
 # Clear bag button
 #
 # @ListChild (list=\"cart.panel\", weight=\"5\")
 # @ListChild (list=\"cart.children\", weight=\"10\")
 #}

{{ widget('XLite\\\\View\\\\Button\\\\ContinueShopping') }}
", "shopping_cart/parts/button.continue.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\shopping_cart\\parts\\button.continue.twig");
    }
}
