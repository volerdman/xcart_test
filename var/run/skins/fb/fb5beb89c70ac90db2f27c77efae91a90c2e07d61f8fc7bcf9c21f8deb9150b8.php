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

/* back_to_top/body.twig */
class __TwigTemplate_8ee73c758188c99c2f1c49c03dfc58613b326e5b8a32555038977237462d9da3 extends \XLite\Core\Templating\Twig\Template
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
<a href=\"#0\" class=\"back-to-top\" title=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Back to top"]), "html", null, true);
        echo "\">
  <i class=\"custom-icon\" aria-hidden=\"true\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "back_to_top/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  30 => 4,);
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
 # BackToTop button template
 #}

<a href=\"#0\" class=\"back-to-top\" title=\"{{ t('Back to top') }}\">
  <i class=\"custom-icon\" aria-hidden=\"true\"></i>
</a>
", "back_to_top/body.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\back_to_top\\body.twig");
    }
}
