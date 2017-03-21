<?php

/* ClassroomBundle:ClassroomManage:headteacher.html.twig */
class __TwigTemplate_ce915ab20409884fee5ea3e1f41a9871b8fa64b2495421a691b2dbebc469221a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:headteacher.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91f1c1ae5a588945b695d9a3ddf173c63fbdbf4ddca7a9f67b6f9179d125b71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f1c1ae5a588945b695d9a3ddf173c63fbdbf4ddca7a9f67b6f9179d125b71d->enter($__internal_91f1c1ae5a588945b695d9a3ddf173c63fbdbf4ddca7a9f67b6f9179d125b71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:headteacher.html.twig"));

        // line 5
        $context["side_nav"] = "headTeacher";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/manage/headteacher";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f1c1ae5a588945b695d9a3ddf173c63fbdbf4ddca7a9f67b6f9179d125b71d->leave($__internal_91f1c1ae5a588945b695d9a3ddf173c63fbdbf4ddca7a9f67b6f9179d125b71d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_292d22bff5093e5b9920b6a6db11eccff5c3d661c34516382bce859320a84ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292d22bff5093e5b9920b6a6db11eccff5c3d661c34516382bce859320a84ed7->enter($__internal_292d22bff5093e5b9920b6a6db11eccff5c3d661c34516382bce859320a84ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班主任设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_292d22bff5093e5b9920b6a6db11eccff5c3d661c34516382bce859320a84ed7->leave($__internal_292d22bff5093e5b9920b6a6db11eccff5c3d661c34516382bce859320a84ed7_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_a387ef579673ada1833d99347012b6196bf22153669e65e012738e162349fbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a387ef579673ada1833d99347012b6196bf22153669e65e012738e162349fbf3->enter($__internal_a387ef579673ada1833d99347012b6196bf22153669e65e012738e162349fbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
<style>

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}

</style>
       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班主任设置"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置班主任"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 51
        $context["url"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_headteacher_match", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))) . "?q={{query}}");
        // line 52
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        echo "</button>
            </span>
          </div>
          <p class=\"help-block\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班主任负责管理整个%name%，班主任只有一位，并且必须要由老师来担任。", array("%name%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</p>
     
          <script type=\"text/plain\" data-role=\"model\">";
        // line 59
        echo twig_jsonencode_filter((isset($context["headTeacher"]) ? $context["headTeacher"] : $this->getContext($context, "headTeacher")));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 67
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">   
              </li>
            ";
        echo "
          </script>

        </div>  
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-fat btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
        </div>  
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
        
        $__internal_a387ef579673ada1833d99347012b6196bf22153669e65e012738e162349fbf3->leave($__internal_a387ef579673ada1833d99347012b6196bf22153669e65e012738e162349fbf3_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:headteacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 79,  154 => 75,  137 => 67,  132 => 59,  127 => 57,  121 => 54,  115 => 52,  113 => 51,  106 => 47,  100 => 44,  93 => 40,  60 => 9,  54 => 8,  40 => 3,  33 => 1,  31 => 6,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}

{% block title %}{{'班主任设置'|trans}} - {{ parent() }}{% endblock %}

{% set side_nav = 'headTeacher' %}
{% set script_controller = 'classroombundle/controller/classroom/manage/headteacher' %}

{% block main %}

<style>

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}

</style>
       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">{{'班主任设置'|trans}}</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      {{ web_macro.flash_messages() }}

      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-2 control-label\">{{'设置班主任'|trans}}</label>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            {% set url = path('classroom_headteacher_match', {classroomId:classroom.id}) ~ '?q={{query}}' %}
            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"{{ url }}\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >{{'添加'|trans}}</button>
            </span>
          </div>
          <p class=\"help-block\">{{'班主任负责管理整个%name%，班主任只有一位，并且必须要由老师来担任。'|trans({'%name%':setting('classroom.name','班级'|trans)})}}</p>
     
          <script type=\"text/plain\" data-role=\"model\">{{ headTeacher|json_encode|raw }}</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              {% verbatim %}
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">   
              </li>
            {% endverbatim %}
          </script>

        </div>  
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-fat btn-primary\">{{'保存'|trans}}</button>
        </div>  
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

    </form>
  </div>
</div>

{% endblock %}";
    }
}
