<?php

/* expression.twig */
class __TwigTemplate_a01c11a66a4b13eb224228f26e5bfb8e6521f28f34fd4de61127a92aa4ad405c extends Twig_Template
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
        $__internal_f7f00dcaad2380e0b7e6097cc62dbb098ef444412c09b4c270b046d1fa1f06b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f00dcaad2380e0b7e6097cc62dbb098ef444412c09b4c270b046d1fa1f06b9->enter($__internal_f7f00dcaad2380e0b7e6097cc62dbb098ef444412c09b4c270b046d1fa1f06b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locked", array()) == 0), "html", null, true);
        
        $__internal_f7f00dcaad2380e0b7e6097cc62dbb098ef444412c09b4c270b046d1fa1f06b9->leave($__internal_f7f00dcaad2380e0b7e6097cc62dbb098ef444412c09b4c270b046d1fa1f06b9_prof);

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
        return "{{user.locked == 0}}";
    }
}
