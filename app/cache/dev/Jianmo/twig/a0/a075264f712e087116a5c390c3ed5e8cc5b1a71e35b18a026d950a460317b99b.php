<?php

/* TopxiaAdminBundle:System/Log:logs.html.twig */
class __TwigTemplate_b6b7e57917550ecd1f698d023d88dc4c073ee2319456407ddae7168f1bb89f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System/Log:logs.html.twig", 2);
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
        $__internal_bdfde5373dbe7583c79f3097ceb538d149642f67fa898da2442926f96fca2cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfde5373dbe7583c79f3097ceb538d149642f67fa898da2442926f96fca2cdd->enter($__internal_bdfde5373dbe7583c79f3097ceb538d149642f67fa898da2442926f96fca2cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System/Log:logs.html.twig"));

        // line 1
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:System/Log:logs.html.twig", 1);
        // line 4
        $context["menu"] = "admin_logs_query";
        // line 6
        $context["script_controller"] = "log/list";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfde5373dbe7583c79f3097ceb538d149642f67fa898da2442926f96fca2cdd->leave($__internal_bdfde5373dbe7583c79f3097ceb538d149642f67fa898da2442926f96fca2cdd_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_6ec1ca6522fb97c6172565b87e81a34dcc56225da93a4784b500eff388f468fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec1ca6522fb97c6172565b87e81a34dcc56225da93a4784b500eff388f468fc->enter($__internal_6ec1ca6522fb97c6172565b87e81a34dcc56225da93a4784b500eff388f468fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("logLevel"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "level"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有等级--"));
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" name=\"startDateTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" name=\"endDateTime\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"module\" id=\"log-module\">
        <option value=\"0\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有模块--"), "html", null, true);
        echo "</option>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduleDicts"]) ? $context["moduleDicts"] : $this->getContext($context, "moduleDicts")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 32
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "module"), "method") == $context["key"])) {
                echo "selected=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"action\" id=\"log-action\" data-url=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_logs_action_dicts");
        echo "\">
       ";
        // line 39
        if (((array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), null)) : (null))) {
            // line 40
            echo "          <option value=\"0\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有操作--"), "html", null, true);
            echo "</option>
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 42
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method") == $context["key"])) {
                    echo "selected=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "          <option value=\"0\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所有操作--"), "html", null, true);
            echo "</option>
      ";
        }
        // line 47
        echo "    </select>
  ";
        // line 49
        echo "  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "\" style=\"width:120px;\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"15%\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户"), "html", null, true);
        echo "</th>
      <th width=\"55%\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("日志等级"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("时间/IP"), "html", null, true);
        echo "</th>
    </tr>   
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 67
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array"), null)) : (null));
            // line 68
            echo "      <tr>
        <td>
          ";
            // line 70
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 71
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))), "method"), "html", null, true);
                echo "
          ";
            } else {
                // line 73
                echo "            --
          ";
            }
            // line 75
            echo "        <td>
          <div style=\"word-break: break-all;word-wrap: break-word;\">
            ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
            ";
            // line 78
            if ($this->getAttribute($context["log"], "data", array())) {
                // line 79
                echo "              <a href=\"javascript:;\" class=\"text-sm text-warning show-data\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看数据"), "html", null, true);
                echo "</a>
              <a href=\"javascript:;\" class=\"text-sm text-warning hide-data\" style=\"display:none;\">";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("隐藏数据"), "html", null, true);
                echo "</a>
              <div class=\"data\" style=\"display:none;\">";
                // line 81
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "data", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 83
            echo "          </div>
          <span class=\"text-muted text-sm\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "module", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "action", array()), "html", null, true);
            echo "</span>
        </td>
        <td>";
            // line 86
            echo $context["dict_macro"]->getlogLevel($this->getAttribute($context["log"], "level", array()));
            echo "</td>
        <td>
          <span class=\"\">";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
          <br />
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "</a>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "      <tr><td class=\"empty\" colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无日志记录"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "  </table>

  ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_6ec1ca6522fb97c6172565b87e81a34dcc56225da93a4784b500eff388f468fc->leave($__internal_6ec1ca6522fb97c6172565b87e81a34dcc56225da93a4784b500eff388f468fc_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Log:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 98,  288 => 96,  279 => 94,  268 => 90,  263 => 88,  258 => 86,  251 => 84,  248 => 83,  243 => 81,  239 => 80,  234 => 79,  232 => 78,  228 => 77,  224 => 75,  220 => 73,  214 => 71,  212 => 70,  208 => 68,  205 => 67,  200 => 66,  195 => 64,  191 => 63,  187 => 62,  183 => 61,  174 => 55,  166 => 52,  161 => 49,  158 => 47,  152 => 45,  149 => 44,  132 => 42,  128 => 41,  123 => 40,  121 => 39,  117 => 38,  111 => 34,  94 => 32,  90 => 31,  86 => 30,  76 => 25,  67 => 21,  59 => 16,  50 => 10,  47 => 9,  41 => 8,  34 => 2,  32 => 6,  30 => 4,  28 => 1,  11 => 2,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle:Common:data-dict-macro.html.twig\" as dict_macro %}
{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_logs_query' %}

{% set script_controller = 'log/list' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        {{ select_options(dict('logLevel'), app.request.query.get('level'), '--所有等级--'|trans) }}
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"{{app.request.query.get('startDateTime')}}\" name=\"startDateTime\" class=\"form-control\" placeholder=\"{{'起始时间'|trans}}\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"{{app.request.query.get('endDateTime')}}\" name=\"endDateTime\" class=\"form-control\" placeholder=\"{{'结束时间'|trans}}\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"module\" id=\"log-module\">
        <option value=\"0\">{{'--所有模块--'|trans}}</option>
        {% for key, value in moduleDicts %}
              <option value=\"{{key}}\"  {% if app.request.query.get('module') == key %}selected=\"{{key}}\" {% endif %}>{{value}}</option>
        {% endfor %}
    </select>
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"action\" id=\"log-action\" data-url=\"{{path('admin_logs_action_dicts')}}\">
       {% if actions|default(null) %}
          <option value=\"0\">{{'--所有操作--'|trans}}</option>
          {% for key, value in actions %}
                <option value=\"{{key}}\" {% if app.request.query.get('action') == key %}selected=\"{{key}}\" {% endif %}>{{value}}</option>
          {% endfor %}
        {% else %}
          <option value=\"0\">{{'--所有操作--'|trans}}</option>
      {% endif %}
    </select>
  {#   <input type=\"text\" id=\"action\" name=\"action\" value=\"{{app.request.query.get('action')}}\" class=\"form-control\" placeholder=\"操作名\" style=\"width:100px;\"> #}
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"{{app.request.query.get('nickname')}}\" class=\"form-control\" placeholder=\"{{'用户名'|trans}}\" style=\"width:120px;\">
  </div>

  <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"15%\">{{'用户'|trans}}</th>
      <th width=\"55%\">{{'操作'|trans}}</th>
      <th width=\"10%\">{{'日志等级'|trans}}</th>
      <th width=\"20%\">{{'时间/IP'|trans}}</th>
    </tr>   
    {% for log in logs %}
      {% set user = users[log.userId]|default(null) %}
      <tr>
        <td>
          {% if user %}
            {{ admin_macro.user_link(user) }}
          {% else %}
            --
          {% endif %}
        <td>
          <div style=\"word-break: break-all;word-wrap: break-word;\">
            {{ log.message }}
            {% if log.data %}
              <a href=\"javascript:;\" class=\"text-sm text-warning show-data\">{{'查看数据'|trans}}</a>
              <a href=\"javascript:;\" class=\"text-sm text-warning hide-data\" style=\"display:none;\">{{'隐藏数据'|trans}}</a>
              <div class=\"data\" style=\"display:none;\">{{ log.data|json_encode }}</div>
            {% endif %}
          </div>
          <span class=\"text-muted text-sm\">{{ log.module }}.{{ log.action }}</span>
        </td>
        <td>{{ dict_macro.logLevel(log.level)}}</td>
        <td>
          <span class=\"\">{{ log.createdTime|date(\"Y-m-d H:i:s\") }}</span>
          <br />
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ log.ip }}\" target=\"_blank\">{{ log.ip }}</a>
        </td>
      </tr>
    {% else %}
      <tr><td class=\"empty\" colspan=\"20\">{{'无日志记录'|trans}}</tr>
    {% endfor %}
  </table>

  {{ admin_macro.paginator(paginator) }}

{% endblock %}";
    }
}
