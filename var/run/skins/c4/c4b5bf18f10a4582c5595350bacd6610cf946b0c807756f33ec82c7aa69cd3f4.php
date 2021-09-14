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

/* product/details/parts/common.info.buttons.cart-buttons.twig */
class __TwigTemplate_4ee710fc7e0afe60c3a3a681a8e521d4cd71cdc1df9a2b82b2e5f26fce6a56d1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"buttons-row\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart-buttons", "type" => "nested"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.info.buttons.cart-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 9,);
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
 # Product details buttons block
 #
 # @ListChild (list=\"product.details.page.info.form.buttons\", weight=\"10\")
 # @ListChild (list=\"product.details.page.info.form.buttons-added\", weight=\"10\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons\", weight=\"20\")
 # @ListChild (list=\"product.details.quicklook.info.form.buttons-added\", weight=\"20\")
 #}

<div class=\"buttons-row\">
  {{ widget_list('cart-buttons', type='nested') }}
</div>
", "product/details/parts/common.info.buttons.cart-buttons.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\details\\parts\\common.info.buttons.cart-buttons.twig");
    }
}
