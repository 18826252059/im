<?php

/* expression.twig */
class __TwigTemplate_2e3b147676129fafd18a42b9b0012602415f2e36039e4c7885af80a6a319174e extends Twig_Template
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
        $__internal_ef21ff551c9955df4d4bb6e9526a0a75165c9b3cd68a87db0fb8d92a7f2b21e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef21ff551c9955df4d4bb6e9526a0a75165c9b3cd68a87db0fb8d92a7f2b21e5->enter($__internal_ef21ff551c9955df4d4bb6e9526a0a75165c9b3cd68a87db0fb8d92a7f2b21e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locked", array()) == 1), "html", null, true);
        
        $__internal_ef21ff551c9955df4d4bb6e9526a0a75165c9b3cd68a87db0fb8d92a7f2b21e5->leave($__internal_ef21ff551c9955df4d4bb6e9526a0a75165c9b3cd68a87db0fb8d92a7f2b21e5_prof);

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
        return "{{user.locked == 1}}";
    }
}
