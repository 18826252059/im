<?php

/* ClassroomBundle:ClassroomManage:auditor.html.twig */
class __TwigTemplate_05596da1c85e934b37dd2b430e65cbcb1db9c911616b7e9ee36398d4ff832097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:students.html.twig", "ClassroomBundle:ClassroomManage:auditor.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:students.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d1d3284366fe34369fdf668bf3193891c9fb29e50710a3fe366df513765d9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1d3284366fe34369fdf668bf3193891c9fb29e50710a3fe366df513765d9e4->enter($__internal_1d1d3284366fe34369fdf668bf3193891c9fb29e50710a3fe366df513765d9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:auditor.html.twig"));

        // line 5
        $context["submenu"] = "aduitor";
        // line 7
        $context["script_controller"] = "classroombundle/controller/classroom/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1d3284366fe34369fdf668bf3193891c9fb29e50710a3fe366df513765d9e4->leave($__internal_1d1d3284366fe34369fdf668bf3193891c9fb29e50710a3fe366df513765d9e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f67d1fffd3202ac9c076bdca7ae13314fffc85e1abe64ae000786ad856292379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67d1fffd3202ac9c076bdca7ae13314fffc85e1abe64ae000786ad856292379->enter($__internal_f67d1fffd3202ac9c076bdca7ae13314fffc85e1abe64ae000786ad856292379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_f67d1fffd3202ac9c076bdca7ae13314fffc85e1abe64ae000786ad856292379->leave($__internal_f67d1fffd3202ac9c076bdca7ae13314fffc85e1abe64ae000786ad856292379_prof);

    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_e3b33936513aec40c3b4637d210f079c46312194798fab0abb780a56c4fe783c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b33936513aec40c3b4637d210f079c46312194798fab0abb780a56c4fe783c->enter($__internal_e3b33936513aec40c3b4637d210f079c46312194798fab0abb780a56c4fe783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 10
        echo " <div class=\"alert alert-info \"><i class=\"es-icon es-icon-infooutline mrm\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生是%name%的潜在购买者,只能参加该%classroomName%下的话题互动。", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "%classroomName%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</div>
  <form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group col-md-7\">
      <input class=\"form-control \" style=\"width:45%\" type=\"text\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入用户名/邮箱/手机号"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

      <button class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    </div>
    <div class=\"clearfix\"></div>
  </form>
  
  <table class=\"table table-striped\" id=\"course-student-list\">
    <thead>
      <tr>
        <th width=\"40%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生"), "html", null, true);
        echo "</th>
         <th width=\"30%\"></th>
        <th width=\"30%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
    </thead>
    <tbody>
       ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 30
            echo "        ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 31
            echo "        ";
            $this->loadTemplate("ClassroomBundle:ClassroomManage:tr.html.twig", "ClassroomBundle:ClassroomManage:auditor.html.twig", 31)->display($context);
            // line 32
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无学员记录"), "html", null, true);
            echo "</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
  </table>
  ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_e3b33936513aec40c3b4637d210f079c46312194798fab0abb780a56c4fe783c->leave($__internal_e3b33936513aec40c3b4637d210f079c46312194798fab0abb780a56c4fe783c_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:auditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  143 => 35,  134 => 33,  121 => 32,  118 => 31,  115 => 30,  97 => 29,  90 => 25,  85 => 23,  74 => 15,  67 => 13,  60 => 10,  54 => 9,  40 => 3,  33 => 1,  31 => 7,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "  {% extends 'ClassroomBundle:ClassroomManage:students.html.twig' %}

{% block title %}{{'旁听生管理'|trans}} - {{ parent() }}{% endblock %}

{% set submenu = 'aduitor' %}

{% set script_controller = 'classroombundle/controller/classroom/students' %}

{% block maincontent %}
 <div class=\"alert alert-info \"><i class=\"es-icon es-icon-infooutline mrm\"></i>{{'旁听生是%name%的潜在购买者,只能参加该%classroomName%下的话题互动。'|trans({'%name%':setting('classroom.name')|default('班级'|trans),'%classroomName%':setting('classroom.name')|default('班级'|trans)})}}</div>
  <form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group col-md-7\">
      <input class=\"form-control \" style=\"width:45%\" type=\"text\" placeholder=\"{{'请输入用户名/邮箱/手机号'|trans}}\" name=\"keyword\" value=\"{{ app.request.get('keyword') }}\">

      <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
    </div>
    <div class=\"clearfix\"></div>
  </form>
  
  <table class=\"table table-striped\" id=\"course-student-list\">
    <thead>
      <tr>
        <th width=\"40%\">{{'旁听生'|trans}}</th>
         <th width=\"30%\"></th>
        <th width=\"30%\">{{'操作'|trans}}</th>
      </tr>
    </thead>
    <tbody>
       {% for student in students %}
        {% set user = users[student.userId] %}
        {% include 'ClassroomBundle:ClassroomManage:tr.html.twig' %}
      {% else %}
        <tr class=\"empty\"><td colspan=\"20\">{{'无学员记录'|trans}}</td></tr>
      {% endfor %}
    </tbody>
  </table>
  {{ web_macro.paginator(paginator) }}

{% endblock %}";
    }
}
