<?php

/* TopxiaWebBundle:EsBar:LeftList/study-center.html.twig */
class __TwigTemplate_583eb2cfd6de0aa42dfd168d0bee51ab0b060c7202c9e2f01d505d79394b592c extends Twig_Template
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
        $__internal_6a74951c89d975468cfa3a46d88e06bc322ea4cd3116c33693c318a1b755bfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a74951c89d975468cfa3a46d88e06bc322ea4cd3116c33693c318a1b755bfda->enter($__internal_6a74951c89d975468cfa3a46d88e06bc322ea4cd3116c33693c318a1b755bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/study-center.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  ";
            $context["recentLiveLessons"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("RecentLiveLessons", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "count" => 2));
            // line 3
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学<br>习<br>中<br>心");
            echo "
      ";
            // line 5
            if ((isset($context["recentLiveLessons"]) ? $context["recentLiveLessons"] : $this->getContext($context, "recentLiveLessons"))) {
                // line 6
                echo "        <span class=\"dot\"></span>
      ";
            }
            // line 8
            echo "    </a>
  </li>
";
        } else {
            // line 11
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学<br>习<br>中<br>心");
            echo "</a>
  </li>
";
        }
        
        $__internal_6a74951c89d975468cfa3a46d88e06bc322ea4cd3116c33693c318a1b755bfda->leave($__internal_6a74951c89d975468cfa3a46d88e06bc322ea4cd3116c33693c318a1b755bfda_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  42 => 8,  38 => 6,  36 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if app.user and app.user.isLogin() %}
  {% set recentLiveLessons = data('RecentLiveLessons',{userId : app.user.id, count:2}) %}
  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_study_center') }}\">{{'学<br>习<br>中<br>心'|trans|raw}}
      {% if recentLiveLessons %}
        <span class=\"dot\"></span>
      {% endif %}
    </a>
  </li>
{% else %}
  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_study_center') }}\">{{'学<br>习<br>中<br>心'|trans|raw}}</a>
  </li>
{% endif %}";
    }
}
