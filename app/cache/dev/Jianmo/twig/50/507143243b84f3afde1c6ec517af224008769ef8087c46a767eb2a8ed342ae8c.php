<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_3cb74688281f8c011b4a08899bd757452d6ac442e93227ca5557673a75765c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e86938697078663c85cb30fc30fb954e3bba34476ffba86337dc74b0ee2cd8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86938697078663c85cb30fc30fb954e3bba34476ffba86337dc74b0ee2cd8ae->enter($__internal_e86938697078663c85cb30fc30fb954e3bba34476ffba86337dc74b0ee2cd8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:payment.html.twig"));

        // line 3
        $context["script_controller"] = "system/payment";
        // line 5
        $context["menu"] = "admin_payment";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e86938697078663c85cb30fc30fb954e3bba34476ffba86337dc74b0ee2cd8ae->leave($__internal_e86938697078663c85cb30fc30fb954e3bba34476ffba86337dc74b0ee2cd8ae_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_9680ef33f108c87e8e78f66dee9c608de7f00eb374342a8c9ff9199f2609b546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9680ef33f108c87e8e78f66dee9c608de7f00eb374342a8c9ff9199f2609b546->enter($__internal_9680ef33f108c87e8e78f66dee9c608de7f00eb374342a8c9ff9199f2609b546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付功能"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "enabled", array()));
        echo "
      <div class=\"help-block\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，网站收入将自动到达配置的支付宝、微信支付或网银账号中。"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
    
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"disabled_message\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付关闭时的提示信息"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "disabled_message", array()), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  ";
        // line 33
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:alipay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:wxpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 34)->display($context);
        // line 35
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:heepay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 35)->display($context);
        // line 36
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:quickly.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 36)->display($context);
        // line 37
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:System/Pay:llpay.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 37)->display($context);
        // line 38
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
        
        $__internal_9680ef33f108c87e8e78f66dee9c608de7f00eb374342a8c9ff9199f2609b546->leave($__internal_9680ef33f108c87e8e78f66dee9c608de7f00eb374342a8c9ff9199f2609b546_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  110 => 42,  104 => 38,  101 => 37,  98 => 36,  95 => 35,  92 => 34,  90 => 33,  83 => 29,  77 => 26,  67 => 19,  62 => 17,  56 => 14,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'system/payment' %}

{% set menu = 'admin_payment' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >{{'支付功能'|trans}}</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('enabled', {1:'开启'|trans, 0:'关闭'|trans}, payment.enabled) }}
      <div class=\"help-block\">
        {{ '开启后，网站收入将自动到达配置的支付宝、微信支付或网银账号中。'|trans }}
      </div>
    </div>
  </div>
    
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"disabled_message\">{{'支付关闭时的提示信息'|trans}}</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">{{payment.disabled_message}}</textarea>
    </div>
  </div>

  {% include 'TopxiaAdminBundle:System/Pay:alipay.html.twig'%}
  {% include 'TopxiaAdminBundle:System/Pay:wxpay.html.twig'%}
  {% include 'TopxiaAdminBundle:System/Pay:heepay.html.twig'%}
  {% include 'TopxiaAdminBundle:System/Pay:quickly.html.twig'%}
  {% include 'TopxiaAdminBundle:System/Pay:llpay.html.twig'%}

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>
{% endblock %}";
    }
}
