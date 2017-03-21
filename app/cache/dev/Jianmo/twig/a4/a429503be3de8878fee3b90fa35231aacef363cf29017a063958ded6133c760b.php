<?php

/* expression.twig */
class __TwigTemplate_6de5a59f23fc8433fc4d1c3347f4c4e9a416c501d648ae4761ea67189723edeb extends Twig_Template
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
        $__internal_4df7bc56a93944becb3a56e3d9f9a2e0da190a9450dacfa794c1004ae119c56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df7bc56a93944becb3a56e3d9f9a2e0da190a9450dacfa794c1004ae119c56e->enter($__internal_4df7bc56a93944becb3a56e3d9f9a2e0da190a9450dacfa794c1004ae119c56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env,  !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array()), "html", null, true);
        
        $__internal_4df7bc56a93944becb3a56e3d9f9a2e0da190a9450dacfa794c1004ae119c56e->leave($__internal_4df7bc56a93944becb3a56e3d9f9a2e0da190a9450dacfa794c1004ae119c56e_prof);

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
        return "{{ not classroom.recommended }}";
    }
}
