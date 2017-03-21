<?php

/* TopxiaWebBundle:User:courses.html.twig */
class __TwigTemplate_73457e326477e35c02838e50c787cd26cd7baf1801389ff90f5629e520f13f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:User:layout.html.twig", "TopxiaWebBundle:User:courses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc527f66c7b20c0a3a1d5511491882e36f3d2d8eb119dbdd5d79e6f9b7f26940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc527f66c7b20c0a3a1d5511491882e36f3d2d8eb119dbdd5d79e6f9b7f26940->enter($__internal_fc527f66c7b20c0a3a1d5511491882e36f3d2d8eb119dbdd5d79e6f9b7f26940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:User:courses.html.twig"));

        // line 5
        $context["pageNav"] = (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc527f66c7b20c0a3a1d5511491882e36f3d2d8eb119dbdd5d79e6f9b7f26940->leave($__internal_fc527f66c7b20c0a3a1d5511491882e36f3d2d8eb119dbdd5d79e6f9b7f26940_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60cdfc5377332025c9086c228e6f339a0abc2f18426bcf7d7a5f9113dec630d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cdfc5377332025c9086c228e6f339a0abc2f18426bcf7d7a5f9113dec630d9->enter($__internal_60cdfc5377332025c9086c228e6f339a0abc2f18426bcf7d7a5f9113dec630d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_60cdfc5377332025c9086c228e6f339a0abc2f18426bcf7d7a5f9113dec630d9->leave($__internal_60cdfc5377332025c9086c228e6f339a0abc2f18426bcf7d7a5f9113dec630d9_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_bd9f24d64756a24bdb50ba884b14f115250473553be901bfef85db391a99d918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9f24d64756a24bdb50ba884b14f115250473553be901bfef85db391a99d918->enter($__internal_bd9f24d64756a24bdb50ba884b14f115250473553be901bfef85db391a99d918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  ";
        // line 9
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), "view" => "list")));
            echo "
    <nav class=\"text-center\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo "
    </nav>
  ";
        } else {
            // line 15
            echo "    ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teach")) {
                // line 16
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无在教的课程"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 17
(isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learn")) {
                // line 18
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无在学的课程"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 19
(isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "favorited")) {
                // line 20
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无收藏的课程"), "html", null, true);
                echo "</div>
    ";
            }
            // line 22
            echo "  ";
        }
        // line 23
        echo "
";
        
        $__internal_bd9f24d64756a24bdb50ba884b14f115250473553be901bfef85db391a99d918->leave($__internal_bd9f24d64756a24bdb50ba884b14f115250473553be901bfef85db391a99d918_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  96 => 22,  90 => 20,  88 => 19,  83 => 18,  81 => 17,  76 => 16,  73 => 15,  67 => 12,  61 => 10,  59 => 9,  56 => 8,  50 => 7,  38 => 3,  31 => 1,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:User:layout.html.twig' %}

{% block title %}{{ parent() }}{% endblock %}

{% set pageNav = type %}

{% block main %}

  {% if courses %}
    {{ render(controller('TopxiaWebBundle:Course:coursesBlock', {courses:courses, view: 'list'})) }}
    <nav class=\"text-center\">
      {{ web_macro.paginator(paginator) }}
    </nav>
  {% else %}
    {% if pageNav == 'teach' %}
      <div class=\"empty\">{{'无在教的课程'|trans}}</div>
    {% elseif pageNav == 'learn' %}
      <div class=\"empty\">{{'无在学的课程'|trans}}</div>
    {% elseif pageNav == 'favorited' %}
      <div class=\"empty\">{{'无收藏的课程'|trans}}</div>
    {% endif %}
  {% endif %}

{% endblock %}

";
    }
}
