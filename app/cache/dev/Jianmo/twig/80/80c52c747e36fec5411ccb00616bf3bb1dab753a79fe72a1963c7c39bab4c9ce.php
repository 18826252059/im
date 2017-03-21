<?php

/* TopxiaAdminBundle:System:share.html.twig */
class __TwigTemplate_2770b9166c9a566b0b6610d36b06e2387fa7c04856dfc8b3138018e0c1bb4f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:share.html.twig", 1);
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
        $__internal_5f10d15a656a6fb260df6645601e4663d073d1beb0fab4045ef28b36f9e9994d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f10d15a656a6fb260df6645601e4663d073d1beb0fab4045ef28b36f9e9994d->enter($__internal_5f10d15a656a6fb260df6645601e4663d073d1beb0fab4045ef28b36f9e9994d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:share.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_share";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f10d15a656a6fb260df6645601e4663d073d1beb0fab4045ef28b36f9e9994d->leave($__internal_5f10d15a656a6fb260df6645601e4663d073d1beb0fab4045ef28b36f9e9994d_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_4d1c8c7c603903493affb4350199bd9992b5e1df844e04c5c64cad7c602c4024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1c8c7c603903493affb4350199bd9992b5e1df844e04c5c64cad7c602c4024->enter($__internal_4d1c8c7c603903493affb4350199bd9992b5e1df844e04c5c64cad7c602c4024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />
  ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  ";
        // line 9
        $this->loadTemplate("TopxiaAdminBundle:System:default-share-content.html.twig", "TopxiaAdminBundle:System:share.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_4d1c8c7c603903493affb4350199bd9992b5e1df844e04c5c64cad7c602c4024->leave($__internal_4d1c8c7c603903493affb4350199bd9992b5e1df844e04c5c64cad7c602c4024_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  51 => 9,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_share' %}

{% block main %}
<meta http-equiv=\"pragma\" content=\"no-cache\" />
  {{ web_macro.flash_messages() }}

  {% include 'TopxiaAdminBundle:System:default-share-content.html.twig' %}

{% endblock %}";
    }
}
