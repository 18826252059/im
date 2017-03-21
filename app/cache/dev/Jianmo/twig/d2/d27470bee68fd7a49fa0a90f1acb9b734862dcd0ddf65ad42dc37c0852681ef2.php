<?php

/* PermissionBundle:Role:role-modal.html.twig */
class __TwigTemplate_69b9a9a2e1faf8e1be7042b5bb1640b86c70a05c3e5cbb6f6119384862e909db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "PermissionBundle:Role:role-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d405c615a56b02134458d3a9feec221e396185e925bb580bceb39a241aeefa8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d405c615a56b02134458d3a9feec221e396185e925bb580bceb39a241aeefa8c->enter($__internal_d405c615a56b02134458d3a9feec221e396185e925bb580bceb39a241aeefa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Role:role-modal.html.twig"));

        // line 11
        $context["role"] = ((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), null)) : (null));
        // line 12
        $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), "create")) : ("create"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d405c615a56b02134458d3a9feec221e396185e925bb580bceb39a241aeefa8c->leave($__internal_d405c615a56b02134458d3a9feec221e396185e925bb580bceb39a241aeefa8c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a267e4c79b61462e9b87869f004f8a5883910764d1feb14bc42a575491dee10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a267e4c79b61462e9b87869f004f8a5883910764d1feb14bc42a575491dee10->enter($__internal_5a267e4c79b61462e9b87869f004f8a5883910764d1feb14bc42a575491dee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        if (((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "show")) {
            // line 4
            echo "    角色详情
  ";
        } elseif ((        // line 5
(isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "edit")) {
            // line 6
            echo "    编辑角色
  ";
        } else {
            // line 8
            echo "    新增角色
  ";
        }
        
        $__internal_5a267e4c79b61462e9b87869f004f8a5883910764d1feb14bc42a575491dee10->leave($__internal_5a267e4c79b61462e9b87869f004f8a5883910764d1feb14bc42a575491dee10_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ccf0de402b376fdd73bc138a120067b3b5653d089e03d4eb5479df7009d10a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccf0de402b376fdd73bc138a120067b3b5653d089e03d4eb5479df7009d10a9->enter($__internal_9ccf0de402b376fdd73bc138a120067b3b5653d089e03d4eb5479df7009d10a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"role-form\" method=\"post\"
        action=\"";
        // line 18
        if (((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "create")) {
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_create");
            echo " ";
        } elseif (((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "edit")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_edit", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id", array()))), "html", null, true);
            echo " ";
        }
        echo "\">
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" ";
        // line 24
        if (((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "show")) {
            echo " readOnly=\"true\" ";
        }
        // line 25
        echo "               class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"管理员\"
               data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_check_name", array("exclude" => (($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "name", array()), "")) : ("")))), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"code\">编码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"code\" name=\"code\" ";
        // line 34
        if ((((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "show") || ((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) == "edit"))) {
            echo "readOnly=\"true\"";
        }
        echo " class=\"form-control\"
               value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "code", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"ROLE_ADMIN\"
               data-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_check_code", array("exclude" => (($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["role"]) ? $context["role"] : null), "code", array()), "")) : ("")))), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>权限</label>
      </div>
      <div class=\"col-md-8\">
        <ul id=\"tree\" class=\"ztree\">
          <textarea style=\"display:none\">";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")), "html", null, true);
        echo "</textarea>
        </ul>
      </div>
    </div>

    <input type=\"text\" id=\"menus\" name=\"data\" class=\"hide\" value=\"\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

";
        
        $__internal_9ccf0de402b376fdd73bc138a120067b3b5653d089e03d4eb5479df7009d10a9->leave($__internal_9ccf0de402b376fdd73bc138a120067b3b5653d089e03d4eb5479df7009d10a9_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9fc7cb471eda98bd4847e9c276ab607af074f08b420183820f9db958fdf7b67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc7cb471eda98bd4847e9c276ab607af074f08b420183820f9db958fdf7b67c->enter($__internal_9fc7cb471eda98bd4847e9c276ab607af074f08b420183820f9db958fdf7b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  ";
        // line 59
        if (((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")) != "show")) {
            // line 60
            echo "    <button id=\"role-submit\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\"
            data-target=\"#role-form\">添加
    </button>
  ";
        }
        // line 64
        echo "  <script>app.load('permissionbundle/controller/role/create')</script>
";
        
        $__internal_9fc7cb471eda98bd4847e9c276ab607af074f08b420183820f9db958fdf7b67c->leave($__internal_9fc7cb471eda98bd4847e9c276ab607af074f08b420183820f9db958fdf7b67c_prof);

    }

    public function getTemplateName()
    {
        return "PermissionBundle:Role:role-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 64,  172 => 60,  170 => 59,  167 => 58,  161 => 57,  149 => 51,  140 => 45,  128 => 36,  124 => 35,  118 => 34,  107 => 26,  102 => 25,  98 => 24,  81 => 18,  74 => 15,  68 => 14,  59 => 8,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  41 => 2,  34 => 1,  32 => 12,  30 => 11,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}
{% block title %}
  {% if model == 'show' %}
    角色详情
  {% elseif model == 'edit' %}
    编辑角色
  {% else %}
    新增角色
  {% endif %}
{% endblock %}
{% set role = role|default(null) %}
{% set modal = modal|default('create') %}

{% block body %}
  {{ web_macro.flash_messages() }}

  <form class=\"form-horizontal\" id=\"role-form\" method=\"post\"
        action=\"{% if model == 'create' %} {{ path('admin_role_create') }} {% elseif model == 'edit' %} {{ path('admin_role_edit',{id:role.id}) }} {% endif %}\">
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" {% if model == 'show' %} readOnly=\"true\" {% endif %}
               class=\"form-control\" value=\"{{ role.name|default('') }}\" placeholder=\"管理员\"
               data-url=\"{{ path('admin_role_check_name', {exclude:role.name|default('')}) }}\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"code\">编码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"code\" name=\"code\" {% if model == 'show' or model == 'edit' %}readOnly=\"true\"{% endif %} class=\"form-control\"
               value=\"{{ role.code|default('') }}\" placeholder=\"ROLE_ADMIN\"
               data-url=\"{{ path('admin_role_check_code', {exclude:role.code|default('')}) }}\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>权限</label>
      </div>
      <div class=\"col-md-8\">
        <ul id=\"tree\" class=\"ztree\">
          <textarea style=\"display:none\">{{ menus }}</textarea>
        </ul>
      </div>
    </div>

    <input type=\"text\" id=\"menus\" name=\"data\" class=\"hide\" value=\"\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

  </form>

{% endblock %}

{% block footer %}
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  {% if model != 'show' %}
    <button id=\"role-submit\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\"
            data-target=\"#role-form\">添加
    </button>
  {% endif %}
  <script>app.load('permissionbundle/controller/role/create')</script>
{% endblock %}";
    }
}
