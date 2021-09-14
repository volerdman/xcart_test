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

/* shopping_cart/parts/total.button.twig */
class __TwigTemplate_c8f3a32ffe8a348ef1e9de406240d5ac9fad581dcda86f0e60835b3f7ac744df extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"button main-button\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\GoToCheckout"]]), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/total.button.twig";
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
 # Shopping cart Go to checkout button
 #
 # @ListChild (list=\"cart.panel.totals\", weight=\"40\")
 #}
<li class=\"button main-button\">
  {{ widget('\\\\XLite\\\\View\\\\Button\\\\GoToCheckout') }}
</li>
", "shopping_cart/parts/total.button.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\total.button.twig");
    }
}
