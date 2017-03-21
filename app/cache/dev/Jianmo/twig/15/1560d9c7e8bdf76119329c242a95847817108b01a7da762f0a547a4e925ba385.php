<?php

/* expression.twig */
class __TwigTemplate_6b8d71bbac6d2b0c96e440dfdafe58b60aae726f85f4b55fa20e0931d5b325ec extends Twig_Template
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
        $__internal_2f91f6111a3ba32c708a29cf2de3f10767ca4e1dd832e32fe45ea99b0c2c76c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f91f6111a3ba32c708a29cf2de3f10767ca4e1dd832e32fe45ea99b0c2c76c4->enter($__internal_2f91f6111a3ba32c708a29cf2de3f10767ca4e1dd832e32fe45ea99b0c2c76c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getCloudStatus();
        
        $__internal_2f91f6111a3ba32c708a29cf2de3f10767ca4e1dd832e32fe45ea99b0c2c76c4->leave($__internal_2f91f6111a3ba32c708a29cf2de3f10767ca4e1dd832e32fe45ea99b0c2c76c4_prof);

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
        return "{{cloudStatus()}}";
    }
}
