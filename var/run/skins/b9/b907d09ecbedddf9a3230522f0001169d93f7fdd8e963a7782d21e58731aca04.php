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

/* layout/header/header.bar.links.logged.logout.twig */
class __TwigTemplate_54e15aa1f184dce384a1073a602289fae877ca5ab40eacb9217a25833af413d1 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"separator\"><hr /></li>
<li class=\"account-link-logoff\">
\t<a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "login", "logoff"]), "html", null, true);
        echo "\" class=\"log-off icon-logout\">
\t\t<span>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Log out"]), "html", null, true);
        echo "</span>
\t</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "layout/header/header.bar.links.logged.logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  30 => 6,);
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
 # Log out link
 #
 # @ListChild (list=\"layout.header.bar.links.logged\", weight=\"500\")
 #}

<li class=\"separator\"><hr /></li>
<li class=\"account-link-logoff\">
\t<a href=\"{{ url('login', 'logoff') }}\" class=\"log-off icon-logout\">
\t\t<span>{{ t('Log out') }}</span>
\t</a>
</li>
", "layout/header/header.bar.links.logged.logout.twig", "D:\\openserver\\domains\\xcart\\skins\\crisp_white\\customer\\layout\\header\\header.bar.links.logged.logout.twig");
    }
}
