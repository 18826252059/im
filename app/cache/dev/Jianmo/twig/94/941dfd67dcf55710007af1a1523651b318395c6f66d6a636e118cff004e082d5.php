<?php

/* ClassroomBundle:ClassroomManage:set-info.html.twig */
class __TwigTemplate_b86aff62bc0677028938d1549ff5f41f52f5e9a0d5f4c72bcea1ddb2e277f020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 1);
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
        $__internal_85e3cd6d912bf9659979030c57f92c1837afcaf9bc9a05b2f710a8fb20d4deed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e3cd6d912bf9659979030c57f92c1837afcaf9bc9a05b2f710a8fb20d4deed->enter($__internal_85e3cd6d912bf9659979030c57f92c1837afcaf9bc9a05b2f710a8fb20d4deed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:set-info.html.twig"));

        // line 3
        $context["side_nav"] = "base";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-info";
        // line 5
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("classroombundle/controller/classroom-admin/classroom-create");
        // line 6
        $context["script_arguments"] = array("tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e3cd6d912bf9659979030c57f92c1837afcaf9bc9a05b2f710a8fb20d4deed->leave($__internal_85e3cd6d912bf9659979030c57f92c1837afcaf9bc9a05b2f710a8fb20d4deed_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_badeff3e4cedfb6834a035eb6c57247fd9a9fab07863f935142ab3612da1e9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badeff3e4cedfb6834a035eb6c57247fd9a9fab07863f935142ab3612da1e9e1->enter($__internal_badeff3e4cedfb6834a035eb6c57247fd9a9fab07863f935142ab3612da1e9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_badeff3e4cedfb6834a035eb6c57247fd9a9fab07863f935142ab3612da1e9e1->leave($__internal_badeff3e4cedfb6834a035eb6c57247fd9a9fab07863f935142ab3612da1e9e1_prof);

    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        $__internal_4f0daacaae9722b07e9bad728560769a33db127134ca3757fdda8a9f18704560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0daacaae9722b07e9bad728560769a33db127134ca3757fdda8a9f18704560->enter($__internal_4f0daacaae9722b07e9bad728560769a33db127134ca3757fdda8a9f18704560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"title\" type=\"text\"  id=\"title\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "\"/>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("简介"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea name=\"about\" class=\"form-control\" rows=\"6\" 
          data-image-upload-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
          data-flash-upload-url=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\" id=\"about\">";
        echo $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array());
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标签"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"classroom_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\"
                 tabindex=\"-1\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), ","), "html", null, true);
        echo "\"
                 data-explain=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "\">
          <div class=\"help-block\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%展示", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" data-showable=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "showable", array()), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
        echo "
          </label>
          <label>
            <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "
          </label>
          <div class=\"help-block\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭后，%name%将彻底隐藏，无法在前台查看到。", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</div>
        </div>

      </div>
      <div class=\"row form-group\">
      <div id='buyable'>
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 67
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" data-buyable=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "buyable", array()), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
        echo "
          </label>
          <label>
            <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "
          </label>
          <div class=\"help-block\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭后%name%将无法在线购买加入。", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "</div>
        </div>
        </div>
      </div>
      
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 85
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getCategoryChoices("classroom"), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "categoryId", array()), array("0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类")));
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

     ";
        // line 91
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 91)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 92
        echo "    
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
</div>

";
        
        $__internal_4f0daacaae9722b07e9bad728560769a33db127134ca3757fdda8a9f18704560->leave($__internal_4f0daacaae9722b07e9bad728560769a33db127134ca3757fdda8a9f18704560_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 100,  222 => 96,  216 => 92,  214 => 91,  205 => 85,  199 => 82,  190 => 76,  185 => 74,  177 => 71,  169 => 67,  159 => 60,  154 => 58,  146 => 55,  139 => 51,  130 => 45,  126 => 44,  122 => 43,  116 => 40,  106 => 35,  102 => 34,  95 => 30,  86 => 24,  80 => 21,  72 => 16,  67 => 14,  64 => 13,  58 => 12,  44 => 10,  37 => 1,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}

{% set side_nav = 'base' %}
{% set script_controller = 'classroombundle/controller/classroom/set-info' %}
{% do load_script('classroombundle/controller/classroom-admin/classroom-create') %}
{% set script_arguments = {
tagMatchUrl: path('tag_match'),
} %}

{% block title %}{{'基本信息'|trans}} - {{ parent() }}{% endblock %}

{% block main %}
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">{{'基本信息'|trans}}</div>
  <div class=\"panel-body\">
    {{ web_macro.flash_messages() }}
    <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"title\">{{'名称'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"title\" type=\"text\"  id=\"title\" class=\"form-control\" value=\"{{classroom.title}}\"/>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >{{'简介'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea name=\"about\" class=\"form-control\" rows=\"6\" 
          data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('default')}) }}\"
          data-flash-upload-url=\"{{ path('editor_upload', {token:upload_token('default', 'flash')}) }}\" id=\"about\">{{ classroom.about|raw }}</textarea>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">{{ '标签'|trans }}</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"classroom_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\"
                 tabindex=\"-1\" value=\"{{ tags|join(',') }}\"
                 data-explain=\"{{ '用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理'|trans }}\">
          <div class=\"help-block\">{{ '用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理'|trans }}</div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >{{'%name%展示'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" data-showable=\"{{classroom.showable}}\"> {{'开启'|trans}}
          </label>
          <label>
            <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> {{'关闭'|trans}}
          </label>
          <div class=\"help-block\">{{'关闭后，%name%将彻底隐藏，无法在前台查看到。'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</div>
        </div>

      </div>
      <div class=\"row form-group\">
      <div id='buyable'>
        <div class=\"col-md-2 control-label\">
          <label >{{setting(\"classroom.name\")|default(\"班级\")}}{{'购买'|trans}}</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" data-buyable=\"{{classroom.buyable}}\" > {{'开启'|trans}}
          </label>
          <label>
            <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> {{'关闭'|trans}}
          </label>
          <div class=\"help-block\">{{'关闭后%name%将无法在线购买加入。'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</div>
        </div>
        </div>
      </div>
      
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">{{'分类'|trans}}</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            {{ select_options(category_choices('classroom'), classroom.categoryId, {'0':'分类'|trans}) }}
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

     {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: classroom.orgCode, inputClass: 'width-input width-input-large'} %}
    
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

{% endblock %}
";
    }
}
