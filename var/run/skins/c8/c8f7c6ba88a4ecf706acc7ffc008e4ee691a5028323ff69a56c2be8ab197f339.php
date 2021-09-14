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

/* product/details/parts/common.loupe.twig */
class __TwigTemplate_81eb652c515291d3a29aa8737026f03308db4fa0e5365efd559395b14ff0018b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isLoupeVisible", [], "method")) {
            // line 8
            echo "  <a href=\"javascript:void(0);\" class=\"loupe\">
    ";
            // line 9
            echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/zoom.svg"], "method");
            echo "
  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.loupe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  33 => 7,  30 => 6,);
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
 # Image loupe
 #
 # @ListChild (list=\"product.details.page.image\", weight=\"15\")
 #}

{% if this.isLoupeVisible() %}
  <a href=\"javascript:void(0);\" class=\"loupe\">
    {{ this.getSVGImage('images/zoom.svg')|raw }}
  </a>
{% endif %}
", "product/details/parts/common.loupe.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\product\\details\\parts\\common.loupe.twig");
    }
}
