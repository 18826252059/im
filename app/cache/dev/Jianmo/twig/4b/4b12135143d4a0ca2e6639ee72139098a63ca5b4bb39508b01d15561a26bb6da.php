<?php

/* PermissionBundle:Role:index.html.twig */
class __TwigTemplate_cbcba08165c1652622636c195fbb48924784bf9a5e18efaa256e58bfb9ce12a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "PermissionBundle:Role:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90da1095eaaa2f34d792b1bd1ca35bf2ed976c390420cc80f976b63bba1de28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90da1095eaaa2f34d792b1bd1ca35bf2ed976c390420cc80f976b63bba1de28e->enter($__internal_90da1095eaaa2f34d792b1bd1ca35bf2ed976c390420cc80f976b63bba1de28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Role:index.html.twig"));

        // line 3
        $context["menu"] = "admin_role_manage";
        // line 5
        $context["script_controller"] = "permissionbundle/controller/role/index";
        // line 6
        $context["notUpdateRoles"] = array(0 => "ROLE_SUPER_ADMIN", 1 => "ROLE_ADMIN", 2 => "ROLE_TEACHER", 3 => "ROLE_USER");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90da1095eaaa2f34d792b1bd1ca35bf2ed976c390420cc80f976b63bba1de28e->leave($__internal_90da1095eaaa2f34d792b1bd1ca35bf2ed976c390420cc80f976b63bba1de28e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_cbc3dc9c18e5d84d33d97c3b6a68e66b8e3fd7218751016882469471710d95c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc3dc9c18e5d84d33d97c3b6a68e66b8e3fd7218751016882469471710d95c9->enter($__internal_cbc3dc9c18e5d84d33d97c3b6a68e66b8e3fd7218751016882469471710d95c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          ";
        // line 15
        $context["options"] = array("" => "--关键词类型--", "name" => "角色名称", "code" => "编码");
        // line 16
        echo "          ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"25%\">角色名称</th>
      <th width=\"25%\">编码</th>
      <th width=\"20%\">创建时间</th>
      <th width=\"20%\">创建者</th>
      <th>操作</th>
    </tr>   
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 36
            echo "      <tr>
        <td>
          ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "
        <td>
          ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "code", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["role"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "        </td>
        <td>
          ";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["role"], "createdUserId", array()), array(), "array", false, true), "nickname", array()), "--")) : ("--")), "html", null, true);
            echo "
        </td>
        <td>
          <div class=\"btn-group\">
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_role_show", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
            ";
            // line 50
            if (!twig_in_filter($this->getAttribute($context["role"], "code", array()), (isset($context["notUpdateRoles"]) ? $context["notUpdateRoles"] : $this->getContext($context, "notUpdateRoles")))) {
                // line 51
                echo "              ";
                $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "PermissionBundle:Role:index.html.twig", 51)->display(array_merge($context, array("parentCode" => "admin_role_manage", "group" => "groupBtn", "role" => $context["role"])));
                // line 52
                echo "            ";
            }
            // line 53
            echo "          </div>
        </td>
      </tr>
    ";
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
            // line 57
            echo "      <tr><td class=\"empty\" colspan=\"20\">暂无角色</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </table>

  <div class=\"alert alert-info\" role=\"alert\">
    <p>1、初始化的4个角色，无法编辑和删除</p>
    <p>2、角色创建成功后编码不可修改</p>
  </div>


  ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_cbc3dc9c18e5d84d33d97c3b6a68e66b8e3fd7218751016882469471710d95c9->leave($__internal_cbc3dc9c18e5d84d33d97c3b6a68e66b8e3fd7218751016882469471710d95c9_prof);

    }

    public function getTemplateName()
    {
        return "PermissionBundle:Role:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 67,  167 => 59,  160 => 57,  144 => 53,  141 => 52,  138 => 51,  136 => 50,  132 => 49,  125 => 45,  120 => 43,  114 => 40,  109 => 38,  105 => 36,  87 => 35,  69 => 20,  61 => 16,  59 => 15,  50 => 9,  47 => 8,  41 => 7,  34 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_role_manage' %}

{% set script_controller = 'permissionbundle/controller/role/index' %}
{% set notUpdateRoles = ['ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_TEACHER', 'ROLE_USER'] %}
{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          {% set options = {'':'--关键词类型--','name':'角色名称','code':'编码'} %}
          {{ select_options(options, app.request.get('keywordType')) }}
    </select>
  </div>
  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"{{ app.request.query.get('keyword') }}\" placeholder=\"关键词\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"25%\">角色名称</th>
      <th width=\"25%\">编码</th>
      <th width=\"20%\">创建时间</th>
      <th width=\"20%\">创建者</th>
      <th>操作</th>
    </tr>   
    {% for role in roles %}
      <tr>
        <td>
          {{ role.name }}
        <td>
          {{ role.code }}
        </td>
        <td>
          {{ role.createdTime|date('Y-m-d H:i:s') }}        </td>
        <td>
          {{ users[role.createdUserId].nickname|default('--') }}
        </td>
        <td>
          <div class=\"btn-group\">
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_role_show', {id:role.id}) }}\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
            {% if role.code not in notUpdateRoles %}
              {% include 'PermissionBundle:Templates:group-button.html.twig' with {parentCode: 'admin_role_manage', group:'groupBtn', role: role} %}
            {% endif %}
          </div>
        </td>
      </tr>
    {% else %}
      <tr><td class=\"empty\" colspan=\"20\">暂无角色</tr>
    {% endfor %}
  </table>

  <div class=\"alert alert-info\" role=\"alert\">
    <p>1、初始化的4个角色，无法编辑和删除</p>
    <p>2、角色创建成功后编码不可修改</p>
  </div>


  {{ web_macro.paginator(paginator) }}

{% endblock %}";
    }
}
