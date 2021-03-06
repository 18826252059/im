<?php

/* ClassroomBundle:ClassroomManage:student.html.twig */
class __TwigTemplate_d5dbe304f27ef8e9b02d602cf5bfe008bcb42d4fcd6acdcdfc29461453c30060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:students.html.twig", "ClassroomBundle:ClassroomManage:student.html.twig", 1);
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
        $__internal_d0a23fbe73d91d2605bad67e9ab1d0e46623fa3aba85987ec486ea05bb4e05c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a23fbe73d91d2605bad67e9ab1d0e46623fa3aba85987ec486ea05bb4e05c0->enter($__internal_d0a23fbe73d91d2605bad67e9ab1d0e46623fa3aba85987ec486ea05bb4e05c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:student.html.twig"));

        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "classroombundle/controller/classroom/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a23fbe73d91d2605bad67e9ab1d0e46623fa3aba85987ec486ea05bb4e05c0->leave($__internal_d0a23fbe73d91d2605bad67e9ab1d0e46623fa3aba85987ec486ea05bb4e05c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d1fa5d8897cdaddcad13e2cce2f6e8270a5534ef58039a575b70dfa1d79daa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1fa5d8897cdaddcad13e2cce2f6e8270a5534ef58039a575b70dfa1d79daa1->enter($__internal_1d1fa5d8897cdaddcad13e2cce2f6e8270a5534ef58039a575b70dfa1d79daa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_1d1fa5d8897cdaddcad13e2cce2f6e8270a5534ef58039a575b70dfa1d79daa1->leave($__internal_1d1fa5d8897cdaddcad13e2cce2f6e8270a5534ef58039a575b70dfa1d79daa1_prof);

    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_63940aefb2de1b37546afda12abce42dcefc701731821fe1cc7e5572c314daaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63940aefb2de1b37546afda12abce42dcefc701731821fe1cc7e5572c314daaa->enter($__internal_63940aefb2de1b37546afda12abce42dcefc701731821fe1cc7e5572c314daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 10
        echo "
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        echo "</th>
        <th width=\"30%\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习进度"), "html", null, true);
        echo "</th>
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
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : $this->getContext($context, "progresses")), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 32
            echo "        ";
            $this->loadTemplate("ClassroomBundle:ClassroomManage:tr.html.twig", "ClassroomBundle:ClassroomManage:student.html.twig", 32)->display($context);
            // line 33
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
            // line 34
            echo "        <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无学员记录"), "html", null, true);
            echo "</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>

  ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_63940aefb2de1b37546afda12abce42dcefc701731821fe1cc7e5572c314daaa->leave($__internal_63940aefb2de1b37546afda12abce42dcefc701731821fe1cc7e5572c314daaa_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  147 => 36,  138 => 34,  125 => 33,  122 => 32,  119 => 31,  116 => 30,  98 => 29,  91 => 25,  87 => 24,  83 => 23,  72 => 15,  65 => 13,  60 => 10,  54 => 9,  40 => 3,  33 => 1,  31 => 7,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "  {% extends 'ClassroomBundle:ClassroomManage:students.html.twig' %}

{% block title %}{{'学员管理'|trans}} - {{ parent() }}{% endblock %}

{% set submenu = 'student' %}

{% set script_controller = 'classroombundle/controller/classroom/students' %}

{% block maincontent %}

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
        <th width=\"40%\">{{'学员'|trans}}</th>
        <th width=\"30%\">{{'学习进度'|trans}}</th>
        <th width=\"30%\">{{'操作'|trans}}</th>
      </tr>
    </thead>
    <tbody>
      {% for student in students %}
        {% set user = users[student.userId] %}
        {% set progress = progresses[student.userId] %}
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
