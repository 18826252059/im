<?php

/* expression.twig */
class __TwigTemplate_77ef56f26c4c568c235cb3bbd40f5750593bf03288311336f986d09ee1d67f20 extends Twig_Template
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
        $__internal_51f44c59b6ce6da8a4a18876d28b0e948def41b7d408db7a3912e5a8fad6f145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f44c59b6ce6da8a4a18876d28b0e948def41b7d408db7a3912e5a8fad6f145->enter($__internal_51f44c59b6ce6da8a4a18876d28b0e948def41b7d408db7a3912e5a8fad6f145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())), "html", null, true);
        
        $__internal_51f44c59b6ce6da8a4a18876d28b0e948def41b7d408db7a3912e5a8fad6f145->leave($__internal_51f44c59b6ce6da8a4a18876d28b0e948def41b7d408db7a3912e5a8fad6f145_prof);

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
        return "{{ filter == 'normal' and course.recommended }}";
    }
}
