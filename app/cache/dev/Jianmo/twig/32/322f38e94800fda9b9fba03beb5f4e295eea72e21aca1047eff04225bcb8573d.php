<?php

/* ClassroomBundle:ClassroomManage:students.html.twig */
class __TwigTemplate_b2244c791dc0db5c7849f1c6465e56a4665a41069688d8f1384fe5e1b2079f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:students.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e032b1302bd65d0ee8c50c03043e36393f5f939d8def51cbb224d906f8bd1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e032b1302bd65d0ee8c50c03043e36393f5f939d8def51cbb224d906f8bd1a7->enter($__internal_8e032b1302bd65d0ee8c50c03043e36393f5f939d8def51cbb224d906f8bd1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:students.html.twig"));

        // line 5
        $context["side_nav"] = "students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e032b1302bd65d0ee8c50c03043e36393f5f939d8def51cbb224d906f8bd1a7->leave($__internal_8e032b1302bd65d0ee8c50c03043e36393f5f939d8def51cbb224d906f8bd1a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fed780618b7887341829de9622ee3a85508fd2a7341778b30d0eee31d4853c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed780618b7887341829de9622ee3a85508fd2a7341778b30d0eee31d4853c53->enter($__internal_fed780618b7887341829de9622ee3a85508fd2a7341778b30d0eee31d4853c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_fed780618b7887341829de9622ee3a85508fd2a7341778b30d0eee31d4853c53->leave($__internal_fed780618b7887341829de9622ee3a85508fd2a7341778b30d0eee31d4853c53_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_b93cb75b5136ab56b89d25724d35d6a79cc0d1d49d0bc5a90a926f898afefe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93cb75b5136ab56b89d25724d35d6a79cc0d1d49d0bc5a90a926f898afefe53->enter($__internal_b93cb75b5136ab56b89d25724d35d6a79cc0d1d49d0bc5a90a926f898afefe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员管理"), "html", null, true);
        echo "
  
  ";
        // line 12
        if ((((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))) : ("")) == "auditor")) {
            // line 13
            echo "    <a class=\"btn btn-info btn-sm panel-bar mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))), "html", null, true);
            echo "\" data-datas-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_export_datas", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))), "html", null, true);
            echo "\" data-loading-text=\"正在导出\"><i class=\"glyphicon glyphicon-export\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出旁听生"), "html", null, true);
            echo "</a>
  ";
        } elseif ((((        // line 14
array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))) : ("")) == "student")) {
            // line 15
            echo "    <div class=\"panel-bar\">
      <button class=\"btn btn-info btn-sm mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加学员"), "html", null, true);
            echo "</button>
      ";
            // line 17
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
                // line 18
                echo "        <a class=\"btn btn-info btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_index", array("type" => "classroom-member", "classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量导入"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 20
                echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"班级未发布,不可导入学员\"><i class=\"glyphicon glyphicon-import\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量导入"), "html", null, true);
                echo "</a>
      ";
            }
            // line 22
            echo "      <a class=\"btn btn-info btn-sm mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))), "html", null, true);
            echo "\" data-datas-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_export_datas", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))), "html", null, true);
            echo "\" data-loading-text=\"正在导出\"><i class=\"glyphicon glyphicon-export\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出学员"), "html", null, true);
            echo "</a>
    </div>
   ";
        }
        // line 25
        echo "
  </div>
  <div class=\"panel-body\">

    <ul class=\"nav nav-tabs mbl\">
      <li class=\"";
        // line 30
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "student")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正式学员"), "html", null, true);
        echo "
        </a>
      </li>

      <li class=\"";
        // line 35
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "aduitor")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生"), "html", null, true);
        echo "
        </a>
      </li>

      <li class=\"";
        // line 40
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "record")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_record", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出记录"), "html", null, true);
        echo "
        </a>
      </li>
    </ul>
  ";
        // line 45
        $this->displayBlock('maincontent', $context, $blocks);
        // line 46
        echo "  </div>
</div>

";
        
        $__internal_b93cb75b5136ab56b89d25724d35d6a79cc0d1d49d0bc5a90a926f898afefe53->leave($__internal_b93cb75b5136ab56b89d25724d35d6a79cc0d1d49d0bc5a90a926f898afefe53_prof);

    }

    // line 45
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_9311e5d3c77b273a1c7284c25fcc77e264064768553a28ece1151097ba666f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9311e5d3c77b273a1c7284c25fcc77e264064768553a28ece1151097ba666f02->enter($__internal_9311e5d3c77b273a1c7284c25fcc77e264064768553a28ece1151097ba666f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        
        $__internal_9311e5d3c77b273a1c7284c25fcc77e264064768553a28ece1151097ba666f02->leave($__internal_9311e5d3c77b273a1c7284c25fcc77e264064768553a28ece1151097ba666f02_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 45,  171 => 46,  169 => 45,  160 => 41,  154 => 40,  145 => 36,  139 => 35,  130 => 31,  124 => 30,  117 => 25,  106 => 22,  100 => 20,  92 => 18,  90 => 17,  84 => 16,  81 => 15,  79 => 14,  70 => 13,  68 => 12,  63 => 10,  59 => 8,  53 => 7,  39 => 3,  32 => 1,  30 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}

{% block title %}{{'学员管理'|trans}} - {{ parent() }}{% endblock %}

{% set side_nav = 'students' %}

{% block main %}
       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">{{'学员管理'|trans}}
  
  {% if role|default() == 'auditor'%}
    <a class=\"btn btn-info btn-sm panel-bar mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"{{ path('classroom_manage_student_export_csv', {id:classroom.id,role:role}) }}\" data-datas-url=\"{{ path('classroom_manage_student_export_datas', {id:classroom.id,role:role}) }}\" data-loading-text=\"正在导出\"><i class=\"glyphicon glyphicon-export\"></i> {{'导出旁听生'|trans}}</a>
  {% elseif role|default() == 'student' %}
    <div class=\"panel-bar\">
      <button class=\"btn btn-info btn-sm mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('classroom_manage_student_create', {id:classroom.id}) }}\"><i class=\"glyphicon glyphicon-plus\"></i> {{'添加学员'|trans}}</button>
      {% if classroom.status == 'published' %}
        <a class=\"btn btn-info btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('importer_index', {type: 'classroom-member',classroomId:classroom.id}) }}\"><i class=\"glyphicon glyphicon-import\"></i> {{'批量导入'|trans}}</a>
      {% else %}
        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"班级未发布,不可导入学员\"><i class=\"glyphicon glyphicon-import\"></i> {{'批量导入'|trans}}</a>
      {% endif %}
      <a class=\"btn btn-info btn-sm mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"{{ path('classroom_manage_student_export_csv', {id:classroom.id,role:role}) }}\" data-datas-url=\"{{ path('classroom_manage_student_export_datas', {id:classroom.id,role:role}) }}\" data-loading-text=\"正在导出\"><i class=\"glyphicon glyphicon-export\"></i> {{'导出学员'|trans}}</a>
    </div>
   {% endif %}

  </div>
  <div class=\"panel-body\">

    <ul class=\"nav nav-tabs mbl\">
      <li class=\"{% if submenu == 'student' %}active{% endif %}\">
        <a href=\"{{ path('classroom_manage_students', {id:classroom.id}) }}\">{{'正式学员'|trans}}
        </a>
      </li>

      <li class=\"{% if submenu == 'aduitor' %}active{% endif %}\">
        <a href=\"{{ path('classroom_manage_aduitor', {id:classroom.id}) }}\">{{'旁听生'|trans}}
        </a>
      </li>

      <li class=\"{% if submenu == 'record' %}active{% endif %}\">
        <a href=\"{{ path('classroom_manage_record', {id:classroom.id}) }}\">{{ '退出记录'|trans }}
        </a>
      </li>
    </ul>
  {% block maincontent %}{% endblock %}
  </div>
</div>

{% endblock %}";
    }
}
