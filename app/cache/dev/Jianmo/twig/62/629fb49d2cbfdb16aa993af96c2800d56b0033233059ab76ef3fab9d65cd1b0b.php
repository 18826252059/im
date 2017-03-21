<?php

/* TopxiaAdminBundle:System:optimize.html.twig */
class __TwigTemplate_a3e2dad512615ab27529c8310bf9f66d23e2252f1f9fb342364cd7a3801bd394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:optimize.html.twig", 1);
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
        $__internal_04f6e7525ce0defe0c054817427ce5ac3b00a7e1a7b2f46af7cbf9e59e2b2d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f6e7525ce0defe0c054817427ce5ac3b00a7e1a7b2f46af7cbf9e59e2b2d07->enter($__internal_04f6e7525ce0defe0c054817427ce5ac3b00a7e1a7b2f46af7cbf9e59e2b2d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:optimize.html.twig"));

        // line 3
        $context["menu"] = "admin_optimize_settings";
        // line 5
        $context["script_controller"] = "optimize/optimize";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04f6e7525ce0defe0c054817427ce5ac3b00a7e1a7b2f46af7cbf9e59e2b2d07->leave($__internal_04f6e7525ce0defe0c054817427ce5ac3b00a7e1a7b2f46af7cbf9e59e2b2d07_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a672c34c7ce2d5b3ee7ed49bdb98993012196067ff049171ea30d6efdc446f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a672c34c7ce2d5b3ee7ed49bdb98993012196067ff049171ea30d6efdc446f6->enter($__internal_6a672c34c7ce2d5b3ee7ed49bdb98993012196067ff049171ea30d6efdc446f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "




<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("刷新缓存"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("刷新并重建缓存,让系统保持最优的状态。"), "html", null, true);
        echo " 
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_remove_cache");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("刷新缓存"), "html", null, true);
        echo "</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优化磁盘空间"), "html", null, true);
        echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移除系统的临时数据，释放出更多磁盘空间。"), "html", null, true);
        echo "
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_remove_tmp");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优化磁盘空间"), "html", null, true);
        echo "</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\" style=\"display: none\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("数据库备份和下载"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("备份数据库，并下载备份文件"), "html", null, true);
        echo "。 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下载完成后请"), "html", null, true);
        echo "<span class=\"text-info\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优化磁盘空间"), "html", null, true);
        echo "</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_backupdb");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("数据库备份和下载"), "html", null, true);
        echo "</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下载数据库备份"), "html", null, true);
        echo "</a></span>
  \t</p>
  </div>
</div>

<hr/>
<h1><small>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("谨慎操作区域"), "html", null, true);
        echo "</small></h1>
<hr/>

";
        // line 64
        if (!twig_in_filter("upgrade", (isset($context["disabled_features"]) ? $context["disabled_features"] : $this->getContext($context, "disabled_features")))) {
            // line 65
            echo "\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading \">
\t    <h3 class=\"panel-title text-warning\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("清空系统备份数据"), "html", null, true);
            echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p class=\"text-warning\">
\t       ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("慎重：请确保当前系统已经升级成功。当系统升级过程中发生意外，备份的系统文件和数据库可用于恢复。"), "html", null, true);
            echo "
\t    </p>   \t
\t    <p>
\t       ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("清空系统升级过程中备份的系统文件和备数据库。通过清空系统备份数据，可以让系统释放出更多的磁盘空间"), "html", null, true);
            echo "
\t    <p/>
\t    <p >
\t  \t\t<button id=\"removeBackup\" class=\"btn btn-warning fr\" data-url=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_remove_backup");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("清空系统备份数据"), "html", null, true);
            echo "</button>
\t  \t</p>
\t  </div>
\t</div>

";
        }
        // line 83
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title text-warning\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优化课程视频和相关资料文件"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
   \t<p class=\"text-warning\">
       ";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注意：该功能慎用。请仔细阅读下列说明："), "html", null, true);
        echo " 
    </p>
     <p>
       ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优化课程文件，将已经不存在系统中的课程相关上传文件移除。假如您希望保留这些数据，
       请不要执行该功能。"), "html", null, true);
        // line 94
        echo "
    </p>
    <p>
  \t\t<a id=\"optimizeFile\" class=\"btn btn-danger fr\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_optimize_remove_show_progressbar");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("优化课程文件"), "html", null, true);
        echo "</a>
  \t</p>
  </div>
</div>

";
        
        $__internal_6a672c34c7ce2d5b3ee7ed49bdb98993012196067ff049171ea30d6efdc446f6->leave($__internal_6a672c34c7ce2d5b3ee7ed49bdb98993012196067ff049171ea30d6efdc446f6_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:optimize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 97,  206 => 94,  203 => 93,  197 => 90,  190 => 86,  185 => 83,  174 => 77,  168 => 74,  162 => 71,  155 => 67,  151 => 65,  149 => 64,  143 => 61,  134 => 55,  126 => 52,  116 => 49,  109 => 45,  96 => 37,  90 => 34,  83 => 30,  71 => 23,  65 => 20,  58 => 16,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_optimize_settings' %}

{% set script_controller = 'optimize/optimize' %}

{% block main %}

\t{{ web_macro.flash_messages() }}




<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">{{'刷新缓存'|trans}}</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      {{'刷新并重建缓存,让系统保持最优的状态。'|trans}} 
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"{{ url('admin_optimize_remove_cache') }}\">{{'刷新缓存'|trans}}</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">{{'优化磁盘空间'|trans}}</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       {{'移除系统的临时数据，释放出更多磁盘空间。'|trans}}
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"{{ url('admin_optimize_remove_tmp') }}\">{{'优化磁盘空间'|trans}}</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\" style=\"display: none\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">{{'数据库备份和下载'|trans}}</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       {{'备份数据库，并下载备份文件'|trans}}。 {{'下载完成后请'|trans}}<span class=\"text-info\">{{'优化磁盘空间'|trans}}</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"{{ url('admin_optimize_backupdb') }}\">{{'数据库备份和下载'|trans}}</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">{{'下载数据库备份'|trans}}</a></span>
  \t</p>
  </div>
</div>

<hr/>
<h1><small>{{'谨慎操作区域'|trans}}</small></h1>
<hr/>

{% if 'upgrade' not in disabled_features %}
\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading \">
\t    <h3 class=\"panel-title text-warning\">{{'清空系统备份数据'|trans}}</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p class=\"text-warning\">
\t       {{'慎重：请确保当前系统已经升级成功。当系统升级过程中发生意外，备份的系统文件和数据库可用于恢复。'|trans}}
\t    </p>   \t
\t    <p>
\t       {{'清空系统升级过程中备份的系统文件和备数据库。通过清空系统备份数据，可以让系统释放出更多的磁盘空间'|trans}}
\t    <p/>
\t    <p >
\t  \t\t<button id=\"removeBackup\" class=\"btn btn-warning fr\" data-url=\"{{ url('admin_optimize_remove_backup') }}\">{{ '清空系统备份数据'|trans }}</button>
\t  \t</p>
\t  </div>
\t</div>

{% endif %}

<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title text-warning\">{{'优化课程视频和相关资料文件'|trans}}</h3>
  </div>
  <div class=\"panel-body\">
   \t<p class=\"text-warning\">
       {{'注意：该功能慎用。请仔细阅读下列说明：'|trans}} 
    </p>
     <p>
       {{'优化课程文件，将已经不存在系统中的课程相关上传文件移除。假如您希望保留这些数据，
       请不要执行该功能。'|trans}}
    </p>
    <p>
  \t\t<a id=\"optimizeFile\" class=\"btn btn-danger fr\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ url('admin_optimize_remove_show_progressbar') }}\">{{'优化课程文件'|trans}}</a>
  \t</p>
  </div>
</div>

{% endblock %}";
    }
}
