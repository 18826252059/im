<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b870df6a93870d4e33ffeddffb966047c3cab992f07d7e5bc081fc47a02e2a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89014e23250428dae1b3437d395ba350603f6d03edaa3bf05ca7f6b152bd954e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89014e23250428dae1b3437d395ba350603f6d03edaa3bf05ca7f6b152bd954e->enter($__internal_89014e23250428dae1b3437d395ba350603f6d03edaa3bf05ca7f6b152bd954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89014e23250428dae1b3437d395ba350603f6d03edaa3bf05ca7f6b152bd954e->leave($__internal_89014e23250428dae1b3437d395ba350603f6d03edaa3bf05ca7f6b152bd954e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fb88447e0a2435107830139f0ff19e2d6767c042d20a209c1f1d76dd419e67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb88447e0a2435107830139f0ff19e2d6767c042d20a209c1f1d76dd419e67d->enter($__internal_1fb88447e0a2435107830139f0ff19e2d6767c042d20a209c1f1d76dd419e67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1fb88447e0a2435107830139f0ff19e2d6767c042d20a209c1f1d76dd419e67d->leave($__internal_1fb88447e0a2435107830139f0ff19e2d6767c042d20a209c1f1d76dd419e67d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ebe9ddae5b6f88bbe3f1f1447cdd52358dc7a4a4cea09099f79cef540d30449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebe9ddae5b6f88bbe3f1f1447cdd52358dc7a4a4cea09099f79cef540d30449->enter($__internal_6ebe9ddae5b6f88bbe3f1f1447cdd52358dc7a4a4cea09099f79cef540d30449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6ebe9ddae5b6f88bbe3f1f1447cdd52358dc7a4a4cea09099f79cef540d30449->leave($__internal_6ebe9ddae5b6f88bbe3f1f1447cdd52358dc7a4a4cea09099f79cef540d30449_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0752d4d49b889cc0424cc964ed1e78962b83fb14aefc3010a30d625c9142e947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0752d4d49b889cc0424cc964ed1e78962b83fb14aefc3010a30d625c9142e947->enter($__internal_0752d4d49b889cc0424cc964ed1e78962b83fb14aefc3010a30d625c9142e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0752d4d49b889cc0424cc964ed1e78962b83fb14aefc3010a30d625c9142e947->leave($__internal_0752d4d49b889cc0424cc964ed1e78962b83fb14aefc3010a30d625c9142e947_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
