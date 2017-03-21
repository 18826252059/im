<?php

/* expression.twig */
class __TwigTemplate_d8afcbf5ad0eca2927334c58449dad4a23a23a801da4fdb4f4aa703c8c841506 extends Twig_Template
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
        $__internal_615ad81dd420d6bec21697725d22faf7ea9dd6d0427fc9be5509628f912f3eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615ad81dd420d6bec21697725d22faf7ea9dd6d0427fc9be5509628f912f3eaa->enter($__internal_615ad81dd420d6bec21697725d22faf7ea9dd6d0427fc9be5509628f912f3eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()), array(0 => "closed", 1 => "draft", 2 => "published")), "html", null, true);
        
        $__internal_615ad81dd420d6bec21697725d22faf7ea9dd6d0427fc9be5509628f912f3eaa->leave($__internal_615ad81dd420d6bec21697725d22faf7ea9dd6d0427fc9be5509628f912f3eaa_prof);

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
        return "{{ course.status in ['closed', 'draft', 'published']}}";
    }
}
