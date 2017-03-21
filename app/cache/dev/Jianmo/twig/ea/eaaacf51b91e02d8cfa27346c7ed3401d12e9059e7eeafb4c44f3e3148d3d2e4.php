<?php

/* ClassroomBundle:ClassroomManage:tr.html.twig */
class __TwigTemplate_f7403caa3d50c6f05b4e59d43b6c0c05e9fc6d03b1a516d34ba317905587695e extends Twig_Template
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
        $__internal_d7cbdd3b377e6e4ac897d70c3f0d161149fbc79a0574137afc731761f881be83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cbdd3b377e6e4ac897d70c3f0d161149fbc79a0574137afc731761f881be83->enter($__internal_d7cbdd3b377e6e4ac897d70c3f0d161149fbc79a0574137afc731761f881be83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:tr.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:ClassroomManage:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"student-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "-tr\">
  <td class=\"media\" style=\"vertical-align: middle;\">
    ";
        // line 4
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pull-left", "avatar-sm");
        echo "
    <a target=\"_blank\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "</a>
    ";
        // line 6
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "remark", array())) {
            // line 7
            echo "      <span class=\"text-muted text-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "remark", array()), "html", null, true);
            echo "\">(";
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "remark", array()), 16);
            echo ")</span>
    ";
        }
        // line 9
        echo "    <div class=\"text-muted text-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加入时间"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</div>
  </td>
  <td style=\"vertical-align: middle;\">
    ";
        // line 12
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "student")) {
            // line 13
            echo "      <div class=\"progress mvm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已学%number%课程", array("%number%" => $this->getAttribute((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")), "number", array()))), "html", null, true);
            echo "\">
        <div class=\"progress-bar\" style=\"width: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")), "percent", array()), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")), "percent", array()), "html", null, true);
            echo "\">
        </div>
      </div>
    ";
        }
        // line 18
        echo "  </td>
  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 22
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发私信"), "html", null, true);
            echo "</button>
      ";
        }
        // line 24
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 25
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_students_show", array("courseId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看资料"), "html", null, true);
            echo "</button>
      ";
        } elseif ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.buy_fill_userinfo")) {
            // line 27
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_students_defined_show", array("courseId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看资料"), "html", null, true);
            echo "</button>
      ";
        }
        // line 29
        echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo "
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_remark", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("备注"), "html", null, true);
        echo "</a></li>
        <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_student_remove", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移除"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
  </td>
</tr>";
        
        $__internal_d7cbdd3b377e6e4ac897d70c3f0d161149fbc79a0574137afc731761f881be83->leave($__internal_d7cbdd3b377e6e4ac897d70c3f0d161149fbc79a0574137afc731761f881be83_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  117 => 33,  109 => 29,  101 => 27,  93 => 25,  90 => 24,  82 => 22,  80 => 21,  75 => 18,  66 => 14,  61 => 13,  59 => 12,  50 => 9,  42 => 7,  40 => 6,  34 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
<tr id=\"student-{{ user.id }}-tr\">
  <td class=\"media\" style=\"vertical-align: middle;\">
    {{ web_macro.user_avatar(user, 'pull-left', 'avatar-sm') }}
    <a target=\"_blank\" href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}</a>
    {% if student.remark %}
      <span class=\"text-muted text-sm\" title=\"{{student.remark}}\">({{ student.remark|plain_text(16) }})</span>
    {% endif %}
    <div class=\"text-muted text-sm\">{{'加入时间'|trans}}：{{ student.createdTime|date('Y-n-d H:i') }}</div>
  </td>
  <td style=\"vertical-align: middle;\">
    {% if role == 'student' %}
      <div class=\"progress mvm\" title=\"{{'已学%number%课程'|trans({'%number%':progress.number})}}\">
        <div class=\"progress-bar\" style=\"width: {{ progress.percent }}\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"{{ progress.percent }}\">
        </div>
      </div>
    {% endif %}
  </td>
  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      {% if app.user.id != user.id %}
        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('message_create', {toId:user.id})}}\">{{'发私信'|trans}}</button>
      {% endif %}
      {% if app.user.isAdmin() %}
        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('course_manage_students_show', {courseId:classroom.id, userId:user.id})}}\">{{'查看资料'|trans}}</button>
      {% elseif setting(\"course.buy_fill_userinfo\") %}
        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('course_manage_students_defined_show', {courseId:classroom.id, userId:user.id}) }}\">{{'查看资料'|trans}}</button>
      {% endif %}
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'管理'|trans}}
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('classroom_manage_student_remark', {classroomId:classroom.id, userId:user.id})}}\">{{'备注'|trans}}</a></li>
        <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"{{path('classroom_manage_student_remove', {classroomId:classroom.id, userId:user.id})}}\" data-user=\"{{default.user_name|default('学员'|trans)}}\">{{'移除'|trans}}</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }
}
