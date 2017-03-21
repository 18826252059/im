<?php

/* TopxiaWebBundle:EsBar:ListContent/practice.html.twig */
class __TwigTemplate_41150536f325cbf899e42d0d5a5c348fdf7208c6bee62a6d63f69f1d382adf82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/practice.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97ac00d3d3f7eb5df75cfd7f490e9e73434e9212ddd190f3d2d37143967ad4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ac00d3d3f7eb5df75cfd7f490e9e73434e9212ddd190f3d2d37143967ad4e8->enter($__internal_97ac00d3d3f7eb5df75cfd7f490e9e73434e9212ddd190f3d2d37143967ad4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:ListContent/practice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ac00d3d3f7eb5df75cfd7f490e9e73434e9212ddd190f3d2d37143967ad4e8->leave($__internal_97ac00d3d3f7eb5df75cfd7f490e9e73434e9212ddd190f3d2d37143967ad4e8_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_225ab8822c0d0f54350a4292e64f116697a5d9b3478696a55c7891324c65607a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225ab8822c0d0f54350a4292e64f116697a5d9b3478696a55c7891324c65607a->enter($__internal_225ab8822c0d0f54350a4292e64f116697a5d9b3478696a55c7891324c65607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "
";
        
        $__internal_225ab8822c0d0f54350a4292e64f116697a5d9b3478696a55c7891324c65607a->leave($__internal_225ab8822c0d0f54350a4292e64f116697a5d9b3478696a55c7891324c65607a_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_9d8d81236a79eda564007e506e9d2a8baff4b09fdbdc3536e1170fdf49e6e042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8d81236a79eda564007e506e9d2a8baff4b09fdbdc3536e1170fdf49e6e042->enter($__internal_9d8d81236a79eda564007e506e9d2a8baff4b09fdbdc3536e1170fdf49e6e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) != "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-review\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已提交"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) == "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-finish\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批阅"), "html", null, true);
        echo "</span></a>
    </div>
  </div>
  <div class=\"bar-homework\">
    ";
        // line 14
        $this->displayBlock('myPractice', $context, $blocks);
        // line 17
        echo "  </div>
";
        
        $__internal_9d8d81236a79eda564007e506e9d2a8baff4b09fdbdc3536e1170fdf49e6e042->leave($__internal_9d8d81236a79eda564007e506e9d2a8baff4b09fdbdc3536e1170fdf49e6e042_prof);

    }

    // line 14
    public function block_myPractice($context, array $blocks = array())
    {
        $__internal_d4abe956ea7bd2410d8ad4e32133bd510e6e85deaea107de58f4de2f608aa214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4abe956ea7bd2410d8ad4e32133bd510e6e85deaea107de58f4de2f608aa214->enter($__internal_d4abe956ea7bd2410d8ad4e32133bd510e6e85deaea107de58f4de2f608aa214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myPractice"));

        // line 15
        echo "
    ";
        
        $__internal_d4abe956ea7bd2410d8ad4e32133bd510e6e85deaea107de58f4de2f608aa214->leave($__internal_d4abe956ea7bd2410d8ad4e32133bd510e6e85deaea107de58f4de2f608aa214_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  95 => 14,  87 => 17,  85 => 14,  72 => 10,  62 => 9,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}
{% block esBarTitle %}
    {{'我的考试/作业'|trans}}
{% endblock %}

{% block esBarBody %}
  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'reviewing'}) }}\" class=\"btn btn-primary {% if esBarMenu|default('') != 'finished' %}active{% endif %}\" id=\"bar-practice-review\">{{'已提交'|trans}}</a>
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'finished'}) }}\" class=\"btn btn-primary {% if esBarMenu|default('') == 'finished'%}active{% endif %}\" id=\"bar-practice-finish\"><span>{{'已批阅'|trans}}</span></a>
    </div>
  </div>
  <div class=\"bar-homework\">
    {% block myPractice %}

    {% endblock %}
  </div>
{% endblock %}";
    }
}
