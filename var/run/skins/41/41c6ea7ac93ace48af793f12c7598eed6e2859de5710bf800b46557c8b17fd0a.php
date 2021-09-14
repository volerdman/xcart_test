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

/* shopping_cart/parts/item.remove.twig */
class __TwigTemplate_7f163e399d2c6d81e8fdad5cfbacd3acac336ac1c2c40698fa6c252f643448e1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-remove delete-from-list\">
  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Delete", ["item" => $this->getAttribute(($context["this"] ?? null), "item", [])]);        // line 8
        echo "  \t<a onclick=\"return jQuery(this).closest('form').submit();\" class=\"remove\"></a>
  ";
        $this->endForm();        // line 10
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  34 => 8,  33 => 7,  30 => 6,);
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
 # Shopping cart item : main
 #
 # @ListChild (list=\"cart.item\", weight=\"100\")
 #}
<td class=\"item-remove delete-from-list\">
  {% form '\\\\XLite\\\\View\\\\Form\\\\Cart\\\\Item\\\\Delete' with {item: this.item} %}
  \t<a onclick=\"return jQuery(this).closest('form').submit();\" class=\"remove\"></a>
  {% endform %}
</td>
", "shopping_cart/parts/item.remove.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\shopping_cart\\parts\\item.remove.twig");
    }
}
