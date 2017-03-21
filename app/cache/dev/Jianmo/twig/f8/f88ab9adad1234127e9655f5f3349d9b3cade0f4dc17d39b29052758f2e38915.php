<?php

/* TopxiaAdminBundle:Article:setting.html.twig */
class __TwigTemplate_aa63ba95088752a9a28582da4912ee8f03fb64f80e40e2cee1365ed3fcd19eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:setting.html.twig", 1);
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
        $__internal_6eb708b694a4f32525251a6ae9229c2a8de0a50b2a214a42d09a97836611216c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb708b694a4f32525251a6ae9229c2a8de0a50b2a214a42d09a97836611216c->enter($__internal_6eb708b694a4f32525251a6ae9229c2a8de0a50b2a214a42d09a97836611216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Article:setting.html.twig"));

        // line 3
        $context["menu"] = "admin_article_setting";
        // line 4
        $context["script_controller"] = "article/setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb708b694a4f32525251a6ae9229c2a8de0a50b2a214a42d09a97836611216c->leave($__internal_6eb708b694a4f32525251a6ae9229c2a8de0a50b2a214a42d09a97836611216c_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_8c9208a3329b451c9592cc00da7b978d8c86201d4b5fb21b1ddbfcc997b4d3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9208a3329b451c9592cc00da7b978d8c86201d4b5fb21b1ddbfcc997b4d3e9->enter($__internal_8c9208a3329b451c9592cc00da7b978d8c86201d4b5fb21b1ddbfcc997b4d3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"article-form\" method=\"post\">
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("频道名称"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSetting"]) ? $context["articleSetting"] : $this->getContext($context, "articleSetting")), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"pageNums\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("列表每页资讯数"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"pageNums\" name=\"pageNums\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSetting"]) ? $context["articleSetting"] : $this->getContext($context, "articleSetting")), "pageNums", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
        
        $__internal_8c9208a3329b451c9592cc00da7b978d8c86201d4b5fb21b1ddbfcc997b4d3e9->leave($__internal_8c9208a3329b451c9592cc00da7b978d8c86201d4b5fb21b1ddbfcc997b4d3e9_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  89 => 34,  79 => 27,  73 => 24,  64 => 18,  58 => 15,  49 => 9,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_article_setting' %}
{% set script_controller = 'article/setting' %}

{% block main %}


{{ web_macro.flash_messages() }}

  <form class=\"form-horizontal\" id=\"article-form\" method=\"post\">
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">{{'频道名称'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{ articleSetting.name }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"pageNums\">{{'列表每页资讯数'|trans}}</label> 
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"pageNums\" name=\"pageNums\" class=\"form-control\" value=\"{{ articleSetting.pageNums }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  </form>

{% endblock %}";
    }
}
