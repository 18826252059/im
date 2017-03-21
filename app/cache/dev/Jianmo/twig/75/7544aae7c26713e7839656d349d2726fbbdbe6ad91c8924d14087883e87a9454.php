<?php

/* expression.twig */
class __TwigTemplate_7c2b2806188322c5dd1b8d1c71d56ee81b2b3e7a655a1bd39a804d42a26f8d23 extends Twig_Template
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
        $__internal_367efd23f3d353429b8951326b08f804dc1960e78e4c8e4a90805e378347e155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367efd23f3d353429b8951326b08f804dc1960e78e4c8e4a90805e378347e155->enter($__internal_367efd23f3d353429b8951326b08f804dc1960e78e4c8e4a90805e378347e155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "draft"), "html", null, true);
        
        $__internal_367efd23f3d353429b8951326b08f804dc1960e78e4c8e4a90805e378347e155->leave($__internal_367efd23f3d353429b8951326b08f804dc1960e78e4c8e4a90805e378347e155_prof);

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
        return "{{ classroom.status=='draft' }}";
    }
}
