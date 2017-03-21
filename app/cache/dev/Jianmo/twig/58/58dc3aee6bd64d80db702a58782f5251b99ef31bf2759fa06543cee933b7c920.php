<?php

/* TopxiaAdminBundle:System/Log:logs-prod.html.twig */
class __TwigTemplate_ee35aa7dd353fbdb60c0fc4757dc2f96bc7dbf66d63dec319234d1da306542ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System/Log:logs-prod.html.twig", 1);
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
        $__internal_75ee40d6377356dec7ff25177a12fdb7fbefe5fc884f1c0674a70f96b51b99d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ee40d6377356dec7ff25177a12fdb7fbefe5fc884f1c0674a70f96b51b99d3->enter($__internal_75ee40d6377356dec7ff25177a12fdb7fbefe5fc884f1c0674a70f96b51b99d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System/Log:logs-prod.html.twig"));

        // line 3
        $context["menu"] = "admin_logs_prod";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75ee40d6377356dec7ff25177a12fdb7fbefe5fc884f1c0674a70f96b51b99d3->leave($__internal_75ee40d6377356dec7ff25177a12fdb7fbefe5fc884f1c0674a70f96b51b99d3_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e88f7947dec75ffdc331f16368d58a62dca42a5215be607ae977acf57910406a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88f7947dec75ffdc331f16368d58a62dca42a5215be607ae977acf57910406a->enter($__internal_e88f7947dec75ffdc331f16368d58a62dca42a5215be607ae977acf57910406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
  <div class=\"alert alert-warning\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("显示最近的２０００条日志信息。"), "html", null, true);
        echo "</div>

  <pre>
    ";
        // line 10
        echo nl2br(twig_escape_filter($this->env, (isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")), "html", null, true));
        echo "
  </pre>

";
        
        $__internal_e88f7947dec75ffdc331f16368d58a62dca42a5215be607ae977acf57910406a->leave($__internal_e88f7947dec75ffdc331f16368d58a62dca42a5215be607ae977acf57910406a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Log:logs-prod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_logs_prod' %}

{% block main %}

  <div class=\"alert alert-warning\">{{'显示最近的２０００条日志信息。'|trans}}</div>

  <pre>
    {{ logs|nl2br }}
  </pre>

{% endblock %}";
    }
}
