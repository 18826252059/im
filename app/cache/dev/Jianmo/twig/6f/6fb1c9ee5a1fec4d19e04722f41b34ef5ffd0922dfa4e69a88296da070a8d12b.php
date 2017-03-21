<?php

/* TopxiaAdminBundle:System:jobs.html.twig */
class __TwigTemplate_1b8eabee7653af8360dfe27df32d130731e78724d4814bd27cca7258d4150b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:jobs.html.twig", 1);
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
        $__internal_af8e92b447d52109ebe386faa38495f55610bd2d9f2fc4380966b8c197efbf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8e92b447d52109ebe386faa38495f55610bd2d9f2fc4380966b8c197efbf6e->enter($__internal_af8e92b447d52109ebe386faa38495f55610bd2d9f2fc4380966b8c197efbf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:jobs.html.twig"));

        // line 3
        $context["menu"] = "admin_jobs_manage";
        // line 5
        $context["script_controller"] = "job/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8e92b447d52109ebe386faa38495f55610bd2d9f2fc4380966b8c197efbf6e->leave($__internal_af8e92b447d52109ebe386faa38495f55610bd2d9f2fc4380966b8c197efbf6e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_84009b203df4fce107bcf391cf356baaa97eece1572b23dd2214b1ac5d665946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84009b203df4fce107bcf391cf356baaa97eece1572b23dd2214b1ac5d665946->enter($__internal_84009b203df4fce107bcf391cf356baaa97eece1572b23dd2214b1ac5d665946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedStartTime\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nextExcutedStartTime"), "method"), "html", null, true);
        echo "\" name=\"nextExcutedStartTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一次执行开始时间"), "html", null, true);
        echo "\" style=\"width:160px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedEndTime\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nextExcutedEndTime"), "method"), "html", null, true);
        echo "\" name=\"nextExcutedEndTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一次执行截止时间"), "html", null, true);
        echo "\" style=\"width:160px;\">
  </div>


  <div class=\"form-group\">
    <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务名称"), "html", null, true);
        echo "\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"cycle\">
        ";
        // line 28
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("jobCycle"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cycle"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--执行周期--"));
        echo "
    </select>
  </div>

  <button class=\"btn btn-primary\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

  <a class=\"glyphicon glyphicon-question-sign text-muted pull-center pull-right\" id=\"tips\" data-toggle=\"tooltip\" data-placement=\"left\" href=\"javascript:\" title=\"\" data-original-title=\"\"></a>
  <div id=\"tips-html\" style=\"display:none;\">
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("定时任务是系统为了保证系统业务的正常进行自动生成系统级任务,不需要进行任何手动操作"), "html", null, true);
        echo "</p> 
  </div>
</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"5%\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务名称"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("任务对象"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("执行周期"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("下一次执行时间"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo "</th>
    </tr>
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 50
            echo "      <tr>
        <td>
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "name", array()), "html", null, true);
            echo "
        </td>
        <td width=\"20%\">
          ";
            // line 58
            if (($this->getAttribute($context["job"], "targetType", array()) == "course")) {
                // line 59
                echo "            ";
                $context["course"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Course", array("courseId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "</a>》
          ";
            } elseif (($this->getAttribute(            // line 61
$context["job"], "targetType", array()) == "classroom")) {
                // line 62
                echo "            ";
                $context["classroom"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Classroom", array("classroomId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 63
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
                echo "</a>》
          ";
            } elseif (($this->getAttribute(            // line 64
$context["job"], "targetType", array()) == "lesson")) {
                // line 65
                echo "            ";
                $context["lesson"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("CourseLesson", array("lessonId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 66
                echo "            ";
                $context["course"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Course", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "courseId", array())));
                // line 67
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "</a>》,";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title", array()), "html", null, true);
                echo "
          ";
            } elseif (($this->getAttribute(            // line 68
$context["job"], "targetType", array()) == "liveOpenLesson")) {
                // line 69
                echo "            ";
                $context["lesson"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("OpenCourseLesson", array("lessonId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 70
                echo "            ";
                $context["course"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("OpenCourse", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "courseId", array())));
                // line 71
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公开课："), "html", null, true);
                echo "《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "</a>》,";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title", array()), "html", null, true);
                echo "
          ";
            } else {
                // line 72
                echo "--";
            }
            // line 73
            echo "        </td>
        <td>
          ";
            // line 75
            echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("jobCycle", $this->getAttribute($context["job"], "cycle", array()));
            echo "
        </td>
        <td>
          ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "nextExcutedTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 81
            if ($this->getAttribute($context["job"], "createdTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo "--";
            }
            // line 82
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无定时任务记录"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "  </table>

  ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_84009b203df4fce107bcf391cf356baaa97eece1572b23dd2214b1ac5d665946->leave($__internal_84009b203df4fce107bcf391cf356baaa97eece1572b23dd2214b1ac5d665946_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 89,  264 => 87,  255 => 85,  248 => 82,  242 => 81,  236 => 78,  230 => 75,  226 => 73,  223 => 72,  210 => 71,  207 => 70,  204 => 69,  202 => 68,  190 => 67,  187 => 66,  184 => 65,  182 => 64,  173 => 63,  170 => 62,  168 => 61,  159 => 60,  156 => 59,  154 => 58,  148 => 55,  142 => 52,  138 => 50,  133 => 49,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  99 => 36,  92 => 32,  85 => 28,  75 => 23,  65 => 18,  56 => 14,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_jobs_manage' %}

{% set script_controller = 'job/list' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedStartTime\" value=\"{{app.request.query.get('nextExcutedStartTime')}}\" name=\"nextExcutedStartTime\" class=\"form-control\" placeholder=\"{{'下一次执行开始时间'|trans}}\" style=\"width:160px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedEndTime\" value=\"{{app.request.query.get('nextExcutedEndTime')}}\" name=\"nextExcutedEndTime\" class=\"form-control\" placeholder=\"{{'下一次执行截止时间'|trans}}\" style=\"width:160px;\">
  </div>


  <div class=\"form-group\">
    <input type=\"text\" id=\"name\" name=\"name\" value=\"{{app.request.query.get('name')}}\" class=\"form-control\" placeholder=\"{{'任务名称'|trans}}\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"cycle\">
        {{ select_options(dict('jobCycle'), app.request.query.get('cycle'), '--执行周期--'|trans) }}
    </select>
  </div>

  <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>

  <a class=\"glyphicon glyphicon-question-sign text-muted pull-center pull-right\" id=\"tips\" data-toggle=\"tooltip\" data-placement=\"left\" href=\"javascript:\" title=\"\" data-original-title=\"\"></a>
  <div id=\"tips-html\" style=\"display:none;\">
    <p>{{ '定时任务是系统为了保证系统业务的正常进行自动生成系统级任务,不需要进行任何手动操作'|trans }}</p> 
  </div>
</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"5%\">{{'编号'|trans}}</th>
      <th width=\"20%\">{{'任务名称'|trans}}</th>
      <th width=\"20%\">{{'任务对象'|trans}}</th>
      <th width=\"10%\">{{'执行周期'|trans}}</th>
      <th width=\"20%\">{{'下一次执行时间'|trans}}</th>
      <th width=\"20%\">{{'创建时间'|trans}}</th>
    </tr>
    {% for job in jobs %}
      <tr>
        <td>
          {{ job.id }}
        </td>
        <td>
          {{ job.name }}
        </td>
        <td width=\"20%\">
          {% if job.targetType == 'course' %}
            {% set course = data('Course',{courseId:job.targetId}) %}
            {{'课程：'|trans}}《<a href=\"{{path('course_show', {id:course.id})}}\" target='_blank'>{{course.title}}</a>》
          {% elseif job.targetType == 'classroom' %}
            {% set classroom = data('Classroom',{classroomId:job.targetId}) %}
            {{'班级：'|trans}}《<a href=\"{{path('classroom_show', {id:classroom.id})}}\" target='_blank'>{{classroom.title}}</a>》
          {% elseif job.targetType == 'lesson' %}
            {% set lesson = data('CourseLesson',{lessonId:job.targetId}) %}
            {% set course = data('Course',{courseId:lesson.courseId}) %}
            {{'课程：'|trans}}《<a href=\"{{path('course_show', {id:course.id})}}\" target='_blank'>{{course.title}}</a>》,{{'课时：'|trans}}{{lesson.title}}
          {% elseif job.targetType == 'liveOpenLesson' %}
            {% set lesson = data('OpenCourseLesson',{lessonId:job.targetId}) %}
            {% set course = data('OpenCourse',{courseId:lesson.courseId}) %}
            {{'公开课：'|trans}}《<a href=\"{{path('open_course_show', {courseId:course.id})}}\" target='_blank'>{{course.title}}</a>》,{{'课时：'|trans}}{{lesson.title}}
          {% else %}--{% endif %}
        </td>
        <td>
          {{ dict_text('jobCycle',job.cycle) }}
        </td>
        <td>
          {{ job.nextExcutedTime|date('Y-m-d H:i:s') }}
        </td>
        <td>
          {% if job.createdTime %}{{ job.createdTime|date('Y-m-d H:i:s') }}{% else %}--{% endif %}
        </td>
      </tr>
    {% else %}
      <tr><td class=\"empty\" colspan=\"20\">{{'无定时任务记录'|trans}}</tr>
    {% endfor %}
  </table>

  {{ admin_macro.paginator(paginator) }}

{% endblock %}";
    }
}
