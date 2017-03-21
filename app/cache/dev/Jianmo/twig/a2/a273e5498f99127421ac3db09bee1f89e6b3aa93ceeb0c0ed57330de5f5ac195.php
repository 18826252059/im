<?php

/* TopxiaWebBundle:CourseLessonManage:index.html.twig */
class __TwigTemplate_fb9e212882bd89de398b50c2d620aadf1543bbbbd4034f2078695a9094bae7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0544bd3e567c3f7a2aa8c18129d60efb73ddabec22324992fbd5b7a2e90315d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0544bd3e567c3f7a2aa8c18129d60efb73ddabec22324992fbd5b7a2e90315d->enter($__internal_f0544bd3e567c3f7a2aa8c18129d60efb73ddabec22324992fbd5b7a2e90315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseLessonManage:index.html.twig"));

        // line 5
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0544bd3e567c3f7a2aa8c18129d60efb73ddabec22324992fbd5b7a2e90315d->leave($__internal_f0544bd3e567c3f7a2aa8c18129d60efb73ddabec22324992fbd5b7a2e90315d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_646a82d09846d7b0641f4391544ace8ff4d21d8ce9ec5b286871accf738aaad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646a82d09846d7b0641f4391544ace8ff4d21d8ce9ec5b286871accf738aaad1->enter($__internal_646a82d09846d7b0641f4391544ace8ff4d21d8ce9ec5b286871accf738aaad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_646a82d09846d7b0641f4391544ace8ff4d21d8ce9ec5b286871accf738aaad1->leave($__internal_646a82d09846d7b0641f4391544ace8ff4d21d8ce9ec5b286871accf738aaad1_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_6cdcc4062186600a13fe313234235e9b7cb1d660677498338dd9b9d20d2881e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdcc4062186600a13fe313234235e9b7cb1d660677498338dd9b9d20d2881e9->enter($__internal_6cdcc4062186600a13fe313234235e9b7cb1d660677498338dd9b9d20d2881e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\"
\tdata-file-status-url=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_file_status", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo ">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 15
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播课时"), "html", null, true);
        }
        echo "</button>

\t\t\t";
        // line 17
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live"))) {
            // line 18
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷"), "html", null, true);
            echo "</button>
\t\t\t";
        }
        // line 20
        echo "
\t\t\t";
        // line 21
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal")) {
            // line 22
            echo "\t\t\t\t";
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
                // line 23
                echo "\t\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"batch-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_batch_modal", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->makeUpoaderToken("courselesson", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "private"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量添加课时"), "html", null, true);
                echo "</button>
\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t<div class=\"btn btn-info btn-sm disabled js-lesson-batch-btn-popover\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量添加课时"), "html", null, true);
                echo "
\t\t\t\t\t  <div class=\"popover-content hidden\"  style=\"width:100px;\">
\t\t\t\t\t    <div class=\"popover-item\">
\t\t\t\t\t      <div class=\"content\">
\t\t\t\t\t      \t";
                // line 29
                echo "批量创建课时需要开通云视频服务，点击";
                echo " 
\t\t\t\t\t      \t<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"__blank\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
                echo "</a>
\t\t\t\t\t       ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情"), "html", null, true);
                echo "
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        // line 38
        echo "
\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-sm btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    <i class=\"glyphicon glyphicon-plus\"></i>";
        // line 41
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.part_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节")), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加%chapter_name%", array("%chapter_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.chapter_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章")))), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "unit")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加%part_name%", array("%part_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.part_name"), "节"))), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
        echo "
\t</div>

\t";
        // line 57
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")))) {
            // line 58
            echo "
\t <div class=\"empty\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课时内容！"), "html", null, true);
            echo "</div>

\t ";
        }
        // line 62
        echo "
\t<div class=\"panel-body \">
\t\t<div class=\"lesson-list-wrapper pbl\">
\t\t\t<ul class=\"lesson-list sortable-list js-period-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
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
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 67
            echo "\t\t\t\t  ";
            if (twig_in_filter("chapter", $context["id"])) {
                // line 68
                echo "\t\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:CourseChapterManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 68)->display(array_merge($context, array("chapter" => $context["item"])));
                // line 69
                echo "\t\t\t\t  ";
            } elseif (twig_in_filter("lesson", $context["id"])) {
                // line 70
                echo "\t\t\t\t  \t";
                $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 70)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 71
                echo "\t\t\t\t  ";
                // line 75
                echo "\t\t\t\t  ";
            }
            // line 76
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_6cdcc4062186600a13fe313234235e9b7cb1d660677498338dd9b9d20d2881e9->leave($__internal_6cdcc4062186600a13fe313234235e9b7cb1d660677498338dd9b9d20d2881e9_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 77,  233 => 76,  230 => 75,  228 => 71,  225 => 70,  222 => 69,  219 => 68,  216 => 67,  199 => 66,  195 => 65,  190 => 62,  184 => 59,  181 => 58,  179 => 57,  173 => 54,  162 => 48,  154 => 45,  145 => 41,  140 => 38,  137 => 37,  128 => 31,  124 => 30,  120 => 29,  112 => 25,  104 => 23,  101 => 22,  99 => 21,  96 => 20,  88 => 18,  86 => 17,  71 => 15,  64 => 11,  60 => 9,  54 => 8,  40 => 3,  33 => 1,  31 => 6,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}

{% block title %}{{'课时管理'|trans}} - {{ parent() }}{% endblock %}

{% set side_nav = 'lesson' %}
{% set script_controller = 'course-manage/lesson' %}

{% block main %}

<div class=\"panel panel-default panel-col lesson-manage-panel\"
\tdata-file-status-url={{path('course_manage_lesson_file_status',{id:course.id})}}>
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"{% if course.type == 'normal' %}{{ path('course_manage_lesson_create', {id:course.id}) }}{% else %}{{ path('live_course_manage_lesson_create', {id:course.id}) }}{% endif %}\"><i class=\"glyphicon glyphicon-plus\"></i> {% if course.type == 'normal' %}{{'课时'|trans}}{% else %}{{'直播课时'|trans}}{% endif %}</button>

\t\t\t{% if course.type == 'normal' or course.type == 'live' %}
\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"{{ path('course_manage_lesson_create_testpaper', {id:course.id}) }}\"><i class=\"glyphicon glyphicon-plus\"></i> {{'试卷'|trans}}</button>
\t\t\t{% endif %}

\t\t\t{% if course.type == 'normal' %}
\t\t\t\t{% if setting('storage.upload_mode') == 'cloud' %}
\t\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"batch-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"{{ path('course_manage_lesson_batch_modal', {id:course.id, token:uploader_token('courselesson', app.user.id, 'private')}) }}\"><i class=\"glyphicon glyphicon-plus\"></i> {{ '批量添加课时'|trans }}</button>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"btn btn-info btn-sm disabled js-lesson-batch-btn-popover\"><i class=\"glyphicon glyphicon-plus\"></i> {{ '批量添加课时'|trans }}
\t\t\t\t\t  <div class=\"popover-content hidden\"  style=\"width:100px;\">
\t\t\t\t\t    <div class=\"popover-item\">
\t\t\t\t\t      <div class=\"content\">
\t\t\t\t\t      \t{{ '批量创建课时需要开通云视频服务，点击' }} 
\t\t\t\t\t      \t<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"__blank\">{{ '这里'|trans }}</a>
\t\t\t\t\t       {{ '了解详情'|trans }}
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endif %}

\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-sm btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    <i class=\"glyphicon glyphicon-plus\"></i>{{ setting('default.chapter_name')|default('章'|trans) }}/{{ setting('default.part_name')|default('节'|trans) }} <span class=\"caret\"></span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"{{ path('course_manage_chapter_create', {id:course.id}) }}\"><i class=\"glyphicon glyphicon-plus\"></i> {{'添加%chapter_name%'|trans({'%chapter_name%': setting('default.chapter_name')|default('章'|trans)})}}</a>
\t\t\t    </li>
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"{{ path('course_manage_chapter_create', {id:course.id, type:'unit'}) }}\"><i class=\"glyphicon glyphicon-plus\"></i> {{'添加%part_name%'|trans({'%part_name%': setting('default.part_name')|default('节')})}}</a>
\t\t\t    </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>

\t\t{{'课时管理'|trans}}
\t</div>

\t{% if items is empty %}

\t <div class=\"empty\">{{'暂无课时内容！'|trans}}</div>

\t {% endif %}

\t<div class=\"panel-body \">
\t\t<div class=\"lesson-list-wrapper pbl\">
\t\t\t<ul class=\"lesson-list sortable-list js-period-list\" id=\"course-item-list\" data-sort-url=\"{{ path('course_manage_lesson_sort', {id:course.id}) }}\">
\t\t\t\t{% for id, item in items %}
\t\t\t\t  {% if 'chapter' in id %}
\t\t\t\t    {% include 'TopxiaWebBundle:CourseChapterManage:list-item.html.twig' with {chapter: item} %}
\t\t\t\t  {% elseif 'lesson' in id  %}
\t\t\t\t  \t{% include 'TopxiaWebBundle:CourseLessonManage:list-item.html.twig' with {lesson: item, file: files[item.mediaId]|default(null)} %}
\t\t\t\t  {#
\t\t\t\t  {% elseif  item.type == 'testpaper'  %}
\t\t\t\t      {% include 'TopxiaWebBundle:CourseTestpaperManage:list-item.html.twig' with {lesson: item, file: files[item.mediaId]|default(null)} %}
\t\t\t\t  #}
\t\t\t\t  {% endif %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

{% endblock %}
";
    }
}
