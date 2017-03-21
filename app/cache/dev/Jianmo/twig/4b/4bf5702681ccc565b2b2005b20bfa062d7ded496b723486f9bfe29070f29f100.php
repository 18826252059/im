<?php

/* ClassroomBundle:ClassroomManage:layout.html.twig */
class __TwigTemplate_ced6a9f9759930d34812600f91b48c8c7b5f11ff3604c1d4e7cba7a62c34ee90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:ClassroomManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71ab7f165ec599d86b93e511cd4132b49aa77d7ac0c1aa022948144410ec35cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ab7f165ec599d86b93e511cd4132b49aa77d7ac0c1aa022948144410ec35cd->enter($__internal_71ab7f165ec599d86b93e511cd4132b49aa77d7ac0c1aa022948144410ec35cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ab7f165ec599d86b93e511cd4132b49aa77d7ac0c1aa022948144410ec35cd->leave($__internal_71ab7f165ec599d86b93e511cd4132b49aa77d7ac0c1aa022948144410ec35cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36f17d9312b9e6e03dd564a3d2673750ca9e0e51bd69230ad1ec3ae92601c1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f17d9312b9e6e03dd564a3d2673750ca9e0e51bd69230ad1ec3ae92601c1bb->enter($__internal_36f17d9312b9e6e03dd564a3d2673750ca9e0e51bd69230ad1ec3ae92601c1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_36f17d9312b9e6e03dd564a3d2673750ca9e0e51bd69230ad1ec3ae92601c1bb->leave($__internal_36f17d9312b9e6e03dd564a3d2673750ca9e0e51bd69230ad1ec3ae92601c1bb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3d18f16890c036200e5bd0a4efdef132d46bd089d1f8172bd622629ea228563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d18f16890c036200e5bd0a4efdef132d46bd089d1f8172bd622629ea228563->enter($__internal_e3d18f16890c036200e5bd0a4efdef132d46bd089d1f8172bd622629ea228563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  ";
        $this->loadTemplate("ClassroomBundle:ClassroomManage:header.html.twig", "ClassroomBundle:ClassroomManage:layout.html.twig", 6)->display($context);
        // line 7
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 10
        $this->displayBlock('side', $context, $blocks);
        // line 16
        echo "    </div>
    <div class=\"col-md-9\">
      ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 19
        echo "    </div>
  </div>
";
        
        $__internal_e3d18f16890c036200e5bd0a4efdef132d46bd089d1f8172bd622629ea228563->leave($__internal_e3d18f16890c036200e5bd0a4efdef132d46bd089d1f8172bd622629ea228563_prof);

    }

    // line 10
    public function block_side($context, array $blocks = array())
    {
        $__internal_b2007b1a2eae2f84042cfca46e6dc0df05b4f34b7fb070b1648a72a0a12bd849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2007b1a2eae2f84042cfca46e6dc0df05b4f34b7fb070b1648a72a0a12bd849->enter($__internal_b2007b1a2eae2f84042cfca46e6dc0df05b4f34b7fb070b1648a72a0a12bd849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 11
        echo "        ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 12
        echo "        <div class=\"sidenav\">
          ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClassroomBundle:ClassroomManage:menu", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "sideNav" => (isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), "context" => $context)));
        echo "
        </div>
      ";
        
        $__internal_b2007b1a2eae2f84042cfca46e6dc0df05b4f34b7fb070b1648a72a0a12bd849->leave($__internal_b2007b1a2eae2f84042cfca46e6dc0df05b4f34b7fb070b1648a72a0a12bd849_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_044b97ade903a7a7c86f19535d040762b531a7bd793f10258fd0046d8690f395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044b97ade903a7a7c86f19535d040762b531a7bd793f10258fd0046d8690f395->enter($__internal_044b97ade903a7a7c86f19535d040762b531a7bd793f10258fd0046d8690f395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_044b97ade903a7a7c86f19535d040762b531a7bd793f10258fd0046d8690f395->leave($__internal_044b97ade903a7a7c86f19535d040762b531a7bd793f10258fd0046d8690f395_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  95 => 13,  92 => 12,  89 => 11,  83 => 10,  74 => 19,  72 => 18,  68 => 16,  66 => 10,  61 => 7,  58 => 6,  52 => 5,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{ setting('classroom.name')|default(\"班级\"|trans) }}{{'管理'|trans}} - {{ parent() }}{% endblock %}

{% block content %}
  {% include ('ClassroomBundle:ClassroomManage:header.html.twig') %}

  <div class=\"row\">
    <div class=\"col-md-3\">
      {% block side %}
        {% set side_nav = side_nav|default(null) %}
        <div class=\"sidenav\">
          {{ render(controller('ClassroomBundle:ClassroomManage:menu',{classroom:classroom,sideNav:side_nav, context: _context})) }}
        </div>
      {% endblock %}
    </div>
    <div class=\"col-md-9\">
      {% block main %}{% endblock %}
    </div>
  </div>
{% endblock %}";
    }
}
