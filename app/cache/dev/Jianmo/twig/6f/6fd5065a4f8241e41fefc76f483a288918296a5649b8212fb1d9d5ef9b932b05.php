<?php

/* TopxiaAdminBundle:EduCloud:layout.html.twig */
class __TwigTemplate_5679edc18e42ff520c26b9071009143ea86e7c4e2521803c261b264041bb7ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_442e06ba6ea5d90dc27f3c00cb8733c11a203d2fa1fab95a9925f5b4750223f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442e06ba6ea5d90dc27f3c00cb8733c11a203d2fa1fab95a9925f5b4750223f4->enter($__internal_442e06ba6ea5d90dc27f3c00cb8733c11a203d2fa1fab95a9925f5b4750223f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:EduCloud:layout.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_my_cloud";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442e06ba6ea5d90dc27f3c00cb8733c11a203d2fa1fab95a9925f5b4750223f4->leave($__internal_442e06ba6ea5d90dc27f3c00cb8733c11a203d2fa1fab95a9925f5b4750223f4_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a97dc933542dcd937f56767eb2a78e64b1e195e951368c13cfaafe1479de658b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97dc933542dcd937f56767eb2a78e64b1e195e951368c13cfaafe1479de658b->enter($__internal_a97dc933542dcd937f56767eb2a78e64b1e195e951368c13cfaafe1479de658b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
  ";
        // line 7
        $this->displayBlock('maincontent', $context, $blocks);
        
        $__internal_a97dc933542dcd937f56767eb2a78e64b1e195e951368c13cfaafe1479de658b->leave($__internal_a97dc933542dcd937f56767eb2a78e64b1e195e951368c13cfaafe1479de658b_prof);

    }

    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_bf464296fca7ffdc90211fab2f78321f6fe4be7e420a0e49f19809469a25476a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf464296fca7ffdc90211fab2f78321f6fe4be7e420a0e49f19809469a25476a->enter($__internal_bf464296fca7ffdc90211fab2f78321f6fe4be7e420a0e49f19809469a25476a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        
        $__internal_bf464296fca7ffdc90211fab2f78321f6fe4be7e420a0e49f19809469a25476a->leave($__internal_bf464296fca7ffdc90211fab2f78321f6fe4be7e420a0e49f19809469a25476a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_my_cloud' %}

{% block main %}

  {% block maincontent %}{% endblock %}
{% endblock %}
";
    }
}
