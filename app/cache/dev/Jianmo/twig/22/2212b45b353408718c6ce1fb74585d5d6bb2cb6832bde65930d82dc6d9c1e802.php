<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44968949fd8ade1572753b6fba62ddd02ae0078f2f9eb4a96995be33dc9e7d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae2f3c670d8054088207f204a74bcf5e96b394e0b5bd1c3121b65e5345877ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae2f3c670d8054088207f204a74bcf5e96b394e0b5bd1c3121b65e5345877ed->enter($__internal_7ae2f3c670d8054088207f204a74bcf5e96b394e0b5bd1c3121b65e5345877ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae2f3c670d8054088207f204a74bcf5e96b394e0b5bd1c3121b65e5345877ed->leave($__internal_7ae2f3c670d8054088207f204a74bcf5e96b394e0b5bd1c3121b65e5345877ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cecd7893dbbff08b44db8329955379f7e244fa6014bdab1fa1f8cf3b9eb4bb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecd7893dbbff08b44db8329955379f7e244fa6014bdab1fa1f8cf3b9eb4bb48->enter($__internal_cecd7893dbbff08b44db8329955379f7e244fa6014bdab1fa1f8cf3b9eb4bb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cecd7893dbbff08b44db8329955379f7e244fa6014bdab1fa1f8cf3b9eb4bb48->leave($__internal_cecd7893dbbff08b44db8329955379f7e244fa6014bdab1fa1f8cf3b9eb4bb48_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f35a4305643d08548eef7f69fac2dee88ed1b2ca17aa460954d9e04bea42e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f35a4305643d08548eef7f69fac2dee88ed1b2ca17aa460954d9e04bea42e89->enter($__internal_5f35a4305643d08548eef7f69fac2dee88ed1b2ca17aa460954d9e04bea42e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f35a4305643d08548eef7f69fac2dee88ed1b2ca17aa460954d9e04bea42e89->leave($__internal_5f35a4305643d08548eef7f69fac2dee88ed1b2ca17aa460954d9e04bea42e89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_387a857dd330eb5e739fb434e972a6a28f321a649883868fe08ecd5b749386d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387a857dd330eb5e739fb434e972a6a28f321a649883868fe08ecd5b749386d6->enter($__internal_387a857dd330eb5e739fb434e972a6a28f321a649883868fe08ecd5b749386d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_387a857dd330eb5e739fb434e972a6a28f321a649883868fe08ecd5b749386d6->leave($__internal_387a857dd330eb5e739fb434e972a6a28f321a649883868fe08ecd5b749386d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
