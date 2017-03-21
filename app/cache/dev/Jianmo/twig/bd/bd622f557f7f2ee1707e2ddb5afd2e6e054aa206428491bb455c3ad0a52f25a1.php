<?php

/* expression.twig */
class __TwigTemplate_4369590c051b1bf938756758f4076199dcf77ba4bee1c8dcc4686665b64a11eb extends Twig_Template
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
        $__internal_21e8de1a3e1c8d85c0c748cc1923166ff357e4fc2ac76476d93b83543e128d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e8de1a3e1c8d85c0c748cc1923166ff357e4fc2ac76476d93b83543e128d22->enter($__internal_21e8de1a3e1c8d85c0c748cc1923166ff357e4fc2ac76476d93b83543e128d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoted", array()) == 1), "html", null, true);
        
        $__internal_21e8de1a3e1c8d85c0c748cc1923166ff357e4fc2ac76476d93b83543e128d22->leave($__internal_21e8de1a3e1c8d85c0c748cc1923166ff357e4fc2ac76476d93b83543e128d22_prof);

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
        return "{{user.promoted == 1}}";
    }
}
