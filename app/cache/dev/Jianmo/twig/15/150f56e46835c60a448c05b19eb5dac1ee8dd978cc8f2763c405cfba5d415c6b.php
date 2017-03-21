<?php

/* TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig */
class __TwigTemplate_30d72bff10f74b53b2bdcfb182871edae3453576cf2c766f67f7a7768e03cfe9 extends Twig_Template
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
        $__internal_9444f0a65616c01997ef35f6c30c9e1fbca6570c25f03ec7574956343683b914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9444f0a65616c01997ef35f6c30c9e1fbca6570c25f03ec7574956343683b914->enter($__internal_9444f0a65616c01997ef35f6c30c9e1fbca6570c25f03ec7574956343683b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig"));

        // line 1
        $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array()))) {
            // line 3
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
        
        $__internal_9444f0a65616c01997ef35f6c30c9e1fbca6570c25f03ec7574956343683b914->leave($__internal_9444f0a65616c01997ef35f6c30c9e1fbca6570c25f03ec7574956343683b914_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig";
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
{% if consult.webchatURI is not empty %}
  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
{% endif %}";
    }
}
