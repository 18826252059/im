<?php

/* expression.twig */
class __TwigTemplate_6dfb0dac6371b90a05164776f5d3702c185fd1d270832992bdff84713e48e9b8 extends Twig_Template
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
        $__internal_8cdefe22ba9435a2a8e25419ba0d7340aa301ce4e4a395d72bf6f3de03ffede1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdefe22ba9435a2a8e25419ba0d7340aa301ce4e4a395d72bf6f3de03ffede1->enter($__internal_8cdefe22ba9435a2a8e25419ba0d7340aa301ce4e4a395d72bf6f3de03ffede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", 0) == 1)), "html", null, true);
        
        $__internal_8cdefe22ba9435a2a8e25419ba0d7340aa301ce4e4a395d72bf6f3de03ffede1->leave($__internal_8cdefe22ba9435a2a8e25419ba0d7340aa301ce4e4a395d72bf6f3de03ffede1_prof);

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
        return "{{ app.user.id != user.id and setting('magic.enable_org', 0) == 1 }}";
    }
}
