<?php

/* ClassroomBundle:Classroom:class-grid.html.twig */
class __TwigTemplate_9d0788f3acb635fa9b43a5bee7fc9f329d4ae1ba0045fc1703a86fe6b9da27af extends Twig_Template
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
        $__internal_7389c2067966e46bd3477b9220fa71e1b9aa301885462ae1955ca3710120f006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7389c2067966e46bd3477b9220fa71e1b9aa301885462ae1955ca3710120f006->enter($__internal_7389c2067966e46bd3477b9220fa71e1b9aa301885462ae1955ca3710120f006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:Classroom:class-grid.html.twig"));

        // line 1
        echo "<div class=\"class-item\">
  <div class=\"class-img-wrap\">
    <a class=\"class-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 4
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeLazyImg($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "lazyload_class.png");
        echo "
    </a>
    <div class=\"mask\">
      ";
        // line 7
        $context["classroomMember"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("ClassroomMember", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0))));
        // line 8
        echo "
      ";
        // line 9
        if (((array_key_exists("classroomMember", $context)) ? (_twig_default_filter((isset($context["classroomMember"]) ? $context["classroomMember"] : $this->getContext($context, "classroomMember")), false)) : (false))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("继续学习"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 12
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即加入"), "html", null, true);
            echo "</a>
      ";
        }
        // line 14
        echo "    </div>
  </div>
  <h3><a class=\"link-dark\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a></h3>
  <div class=\"metas\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共有%courseNum%门课程", array("%courseNum%" => (("<span>" + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array())) + "</span>"))), "html", null, true);
        echo "</div>
</div>";
        
        $__internal_7389c2067966e46bd3477b9220fa71e1b9aa301885462ae1955ca3710120f006->leave($__internal_7389c2067966e46bd3477b9220fa71e1b9aa301885462ae1955ca3710120f006_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:class-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  63 => 16,  59 => 14,  51 => 12,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"class-item\">
  <div class=\"class-img-wrap\">
    <a class=\"class-img\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">
      {{ lazy_img(filepath(classroom.middlePicture, 'classroom.png'), 'img-responsive', classroom.title, 'lazyload_class.png') }}
    </a>
    <div class=\"mask\">
      {% set classroomMember = data('ClassroomMember', {classroomId:classroom.id, userId: app.user.id|default(0)}) %}

      {% if classroomMember|default(false) %}
        <a href=\"{{ path('classroom_show', {id:classroom.id}) }}\" class=\"btn btn-warning\">{{ '继续学习'|trans }}</a>
      {% else %}
        <a href=\"{{ path('classroom_show', {id:classroom.id}) }}\" class=\"btn btn-warning\">{{ '立即加入'|trans }}</a>
      {% endif %}
    </div>
  </div>
  <h3><a class=\"link-dark\" href=\"{{ path('classroom_show', {id:classroom.id}) }}\">{{ classroom.title }}</a></h3>
  <div class=\"metas\">{{ '共有%courseNum%门课程'|trans({'%courseNum%': '<span>'+classroom.courseNum+'</span>'}) }}</div>
</div>";
    }
}
