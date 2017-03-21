<?php

/* expression.twig */
class __TwigTemplate_7d2d8d42cf642b3f3cc5acdd23f1f12a484ca65e08253ade306fdca451b9b022 extends Twig_Template
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
        $__internal_a54bb4f94f6097f804656248e16ff2f4ee7fda7a1ce75c1a336ec531cae10ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54bb4f94f6097f804656248e16ff2f4ee7fda7a1ce75c1a336ec531cae10ac6->enter($__internal_a54bb4f94f6097f804656248e16ff2f4ee7fda7a1ce75c1a336ec531cae10ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "published"), "html", null, true);
        
        $__internal_a54bb4f94f6097f804656248e16ff2f4ee7fda7a1ce75c1a336ec531cae10ac6->leave($__internal_a54bb4f94f6097f804656248e16ff2f4ee7fda7a1ce75c1a336ec531cae10ac6_prof);

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
        return "{{ classroom.status != 'published' }}";
    }
}
