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

/* address/wrapper.twig */
class __TwigTemplate_987550d224e9bf59a6dad7d3d881cc0cf23d1de72beb9ebab4dfba69b59f6cfa extends \XLite\Core\Templating\Twig\Template
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
<div class=\"address-box\">

  ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "address", []), "getAddressId", [], "method")) {
            // line 8
            echo "    <table width=\"100%\">
  
      <tr>
  
        <td class=\"address-text\">
          ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("address/text/body.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 13
            $this->loadTemplate("address/text/body.twig", "address/wrapper.twig", 13)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 14
            echo "        </td>
  
        <td valign=\"top\" align=\"right\">
          ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\DeleteAddress", "addressId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "address", []), "getAddressId", [], "method")]]), "html", null, true);
            echo "
        </td>
  
      </tr>
  
      <tr>
        <td colspan=\"2\">&nbsp;</td>
      </tr>
  
      <tr>
  
        <td>
          ";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\ModifyAddress", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Change"]), "addressId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "address", []), "getAddressId", [], "method")]]), "html", null, true);
            echo "
        </td>
  
        <td align=\"center\" class=\"address-type\">
          ";
            // line 33
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "address", []), "getIsBilling", [], "method")) {
                // line 34
                echo "            <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/icon_billing.png"]), "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This address was used as a billing address during the recent purchase"]), "html", null, true);
                echo "\" class=\"address-type-icon\" alt=\"\" />
          ";
            }
            // line 36
            echo "          ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "address", []), "getIsShipping", [], "method")) {
                // line 37
                echo "            <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/icon_shipping.png"]), "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This address was used as a shipping address during the recent purchase"]), "html", null, true);
                echo "\" class=\"address-type-icon\" alt=\"\" />
          ";
            }
            // line 39
            echo "        </td>
  
      </tr>
  
    </table>
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "address", []), "getAddressId", [], "method")) {
            // line 47
            echo "    <div class=\"address-center-button\">
      ";
            // line 48
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\AddAddress", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add new address"]), "style" => "main-button", "profileId" => $this->getAttribute(($context["this"] ?? null), "profile_id", [])]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 51
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "address/wrapper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  118 => 48,  115 => 47,  113 => 46,  110 => 45,  102 => 39,  94 => 37,  91 => 36,  83 => 34,  81 => 33,  74 => 29,  59 => 17,  54 => 14,  49 => 13,  37 => 8,  35 => 7,  30 => 4,);
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
 # ____file_title____
 #}

<div class=\"address-box\">

  {% if this.address.getAddressId() %}
    <table width=\"100%\">
  
      <tr>
  
        <td class=\"address-text\">
          {% include 'address/text/body.twig' %}
        </td>
  
        <td valign=\"top\" align=\"right\">
          {{ widget('\\\\XLite\\\\View\\\\Button\\\\DeleteAddress', addressId=this.address.getAddressId()) }}
        </td>
  
      </tr>
  
      <tr>
        <td colspan=\"2\">&nbsp;</td>
      </tr>
  
      <tr>
  
        <td>
          {{ widget('\\\\XLite\\\\View\\\\Button\\\\ModifyAddress', label=t('Change'), addressId=this.address.getAddressId()) }}
        </td>
  
        <td align=\"center\" class=\"address-type\">
          {% if this.address.getIsBilling() %}
            <img src=\"{{ asset('images/icon_billing.png') }}\" title=\"{{ t('This address was used as a billing address during the recent purchase') }}\" class=\"address-type-icon\" alt=\"\" />
          {% endif %}
          {% if this.address.getIsShipping() %}
            <img src=\"{{ asset('images/icon_shipping.png') }}\" title=\"{{ t('This address was used as a shipping address during the recent purchase') }}\" class=\"address-type-icon\" alt=\"\" />
          {% endif %}
        </td>
  
      </tr>
  
    </table>
  {% endif %}

  {% if not this.address.getAddressId() %}
    <div class=\"address-center-button\">
      {{ widget('\\\\XLite\\\\View\\\\Button\\\\AddAddress', label=t('Add new address'), style='main-button', profileId=this.profile_id) }}
    </div>
  {% endif %}

</div>
", "address/wrapper.twig", "D:\\openserver\\domains\\xcart\\skins\\admin\\address\\wrapper.twig");
    }
}
