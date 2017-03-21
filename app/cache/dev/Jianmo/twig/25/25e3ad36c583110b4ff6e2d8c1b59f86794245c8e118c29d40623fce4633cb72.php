<?php

/* expression.twig */
class __TwigTemplate_cf23231768b920ad6825c38d089784df856d057a11802eab94740aa63ece28d6 extends Twig_Template
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
        $__internal_467f2d3b7b60814234e2bb6acd276b8d2cd25e2e059ad356a62d52cbbc0d8d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467f2d3b7b60814234e2bb6acd276b8d2cd25e2e059ad356a62d52cbbc0d8d3a->enter($__internal_467f2d3b7b60814234e2bb6acd276b8d2cd25e2e059ad356a62d52cbbc0d8d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        
        $__internal_467f2d3b7b60814234e2bb6acd276b8d2cd25e2e059ad356a62d52cbbc0d8d3a->leave($__internal_467f2d3b7b60814234e2bb6acd276b8d2cd25e2e059ad356a62d52cbbc0d8d3a_prof);

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
        return "{{course.id}}";
    }
}
