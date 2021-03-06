<?php

/* TopxiaAdminBundle:User:index.html.twig */
class __TwigTemplate_0c47a61dab84e8633713a713d479ce2548c22fca2b7b99d7e00d17c6bbd2726e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:index.html.twig", 1);
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
        $__internal_88e29eb73fadbd63bd14433f07cf0b004c3368d5f962bc92ccea2c087d5919e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e29eb73fadbd63bd14433f07cf0b004c3368d5f962bc92ccea2c087d5919e3->enter($__internal_88e29eb73fadbd63bd14433f07cf0b004c3368d5f962bc92ccea2c087d5919e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:User:index.html.twig"));

        // line 3
        $context["menu"] = "admin_user_manage";
        // line 5
        $context["script_controller"] = "user/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e29eb73fadbd63bd14433f07cf0b004c3368d5f962bc92ccea2c087d5919e3->leave($__internal_88e29eb73fadbd63bd14433f07cf0b004c3368d5f962bc92ccea2c087d5919e3_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_df18140e88c2045ba7db211ff864c398fc8959b022f0bb4c5eb3f478339784e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df18140e88c2045ba7db211ff864c398fc8959b022f0bb4c5eb3f478339784e1->enter($__internal_df18140e88c2045ba7db211ff864c398fc8959b022f0bb4c5eb3f478339784e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">

      ";
        // line 14
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:index.html.twig", 14)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 15
        echo "
      <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
        ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("longinDate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录时间"), "registerDate" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时间")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "datePicker"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--时间类型--"));
        echo "
      </select>
      <div class=\"form-group \">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">

      <select class=\"form-control\" name=\"roles\">
        ";
        // line 30
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->arrayMerge($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userRole"), (isset($context["allRoles"]) ? $context["allRoles"] : $this->getContext($context, "allRoles"))), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "roles"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有角色--"));
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>
    <div class=\"form-group\">
      <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
        ";
        // line 37
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordUserType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--注册来源--"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        ";
        // line 43
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("userKeyWordType"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) : ("nickname")));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

    ";
        // line 54
        if (($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin_user_export") && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("UserImporter"))) {
            // line 55
            echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\"
         data-url=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_export");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出搜索结果"), "html", null, true);
            echo "</a>
    ";
        }
        // line 58
        echo "
  </form>



  <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
    <thead>
    <tr>
      <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "</th>
      ";
        // line 67
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 67)->display($context);
        // line 68
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号"), "html", null, true);
        echo "</th>
      <th>Email</th>
      <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近登录"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户总数："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["userCount"]) ? $context["userCount"] : $this->getContext($context, "userCount")), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 80
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:User:user-table-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 80)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 81
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </tbody>
  </table>
  ";
        // line 84
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:User:index.html.twig", 84)->display(array_merge($context, array("module" => "user", "formId" => "user-table")));
        // line 85
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_df18140e88c2045ba7db211ff864c398fc8959b022f0bb4c5eb3f478339784e1->leave($__internal_df18140e88c2045ba7db211ff864c398fc8959b022f0bb4c5eb3f478339784e1_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 85,  222 => 84,  218 => 82,  204 => 81,  201 => 80,  184 => 79,  177 => 77,  169 => 72,  165 => 71,  161 => 70,  155 => 68,  153 => 67,  149 => 66,  139 => 58,  132 => 56,  129 => 55,  127 => 54,  119 => 49,  115 => 48,  107 => 43,  98 => 37,  88 => 30,  77 => 24,  69 => 21,  62 => 17,  58 => 15,  56 => 14,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_user_manage' %}

{% set script_controller = 'user/list' %}

{% block main %}

  {{ web_macro.flash_messages() }}

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">

      {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}

      <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
        {{ select_options({longinDate:'登录时间'|trans, registerDate: '注册时间'|trans}, app.request.get('datePicker') ,'--时间类型--'|trans) }}
      </select>
      <div class=\"form-group \">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"{{ app.request.query.get('startDate') }}\" placeholder=\"{{ '起始时间'|trans }}\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"{{ app.request.query.get('endDate') }}\" placeholder=\"{{ '结束时间'|trans }}\">
      </div>
    </div>
    <div class=\"form-group\">

      <select class=\"form-control\" name=\"roles\">
        {{ select_options(dict('userRole')|array_merge(allRoles), app.request.query.get('roles'), '--所有角色--'|trans) }}
      </select>
    </div>

    <span class=\"divider\"></span>
    <div class=\"form-group\">
      <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
        {{ select_options(dict('userType'), app.request.query.get('keywordUserType'), '--注册来源--'|trans) }}
      </select>
    </div>

    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        {{ select_options(dict('userKeyWordType'), app.request.query.get('keywordType') ? app.request.query.get('keywordType') : 'nickname') }}
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"{{ app.request.query.get('keyword') }}\"
             placeholder=\"{{ '关键词'|trans }}\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

    {% if has_permission('admin_user_export') and is_plugin_installed('UserImporter') %}
      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\"
         data-url=\"{{ path('admin_user_export') }}\">{{ '导出搜索结果'|trans }}</a>
    {% endif %}

  </form>



  <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
    <thead>
    <tr>
      <th>{{ '用户名'|trans }}</th>
      {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
      <th>{{ '手机号'|trans }}</th>
      <th>Email</th>
      <th>{{ '注册时间'|trans }}</th>
      <th>{{ '最近登录'|trans }}</th>
      <th width=\"10%\">{{ '操作'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">{{ '用户总数：'|trans }}<strong class=\"inflow-num\">{{ userCount }}</strong></span>
    </p>
    {% for user in users %}
      {% include 'TopxiaAdminBundle:User:user-table-tr.html.twig' with {user:user,profile:profiles[user.id]} %}
    {% endfor %}
    </tbody>
  </table>
  {% include 'OrgBundle:Org:batch-update-org-btn.html.twig' with {module:'user', formId:'user-table'} %}
  {{ admin_macro.paginator(paginator) }}
{% endblock %}";
    }
}
