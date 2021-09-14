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

/* product/details/parts/common.qty.twig */
class __TwigTemplate_d1d6cba35ba3b87104b6083293a711e67c6d7fccdf10e46ad2daa2913aef28c8 extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo "
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\Details\\Customer\\Quantity", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.qty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  30 => 9,);
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
 # Quantity input box
 #
 # @ListChild (list=\"product.details.page.info.form.buttons.cart-buttons\", weight=\"10\")
 # @ListChild (list=\"product.details.page.info.form.buttons-added.cart-buttons\", weight=\"10\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons.cart-buttons\", weight=\"10\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons-added.cart-buttons\", weight=\"10\")
 #}

{{ widget('\\\\XLite\\\\View\\\\Product\\\\Details\\\\Customer\\\\Quantity', product=this.product) }}
", "product/details/parts/common.qty.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\details\\parts\\common.qty.twig");
    }
}
