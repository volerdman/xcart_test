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

/* popup/backstock_status_change_notification/body.twig */
class __TwigTemplate_dc3134aeda940e45610112e40ffc37f1b185f1519609de86f3fa1f156e324160 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"backstock-status-change-notification\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "backstock_status_change_notification.before"]]), "html", null, true);
        echo "

  <div class=\"message\">
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["The Backorder status will be reset for the items. The stock quantity of the backorder items will not change. Adjust it manually if necessary."]);
        echo "
  </div>

  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "backstock_status_change_notification.after"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "popup/backstock_status_change_notification/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  40 => 9,  34 => 6,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "popup/backstock_status_change_notification/body.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\popup\\backstock_status_change_notification\\body.twig");
    }
}
