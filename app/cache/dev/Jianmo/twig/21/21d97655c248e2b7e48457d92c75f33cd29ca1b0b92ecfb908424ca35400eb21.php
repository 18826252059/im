<?php

/* TopxiaAdminBundle:User:approvals.html.twig */
class __TwigTemplate_102dda19666214c267b6214c018182b4e1324a089b6c013158caa40719817ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 1);
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
        $__internal_4b604887768815968ebd56383631d4b3306572c925e9c77ae76e86adf4b38d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b604887768815968ebd56383631d4b3306572c925e9c77ae76e86adf4b38d5f->enter($__internal_4b604887768815968ebd56383631d4b3306572c925e9c77ae76e86adf4b38d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:User:approvals.html.twig"));

        // line 3
        $context["script_controller"] = "user/approved";
        // line 5
        $context["menu"] = "admin_approval_approvals";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b604887768815968ebd56383631d4b3306572c925e9c77ae76e86adf4b38d5f->leave($__internal_4b604887768815968ebd56383631d4b3306572c925e9c77ae76e86adf4b38d5f_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_9ae2c5dc8ab78edba30d9e41fb06ce65a4ca8b7de6b605b0ac2a6f83651d42ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae2c5dc8ab78edba30d9e41fb06ce65a4ca8b7de6b605b0ac2a6f83651d42ba->enter($__internal_9ae2c5dc8ab78edba30d9e41fb06ce65a4ca8b7de6b605b0ac2a6f83651d42ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  <div class=\"btn-group\">
    <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 9
        if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approving")) {
            echo "btn-primary";
        }
        echo "\"
       href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_approval_approvals", array("approvalStatus" => "approving"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("审核中"), "html", null, true);
        echo "</a>
    <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 11
        if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approved")) {
            echo "btn-primary";
        }
        echo "\"
       href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_approval_approvals", array("approvalStatus" => "approved"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("审核成功"), "html", null, true);
        echo "</a>
  </div>
  <form id=\"user-search-form\" class=\"form-inline well well-sm mtl\" action=\"\" method=\"get\" novalidate>
   ";
        // line 15
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 15)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 16
        echo "  
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 19
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--查询条件--"), "nickname" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱"), "truename" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("真实姓名"), "idcard" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("身份证号码")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"
             placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("申请时间:"), "html", null, true);
        echo "
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\"
             value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\"
             value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>

  ";
        // line 37
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 38
            echo "    <table id=\"user-table\" class=\"table table-striped\">
      <thead>
      <tr>
        <th>ID</th>
        <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
            echo "</th>
        ";
            // line 43
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 43)->display($context);
            // line 44
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("真实姓名"), "html", null, true);
            echo "</th>
        <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("身份证号码"), "html", null, true);
            echo "</th>
        <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮件"), "html", null, true);
            echo "</th>
        <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("申请时间"), "html", null, true);
            echo "</th>
        <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
            // line 52
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
                // line 53
                echo "        <tr id=\"user-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
          <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</td>
          <td><strong>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => $context["user"]), "method"), "html", null, true);
                echo "</strong></td>
          ";
                // line 56
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 56)->display(array_merge($context, array("orgCode" => $this->getAttribute($context["user"], "orgCode", array()))));
                // line 57
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userProfiles"]) ? $context["userProfiles"] : $this->getContext($context, "userProfiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"), "truename", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userProfiles"]) ? $context["userProfiles"] : $this->getContext($context, "userProfiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"), "idcard", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "approvalTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 62
                if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approved")) {
                    // line 63
                    echo "              <div class=\"btn-group\">
                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_approval_info_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"
                   class=\"btn btn-default btn-sm\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看"), "html", null, true);
                    echo "</a>
                ";
                    // line 66
                    $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 66)->display(array_merge($context, array("parentCode" => "admin_approval_approvals", "group" => "groupButton", "user" => $context["user"])));
                    // line 67
                    echo "              </div>
            ";
                } elseif ((                // line 68
(isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approving")) {
                    // line 69
                    echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_approval_approve", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"
                 class=\"btn btn-default btn-sm\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("审核"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 72
                echo "          </td>
        </tr>
      ";
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
            // line 75
            echo "      </tbody>
    </table>

    ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo "
  ";
        } else {
            // line 80
            echo "    ";
            if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approved")) {
                // line 81
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无已经审核成功的实名认证用户"), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 82
(isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approving")) {
                // line 83
                echo "      <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无需要审核中的实名认证用户"), "html", null, true);
                echo "</div>
    ";
            }
            // line 85
            echo "  ";
        }
        // line 86
        echo "
";
        
        $__internal_9ae2c5dc8ab78edba30d9e41fb06ce65a4ca8b7de6b605b0ac2a6f83651d42ba->leave($__internal_9ae2c5dc8ab78edba30d9e41fb06ce65a4ca8b7de6b605b0ac2a6f83651d42ba_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approvals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 86,  284 => 85,  278 => 83,  276 => 82,  271 => 81,  268 => 80,  263 => 78,  258 => 75,  242 => 72,  237 => 70,  232 => 69,  230 => 68,  227 => 67,  225 => 66,  221 => 65,  217 => 64,  214 => 63,  212 => 62,  207 => 60,  203 => 59,  199 => 58,  194 => 57,  192 => 56,  188 => 55,  184 => 54,  179 => 53,  162 => 52,  155 => 48,  151 => 47,  147 => 46,  143 => 45,  138 => 44,  136 => 43,  132 => 42,  126 => 38,  124 => 37,  118 => 34,  111 => 32,  103 => 29,  98 => 27,  92 => 24,  88 => 23,  81 => 19,  76 => 16,  74 => 15,  66 => 12,  60 => 11,  54 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'user/approved' %}

{% set menu = 'admin_approval_approvals' %}

{% block main %}
  <div class=\"btn-group\">
    <a type=\"button\" class=\"btn btn-default btn-sm {% if approvalStatus == 'approving' %}btn-primary{% endif %}\"
       href=\"{{ path('admin_approval_approvals',{approvalStatus: 'approving'}) }}\">{{ '审核中'|trans }}</a>
    <a type=\"button\" class=\"btn btn-default btn-sm {% if approvalStatus == 'approved' %}btn-primary{% endif %}\"
       href=\"{{ path('admin_approval_approvals',{approvalStatus: 'approved'}) }}\">{{ '审核成功'|trans }}</a>
  </div>
  <form id=\"user-search-form\" class=\"form-inline well well-sm mtl\" action=\"\" method=\"get\" novalidate>
   {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
  
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        {{ select_options({'':'--查询条件--'|trans,nickname:'用户名'|trans,email:'邮箱'|trans,truename:'真实姓名'|trans,idcard:'身份证号码'|trans}, app.request.get('keywordType')) }}
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"{{ app.request.query.get('keyword') }}\"
             placeholder=\"{{ '关键词'|trans }}\">
    </div>
    <div class=\"form-group\">
      {{ '申请时间:'|trans }}
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\"
             value=\"{{ app.request.query.get('startDateTime') }}\" placeholder=\"{{ '起始时间'|trans }}\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\"
             value=\"{{ app.request.query.get('endDateTime') }}\" placeholder=\"{{ '结束时间'|trans }}\">
    </div>
    <button class=\"btn btn-primary\">{{ '搜索'|trans }}</button>
  </form>

  {% if users %}
    <table id=\"user-table\" class=\"table table-striped\">
      <thead>
      <tr>
        <th>ID</th>
        <th>{{ '用户名'|trans }}</th>
        {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
        <th>{{ '真实姓名'|trans }}</th>
        <th>{{ '身份证号码'|trans }}</th>
        <th>{{ '邮件'|trans }}</th>
        <th>{{ '申请时间'|trans }}</th>
        <th>{{ '操作'|trans }}</th>
      </tr>
      </thead>
      <tbody>
      {% for user in users %}
        <tr id=\"user-table-tr-{{ user.id }}\">
          <td>{{ user.id }}</td>
          <td><strong>{{ admin_macro.user_link(user) }}</strong></td>
          {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: user.orgCode}%}
          <td>{{ userProfiles[user.id].truename }}</td>
          <td>{{ userProfiles[user.id].idcard }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.approvalTime | date('Y-m-d H:i') }}</td>
          <td>
            {% if approvalStatus == 'approved' %}
              <div class=\"btn-group\">
                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_approval_info_view', {id:user.id}) }}\"
                   class=\"btn btn-default btn-sm\">{{ '查看'|trans }}</a>
                {% include 'PermissionBundle:Templates:group-button.html.twig' with {parentCode: 'admin_approval_approvals', group:'groupButton', user: user} %}
              </div>
            {% elseif approvalStatus == 'approving' %}
              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_approval_approve', {id:user.id}) }}\"
                 class=\"btn btn-default btn-sm\">{{ '审核'|trans }}</a>
            {% endif %}
          </td>
        </tr>
      {% endfor %}
      </tbody>
    </table>

    {{ admin_macro.paginator(paginator) }}
  {% else %}
    {% if approvalStatus == 'approved' %}
      <div class=\"empty\">{{ '暂无已经审核成功的实名认证用户'|trans }}</div>
    {% elseif approvalStatus == 'approving' %}
      <div class=\"empty\">{{ '暂无需要审核中的实名认证用户'|trans }}</div>
    {% endif %}
  {% endif %}

{% endblock %}
";
    }
}
