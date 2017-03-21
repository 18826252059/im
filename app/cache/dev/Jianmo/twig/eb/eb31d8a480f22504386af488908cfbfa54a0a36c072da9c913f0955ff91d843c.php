<?php

/* TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig */
class __TwigTemplate_55ee69da9090a3dbb66bf270429264ab444b476af131969b969b48bffdb05b6b extends Twig_Template
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
        $__internal_515c43f7e3029b54ddeb6d631aeb5256b54b90ca564a5872f66817221c0ee450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515c43f7e3029b54ddeb6d631aeb5256b54b90ca564a5872f66817221c0ee450->enter($__internal_515c43f7e3029b54ddeb6d631aeb5256b54b90ca564a5872f66817221c0ee450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig"));

        // line 1
        $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
        // line 2
        if ((( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()), 0, array(), "array"), "name", array())) ||  !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()))) ||  !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array())))) {
            // line 3
            echo "  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话客服"), "html", null, true);
            echo "\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
";
        }
        
        $__internal_515c43f7e3029b54ddeb6d631aeb5256b54b90ca564a5872f66817221c0ee450->leave($__internal_515c43f7e3029b54ddeb6d631aeb5256b54b90ca564a5872f66817221c0ee450_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set consult = setting('consult') %}
{% if consult.phone[0].name is not empty or consult.worktime is not empty or consult.email is not empty  %}
  <li class=\"popover-btn bar-phone-btn\" data-container=\".bar-phone-btn\" data-title=\"{{'电话客服'|trans}}\" data-content-element=\"#bar-phone-content\">
    <a><i class=\"es-icon es-icon-phone\"></i></a>
  </li>
{% endif %}";
    }
}
