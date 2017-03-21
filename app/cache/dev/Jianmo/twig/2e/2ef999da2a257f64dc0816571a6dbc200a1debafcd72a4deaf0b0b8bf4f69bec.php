<?php

/* TopxiaWebBundle:Default:middle-banner.html.twig */
class __TwigTemplate_b5ce81fb2ba002f5a9591125ceeb046b977114912ae697624838c1c33962f426 extends Twig_Template
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
        $__internal_aa91c11fb58fe38b7a877ea704ac2f59281ea0061b8a845ee67df82810195173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa91c11fb58fe38b7a877ea704ac2f59281ea0061b8a845ee67df82810195173->enter($__internal_aa91c11fb58fe38b7a877ea704ac2f59281ea0061b8a845ee67df82810195173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:middle-banner.html.twig"));

        // line 1
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:middle_banner");
        
        $__internal_aa91c11fb58fe38b7a877ea704ac2f59281ea0061b8a845ee67df82810195173->leave($__internal_aa91c11fb58fe38b7a877ea704ac2f59281ea0061b8a845ee67df82810195173_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "  <!-- 特性 --> 
  {{ block_show('jianmo:middle_banner') }}";
    }
}
