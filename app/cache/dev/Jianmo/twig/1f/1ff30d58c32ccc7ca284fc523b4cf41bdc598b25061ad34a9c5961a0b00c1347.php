<?php

/* TopxiaWebBundle:User:layout.html.twig */
class __TwigTemplate_92278741b15733261f1fc5d5cd7bdd6663e476f96281ead5168b247ccf57759a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:User:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8d90cb7b272bcc69cf545a20e77c07eb72b04e5e1b3be6d4fe7c86df3fe69e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d90cb7b272bcc69cf545a20e77c07eb72b04e5e1b3be6d4fe7c86df3fe69e7->enter($__internal_e8d90cb7b272bcc69cf545a20e77c07eb72b04e5e1b3be6d4fe7c86df3fe69e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:User:layout.html.twig"));

        // line 6
        $context["bodyClass"] = "userpage bg-blank";
        // line 7
        $context["pageNav"] = ((array_key_exists("pageNav", $context)) ? (_twig_default_filter((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")), null)) : (null));
        // line 9
        $context["script_controller"] = "user/user";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d90cb7b272bcc69cf545a20e77c07eb72b04e5e1b3be6d4fe7c86df3fe69e7->leave($__internal_e8d90cb7b272bcc69cf545a20e77c07eb72b04e5e1b3be6d4fe7c86df3fe69e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cc1d572073d957698fc2cbd8affc104327837e2f9c82b510f432fab4abfcc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc1d572073d957698fc2cbd8affc104327837e2f9c82b510f432fab4abfcc86->enter($__internal_8cc1d572073d957698fc2cbd8affc104327837e2f9c82b510f432fab4abfcc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teach")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learn")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学课程"), "html", null, true);
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "favorited")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收藏的课程"), "html", null, true);
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "group")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入的小组"), "html", null, true);
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "friend")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注/粉丝"), "html", null, true);
            echo " - ";
        } else {
            echo "";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nickname%的个人主页", array("%nickname%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("user.nickname"))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_8cc1d572073d957698fc2cbd8affc104327837e2f9c82b510f432fab4abfcc86->leave($__internal_8cc1d572073d957698fc2cbd8affc104327837e2f9c82b510f432fab4abfcc86_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_cb068dbb01dcb39f7eb228cdf90de2777f558592865439299d3c5e265b0cd19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb068dbb01dcb39f7eb228cdf90de2777f558592865439299d3c5e265b0cd19a->enter($__internal_cb068dbb01dcb39f7eb228cdf90de2777f558592865439299d3c5e265b0cd19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array()), "html", null, true);
        
        $__internal_cb068dbb01dcb39f7eb228cdf90de2777f558592865439299d3c5e265b0cd19a->leave($__internal_cb068dbb01dcb39f7eb228cdf90de2777f558592865439299d3c5e265b0cd19a_prof);

    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        $__internal_a80e4db55b42e8d11ebd2a33eb3dd79d5e83f941ec24615d8cae56d13192485e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80e4db55b42e8d11ebd2a33eb3dd79d5e83f941ec24615d8cae56d13192485e->enter($__internal_a80e4db55b42e8d11ebd2a33eb3dd79d5e83f941ec24615d8cae56d13192485e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array()), "")) : ("")), 100);
        
        $__internal_a80e4db55b42e8d11ebd2a33eb3dd79d5e83f941ec24615d8cae56d13192485e->leave($__internal_a80e4db55b42e8d11ebd2a33eb3dd79d5e83f941ec24615d8cae56d13192485e_prof);

    }

    // line 11
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_5b85805a9c2ff7de218295569a4f554e86b6c1ed10523f5f0d496108624ffb9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b85805a9c2ff7de218295569a4f554e86b6c1ed10523f5f0d496108624ffb9c->enter($__internal_5b85805a9c2ff7de218295569a4f554e86b6c1ed10523f5f0d496108624ffb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        // line 12
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:User:headerBlock", array("user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        echo "
";
        
        $__internal_5b85805a9c2ff7de218295569a4f554e86b6c1ed10523f5f0d496108624ffb9c->leave($__internal_5b85805a9c2ff7de218295569a4f554e86b6c1ed10523f5f0d496108624ffb9c_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ad3cc6fbf713cc2e9cd0401297a05bcfbeba44f969ba338e9ab26191c517294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad3cc6fbf713cc2e9cd0401297a05bcfbeba44f969ba338e9ab26191c517294->enter($__internal_1ad3cc6fbf713cc2e9cd0401297a05bcfbeba44f969ba338e9ab26191c517294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "  <ul class=\"nav nav-tabs clearfix\">
    <li ";
        // line 17
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_about", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人介绍"), "html", null, true);
        echo "</a></li>
  \t";
        // line 18
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 19
            echo "\t    <li ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teach")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teach", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教课程"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 23
            echo "      <li ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "teaching")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_teaching_classrooms", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在教%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 25
        echo "    <li ";
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learn")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learn", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学课程"), "html", null, true);
        echo "</a></li>
    <li ";
        // line 26
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "learning")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learning_classrooms", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</a></li>


    <li ";
        // line 29
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "favorited")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_favorited", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收藏课程"), "html", null, true);
        echo "</a></li>
    <li ";
        // line 30
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "group")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_group", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入小组"), "html", null, true);
        echo "</a></li>
    <li ";
        // line 31
        if (((isset($context["pageNav"]) ? $context["pageNav"] : $this->getContext($context, "pageNav")) == "friend")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
        echo "&nbsp;/&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("粉丝"), "html", null, true);
        echo "</a></li>
  </ul>
  ";
        // line 33
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_1ad3cc6fbf713cc2e9cd0401297a05bcfbeba44f969ba338e9ab26191c517294->leave($__internal_1ad3cc6fbf713cc2e9cd0401297a05bcfbeba44f969ba338e9ab26191c517294_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_0a5d59bbbda60b76e074ef1f99538f9c0b2569cf2c9b72bac8714614fed37ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5d59bbbda60b76e074ef1f99538f9c0b2569cf2c9b72bac8714614fed37ea2->enter($__internal_0a5d59bbbda60b76e074ef1f99538f9c0b2569cf2c9b72bac8714614fed37ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0a5d59bbbda60b76e074ef1f99538f9c0b2569cf2c9b72bac8714614fed37ea2->leave($__internal_0a5d59bbbda60b76e074ef1f99538f9c0b2569cf2c9b72bac8714614fed37ea2_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 33,  211 => 31,  201 => 30,  191 => 29,  179 => 26,  168 => 25,  156 => 23,  154 => 22,  151 => 21,  139 => 19,  137 => 18,  127 => 17,  124 => 16,  118 => 15,  108 => 12,  102 => 11,  90 => 5,  78 => 4,  46 => 3,  39 => 1,  37 => 9,  35 => 7,  33 => 6,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{% if pageNav == 'teach' %}{{'在教课程'|trans}} - {% elseif pageNav == 'learn' %}{{'在学课程'|trans}} - {% elseif pageNav == 'favorited' %}{{'收藏的课程'|trans}} - {% elseif pageNav == 'group' %}{{'加入的小组'|trans}} - {% elseif pageNav == 'friend' %}{{'关注/粉丝'|trans}} - {% else %}{{''}}{% endif %}{{'%nickname%的个人主页'|trans({'%nickname%':setting('user.nickname')})}} - {{ parent() }}{% endblock %}
{% block keywords %}{{ user.title }}{% endblock %}
{% block description %}{{ user.about|default('')|plain_text(100) }}{% endblock %}
{% set bodyClass = 'userpage bg-blank' %}
{% set pageNav = pageNav|default(null) %}

{% set script_controller = 'user/user' %}

{% block top_content %}
  {{ render(controller('TopxiaWebBundle:User:headerBlock', {user:user})) }}
{% endblock %}

{% block content %}
  <ul class=\"nav nav-tabs clearfix\">
    <li {% if pageNav == 'about' %}class=\"active\"{% endif %}><a href=\"{{ path('user_about', {id: user.id}) }}\">{{'个人介绍'|trans}}</a></li>
  \t{% if 'ROLE_TEACHER' in user.roles %}
\t    <li {% if pageNav == 'teach' %}class=\"active\"{% endif %}><a href=\"{{ path('user_teach', {id: user.id}) }}\">{{'在教课程'|trans}}</a></li>
    {% endif %}

    {% if 'ROLE_TEACHER' in user.roles %}
      <li {% if pageNav == 'teaching' %}class=\"active\"{% endif %}><a href=\"{{ path('user_teaching_classrooms', {id:user.id}) }}\">{{'在教%name%'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</a></li>
    {% endif %}
    <li {% if pageNav == 'learn' %}class=\"active\"{% endif %}><a href=\"{{ path('user_learn', {id:user.id}) }}\">{{'在学课程'|trans}}</a></li>
    <li {% if pageNav == 'learning' %}class=\"active\"{% endif %}><a href=\"{{ path('user_learning_classrooms', {id:user.id}) }}\">{{'在学%name%'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</a></li>


    <li {% if pageNav == 'favorited' %}class=\"active\"{% endif %}><a href=\"{{ path('user_favorited', {id:user.id}) }}\">{{'收藏课程'|trans}}</a></li>
    <li {% if pageNav == 'group' %}class=\"active\"{% endif %}><a href=\"{{path('user_group',{id:user.id})}}\">{{'加入小组'|trans}}</a></li>
    <li {% if pageNav == 'friend' %}class=\"active\"{% endif %}><a href=\"{{ path('user_following', {id:user.id}) }}\">{{'关注'|trans}}&nbsp;/&nbsp;{{'粉丝'|trans}}</a></li>
  </ul>
  {% block main %}{% endblock %}
{% endblock %}";
    }
}
