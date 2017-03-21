<?php

/* TopxiaWebBundle:EsBar:ListContent/study-place.html.twig */
class __TwigTemplate_51b0dbe710b667e4189c9fcd71a8d7ee2e2084c705d7137d24560b2062a80fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c87c689ada9cbdb15790e4b7cdb6ec3d3b5d1288671877374c05f99dfc40fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c87c689ada9cbdb15790e4b7cdb6ec3d3b5d1288671877374c05f99dfc40fb6->enter($__internal_9c87c689ada9cbdb15790e4b7cdb6ec3d3b5d1288671877374c05f99dfc40fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c87c689ada9cbdb15790e4b7cdb6ec3d3b5d1288671877374c05f99dfc40fb6->leave($__internal_9c87c689ada9cbdb15790e4b7cdb6ec3d3b5d1288671877374c05f99dfc40fb6_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_73b37a665768907f3dd596b0065673d4341f5c9a778e2587e782c52cce5be5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b37a665768907f3dd596b0065673d4341f5c9a778e2587e782c52cce5be5ad->enter($__internal_73b37a665768907f3dd596b0065673d4341f5c9a778e2587e782c52cce5be5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程/%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "
";
        
        $__internal_73b37a665768907f3dd596b0065673d4341f5c9a778e2587e782c52cce5be5ad->leave($__internal_73b37a665768907f3dd596b0065673d4341f5c9a778e2587e782c52cce5be5ad_prof);

    }

    // line 7
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_782fab130f6113a641089a06d138c78216f8b941dcd97a1736acf99b6f1bd0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782fab130f6113a641089a06d138c78216f8b941dcd97a1736acf99b6f1bd0da->enter($__internal_782fab130f6113a641089a06d138c78216f8b941dcd97a1736acf99b6f1bd0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 8
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_course");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) != "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-course-btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_classroom");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) == "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-classroom-btn\">";
        // line 13
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    ";
        // line 18
        $this->displayBlock('myStudyPlace', $context, $blocks);
        // line 20
        echo "  </div>
";
        
        $__internal_782fab130f6113a641089a06d138c78216f8b941dcd97a1736acf99b6f1bd0da->leave($__internal_782fab130f6113a641089a06d138c78216f8b941dcd97a1736acf99b6f1bd0da_prof);

    }

    // line 18
    public function block_myStudyPlace($context, array $blocks = array())
    {
        $__internal_fee74299d7f8e35ab0752c6b9b0439606a24b527d42a19b85847c1de84f67567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee74299d7f8e35ab0752c6b9b0439606a24b527d42a19b85847c1de84f67567->enter($__internal_fee74299d7f8e35ab0752c6b9b0439606a24b527d42a19b85847c1de84f67567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myStudyPlace"));

        // line 19
        echo "    ";
        
        $__internal_fee74299d7f8e35ab0752c6b9b0439606a24b527d42a19b85847c1de84f67567->leave($__internal_fee74299d7f8e35ab0752c6b9b0439606a24b527d42a19b85847c1de84f67567_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 18,  92 => 20,  90 => 18,  82 => 13,  74 => 12,  70 => 11,  62 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}

{% block esBarTitle %}
  {{'我的课程/%name%'|trans({'%name%': setting('classroom.name')|default('班级'|trans)}) }}
{% endblock %}

{% block esBarBody %}
  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_course') }}\" class=\"btn btn-primary {% if esBarMenu|default('') != 'classroom' %}active{% endif %}\"
         id=\"bar-course-btn\">{{'课程'|trans}}</a>
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_classroom' ) }}\" class=\"btn btn-primary {% if esBarMenu|default('') == 'classroom' %}active{% endif %}\"
         id=\"bar-classroom-btn\">{{ setting('classroom.name')|default('班级'|trans) }}</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    {% block myStudyPlace%}
    {% endblock %}
  </div>
{% endblock %}";
    }
}
