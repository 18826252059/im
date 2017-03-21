<?php

/* expression.twig */
class __TwigTemplate_a3fcd1abb186c4a990afeaa579108f2ab7ceb4556be984c047af3457b5614448 extends Twig_Template
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
        $__internal_9e6e925bfac92ae5caf464250d432dfb3d910056053cb938230f22af6fad8167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6e925bfac92ae5caf464250d432dfb3d910056053cb938230f22af6fad8167->enter($__internal_9e6e925bfac92ae5caf464250d432dfb3d910056053cb938230f22af6fad8167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published"), "html", null, true);
        
        $__internal_9e6e925bfac92ae5caf464250d432dfb3d910056053cb938230f22af6fad8167->leave($__internal_9e6e925bfac92ae5caf464250d432dfb3d910056053cb938230f22af6fad8167_prof);

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
        return "{{ classroom.status == 'published' }}";
    }
}
