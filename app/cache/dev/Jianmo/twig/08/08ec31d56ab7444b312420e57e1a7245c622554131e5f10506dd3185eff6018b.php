<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig */
class __TwigTemplate_3d50171acf5c3fe1f4a6bc54bfe7d078b0d1ff99920ee7fa3089caaf45644743 extends Twig_Template
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
        $__internal_3b2ec3fc78e7d15a95fb15cbb83ac0d95f9dd5f8f2b9617520255d974c5b797d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2ec3fc78e7d15a95fb15cbb83ac0d95f9dd5f8f2b9617520255d974c5b797d->enter($__internal_3b2ec3fc78e7d15a95fb15cbb83ac0d95f9dd5f8f2b9617520255d974c5b797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig"));

        // line 1
        echo "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "\"><a href=\"javascript:;\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\"><i class=\"es-icon es-icon-edit\"></i></a></li>";
        
        $__internal_3b2ec3fc78e7d15a95fb15cbb83ac0d95f9dd5f8f2b9617520255d974c5b797d->leave($__internal_3b2ec3fc78e7d15a95fb15cbb83ac0d95f9dd5f8f2b9617520255d974c5b797d_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig";
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
        return "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'我的考试/作业'|trans}}\"><a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'reviewing'}) }}\"><i class=\"es-icon es-icon-edit\"></i></a></li>";
    }
}
