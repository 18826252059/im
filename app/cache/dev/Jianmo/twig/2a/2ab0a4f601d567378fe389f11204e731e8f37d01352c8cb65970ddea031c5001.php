<?php

/* TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig */
class __TwigTemplate_3e6401539871aad18fa3028141941ad5358bc30bcc3994e7d03bd1a17671fd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'analysisHead' => array($this, 'block_analysisHead'),
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_739036c9495c83330f623f075957d821185f477668bd3ed4da1cb14385c7c678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739036c9495c83330f623f075957d821185f477668bd3ed4da1cb14385c7c678->enter($__internal_739036c9495c83330f623f075957d821185f477668bd3ed4da1cb14385c7c678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig"));

        // line 2
        $context["panel"] = "dashboard";
        // line 3
        $context["nav"] = "system";
        // line 4
        $context["menu"] = "admin_operation_analysis";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739036c9495c83330f623f075957d821185f477668bd3ed4da1cb14385c7c678->leave($__internal_739036c9495c83330f623f075957d821185f477668bd3ed4da1cb14385c7c678_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_0317af3ca0cfc5bd30398454c073ee42d27f704241c305f37e283a7f8e00f987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0317af3ca0cfc5bd30398454c073ee42d27f704241c305f37e283a7f8e00f987->enter($__internal_0317af3ca0cfc5bd30398454c073ee42d27f704241c305f37e283a7f8e00f987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery/morris/0.5.0/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"row\">


  <div class=\"col-md-12\">
  ";
        // line 12
        $this->displayBlock('analysisHead', $context, $blocks);
        // line 63
        $this->displayBlock('analysisBody', $context, $blocks);
        // line 65
        echo "</div>
</div>

";
        
        $__internal_0317af3ca0cfc5bd30398454c073ee42d27f704241c305f37e283a7f8e00f987->leave($__internal_0317af3ca0cfc5bd30398454c073ee42d27f704241c305f37e283a7f8e00f987_prof);

    }

    // line 12
    public function block_analysisHead($context, array $blocks = array())
    {
        $__internal_44a6f478ccfa1d3a4e47d751ba1f44cba44e384e54fc416ee9d9bacb0b6e1f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a6f478ccfa1d3a4e47d751ba1f44cba44e384e54fc416ee9d9bacb0b6e1f90->enter($__internal_44a6f478ccfa1d3a4e47d751ba1f44cba44e384e54fc416ee9d9bacb0b6e1f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "analysisHead"));

        // line 13
        echo "  <div class=\"col-md-12\">
";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form  class=\"well well-sm form-inline\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_operation_analysis_rount", array("tab" => (isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")))), "html", null, true);
        echo "\" method=\"get\" id=\"operation-form\"  role=\"form\" >
          <div class=\"form-group\">
    <select class=\"form-control\" name=\"analysisDateType\">
        ";
        // line 19
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("analysisDateType"), $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType", array()));
        echo "
    </select>
  </div>
        <div class=\"form-group\">
         <a  type=\"button\" class=\"btn btn-default\"  id=\"btn-month\" currentMonthStart=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "currentMonthStart", array()), "html", null, true);
        echo "\" currentMonthEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "currentMonthEnd", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本月"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"form-group\">
         <a type=\"button\"  class=\"btn btn-default \"  id=\"btn-lastMonth\" lastMonthStart=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastMonthStart", array()), "html", null, true);
        echo "\" lastMonthEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastMonthEnd", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上月"), "html", null, true);
        echo "</a>
        </div>

        <div class=\"form-group\">
          <a type=\"button\"  class=\"btn btn-default \" id=\"btn-lastThreeMonths\" lastThreeMonthsStart=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastThreeMonthsStart", array()), "html", null, true);
        echo "\" lastThreeMonthsEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "lastThreeMonthsEnd", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("近三月"), "html", null, true);
        echo "</a>
        </div>

        <div class=\"form-group mll\">
          <label class=\"ptm\" >";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始日期"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control analysis-input mls\" name=\"startTime\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "startTime", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group mls\">
          <label class=\"ptm\" >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("截止日期"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control analysis-input mls\"  name=\"endTime\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "endTime", array()), "html", null, true);
        echo "\">
        </div>

        <button class=\"btn btn-primary pull-right\" id=\"btn-search\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查询"), "html", null, true);
        echo "</button>
      </form>

      ";
        // line 46
        if ((((array_key_exists("showHelpMessage", $context)) ? (_twig_default_filter((isset($context["showHelpMessage"]) ? $context["showHelpMessage"] : $this->getContext($context, "showHelpMessage")), null)) : (null)) == 1)) {
            // line 47
            echo "        <div class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频观看数，将从数据统计功能更新启用之日起开始记录"), "html", null, true);
            echo "</div>
      ";
        }
        // line 49
        echo "  </div>
  <div class=\"col-md-12\">
    ";
        // line 51
        if (((((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "trend") && ($this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType", array()) != "courseSum")) && ($this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType", array()) != "userSum"))) {
            // line 52
            echo "      <p class=\"text-muted\">
      <span class=\"mrl\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数："), "html", null, true);
            echo "<strong class=\"inflow-num\">";
            echo twig_escape_filter($this->env, ((array_key_exists("count", $context)) ? (_twig_default_filter((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), 0)) : (0)), "html", null, true);
            echo "</strong></span>
    ";
        }
        // line 55
        echo "  </div>
  <div class=\"col-md-12\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li role=\"presentation\"";
        // line 58
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "trend")) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), array("tab" => "trend", "startTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "endTime", array()), "analysisDateType" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("趋势"), "html", null, true);
        echo "</a></li>
        <li role=\"presentation\" ";
        // line 59
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "detail")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["href"]) ? $context["href"] : $this->getContext($context, "href")), array("tab" => "detail", "startTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "endTime", array()), "analysisDateType" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : $this->getContext($context, "dataInfo")), "analysisDateType", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("明细"), "html", null, true);
        echo "</a></li>
      </ul>
  </div>
";
        
        $__internal_44a6f478ccfa1d3a4e47d751ba1f44cba44e384e54fc416ee9d9bacb0b6e1f90->leave($__internal_44a6f478ccfa1d3a4e47d751ba1f44cba44e384e54fc416ee9d9bacb0b6e1f90_prof);

    }

    // line 63
    public function block_analysisBody($context, array $blocks = array())
    {
        $__internal_a4be0fcd960305dc9a2759e25d00d590ef0dd0665a750102fd027688027a7c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4be0fcd960305dc9a2759e25d00d590ef0dd0665a750102fd027688027a7c33->enter($__internal_a4be0fcd960305dc9a2759e25d00d590ef0dd0665a750102fd027688027a7c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "analysisBody"));

        
        $__internal_a4be0fcd960305dc9a2759e25d00d590ef0dd0665a750102fd027688027a7c33->leave($__internal_a4be0fcd960305dc9a2759e25d00d590ef0dd0665a750102fd027688027a7c33_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 63,  197 => 59,  187 => 58,  182 => 55,  175 => 53,  172 => 52,  170 => 51,  166 => 49,  160 => 47,  158 => 46,  152 => 43,  146 => 40,  142 => 39,  135 => 35,  131 => 34,  120 => 30,  109 => 26,  99 => 23,  92 => 19,  86 => 16,  81 => 14,  78 => 13,  72 => 12,  62 => 65,  60 => 63,  58 => 12,  49 => 7,  43 => 6,  36 => 1,  34 => 4,  32 => 3,  30 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}
{% set panel = 'dashboard' %}
{% set nav = 'system' %}
{% set menu = 'admin_operation_analysis' %}

{% block main %}
  <link href=\"{{ asset('assets/libs/gallery/morris/0.5.0/morris.css') }}\" rel=\"stylesheet\" />
<div class=\"row\">


  <div class=\"col-md-12\">
  {% block analysisHead %}
  <div class=\"col-md-12\">
{{ web_macro.flash_messages() }}

  <form  class=\"well well-sm form-inline\" action=\"{{url(\"admin_operation_analysis_rount\",{tab:tab})}}\" method=\"get\" id=\"operation-form\"  role=\"form\" >
          <div class=\"form-group\">
    <select class=\"form-control\" name=\"analysisDateType\">
        {{ select_options(dict('analysisDateType'), dataInfo.analysisDateType) }}
    </select>
  </div>
        <div class=\"form-group\">
         <a  type=\"button\" class=\"btn btn-default\"  id=\"btn-month\" currentMonthStart=\"{{dataInfo.currentMonthStart}}\" currentMonthEnd=\"{{dataInfo.currentMonthEnd}}\">{{'本月'|trans}}</a>
        </div>
        <div class=\"form-group\">
         <a type=\"button\"  class=\"btn btn-default \"  id=\"btn-lastMonth\" lastMonthStart=\"{{dataInfo.lastMonthStart}}\" lastMonthEnd=\"{{dataInfo.lastMonthEnd}}\">{{'上月'|trans}}</a>
        </div>

        <div class=\"form-group\">
          <a type=\"button\"  class=\"btn btn-default \" id=\"btn-lastThreeMonths\" lastThreeMonthsStart=\"{{dataInfo.lastThreeMonthsStart}}\" lastThreeMonthsEnd=\"{{dataInfo.lastThreeMonthsEnd}}\">{{'近三月'|trans}}</a>
        </div>

        <div class=\"form-group mll\">
          <label class=\"ptm\" >{{'起始日期'|trans}}</label>
            <input type=\"text\" class=\"form-control analysis-input mls\" name=\"startTime\" value=\"{{dataInfo.startTime}}\">
        </div>

        <div class=\"form-group mls\">
          <label class=\"ptm\" >{{'截止日期'|trans}}</label>
            <input type=\"text\" class=\"form-control analysis-input mls\"  name=\"endTime\" value=\"{{dataInfo.endTime}}\">
        </div>

        <button class=\"btn btn-primary pull-right\" id=\"btn-search\">{{'查询'|trans}}</button>
      </form>

      {% if showHelpMessage|default(null ) == 1 %}
        <div class=\"help-block\">{{'视频观看数，将从数据统计功能更新启用之日起开始记录'|trans}}</div>
      {% endif %}
  </div>
  <div class=\"col-md-12\">
    {% if tab == \"trend\" and dataInfo.analysisDateType != 'courseSum' and dataInfo.analysisDateType != 'userSum' %}
      <p class=\"text-muted\">
      <span class=\"mrl\">{{ '总数：'|trans }}<strong class=\"inflow-num\">{{count|default(0)}}</strong></span>
    {% endif %}
  </div>
  <div class=\"col-md-12\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li role=\"presentation\"{% if tab==\"trend\" %} class=\"active\"{% endif %} ><a href=\"{{path(href,{tab:\"trend\",startTime:dataInfo.startTime,endTime:dataInfo.endTime,analysisDateType:dataInfo.analysisDateType})}}\">{{'趋势'|trans}}</a></li>
        <li role=\"presentation\" {% if tab==\"detail\" %} class=\"active\"{% endif %}><a href=\"{{path(href,{tab:\"detail\",startTime:dataInfo.startTime,endTime:dataInfo.endTime,analysisDateType:dataInfo.analysisDateType})}}\">{{'明细'|trans}}</a></li>
      </ul>
  </div>
{% endblock %}
{% block analysisBody %}
{% endblock %}
</div>
</div>

{% endblock %}
";
    }
}
