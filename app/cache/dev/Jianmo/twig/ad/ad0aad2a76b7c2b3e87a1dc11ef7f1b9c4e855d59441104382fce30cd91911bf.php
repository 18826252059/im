<?php

/* TopxiaAdminBundle:Navigation:index.html.twig */
class __TwigTemplate_d3886c69aaa057d4804fcc40f60f52a386a5981920f4093ead698b815f8ab436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Navigation:index.html.twig", 1);
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
        $__internal_c75ca779b9c5aa837d202977bb61795f62ea393eccdd27a388f04110ce329c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75ca779b9c5aa837d202977bb61795f62ea393eccdd27a388f04110ce329c85->enter($__internal_c75ca779b9c5aa837d202977bb61795f62ea393eccdd27a388f04110ce329c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Navigation:index.html.twig"));

        // line 3
        $context["script_controller"] = "navigation/index";
        // line 5
        $context["menu"] = (("admin_" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) . "_navigation");
        // line 6
        $context["types"] = array("top" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("顶部"), "foot" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("底部"), "friendlyLink" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("友情链接"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75ca779b9c5aa837d202977bb61795f62ea393eccdd27a388f04110ce329c85->leave($__internal_c75ca779b9c5aa837d202977bb61795f62ea393eccdd27a388f04110ce329c85_prof);

    }

    // line 8
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_3a047563aaacc160b22c73652951464a94a45d4b00b4bed8727c1618f02f745a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a047563aaacc160b22c73652951464a94a45d4b00b4bed8727c1618f02f745a->enter($__internal_3a047563aaacc160b22c73652951464a94a45d4b00b4bed8727c1618f02f745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        echo " 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
        echo "\">";
        if (($this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array") == "友情链接")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增%types[type]%", array("%types[type]%" => $this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增%types[type]%导航", array("%types[type]%" => $this->getAttribute((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"))), "html", null, true);
        }
        echo "</button>
";
        
        $__internal_3a047563aaacc160b22c73652951464a94a45d4b00b4bed8727c1618f02f745a->leave($__internal_3a047563aaacc160b22c73652951464a94a45d4b00b4bed8727c1618f02f745a_prof);

    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        $__internal_fc6236da60ba09f10c9721f8e25cfda496127afad1f55f206c75faa550945052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6236da60ba09f10c9721f8e25cfda496127afad1f55f206c75faa550945052->enter($__internal_fc6236da60ba09f10c9721f8e25cfda496127afad1f55f206c75faa550945052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "
";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "foot")) {
            // line 15
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("清秋主题、默认主题A、默认主题B、雅致简洁之外的主题，请前往"), "html", null, true);
            echo " <a class=\"text-info\" style=\"font-weight:bold;\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block", array("category" => "theme"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("［运营］－［编辑区管理］"), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中进行编辑。"), "html", null, true);
            echo "</div>
";
        } elseif ((        // line 16
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "friendlyLink")) {
            // line 17
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如需在首页显示友情链接模块，请在对应"), "html", null, true);
            echo "<a class=\"text-info\" style=\"font-weight:bold;\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题管理"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中添加相应模块，暂仅支持简墨主题。"), "html", null, true);
            echo "
</div>
";
        }
        // line 20
        echo "
<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table sortable-list\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新开窗口"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>  
      <th width=\"30%\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
    
  ";
        // line 31
        $this->loadTemplate("TopxiaAdminBundle:Navigation:tbody.html.twig", "TopxiaAdminBundle:Navigation:index.html.twig", 31)->display($context);
        // line 32
        echo "</table>
    
<div class=\"alert alert-info\">
  <p>会员专区：域名/vip</p>
  <p>直播首页：域名/live</p>
  <p>小组首页：域名/group</p>
  <p>资讯首页：域名/article</p>
  <p>师资力量：域名/teacher</p>
  <p>移动端首页：域名/mobile</p>
  <p>个人主页：域名/my/page/show</p>
  <p>课程列表页：域名/course/explore</p>
  <p>班级列表页：域名/classroom/explore</p>
  <p>公开课列表页：域名/open/course/explore</p>
  <p>课程分类：域名/course/explore/分类编码</p>
  <p>资讯栏目：域名/article/栏目编码</p>
</div>

";
        
        $__internal_fc6236da60ba09f10c9721f8e25cfda496127afad1f55f206c75faa550945052->leave($__internal_fc6236da60ba09f10c9721f8e25cfda496127afad1f55f206c75faa550945052_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  127 => 31,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  102 => 20,  89 => 17,  87 => 16,  76 => 15,  74 => 14,  71 => 13,  65 => 12,  50 => 9,  42 => 8,  35 => 1,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'navigation/index' %}

{% set menu = 'admin_'~type~'_navigation' %}
{% set types = {top:'顶部'|trans, foot:'底部'|trans, friendlyLink:'友情链接'|trans} %}

{% block page_buttons %} 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_navigation_create', {type: type}) }}\">{% if types[type] == '友情链接' %}{{'新增%types[type]%'|trans({'%types[type]%': types[type] })}}{% else %}{{'新增%types[type]%导航'|trans({'%types[type]%': types[type] })}}{% endif %}</button>
{% endblock %}

{% block main %}

{% if type == 'foot' %}
<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> {{'清秋主题、默认主题A、默认主题B、雅致简洁之外的主题，请前往'|trans}} <a class=\"text-info\" style=\"font-weight:bold;\" href=\"{{ path('admin_block', {category:'theme'}) }}\">{{'［运营］－［编辑区管理］'|trans}}</a> {{'中进行编辑。'|trans}}</div>
{% elseif type == 'friendlyLink' %}
<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> {{'如需在首页显示友情链接模块，请在对应'|trans}}<a class=\"text-info\" style=\"font-weight:bold;\" href=\"{{ path('admin_setting_theme') }}\">{{'主题管理'|trans}}</a>{{'中添加相应模块，暂仅支持简墨主题。'|trans}}
</div>
{% endif %}

<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table sortable-list\">
  <thead>
    <tr>
      <th width=\"50%\">{{'名称'|trans}}</th>
      <th width=\"10%\">{{'新开窗口'|trans}}</th>
      <th width=\"10%\">{{'状态'|trans}}</th>  
      <th width=\"30%\">{{'操作'|trans}}</th>
    </tr>
  </thead>
    
  {% include 'TopxiaAdminBundle:Navigation:tbody.html.twig' %}
</table>
    
<div class=\"alert alert-info\">
  <p>会员专区：域名/vip</p>
  <p>直播首页：域名/live</p>
  <p>小组首页：域名/group</p>
  <p>资讯首页：域名/article</p>
  <p>师资力量：域名/teacher</p>
  <p>移动端首页：域名/mobile</p>
  <p>个人主页：域名/my/page/show</p>
  <p>课程列表页：域名/course/explore</p>
  <p>班级列表页：域名/classroom/explore</p>
  <p>公开课列表页：域名/open/course/explore</p>
  <p>课程分类：域名/course/explore/分类编码</p>
  <p>资讯栏目：域名/article/栏目编码</p>
</div>

{% endblock %}
";
    }
}
