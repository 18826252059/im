<?php

/* TopxiaAdminBundle:System:ip-blacklist.html.twig */
class __TwigTemplate_c3696c49d4481cb72d92d08514d252768e110aa7b9628d40799e8b0c26db0ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:ip-blacklist.html.twig", 1);
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
        $__internal_3924e48d057120833300944ee2ab2e4ae8227052e1e699b78e96e13883f7e023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3924e48d057120833300944ee2ab2e4ae8227052e1e699b78e96e13883f7e023->enter($__internal_3924e48d057120833300944ee2ab2e4ae8227052e1e699b78e96e13883f7e023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:ip-blacklist.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_ip_blacklist_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3924e48d057120833300944ee2ab2e4ae8227052e1e699b78e96e13883f7e023->leave($__internal_3924e48d057120833300944ee2ab2e4ae8227052e1e699b78e96e13883f7e023_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_2a763116be43005883ada63f7e8f09251477a14e983c4b5e55a816301dda439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a763116be43005883ada63f7e8f09251477a14e983c4b5e55a816301dda439a->enter($__internal_2a763116be43005883ada63f7e8f09251477a14e983c4b5e55a816301dda439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\">
  <fieldset>
  <div class=\"form-group\">

    <div class=\"col-md-2 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP黑名单"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-10\">
\t  <textarea id=\"blackListIps\" name=\"blackListIps\" rows=\"8\" class=\"form-control\">";
        // line 17
        if ((isset($context["blackListIps"]) ? $context["blackListIps"] : $this->getContext($context, "blackListIps"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blackListIps"]) ? $context["blackListIps"] : $this->getContext($context, "blackListIps")), "ips", array()), "html", null, true);
        }
        echo "</textarea>
\t  <div class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("一行一个IP，被加入黑名单的IP将被禁止访问！可使用通配符，例如：202.101.20.*。"), "html", null, true);
        echo "</div>
\t</div>

    ";
        // line 30
        echo "    
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-10\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        </div>
      </div>
  </fieldset>
</form>

";
        
        $__internal_2a763116be43005883ada63f7e8f09251477a14e983c4b5e55a816301dda439a->leave($__internal_2a763116be43005883ada63f7e8f09251477a14e983c4b5e55a816301dda439a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:ip-blacklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  79 => 33,  74 => 30,  68 => 18,  62 => 17,  56 => 14,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_ip_blacklist_manage' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\">
  <fieldset>
  <div class=\"form-group\">

    <div class=\"col-md-2 control-label\">
      <label >{{'IP黑名单'|trans}}</label>
    </div>
    <div class=\"controls col-md-10\">
\t  <textarea id=\"blackListIps\" name=\"blackListIps\" rows=\"8\" class=\"form-control\">{% if blackListIps  %}{{blackListIps.ips}}{% endif %}</textarea>
\t  <div class=\"help-block\">{{'一行一个IP，被加入黑名单的IP将被禁止访问！可使用通配符，例如：202.101.20.*。'|trans}}</div>
\t</div>

    {#<div class=\"col-md-2 control-label\">
          <label >{{'IP白名单'|trans}}</label>
        </div>
        <div class=\"controls col-md-10\">
          <textarea id=\"whiteListIps\" name=\"whiteListIps\" rows=\"8\" class=\"form-control\">{% if whiteListIps  %}{{whiteListIps.ips}}{% endif %}</textarea>
          <div class=\"help-block\">{{'一行一个IP，只有列表中的IP地址允许访问系统！可使用通配符，例如：202.101.20.*'|trans}}</div>
          <div class=\"alert alert-info\">{{'警告：如果设置了白名单，必须将本机IP包含在内，否则将导致管理员无法访问系统！'|trans}}</div>
    
        </div>#}
    
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-10\">
          <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        </div>
      </div>
  </fieldset>
</form>

{% endblock %}";
    }
}
