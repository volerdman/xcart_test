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

/* button/remove.twig */
class __TwigTemplate_b44bcca4e9ee524f0907d2ac2ce40be6b4b31ab693cb30ca4b404450ff160bb8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"remove-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStyle", [], "method"), "html", null, true);
        echo "\">
  <button type=\"button\" class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStyle", [], "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]), "html", null, true);
        echo "\" tabindex=\"-1\">
    ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isCrossIcon", [], "method")) {
            // line 7
            echo "      ";
            echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "images/close.svg", "common"]);
            echo "
    ";
        } else {
            // line 9
            echo "      <i class=\"fa fa-trash-o icon\"></i>
    ";
        }
        // line 11
        echo "  </button>
  <input type=\"checkbox\" name=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" value=\"1\" tabindex=\"-1\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "button/remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  53 => 11,  49 => 9,  43 => 7,  41 => 6,  35 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "button/remove.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\button\\remove.twig");
    }
}
