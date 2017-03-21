<?php

/* TopxiaWebBundle:EsBar:ListContent/notification.html.twig */
class __TwigTemplate_93c5aac9afcc7ad4128f4f3bc42d454a78d8cde2636d1910c6af6aeb7172447d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/notification.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_893c7487551a9d58de22c465f28c9000d9cfae022aa8d31c5478e1a2f4fc9b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893c7487551a9d58de22c465f28c9000d9cfae022aa8d31c5478e1a2f4fc9b2a->enter($__internal_893c7487551a9d58de22c465f28c9000d9cfae022aa8d31c5478e1a2f4fc9b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:ListContent/notification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893c7487551a9d58de22c465f28c9000d9cfae022aa8d31c5478e1a2f4fc9b2a->leave($__internal_893c7487551a9d58de22c465f28c9000d9cfae022aa8d31c5478e1a2f4fc9b2a_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_e34debc81bd1e2a001089143d67ccde77de3a2c19c7b4f9f1d401b68f75acedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34debc81bd1e2a001089143d67ccde77de3a2c19c7b4f9f1d401b68f75acedc->enter($__internal_e34debc81bd1e2a001089143d67ccde77de3a2c19c7b4f9f1d401b68f75acedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
        echo "
";
        
        $__internal_e34debc81bd1e2a001089143d67ccde77de3a2c19c7b4f9f1d401b68f75acedc->leave($__internal_e34debc81bd1e2a001089143d67ccde77de3a2c19c7b4f9f1d401b68f75acedc_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_d8570faeb739081bae833f2bb54725d317183499cdf174fb1014bf98a1b30df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8570faeb739081bae833f2bb54725d317183499cdf174fb1014bf98a1b30df8->enter($__internal_d8570faeb739081bae833f2bb54725d317183499cdf174fb1014bf98a1b30df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <ul class=\"bar-message\">
    ";
        // line 8
        $this->displayBlock('myMessage', $context, $blocks);
        // line 11
        echo "  </ul>
";
        
        $__internal_d8570faeb739081bae833f2bb54725d317183499cdf174fb1014bf98a1b30df8->leave($__internal_d8570faeb739081bae833f2bb54725d317183499cdf174fb1014bf98a1b30df8_prof);

    }

    // line 8
    public function block_myMessage($context, array $blocks = array())
    {
        $__internal_b9632ac316c5be08c5f36b9aad71a563e78cdd87e8bbd513c9ba1eacf1d8a32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9632ac316c5be08c5f36b9aad71a563e78cdd87e8bbd513c9ba1eacf1d8a32e->enter($__internal_b9632ac316c5be08c5f36b9aad71a563e78cdd87e8bbd513c9ba1eacf1d8a32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myMessage"));

        // line 9
        echo "
    ";
        
        $__internal_b9632ac316c5be08c5f36b9aad71a563e78cdd87e8bbd513c9ba1eacf1d8a32e->leave($__internal_b9632ac316c5be08c5f36b9aad71a563e78cdd87e8bbd513c9ba1eacf1d8a32e_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  71 => 8,  63 => 11,  61 => 8,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}
{% block esBarTitle %}
    {{'通知'|trans}}
{% endblock %}

{% block esBarBody %}
  <ul class=\"bar-message\">
    {% block myMessage %}

    {% endblock %}
  </ul>
{% endblock %}
";
    }
}
