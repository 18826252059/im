<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03021d0ff8e7a4930806002e6747eb29756354755003996189e471897be6787d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ab6290eb0888af05a88e4bf29a4e1178fe2ab397efde78edb68a829b04c88b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6290eb0888af05a88e4bf29a4e1178fe2ab397efde78edb68a829b04c88b81->enter($__internal_ab6290eb0888af05a88e4bf29a4e1178fe2ab397efde78edb68a829b04c88b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6290eb0888af05a88e4bf29a4e1178fe2ab397efde78edb68a829b04c88b81->leave($__internal_ab6290eb0888af05a88e4bf29a4e1178fe2ab397efde78edb68a829b04c88b81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6d2cfcaf05392bdced68085f49e1e70a6352c3721d8600f3181db7317291cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d2cfcaf05392bdced68085f49e1e70a6352c3721d8600f3181db7317291cfc->enter($__internal_b6d2cfcaf05392bdced68085f49e1e70a6352c3721d8600f3181db7317291cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6d2cfcaf05392bdced68085f49e1e70a6352c3721d8600f3181db7317291cfc->leave($__internal_b6d2cfcaf05392bdced68085f49e1e70a6352c3721d8600f3181db7317291cfc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84585a0b780a617d11efef5f5a02cd0a465bb0020427f29409d39709a722a136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84585a0b780a617d11efef5f5a02cd0a465bb0020427f29409d39709a722a136->enter($__internal_84585a0b780a617d11efef5f5a02cd0a465bb0020427f29409d39709a722a136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84585a0b780a617d11efef5f5a02cd0a465bb0020427f29409d39709a722a136->leave($__internal_84585a0b780a617d11efef5f5a02cd0a465bb0020427f29409d39709a722a136_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2191130f3eee51f2041d04f54347d00ce1a6800242180478d22127aa0f4859a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2191130f3eee51f2041d04f54347d00ce1a6800242180478d22127aa0f4859a6->enter($__internal_2191130f3eee51f2041d04f54347d00ce1a6800242180478d22127aa0f4859a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2191130f3eee51f2041d04f54347d00ce1a6800242180478d22127aa0f4859a6->leave($__internal_2191130f3eee51f2041d04f54347d00ce1a6800242180478d22127aa0f4859a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
