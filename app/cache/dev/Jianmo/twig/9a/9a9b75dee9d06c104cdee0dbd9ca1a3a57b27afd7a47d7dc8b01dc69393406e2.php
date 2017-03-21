<?php

/* expression.twig */
class __TwigTemplate_6fe22677544f0b17f2764670d5b20444fbc402026be4edcbdcecaa6000d9ecc4 extends Twig_Template
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
        $__internal_2e7999eb4634f65277e570b7135ecab2975f181244c4d728e707c21a5b597bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7999eb4634f65277e570b7135ecab2975f181244c4d728e707c21a5b597bc3->enter($__internal_2e7999eb4634f65277e570b7135ecab2975f181244c4d728e707c21a5b597bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal") &&  !$this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())), "html", null, true);
        
        $__internal_2e7999eb4634f65277e570b7135ecab2975f181244c4d728e707c21a5b597bc3->leave($__internal_2e7999eb4634f65277e570b7135ecab2975f181244c4d728e707c21a5b597bc3_prof);

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
        return "{{ filter == 'normal' and not course.recommended }}";
    }
}
