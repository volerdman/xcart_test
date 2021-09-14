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

/* shopping_cart/parts/total.separator.twig */
class __TwigTemplate_6d1ac8ba711cd90a9b2a09251a0656c913ef388e5f235968e087a36227cbb1d8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"separator\"></li>
";
    }

    public function getTemplateName()
    {
        return "shopping_cart/parts/total.separator.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,);
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
 # Shopping cart subtotal
 #
 # @ListChild (list=\"cart.panel.totals\", weight=\"25\")
 #}
<li class=\"separator\"></li>
", "shopping_cart/parts/total.separator.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\shopping_cart\\parts\\total.separator.twig");
    }
}
