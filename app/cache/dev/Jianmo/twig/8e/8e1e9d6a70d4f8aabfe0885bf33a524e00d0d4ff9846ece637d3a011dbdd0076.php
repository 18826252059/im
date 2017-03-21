<?php

/* ClassroomBundle:ClassroomManage:set-price.html.twig */
class __TwigTemplate_867f4e74fab421bfa1f639a7c3aa3b7a203dcfd7c0d949647798186003953546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-price.html.twig", 1);
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
        $__internal_b0cb2ef68539129023c4915757014f4db675f4ed8b3e971f3513ba2b55b641da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cb2ef68539129023c4915757014f4db675f4ed8b3e971f3513ba2b55b641da->enter($__internal_b0cb2ef68539129023c4915757014f4db675f4ed8b3e971f3513ba2b55b641da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:set-price.html.twig"));

        // line 3
        $context["side_nav"] = "price";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-price";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0cb2ef68539129023c4915757014f4db675f4ed8b3e971f3513ba2b55b641da->leave($__internal_b0cb2ef68539129023c4915757014f4db675f4ed8b3e971f3513ba2b55b641da_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a1c57ca41232342837393c59c33ca15720193bf7b2d581dff1fe8877aa20c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1c57ca41232342837393c59c33ca15720193bf7b2d581dff1fe8877aa20c02->enter($__internal_3a1c57ca41232342837393c59c33ca15720193bf7b2d581dff1fe8877aa20c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3a1c57ca41232342837393c59c33ca15720193bf7b2d581dff1fe8877aa20c02->leave($__internal_3a1c57ca41232342837393c59c33ca15720193bf7b2d581dff1fe8877aa20c02_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_088b61b04c3e81aaad91ab2d455c707e34738d728bd092f3cddefcd6983933d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088b61b04c3e81aaad91ab2d455c707e34738d728bd092f3cddefcd6983933d3->enter($__internal_088b61b04c3e81aaad91ab2d455c707e34738d728bd092f3cddefcd6983933d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格设置"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格(元)"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"price\" type=\"text\"  id=\"price\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()), "html", null, true);
        echo "\"/>
          <div class=\"help-block\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前共有 %courseNum% 个课程，原价共计 %price% 元。", array("%courseNum%" => (isset($context["courseNum"]) ? $context["courseNum"] : $this->getContext($context, "courseNum")), "%price%" => (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")))), "html", null, true);
        echo "</div>
        </div>
      ";
        // line 23
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 24
            echo "        <div class=\"controls col-md-4 col-md-offset-2\">
          <div class=\"help-block\" id=\"coinPrice\" data-rate=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate"), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("相当于"), "html", null, true);
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 28
        echo "      </div>

      ";
        // line 30
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("vip.enabled")) {
            // line 31
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员免费学"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
            ";
            // line 38
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array()), 0)) : (0)), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不支持"));
            echo "
          </select>
        </div>
      </div>
      ";
        }
        // line 43
        echo "
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

  </div>
</div>
";
        
        $__internal_088b61b04c3e81aaad91ab2d455c707e34738d728bd092f3cddefcd6983933d3->leave($__internal_088b61b04c3e81aaad91ab2d455c707e34738d728bd092f3cddefcd6983933d3_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  140 => 47,  134 => 43,  126 => 38,  119 => 34,  114 => 31,  112 => 30,  108 => 28,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  82 => 20,  76 => 17,  68 => 12,  63 => 10,  60 => 9,  54 => 8,  40 => 6,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}

{% set side_nav = \"price\" %}
{% set script_controller = 'classroombundle/controller/classroom/set-price' %}

{% block title %}{{'价格设置'|trans}} - {{ parent() }}{% endblock %}

{% block main %}
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">{{'价格设置'|trans}}</div>
  <div class=\"panel-body\">
  {{ web_macro.flash_messages() }}
  <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">{{'价格(元)'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"price\" type=\"text\"  id=\"price\" class=\"form-control\" value=\"{{classroom.price}}\"/>
          <div class=\"help-block\">{{'当前共有 %courseNum% 个课程，原价共计 %price% 元。'|trans({'%courseNum%':courseNum,'%price%':price})}}</div>
        </div>
      {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
        <div class=\"controls col-md-4 col-md-offset-2\">
          <div class=\"help-block\" id=\"coinPrice\" data-rate=\"{{setting('coin.cash_rate')}}\" data-name=\"{{setting('coin.coin_name')}}\">{{'相当于'|trans}}{{classroom.price * setting('coin.cash_rate') }}{{setting('coin.coin_name')}}</div>
        </div>
      {% endif %}
      </div>

      {% if setting('vip.enabled') %}

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">{{'会员免费学'|trans}}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
            {{ select_options(levels, classroom.vipLevelId|default(0), '不支持'|trans) }}
          </select>
        </div>
      </div>
      {% endif %}

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">{{'提交'|trans}}</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  </form>

  </div>
</div>
{% endblock %}";
    }
}
