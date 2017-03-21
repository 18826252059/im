<?php

/* TopxiaAdminBundle:Block:table.html.twig */
class __TwigTemplate_6a2eb9dca282df37beebdf8646095ebc9575a9d94d294608a0ad3eb8ae4cd249 extends Twig_Template
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
        $__internal_5d2ea096577e45b12f1cb61e31cd7fac883ffe1f5ae7cf4a0eab66dfdbe6dec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2ea096577e45b12f1cb61e31cd7fac883ffe1f5ae7cf4a0eab66dfdbe6dec7->enter($__internal_5d2ea096577e45b12f1cb61e31cd7fac883ffe1f5ae7cf4a0eab66dfdbe6dec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Block:table.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_block", array("category" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_block", array("category" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前主题"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_block", array("category" => "system"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "system")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统"), "html", null, true);
        echo "</a>

";
        // line 8
        $context["url"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_match") . "?q={{query}}");
        // line 9
        echo "</div>
<input class=\"form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索编辑区"), "html", null, true);
        echo "\" data-url='";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "'>
";
        
        $__internal_5d2ea096577e45b12f1cb61e31cd7fac883ffe1f5ae7cf4a0eab66dfdbe6dec7->leave($__internal_5d2ea096577e45b12f1cb61e31cd7fac883ffe1f5ae7cf4a0eab66dfdbe6dec7_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  60 => 9,  58 => 8,  47 => 6,  36 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"btn-group\">
<a href=\"{{ url('admin_block', {category: 'all'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'all'%} btn-primary{% endif %}\">{{'所有'|trans}}</a>

<a href=\" {{ url('admin_block', {category: 'theme'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'theme'%}btn-primary{% endif %}\">{{'当前主题'|trans}}</a>

<a href=\" {{ url('admin_block', {category: 'system'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'system'%}btn-primary{% endif %}\">{{'系统'|trans}}</a>

{% set url = path('admin_block_match') ~ '?q={{query}}' %}
</div>
<input class=\"form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"{{'搜索编辑区'|trans}}\" data-url='{{url}}'>
";
    }
}
