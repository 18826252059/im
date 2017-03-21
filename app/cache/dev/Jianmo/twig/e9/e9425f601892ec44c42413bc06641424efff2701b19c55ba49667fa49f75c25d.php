<?php

/* ClassroomBundle:ClassroomManage:header.html.twig */
class __TwigTemplate_a6f7d61cfa973bfe4aca5660a03b790340292cee296ee1cbe72bc54b060dea9e extends Twig_Template
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
        $__internal_610508c8c7c79a00fa70bedbb5ece61b0f82ff948a2efb14f800db01563f61e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610508c8c7c79a00fa70bedbb5ece61b0f82ff948a2efb14f800db01563f61e3->enter($__internal_610508c8c7c79a00fa70bedbb5ece61b0f82ff948a2efb14f800db01563f61e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:header.html.twig"));

        // line 1
        $context["unsetted"] = "";
        // line 2
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array())) {
            // line 3
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",简介"));
        }
        // line 5
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array())) {
            // line 6
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",图片"));
        }
        // line 8
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) == 0)) {
            // line 9
            echo "  ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",价格"));
        }
        // line 11
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) == 0)) {
            // line 12
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",课程"));
        }
        // line 14
        echo "

<div class=\"es-section course-manage-header clearfix\">
  <img class=\"picture\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()), "classroom.png"), "html", null, true);
        echo "\">
  <h1 class=\"title\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 19
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "draft")) {
            // line 20
            echo "    <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "closed")) {
            // line 22
            echo "    <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        }
        // line 24
        echo "    ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 25
            echo "    <span class=\"label label-success\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
            echo "</span>
    ";
        }
        // line 27
        echo "  </h1>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 30
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 31
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回%name%主页", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 35
        echo "    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
        echo " <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为未购买用户"), "html", null, true);
        echo "</a></li>
        ";
        // line 41
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "showable", array())) {
            // line 42
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "auditor")), "html", null, true);
            echo "\" target=\"blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为旁听生"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 44
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为正式学员"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>


    ";
        // line 49
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "published")) {
            // line 50
            echo "      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布"), "html", null, true);
            echo "
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
            // line 65
            if ((twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted"))) > 0)) {
                // line 66
                echo "                ";
                $context["unsetted"] = twig_split_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->subStr((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")), 1, (twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted"))) - 1)), ",");
                // line 67
                echo "                <span class=\"text-danger\">
                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%unsetted%还未设置", array("%unsetted%" => twig_join_filter((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")), "，"))), "html", null, true);
                echo "
                </span>
                ";
            }
            // line 71
            echo "                &nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确定要发布吗？"), "html", null, true);
            echo "
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
            echo "</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_publish", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确定"), "html", null, true);
            echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 82
        echo "
  </div>
</div>

";
        // line 86
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("classroombundle/controller/classroom/manage/publish");
        
        $__internal_610508c8c7c79a00fa70bedbb5ece61b0f82ff948a2efb14f800db01563f61e3->leave($__internal_610508c8c7c79a00fa70bedbb5ece61b0f82ff948a2efb14f800db01563f61e3_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 86,  201 => 82,  190 => 76,  186 => 75,  178 => 71,  172 => 68,  169 => 67,  166 => 66,  164 => 65,  157 => 61,  145 => 52,  141 => 50,  139 => 49,  128 => 44,  120 => 42,  118 => 41,  112 => 40,  106 => 37,  102 => 35,  94 => 32,  91 => 31,  89 => 30,  84 => 27,  78 => 25,  75 => 24,  69 => 22,  67 => 21,  62 => 20,  60 => 19,  54 => 18,  50 => 17,  45 => 14,  42 => 12,  40 => 11,  36 => 9,  34 => 8,  31 => 6,  29 => 5,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set unsetted = \"\" %}
{% if not classroom.about %}
{% set unsetted = unsetted ~ ',简介'|trans %}
{% endif %}
{% if not classroom.smallPicture %}
{% set unsetted = unsetted ~ ',图片'|trans %}
{% endif %}
{% if classroom.price == 0 %}
  {% set unsetted = unsetted ~ ',价格'|trans %}
{% endif %}
{% if classroom.courseNum == 0 %}
{% set unsetted = unsetted ~ ',课程'|trans %}
{% endif %}


<div class=\"es-section course-manage-header clearfix\">
  <img class=\"picture\" src=\"{{ filepath(classroom.smallPicture, 'classroom.png') }}\">
  <h1 class=\"title\"><a href=\"{{path('classroom_show',{id:classroom.id})}}\">{{classroom.title}}</a>
    {% if classroom.status == \"draft\" %}
    <span class=\"label label-warning \">{{'未发布'|trans}}</span>
    {% elseif classroom.status == \"closed\" %}
    <span class=\"label label-danger \">{{'已关闭'|trans}}</span>
    {% endif %}
    {% if classroom.status == \"published\" %}
    <span class=\"label label-success\"> {{'已发布'|trans}}</span>
    {% endif %}
  </h1>

  <div class=\"toolbar hidden-xs\">
    {% if classroom.status == 'published' %}
      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">{{'返回%name%主页'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</a>
      </div>
    {% endif %}
    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        {{'预览'|trans}} <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"{{path('classroom_courses',{classroomId:classroom.id,previewAs:'guest'})}}\" target=\"blank\">{{'作为未购买用户'|trans}}</a></li>
        {% if  classroom.showable %}
          <li><a href=\"{{path('classroom_courses',{classroomId:classroom.id,previewAs:'auditor'})}}\" target=\"blank\">{{'作为旁听生'|trans}}</a></li>
        {% endif %}
        <li><a href=\"{{path('classroom_courses',{classroomId:classroom.id,previewAs:'member'})}}\" target=\"_blank\">{{'作为正式学员'|trans}}</a></li>
      </ul>
    </div>


    {% if classroom.status != 'published' %}
      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          {{'发布'|trans}}
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">{{'发布%name%'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                {% if unsetted|length > 0 %}
                {% set unsetted = sub_str(unsetted, 1, unsetted|length - 1 )|split(',')  %}
                <span class=\"text-danger\">
                    {{'%unsetted%还未设置'|trans({'%unsetted%':unsetted|join(\"，\")})}}
                </span>
                {% endif %}
                &nbsp;{{'确定要发布吗？'|trans}}
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">{{'取消'|trans}}</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"{{path('classroom_manage_publish',{id:classroom.id})}}\">{{'确定'|trans}}</button>
            </div>
          </div>
        </div>
      </div>
    {% endif %}

  </div>
</div>

{% do load_script('classroombundle/controller/classroom/manage/publish') %}
";
    }
}
