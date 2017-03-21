<?php

/* SensitiveWordBundle:SensitiveAdmin:index.html.twig */
class __TwigTemplate_6932b11dd2d4f49690150c15e8a60aead23a649f1440ffbac86acc52c09e9442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "SensitiveWordBundle:SensitiveAdmin:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c377dcc0a7eec1650095560f6a93be84d5b35847dbdff150a573e3332888383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c377dcc0a7eec1650095560f6a93be84d5b35847dbdff150a573e3332888383->enter($__internal_4c377dcc0a7eec1650095560f6a93be84d5b35847dbdff150a573e3332888383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensitiveWordBundle:SensitiveAdmin:index.html.twig"));

        // line 3
        $context["menu"] = "admin_keyword";
        // line 6
        $context["script_controller"] = "sensitivewordbundle/keyword/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c377dcc0a7eec1650095560f6a93be84d5b35847dbdff150a573e3332888383->leave($__internal_4c377dcc0a7eec1650095560f6a93be84d5b35847dbdff150a573e3332888383_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_f5928c6f832e8356ddd31352f96320e599ce2dadb186f9d649295ee6b33ad295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5928c6f832e8356ddd31352f96320e599ce2dadb186f9d649295ee6b33ad295->enter($__internal_f5928c6f832e8356ddd31352f96320e599ce2dadb186f9d649295ee6b33ad295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "  <form id=\"keyword-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\">
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"state\">
        ";
        // line 12
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("state"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "state"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有类型"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"searchKeyWord\">
        ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("searchKeyWord"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "searchKeyWord"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索关键字"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

  </form>
  ";
        // line 26
        if ((isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords"))) {
            // line 27
            echo "    <table class=\"table table-striped table-hover\" id=\"keyword-table\" data-search-form=\"#keyword-search-form\">
      <thead>
      <tr>
        <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
            echo "</th>
        <th width=\"30%\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("敏感词"), "html", null, true);
            echo "</th>
        <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
            echo "</th>
        <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("屏蔽次数"), "html", null, true);
            echo "</th>
        <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加时间"), "html", null, true);
            echo "</th>
        <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : $this->getContext($context, "keywords")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                // line 40
                echo "        ";
                $this->loadTemplate("SensitiveWordBundle:SensitiveAdmin:table-tr.html.twig", "SensitiveWordBundle:SensitiveAdmin:index.html.twig", 40)->display($context);
                // line 41
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </tbody>

    </table>
  ";
        } else {
            // line 46
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无敏感词信息!"), "html", null, true);
            echo "</div>
  ";
        }
        // line 48
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_f5928c6f832e8356ddd31352f96320e599ce2dadb186f9d649295ee6b33ad295->leave($__internal_f5928c6f832e8356ddd31352f96320e599ce2dadb186f9d649295ee6b33ad295_prof);

    }

    public function getTemplateName()
    {
        return "SensitiveWordBundle:SensitiveAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 48,  152 => 46,  146 => 42,  132 => 41,  129 => 40,  112 => 39,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  80 => 27,  78 => 26,  72 => 23,  65 => 21,  58 => 17,  50 => 12,  45 => 9,  39 => 8,  32 => 1,  30 => 6,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_keyword' %}


{% set script_controller = 'sensitivewordbundle/keyword/list' %}

{% block main %}
  <form id=\"keyword-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\">
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"state\">
        {{ select_options(dict('state'), app.request.query.get('state'), '所有类型'|trans) }}
      </select>
    </div>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"searchKeyWord\">
        {{ select_options(dict('searchKeyWord'), app.request.query.get('searchKeyWord')) }}
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"{{  app.request.query.get('keyword')  }}\" placeholder=\"{{'搜索关键字'|trans}}\">
    </div>
    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>

  </form>
  {% if keywords %}
    <table class=\"table table-striped table-hover\" id=\"keyword-table\" data-search-form=\"#keyword-search-form\">
      <thead>
      <tr>
        <th>{{'编号'|trans}}</th>
        <th width=\"30%\">{{'敏感词'|trans}}</th>
        <th>{{'类型'|trans}}</th>
        <th>{{'屏蔽次数'|trans}}</th>
        <th>{{'添加时间'|trans}}</th>
        <th>{{'操作'|trans}}</th>
      </tr>
      </thead>
      <tbody>
      {% for keyword in keywords %}
        {% include 'SensitiveWordBundle:SensitiveAdmin:table-tr.html.twig' %}
      {% endfor %}
      </tbody>

    </table>
  {% else %}
    <div class=\"empty\">{{'暂无敏感词信息!'|trans}}</div>
  {% endif %}
  {{ web_macro.paginator(paginator) }}
{% endblock %}";
    }
}
