<?php

/* expression.twig */
class __TwigTemplate_5f4f403b114dc3164ff073c9e17fb9a6a85b5a04635a08bb282a050aa0cb3648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e25f4e05ab38346205404741460c4c5259365f0a3e19ad52c1a2dd9963848b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e25f4e05ab38346205404741460c4c5259365f0a3e19ad52c1a2dd9963848b3->enter($__internal_3e25f4e05ab38346205404741460c4c5259365f0a3e19ad52c1a2dd9963848b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published"), "html", null, true);
        
        $__internal_3e25f4e05ab38346205404741460c4c5259365f0a3e19ad52c1a2dd9963848b3->leave($__internal_3e25f4e05ab38346205404741460c4c5259365f0a3e19ad52c1a2dd9963848b3_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{course.status != 'published'}}";
    }
}
