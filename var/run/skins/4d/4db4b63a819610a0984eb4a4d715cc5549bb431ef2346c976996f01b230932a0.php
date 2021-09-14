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

/* shopping_cart/parts/item.info.twig */
class __TwigTemplate_8215bced66c16ca8f27d05ddcbb4ab701569dc5f75609142e4402a547fb41ee9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-info\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.item.info", "item" => $this->getAttribute(($context["this"] ?? null), "item", [])]]), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.info.twig";
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
 # Shopping cart item : info
 #
 # @ListChild (list=\"cart.item\", weight=\"30\")
 #}
<td class=\"item-info\">
  {{ widget_list('cart.item.info', item=this.item) }}
</td>
", "shopping_cart/parts/item.info.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\item.info.twig");
    }
}
