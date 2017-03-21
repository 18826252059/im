<?php

/* expression.twig */
class __TwigTemplate_8726eaae01b086285d0c009cfd10c0c6cf41f6d8daf80f4e19de2dc86cb25707 extends Twig_Template
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
        $__internal_c74c3c1c353919d2aa414b81618abe251a1feea332b27539bd1bb33daf16100b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74c3c1c353919d2aa414b81618abe251a1feea332b27539bd1bb33daf16100b->enter($__internal_c74c3c1c353919d2aa414b81618abe251a1feea332b27539bd1bb33daf16100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published"), "html", null, true);
        
        $__internal_c74c3c1c353919d2aa414b81618abe251a1feea332b27539bd1bb33daf16100b->leave($__internal_c74c3c1c353919d2aa414b81618abe251a1feea332b27539bd1bb33daf16100b_prof);

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
        return "{{course.status == 'published'}}";
    }
}
