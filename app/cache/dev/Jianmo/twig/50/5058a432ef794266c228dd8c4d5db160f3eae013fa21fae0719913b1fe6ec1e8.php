<?php

/* expression.twig */
class __TwigTemplate_086a71549f393179c16fdb4018ad01251dc1d119492ae983b71fe76c7dcbc9e0 extends Twig_Template
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
        $__internal_014d14f5c9de5571cba7a1bd57f0f6663f002b332ceb630b36368d66e6054891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014d14f5c9de5571cba7a1bd57f0f6663f002b332ceb630b36368d66e6054891->enter($__internal_014d14f5c9de5571cba7a1bd57f0f6663f002b332ceb630b36368d66e6054891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array()), "html", null, true);
        
        $__internal_014d14f5c9de5571cba7a1bd57f0f6663f002b332ceb630b36368d66e6054891->leave($__internal_014d14f5c9de5571cba7a1bd57f0f6663f002b332ceb630b36368d66e6054891_prof);

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
        return "{{ classroom.recommended }}";
    }
}
