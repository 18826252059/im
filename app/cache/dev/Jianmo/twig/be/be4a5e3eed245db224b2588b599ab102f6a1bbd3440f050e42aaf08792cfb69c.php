<?php

/* TopxiaWebBundle:Default:message.html.twig */
class __TwigTemplate_0cd36fb28448ac4dc3f9d703ccc9cd0e1e97a2cf01f1388272d900fb782c86e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e09898d13ead86660c82cf713badfc9d6d7037f0adfe10ac224c1b76450e655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e09898d13ead86660c82cf713badfc9d6d7037f0adfe10ac224c1b76450e655->enter($__internal_7e09898d13ead86660c82cf713badfc9d6d7037f0adfe10ac224c1b76450e655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:message.html.twig"));

        // line 3
        $context["typeTitles"] = array("info" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示信息"), "warning" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("警告信息"), "error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误提示"));
        // line 5
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), $this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : $this->getContext($context, "typeTitles")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"))) : ($this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : $this->getContext($context, "typeTitles")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array")));
        // line 9
        $context["script_controller"] = "default/message";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e09898d13ead86660c82cf713badfc9d6d7037f0adfe10ac224c1b76450e655->leave($__internal_7e09898d13ead86660c82cf713badfc9d6d7037f0adfe10ac224c1b76450e655_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2684cc9c21f30ab11cc0cef20cb93aac0071eb8e786f378248d30f2947f6dc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2684cc9c21f30ab11cc0cef20cb93aac0071eb8e786f378248d30f2947f6dc5b->enter($__internal_2684cc9c21f30ab11cc0cef20cb93aac0071eb8e786f378248d30f2947f6dc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_2684cc9c21f30ab11cc0cef20cb93aac0071eb8e786f378248d30f2947f6dc5b->leave($__internal_2684cc9c21f30ab11cc0cef20cb93aac0071eb8e786f378248d30f2947f6dc5b_prof);

    }

    // line 8
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_26a44d9a6d3e6b3ea93018cd647ee6fb6655f87a1e43953ef425e824f0469426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a44d9a6d3e6b3ea93018cd647ee6fb6655f87a1e43953ef425e824f0469426->enter($__internal_26a44d9a6d3e6b3ea93018cd647ee6fb6655f87a1e43953ef425e824f0469426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        echo ((array_key_exists("script", $context)) ? (_twig_default_filter((isset($context["script"]) ? $context["script"] : $this->getContext($context, "script")), "")) : (""));
        
        $__internal_26a44d9a6d3e6b3ea93018cd647ee6fb6655f87a1e43953ef425e824f0469426->leave($__internal_26a44d9a6d3e6b3ea93018cd647ee6fb6655f87a1e43953ef425e824f0469426_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d722490d601db739266858504acb1c0ffd2b7869d9f6d7f060af8c256108c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d722490d601db739266858504acb1c0ffd2b7869d9f6d7f060af8c256108c30->enter($__internal_7d722490d601db739266858504acb1c0ffd2b7869d9f6d7f060af8c256108c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["goto"]) ? $context["goto"] : $this->getContext($context, "goto")), "html", null, true);
        echo "\" data-duration=";
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"page-message-body\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "")) : (""))), "html", null, true);
        echo "</div>
  </div>
</div>
";
        
        $__internal_7d722490d601db739266858504acb1c0ffd2b7869d9f6d7f060af8c256108c30->leave($__internal_7d722490d601db739266858504acb1c0ffd2b7869d9f6d7f060af8c256108c30_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  86 => 16,  78 => 13,  75 => 12,  69 => 11,  57 => 8,  43 => 7,  36 => 1,  34 => 9,  32 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% set typeTitles = {info:'提示信息'|trans, warning:'警告信息'|trans, error: '错误提示'|trans} %}

{% set title = title|default(typeTitles[type]) %}

{% block title %}{{ title|trans }} - {{ parent() }}{% endblock %}
{% block head_scripts %}{{ script|default('')|raw }}{% endblock %}
{% set script_controller = 'default/message' %}

{% block content %}

<div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"{{ goto }}\" data-duration={{ duration }}>
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">{{ title|trans }}</h2>
    </div>
    <div class=\"page-message-body\">{{ message|default('')|trans }}</div>
  </div>
</div>
{% endblock %}";
    }
}
