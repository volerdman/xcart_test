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

/* product/search/simple-search-parts/simple-box.twig */
class __TwigTemplate_bc76a77b4d8ccd74c775bf86e2e0a6303cc68264cf46f074f855603129cb316a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"simple-search-box\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.simple-search-form.simple-box.elements"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/search/simple-search-parts/simple-box.twig";
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
 # Simple box part inside the upper form for products search
 #
 # @ListChild (list=\"product.simple-search-form.simple-box\", weight=\"10\")
 #}

<div class=\"simple-search-box\">
  {{ widget_list('product.simple-search-form.simple-box.elements') }}
</div>
", "product/search/simple-search-parts/simple-box.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\search\\simple-search-parts\\simple-box.twig");
    }
}
