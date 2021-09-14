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

/* product/details/parts/common.product-title.twig */
class __TwigTemplate_11df2b85dfce3bba7acdfe2b0036f46969c579369f647cfffd492739e9389628 extends \XLite\Core\Templating\Twig\Template
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
        echo "<h1 class=\"fn title\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "name", []), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.product-title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,);
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
 # Product details title main block
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"10\")
 # @ListChild (list=\"product.details.quicklook.info\", weight=\"10\")
 #}
<h1 class=\"fn title\">{{ this.product.name }}</h1>
", "product/details/parts/common.product-title.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\details\\parts\\common.product-title.twig");
    }
}
