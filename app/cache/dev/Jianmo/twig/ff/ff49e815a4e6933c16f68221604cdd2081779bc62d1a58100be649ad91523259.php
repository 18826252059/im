<?php

/* expression.twig */
class __TwigTemplate_7f334fb48a39dddf664218f278581e95fba38bb8c64e193174076f1bd48de95c extends Twig_Template
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
        $__internal_7c5df89ace7d60bd3d8d5142d6501dfada994b1203f7dbac6bb945c296b528be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5df89ace7d60bd3d8d5142d6501dfada994b1203f7dbac6bb945c296b528be->enter($__internal_7c5df89ace7d60bd3d8d5142d6501dfada994b1203f7dbac6bb945c296b528be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ( !($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1) &&  !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isWithoutNetwork()), "html", null, true);
        
        $__internal_7c5df89ace7d60bd3d8d5142d6501dfada994b1203f7dbac6bb945c296b528be->leave($__internal_7c5df89ace7d60bd3d8d5142d6501dfada994b1203f7dbac6bb945c296b528be_prof);

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
        return "{{not (setting('copyright.thirdCopyright', false) == 1) and not is_without_network()}}";
    }
}
