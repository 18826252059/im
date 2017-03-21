<?php

/* expression.twig */
class __TwigTemplate_9b88dd9d792dfef510a1111610b5008575fcf48f12ce4a1618f8b080e37ce9a4 extends Twig_Template
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
        $__internal_4d7e276c56fd67bede0d1dbe607921008ff2c2d5ed293e096ae17facbabeccd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7e276c56fd67bede0d1dbe607921008ff2c2d5ed293e096ae17facbabeccd7->enter($__internal_4d7e276c56fd67bede0d1dbe607921008ff2c2d5ed293e096ae17facbabeccd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), "html", null, true);
        
        $__internal_4d7e276c56fd67bede0d1dbe607921008ff2c2d5ed293e096ae17facbabeccd7->leave($__internal_4d7e276c56fd67bede0d1dbe607921008ff2c2d5ed293e096ae17facbabeccd7_prof);

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
        return "{{target}}";
    }
}
