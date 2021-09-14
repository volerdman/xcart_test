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

/* modules/XC/Onboarding/mini_wizard_status/body.twig */
class __TwigTemplate_39188dd03b328b1c3357da88e73ec016ebbb69e047a905fdb3d5527693f0bc2b extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"onboarding-wizard-mini-informer\" id=\"wizard-mini-status\">
  ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => "", "location" => $this->getAttribute(($context["this"] ?? null), "getWizardUrl", [], "method"), "attributes" => ["data-progress" => $this->getAttribute(($context["this"] ?? null), "getCurrentProgress", [], "method")]]]), "html", null, true);
        echo "
  <div class=\"progress-circle\" data-value=\"";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($this->getAttribute(($context["this"] ?? null), "getCurrentProgress", [], "method") / 100.0), "html", null, true);
        echo "\"></div>
  <div class=\"progress-status\">
    <div class=\"status-message\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStatusMessage", [], "method"), "html", null, true);
        echo "</div>
    <span>";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method"), "html", null, true);
        echo "</span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/mini_wizard_status/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  42 => 5,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/XC/Onboarding/mini_wizard_status/body.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\modules\\XC\\Onboarding\\mini_wizard_status\\body.twig");
    }
}
