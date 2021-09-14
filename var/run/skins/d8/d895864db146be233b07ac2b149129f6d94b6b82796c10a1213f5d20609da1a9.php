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

/* shopping_cart\body.twig */
class __TwigTemplate_7f4dfb73214c329a05824015b0b2c35fbd2169f50d7eda44218ce798cad70908 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"cart\" class=\"clearfix\">
";
        // line 8
        echo "  <div id=\"shopping-cart\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.children"]]), "html", null, true);
        echo "
  </div>
  <div id=\"cart-right\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.panel"]]), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  36 => 9,  33 => 8,  30 => 4,);
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
 # Shopping cart
 #}
<div id=\"cart\" class=\"clearfix\">
{#  <div id=\"cart-right\">
    <list name=\"cart.panel\" />
  </div>#}
  <div id=\"shopping-cart\">
    {{ widget_list('cart.children') }}
  </div>
  <div id=\"cart-right\">
      {{ widget_list('cart.panel') }}
  </div>
</div>
", "shopping_cart\\body.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\body.twig");
    }
}
