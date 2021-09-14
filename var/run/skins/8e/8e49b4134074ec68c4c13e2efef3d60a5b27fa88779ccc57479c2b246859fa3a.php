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

/* modules/XC/NewsletterSubscriptions/form/parts/form.twig */
class __TwigTemplate_d5004bf8dc1dcfbb251a167145eff49371daff895b88d5c63b0ba775871352be extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        $this->startForm("XLite\\Module\\XC\\NewsletterSubscriptions\\View\\Form\\Subscription", ["formTarget" => "newsletter_subscriptions", "formAction" => "subscribe"]);        // line 8
        echo "    <div class=\"subscription-form-label\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFormLabel", [], "method"), "html", null, true);
        echo "
    </div>
    <div class=\"subscription-form-fields\">
        <div>
            ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Text\\Email", "fieldName" => "newlettersubscription_email", "required" => "true", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enter email address", [], null, "placeholder"]), "maxlength" => "255", "fieldOnly" => $this->getAttribute(($context["this"] ?? null), "isFieldOnly", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Email"])]]), "html", null, true);
        echo "
            ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Subscribe"])]]), "html", null, true);
        echo "
        </div>
    </div>
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  44 => 13,  37 => 9,  34 => 8,  33 => 7,  30 => 6,);
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
 # Subscribe block
 #
 # @ListChild (list=\"NewsletterSubscriptions.footer.form-block\", weight=\"100\")
 #}

{% form 'XLite\\\\Module\\\\XC\\\\NewsletterSubscriptions\\\\View\\\\Form\\\\Subscription' with {formTarget: 'newsletter_subscriptions', formAction: 'subscribe'} %}
    <div class=\"subscription-form-label\">
        {{ this.getFormLabel() }}
    </div>
    <div class=\"subscription-form-fields\">
        <div>
            {{ widget('XLite\\\\View\\\\FormField\\\\Input\\\\Text\\\\Email', fieldName='newlettersubscription_email', required='true', placeholder=t('Enter email address', [], null, 'placeholder'), maxlength='255', fieldOnly=this.isFieldOnly(), label=t('Email')) }}
            {{ widget('\\\\XLite\\\\View\\\\Button\\\\Submit', label=t('Subscribe')) }}
        </div>
    </div>
{% endform %}
", "modules/XC/NewsletterSubscriptions/form/parts/form.twig", "D:\\openserver\\domains\\xcart\\skins\\customer\\modules\\XC\\NewsletterSubscriptions\\form\\parts\\form.twig");
    }
}
