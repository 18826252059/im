<?php

/* ClassroomBundle:ClassroomManage:menu.html.twig */
class __TwigTemplate_11f13829d03b0f1d2993b2fd603c1952873db283a5b47a534966bfd7adcb7e74 extends Twig_Template
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
        $__internal_c7a82ed8c21de065760e368183144bde4c42a33d6467e0ece9785cadca78d459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a82ed8c21de065760e368183144bde4c42a33d6467e0ece9785cadca78d459->enter($__internal_c7a82ed8c21de065760e368183144bde4c42a33d6467e0ece9785cadca78d459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:menu.html.twig"));

        // line 1
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 2
            echo "  <ul class=\"list-group\">
    <li class=\"list-group-item ";
            // line 3
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "main")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理首页"), "html", null, true);
            echo "</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">";
            // line 9
            echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置")), "html", null, true);
            echo "</li>
    <li class=\"list-group-item ";
            // line 10
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
            echo " ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array()))) {
                echo "<span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未完善"), "html", null, true);
                echo "</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 13
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "price")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "picture")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("封面图片"), "html", null, true);
            echo " ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()))) {
                echo "<span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未设置"), "html", null, true);
                echo "</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 19
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "service")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_service", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 22
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "headTeacher")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_headteacher", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班主任设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 25
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "teachers")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_teachers", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师设置"), "html", null, true);
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 28
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "assistant")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_assistants", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("助教设置"), "html", null, true);
            echo "</a>
    </li>

    ";
            // line 32
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("ClassroomPlan")) {
                // line 33
                echo "      <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "plan")) {
                    echo "active";
                }
                echo "\">
        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_plan", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习计划"), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            // line 37
            echo "  </ul>
";
        }
        // line 39
        echo "
<ul class=\"list-group\">
  <li class=\"list-group-heading\">";
        // line 41
        echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理")), "html", null, true);
        echo "</li>
  ";
        // line 42
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 43
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "courses")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程管理"), "html", null, true);
            echo "</a></li>
    <li class=\"list-group-item ";
            // line 44
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "students")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员管理"), "html", null, true);
            echo "</a>
    </li>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if ((isset($context["canHandle"]) ? $context["canHandle"] : $this->getContext($context, "canHandle"))) {
            // line 50
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testpaper-check")) {
                echo " active ";
            }
            echo "\">
      <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷批阅"), "html", null, true);
            echo "</a>
    </li>
   
    ";
            // line 54
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Homework")) {
                // line 55
                echo "      <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "homework-check")) {
                    echo " active ";
                }
                echo "\">
        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_homework", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "status" => "reviewing")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业批改"), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            // line 59
            echo "  ";
        }
        // line 60
        echo "</ul>
";
        
        $__internal_c7a82ed8c21de065760e368183144bde4c42a33d6467e0ece9785cadca78d459->leave($__internal_c7a82ed8c21de065760e368183144bde4c42a33d6467e0ece9785cadca78d459_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 60,  244 => 59,  236 => 56,  229 => 55,  227 => 54,  219 => 51,  212 => 50,  210 => 49,  207 => 48,  199 => 45,  193 => 44,  182 => 43,  180 => 42,  176 => 41,  172 => 39,  168 => 37,  160 => 34,  153 => 33,  151 => 32,  143 => 29,  137 => 28,  130 => 26,  124 => 25,  117 => 23,  111 => 22,  104 => 20,  98 => 19,  85 => 17,  79 => 16,  72 => 14,  66 => 13,  53 => 11,  47 => 10,  43 => 9,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if canManage %}
  <ul class=\"list-group\">
    <li class=\"list-group-item {% if side_nav == 'main' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage', {id:classroom.id}) }}\">{{'管理首页'|trans}}</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">{{ setting('classroom.name')|default('班级'|trans) ~ '设置'|trans }}</li>
    <li class=\"list-group-item {% if side_nav == 'base' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_set_info', {id:classroom.id}) }}\">{{'基本信息'|trans}} {% if classroom.about is empty %}<span class=\"label label-info\">{{'未完善'|trans}}</span>{% endif %}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'price' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_set_price', {id:classroom.id}) }}\">{{'价格设置'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'picture' %}active{% endif %}\">
    <a href=\"{{ path('classroom_manage_set_picture', {id:classroom.id}) }}\">{{'封面图片'|trans}} {% if classroom.smallPicture is empty %}<span class=\"label label-info\">{{'未设置'|trans}}</span>{% endif %}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'service' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_service', {id:classroom.id}) }}\">{{'服务设置'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'headTeacher' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_headteacher', {id:classroom.id}) }}\">{{'班主任设置'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'teachers' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_teachers', {id:classroom.id}) }}\">{{'教师设置'|trans}}</a>
    </li>
    <li class=\"list-group-item {% if side_nav == 'assistant' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_assistants', {id:classroom.id}) }}\">{{'助教设置'|trans}}</a>
    </li>

    {% if is_plugin_installed(\"ClassroomPlan\") %}
      <li class=\"list-group-item {% if side_nav == 'plan' %}active{% endif %}\">
        <a href=\"{{ path('classroom_manage_plan', {classroomId:classroom.id}) }}\">{{'学习计划'|trans}}</a>
      </li>
    {% endif %}
  </ul>
{% endif %}

<ul class=\"list-group\">
  <li class=\"list-group-heading\">{{ setting('classroom.name')|default('班级'|trans) ~ '管理'|trans }}</li>
  {% if canManage %}
    <li class=\"list-group-item {% if side_nav == 'courses' %}active{% endif %}\"><a href=\"{{ path('classroom_manage_courses', {id:classroom.id}) }}\">{{'课程管理'|trans}}</a></li>
    <li class=\"list-group-item {% if side_nav == 'students' %}active{% endif %}\">
      <a href=\"{{ path('classroom_manage_students', {id:classroom.id}) }}\">{{'学员管理'|trans}}</a>
    </li>
  {% endif %}

  {% if canHandle %}
    <li class=\"list-group-item {% if side_nav == 'testpaper-check' %} active {% endif %}\">
      <a href=\"{{ path('classroom_manage_testpaper', {id:classroom.id,status:'reviewing'}) }}\">{{'试卷批阅'|trans}}</a>
    </li>
   
    {% if is_plugin_installed('Homework') %}
      <li class=\"list-group-item {% if side_nav == 'homework-check' %} active {% endif %}\">
        <a href=\"{{ path('classroom_manage_homework', {id:classroom.id,status:'reviewing'}) }}\">{{'作业批改'|trans}}</a>
      </li>
    {% endif %}
  {% endif %}
</ul>
";
    }
}
