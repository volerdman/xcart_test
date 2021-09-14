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

/* product/details/parts/common.notify-on-price-drop.twig */
class __TwigTemplate_9779e7f24d126ab8842743433eb11b919fc9da8520f9b5a750581f05293ab932 extends \XLite\Core\Templating\Twig\Template
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
    }

    public function getTemplateName()
    {
        return "product/details/parts/common.notify-on-price-drop.twig";
    }

    public function getDebugInfo()
    {
        return array ();
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
 # \"Notify when price drops\" link
 #
 # @ListChild (list=\"product.details.page.info\", weight=\"42\")
 #}
", "product/details/parts/common.notify-on-price-drop.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\product\\details\\parts\\common.notify-on-price-drop.twig");
    }
}
