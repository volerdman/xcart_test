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

/* modules/XC/VendorMessages/top_link.twig */
class __TwigTemplate_7e18e514ced52f6a93ba8f65244071f14f2977b43bf824693828d3fa19eb62a9 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<li class=\"messages-count\">
    <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMessagesUrl", [], "method"), "html", null, true);
        echo "\" class=\"icon-altmail\">
      <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Messages"]), "html", null, true);
        echo "</span>
    </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/VendorMessages/top_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 4,);
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
 # Top link
 #}

<li class=\"messages-count\">
    <a href=\"{{ this.getMessagesUrl() }}\" class=\"icon-altmail\">
      <span>{{ t('Messages') }}</span>
    </a>
</li>
", "modules/XC/VendorMessages/top_link.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\modules\\XC\\VendorMessages\\top_link.twig");
    }
}
