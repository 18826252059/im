<?php

/* expression.twig */
class __TwigTemplate_a6f9f2c5670307108b5b267b01e4a1a5356ebe98494cc12927e28886c98ce1fc extends Twig_Template
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
        $__internal_6e847532f0520f1822fbd1279edd47d8f556be76fa24526a4eff0a9454f4ed48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e847532f0520f1822fbd1279edd47d8f556be76fa24526a4eff0a9454f4ed48->enter($__internal_6e847532f0520f1822fbd1279edd47d8f556be76fa24526a4eff0a9454f4ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "html", null, true);
        
        $__internal_6e847532f0520f1822fbd1279edd47d8f556be76fa24526a4eff0a9454f4ed48->leave($__internal_6e847532f0520f1822fbd1279edd47d8f556be76fa24526a4eff0a9454f4ed48_prof);

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
        return "{{filter}}";
    }
}
