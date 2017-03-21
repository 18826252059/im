<?php

/* TopxiaAdminBundle:Announcement:index.html.twig */
class __TwigTemplate_cb4a01da61f33b139f1e709a0885f3832d92e883e3fe081468590bf6bc3436eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 1);
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
        $__internal_44e209f367e560065adf09c9ac4a2193001e05527a33fe2ac00b8276e2b1e9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e209f367e560065adf09c9ac4a2193001e05527a33fe2ac00b8276e2b1e9be->enter($__internal_44e209f367e560065adf09c9ac4a2193001e05527a33fe2ac00b8276e2b1e9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Announcement:index.html.twig"));

        // line 3
        $context["script_controller"] = "announcement/index";
        // line 5
        $context["menu"] = "admin_announcement_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e209f367e560065adf09c9ac4a2193001e05527a33fe2ac00b8276e2b1e9be->leave($__internal_44e209f367e560065adf09c9ac4a2193001e05527a33fe2ac00b8276e2b1e9be_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_5e3a25d811d0934e6236f6d6a01d2db788269e25a584261bc80d64ff18c7899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3a25d811d0934e6236f6d6a01d2db788269e25a584261bc80d64ff18c7899f->enter($__internal_5e3a25d811d0934e6236f6d6a01d2db788269e25a584261bc80d64ff18c7899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            echo "  
  <form id=\"announcement-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
            // line 10
            $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
            // line 11
            echo "    <button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
            echo "</button>
  </form>
";
        }
        // line 14
        echo "
  <table id=\"announcement-table\" class=\"table table-striped\">
    <thead>
    <tr>
      <th width=\"25%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公告内容"), "html", null, true);
        echo "</th>
      ";
        // line 19
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 19)->display($context);
        // line 20
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布人"), "html", null, true);
        echo "</th>
      <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 28
        if ((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements"))) {
            // line 29
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 30
                echo "        <tr announcement-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "id", array()), "html", null, true);
                echo ">
          ";
                // line 31
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 31)->display($context);
                // line 32
                echo "          <td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                echo "\" target=\"_content\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "content", array()), "html", null, true);
                echo "</td>
          ";
                // line 33
                $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 33)->display(array_merge($context, array("orgCode" => $this->getAttribute($context["announcement"], "orgCode", array()))));
                // line 34
                echo "          <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "startTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "endTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 37
                if (((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) < $this->getAttribute($context["announcement"], "startTime", array()))) {
                    // line 38
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("即将开始"), "html", null, true);
                    echo "
            ";
                } elseif ((                // line 39
(isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) > $this->getAttribute($context["announcement"], "endTime", array()))) {
                    // line 40
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已结束"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 42
                    echo "              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("显示中"), "html", null, true);
                    echo "
            ";
                }
                // line 44
                echo "          </td>
          <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["announcement"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
          <td>
            <div class=\"btn-group\">
              <a data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_announcement_edit", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\"
                 data-toggle=\"modal\" data-target=\"#modal\">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
                echo "</a>
              <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li>
                  <a href=\"javascript:;\" data-url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_announcement_delete", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"delete-btn\"><span class=\"glyphicon glyphicon-trash\"></span> ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "</a>
                </li>
              </ul>
            </div>
          </td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    ";
        }
        // line 64
        echo "    </tbody>
  </table>
  ";
        // line 66
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 66)->display(array_merge($context, array("module" => "announcement", "formId" => "announcement-table")));
        // line 67
        echo "  ";
        if ( !(isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements"))) {
            // line 68
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无公告"), "html", null, true);
            echo "</div>
  ";
        }
        // line 70
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_5e3a25d811d0934e6236f6d6a01d2db788269e25a584261bc80d64ff18c7899f->leave($__internal_5e3a25d811d0934e6236f6d6a01d2db788269e25a584261bc80d64ff18c7899f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Announcement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 70,  221 => 68,  218 => 67,  216 => 66,  212 => 64,  209 => 63,  188 => 56,  184 => 55,  175 => 49,  171 => 48,  165 => 45,  162 => 44,  156 => 42,  150 => 40,  148 => 39,  143 => 38,  141 => 37,  136 => 35,  131 => 34,  129 => 33,  122 => 32,  120 => 31,  115 => 30,  97 => 29,  95 => 28,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  71 => 20,  69 => 19,  65 => 18,  59 => 14,  52 => 11,  50 => 10,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'announcement/index' %}

{% set menu = 'admin_announcement_manage' %}

{% block main %}
{% if  setting('magic.enable_org','0') %}  
  <form id=\"announcement-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
  </form>
{% endif %}

  <table id=\"announcement-table\" class=\"table table-striped\">
    <thead>
    <tr>
      <th width=\"25%\">{{'公告内容'|trans}}</th>
      {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
      <th>{{'发布时间'|trans}}</th>
      <th>{{'结束时间'|trans}}</th>
      <th>{{'状态'|trans}}</th>
      <th>{{'发布人'|trans}}</th>
      <th>{{'操作'|trans}}</th>
    </tr>
    </thead>
    <tbody>
    {% if announcements %}
      {% for announcement in announcements %}
        <tr announcement-table-tr-{{ announcement.id }}>
          {% include 'OrgBundle:Org/Parts:table-body-checkbox.html.twig' %}
          <td><a href=\"{{ announcement.url }}\" target=\"_content\">{{ announcement.content }}</td>
          {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: announcement.orgCode}%}
          <td>{{ announcement.startTime|date('Y-m-d H:i') }}</td>
          <td>{{ announcement.endTime|date('Y-m-d H:i') }}</td>
          <td>
            {% if now < announcement.startTime %}
              {{'即将开始'|trans}}
            {% elseif now > announcement.endTime %}
              {{'已结束'|trans}}
            {% else %}
              {{'显示中'|trans}}
            {% endif %}
          </td>
          <td>{{ users[announcement.userId].nickname }}</td>
          <td>
            <div class=\"btn-group\">
              <a data-url=\"{{ path('admin_announcement_edit',{id:announcement.id}) }}\" class=\"btn btn-default btn-sm\"
                 data-toggle=\"modal\" data-target=\"#modal\">{{'编辑'|trans}}</a>
              <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
              </a>
              <ul class=\"dropdown-menu\">
                <li>
                  <a href=\"javascript:;\" data-url=\"{{ path('admin_announcement_delete',{id:announcement.id}) }}\"
                       class=\"delete-btn\"><span class=\"glyphicon glyphicon-trash\"></span> {{'删除'|trans}}</a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      {% endfor %}
    {% endif %}
    </tbody>
  </table>
  {% include 'OrgBundle:Org:batch-update-org-btn.html.twig' with {module:'announcement', formId:'announcement-table'} %}
  {% if not announcements %}
    <div class=\"empty\">{{'暂无公告'|trans}}</div>
  {% endif %}
  {{ admin_macro.paginator(paginator) }}
{% endblock %}";
    }
}
