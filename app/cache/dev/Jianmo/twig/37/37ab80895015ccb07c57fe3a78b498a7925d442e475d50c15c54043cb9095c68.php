<?php

/* expression.twig */
class __TwigTemplate_91e0f8d60ef7b13cc9ed58f6c4e5d43d2e57c48e4884579694711933921feade extends Twig_Template
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
        $__internal_ee538368ceec5ecebb0fbfda301378eae3f65bb245bbe42ad507dbcf8e3082e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee538368ceec5ecebb0fbfda301378eae3f65bb245bbe42ad507dbcf8e3082e2->enter($__internal_ee538368ceec5ecebb0fbfda301378eae3f65bb245bbe42ad507dbcf8e3082e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoted", array()) == 0), "html", null, true);
        
        $__internal_ee538368ceec5ecebb0fbfda301378eae3f65bb245bbe42ad507dbcf8e3082e2->leave($__internal_ee538368ceec5ecebb0fbfda301378eae3f65bb245bbe42ad507dbcf8e3082e2_prof);

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
        return "{{user.promoted == 0}}";
    }
}
