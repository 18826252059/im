<?php

/* expression.twig */
class __TwigTemplate_70acdb73894cea1bd325c170f661130aac1dfd3d57b68ee134fdb6a3d7c66b09 extends Twig_Template
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
        $__internal_35c1bf67b978992cf7c15978018921059685b89837f01c7f93910ee547dd7ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c1bf67b978992cf7c15978018921059685b89837f01c7f93910ee547dd7ee7->enter($__internal_35c1bf67b978992cf7c15978018921059685b89837f01c7f93910ee547dd7ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        
        $__internal_35c1bf67b978992cf7c15978018921059685b89837f01c7f93910ee547dd7ee7->leave($__internal_35c1bf67b978992cf7c15978018921059685b89837f01c7f93910ee547dd7ee7_prof);

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
        return "{{user.id}}";
    }
}
