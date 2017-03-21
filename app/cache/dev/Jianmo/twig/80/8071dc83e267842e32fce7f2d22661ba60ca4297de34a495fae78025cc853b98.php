<?php

/* expression.twig */
class __TwigTemplate_8676c7ce96856efc05e16b906e06b5e47b6fab1289da665bdcc096abf6db264b extends Twig_Template
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
        $__internal_a3786e969099a1f343bbb63cc88425536a34194d1ba1e34ad8d3780249b65a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3786e969099a1f343bbb63cc88425536a34194d1ba1e34ad8d3780249b65a70->enter($__internal_a3786e969099a1f343bbb63cc88425536a34194d1ba1e34ad8d3780249b65a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) == 0)), "html", null, true);
        
        $__internal_a3786e969099a1f343bbb63cc88425536a34194d1ba1e34ad8d3780249b65a70->leave($__internal_a3786e969099a1f343bbb63cc88425536a34194d1ba1e34ad8d3780249b65a70_prof);

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
        return "{{ course.type == 'normal' and course.parentId == 0 }}";
    }
}
