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

/* shopping_cart/parts/item.image.twig */
class __TwigTemplate_1603957167d1c906274d10a917b43bacdb23f83645d45d1999d72f2c3c7d48fe extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "hasImage", [], "method")) {
            // line 7
            echo "  <td class=\"item-thumbnail\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getURL", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getImage", [], "method"), "alt" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getName", [], "method"), "maxWidth" => "60", "maxHeight" => "60", "centerImage" => "0"]]), "html", null, true);
            echo "</a></td>
";
        }
        // line 9
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "hasImage", [], "method")) {
            // line 10
            echo "  <td class=\"item-thumbnail\">&nbsp;</td>
";
        }
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/item.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  40 => 9,  32 => 7,  30 => 6,);
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
 # Shopping cart item : thumbnail
 #
 # @ListChild (list=\"cart.item\", weight=\"20\")
 #}
{% if this.item.hasImage() %}
  <td class=\"item-thumbnail\"><a href=\"{{ this.item.getURL() }}\">{{ widget('\\\\XLite\\\\View\\\\Image', image=this.item.getImage(), alt=this.item.getName(), maxWidth='60', maxHeight='60', centerImage='0') }}</a></td>
{% endif %}
{% if not this.item.hasImage() %}
  <td class=\"item-thumbnail\">&nbsp;</td>
{% endif %}
", "shopping_cart/parts/item.image.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\shopping_cart\\parts\\item.image.twig");
    }
}
