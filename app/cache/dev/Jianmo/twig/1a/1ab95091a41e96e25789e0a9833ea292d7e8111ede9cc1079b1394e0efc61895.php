<?php

/* TopxiaAdminBundle:Content:index.html.twig */
class __TwigTemplate_ceaa9c8d5a396553af95c874c63716ff9771620755fb434598298992b50a113d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Content:index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67d1be585833cb506d283e5bb1b651c2f38570c6298144e62d72e6a4430e80b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d1be585833cb506d283e5bb1b651c2f38570c6298144e62d72e6a4430e80b0->enter($__internal_67d1be585833cb506d283e5bb1b651c2f38570c6298144e62d72e6a4430e80b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Content:index.html.twig"));

        // line 3
        $context["script_controller"] = "content/list";
        // line 5
        $context["menu"] = "admin_content";
        // line 6
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "type"), "method");
        // line 7
        $context["typeName"] = $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("contentType"), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d1be585833cb506d283e5bb1b651c2f38570c6298144e62d72e6a4430e80b0->leave($__internal_67d1be585833cb506d283e5bb1b651c2f38570c6298144e62d72e6a4430e80b0_prof);

    }

    // line 9
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_4fbc6d0e7e5c6dd1b17af3c53814931b220b7fe7a5d07db69d2b5ca7f1d0237f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbc6d0e7e5c6dd1b17af3c53814931b220b7fe7a5d07db69d2b5ca7f1d0237f->enter($__internal_4fbc6d0e7e5c6dd1b17af3c53814931b220b7fe7a5d07db69d2b5ca7f1d0237f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        echo "  \t
\t<button class=\"btn btn-success btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["typeName"]) ? $context["typeName"] : $this->getContext($context, "typeName")), "html", null, true);
        echo "</button>
";
        
        $__internal_4fbc6d0e7e5c6dd1b17af3c53814931b220b7fe7a5d07db69d2b5ca7f1d0237f->leave($__internal_4fbc6d0e7e5c6dd1b17af3c53814931b220b7fe7a5d07db69d2b5ca7f1d0237f_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_8b84420c92f5db2664059a43d5f099c23d5a80fcb31ab4654be38ba3bca65041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b84420c92f5db2664059a43d5f099c23d5a80fcb31ab4654be38ba3bca65041->enter($__internal_8b84420c92f5db2664059a43d5f099c23d5a80fcb31ab4654be38ba3bca65041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 18
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("contentStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有状态--"));
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\">
\t<button class=\"btn btn-primary\" type=\"submit\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"30%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("页面地址"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布时间/人"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 41
        if ((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents"))) {
            // line 42
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 43
                echo "\t\t\t  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["content"], "userId", array()), array(), "array");
                // line 44
                echo "\t\t\t  ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 45
                echo "\t\t\t  ";
                $this->loadTemplate("TopxiaAdminBundle:Content:content-tr.html.twig", "TopxiaAdminBundle:Content:index.html.twig", 45)->display($context);
                // line 46
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t";
        } else {
            // line 48
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无记录"), "html", null, true);
            echo "</div></td></tr>
\t\t";
        }
        // line 50
        echo "\t</tbody>
</table>

";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_8b84420c92f5db2664059a43d5f099c23d5a80fcb31ab4654be38ba3bca65041->leave($__internal_8b84420c92f5db2664059a43d5f099c23d5a80fcb31ab4654be38ba3bca65041_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 53,  183 => 50,  177 => 48,  174 => 47,  160 => 46,  157 => 45,  154 => 44,  151 => 43,  133 => 42,  131 => 41,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  94 => 25,  90 => 24,  83 => 22,  76 => 18,  70 => 14,  64 => 13,  52 => 10,  44 => 9,  37 => 1,  35 => 7,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'content/list' %}

{% set menu = 'admin_content' %}
{% set type = app.request.get('type') %}
{% set typeName = dict('contentType')[type] %}

{% block page_buttons %}  \t
\t<button class=\"btn btn-success btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_content_create', {type: type}) }}\"> {{'添加'|trans}}{{ typeName }}</button>
{% endblock %}

{% block main %}

<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  {{ select_options(dict('contentStatus'), app.request.query.get('status'), '--所有状态--'|trans) }}
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"{{'关键词'|trans}}\" value=\"{{ app.request.query.get('keywords') }}\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"{{ type }}\">
\t<button class=\"btn btn-primary\" type=\"submit\">{{'搜索'|trans}}</button>

</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"30%\">{{'标题'|trans}}</th>
\t\t\t<th>{{'页面地址'|trans}}</th>
\t\t\t<th>{{'类型'|trans}}</th>
\t\t\t<th>{{'状态'|trans}}</th>
\t\t\t<th>{{'发布时间/人'|trans}}</th>
\t\t\t<th>{{'操作'|trans}}</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% if contents %}
\t\t\t{% for content in contents %}
\t\t\t  {% set user = users[content.userId] %}
\t\t\t  {% set category = categories[content.categoryId]|default(null) %}
\t\t\t  {% include 'TopxiaAdminBundle:Content:content-tr.html.twig' %}
\t\t\t{% endfor %}
\t\t{% else %}
\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">{{'暂无记录'|trans}}</div></td></tr>
\t\t{% endif %}
\t</tbody>
</table>

{{ admin_macro.paginator(paginator) }}

{% endblock %}";
    }
}
