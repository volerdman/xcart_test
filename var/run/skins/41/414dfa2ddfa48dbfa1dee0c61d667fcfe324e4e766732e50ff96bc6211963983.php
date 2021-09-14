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

/* modules/CDev/ProductAdvisor/parts/info.twig */
class __TwigTemplate_1825d2034686041c04f7f53762089423545e9a272f3d63c6ebc778764040d916 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "<div class=\"product-photo\">
  <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductURL", [], "method"), "html", null, true);
        echo "\"
     class=\"product-thumbnail\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "lazyLoad" => true, "image" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImage", [], "method"), "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getIconWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getIconHeight", [], "method"), "alt" => $this->getAttribute(($context["this"] ?? null), "getIconAlt", [], "method"), "className" => "photo"]]), "html", null, true);
        echo "
  </a>
</div>

<div class=\"recently-viewed-product-details hidden\">
  <div class=\"products recently-viewed-in-popover\">
    <h5><a href=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProductURL", [], "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getName", [], "method"), "html", null, true);
        echo "</a></h5>
    <div class=\"price\">
      ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Price", "allowRange" => true, "product" => $this->getAttribute(($context["this"] ?? null), "product", []), "displayOnlyPrice" => "1"]]), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/ProductAdvisor/parts/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  47 => 14,  38 => 8,  33 => 6,  30 => 5,);
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
 # Products list item
 # @ListChild (list=\"itemsList.product.grid.customer.recently.info\", weight=\"100\")
 #}
<div class=\"product-photo\">
  <a href=\"{{ this.getProductURL() }}\"
     class=\"product-thumbnail\">
    {{ widget('\\\\XLite\\\\View\\\\Image', lazyLoad=true, image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.getIconAlt(), className='photo') }}
  </a>
</div>

<div class=\"recently-viewed-product-details hidden\">
  <div class=\"products recently-viewed-in-popover\">
    <h5><a href=\"{{ this.getProductURL() }}\">{{ this.product.getName() }}</a></h5>
    <div class=\"price\">
      {{ widget('\\\\XLite\\\\View\\\\Price', allowRange=true, product=this.product, displayOnlyPrice='1') }}
    </div>
  </div>
</div>
", "modules/CDev/ProductAdvisor/parts/info.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\CDev\\ProductAdvisor\\parts\\info.twig");
    }
}
