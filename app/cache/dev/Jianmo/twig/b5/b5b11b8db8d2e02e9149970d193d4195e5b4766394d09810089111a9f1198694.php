<?php

/* TopxiaAdminBundle:Message:index.html.twig */
class __TwigTemplate_4b11b35ac7eabff8443cefdabf5c2da20785f0a5341776fdaa033e5d8df0654a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Message:index.html.twig", 1);
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
        $__internal_f009afd714d70612a5c5d2ab5cdc32e64a78b069804bd8c25797f2bc63fd5540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f009afd714d70612a5c5d2ab5cdc32e64a78b069804bd8c25797f2bc63fd5540->enter($__internal_f009afd714d70612a5c5d2ab5cdc32e64a78b069804bd8c25797f2bc63fd5540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Message:index.html.twig"));

        // line 3
        $context["menu"] = "admin_message";
        // line 4
        $context["script_controller"] = "message/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f009afd714d70612a5c5d2ab5cdc32e64a78b069804bd8c25797f2bc63fd5540->leave($__internal_f009afd714d70612a5c5d2ab5cdc32e64a78b069804bd8c25797f2bc63fd5540_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_e896b13db082a7a0f415c3a3c762146dd880127aca599c2f2b967e3aa62d2925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e896b13db082a7a0f415c3a3c762146dd880127aca599c2f2b967e3aa62d2925->enter($__internal_e896b13db082a7a0f415c3a3c762146dd880127aca599c2f2b967e3aa62d2925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "  <div class=\"well well-sm\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
      </div>
      <span></span>
      <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\"
               class=\"form-control\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人用户名"), "html", null, true);
        echo "\">
      </div>

      <div class=\"form-group\">
        <input type=\"text\" id=\"content\" name=\"content\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\"
               class=\"form-control\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信内容关键词"), "html", null, true);
        echo "\">
      </div>

      <button class=\"btn btn-primary\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    </form>
  </div>

  <div id=\"message-table-container\">

  <table class=\"table table-striped table-hover\" id=\"message-table\">
    <thead>
      <tr >
        <th width=\"10%\"> <input type=\"checkbox\"  data-role=\"batch-select\"> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收信人"), "html", null, true);
        echo "</th>
        <th width=\"45%\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "html", null, true);
        echo "</th>
        <th width=\"15%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送时间"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 45
        if ((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) {
            // line 46
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 47
                echo "          <tr class=\"message-tr\" id=\"message-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "\">
            <td><input value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\" data-role=\"batch-item\">
              ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["message"], "fromId", array()), array(), "array")), "method"), "html", null, true);
                echo "
            </td>

            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["message"], "toId", array()), array(), "array")), "method"), "html", null, true);
                echo " </td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
                // line 55
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["message"], "content", array()), 60);
                echo " <span class=\"trigger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(展开)"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"long-text\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array()), "html", null, true);
                echo " <span class=\"trigger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(收起)"), "html", null, true);
                echo "</span></div>
              </div>
            </td>
            <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
        } else {
            // line 64
            echo "        <tr>
          <td colspan=\"20\">
            <div class=\"empty\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无私信记录"), "html", null, true);
            echo "</div>
          </td>
        </tr>
      ";
        }
        // line 70
        echo "
      </tbody>
    </table>
    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
        echo "\"
              data-url=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_message_delete_messages");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "
      </button>
    </div>

  </div>

  <div>
    ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
  </div>

";
        
        $__internal_e896b13db082a7a0f415c3a3c762146dd880127aca599c2f2b967e3aa62d2925->leave($__internal_e896b13db082a7a0f415c3a3c762146dd880127aca599c2f2b967e3aa62d2925_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 83,  202 => 76,  198 => 75,  194 => 74,  188 => 70,  181 => 66,  177 => 64,  174 => 63,  165 => 60,  157 => 57,  150 => 55,  144 => 52,  138 => 49,  134 => 48,  129 => 47,  124 => 46,  122 => 45,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  91 => 29,  85 => 26,  81 => 25,  74 => 21,  70 => 20,  61 => 16,  51 => 11,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_message' %}
{% set script_controller = 'message/list' %}

{% block main %}
  <div class=\"well well-sm\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
               value=\"{{ app.request.query.get('startDate') }}\" placeholder=\"{{'起始时间'|trans}}\">
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
               value=\"{{ app.request.query.get('endDate') }}\" placeholder=\"{{'结束时间'|trans}}\">
      </div>
      <span></span>
      <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"{{ app.request.query.get('nickname') }}\"
               class=\"form-control\" placeholder=\"{{ '发信人用户名'|trans }}\">
      </div>

      <div class=\"form-group\">
        <input type=\"text\" id=\"content\" name=\"content\" value=\"{{ app.request.query.get('content') }}\"
               class=\"form-control\" placeholder=\"{{'私信内容关键词'|trans}}\">
      </div>

      <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
    </form>
  </div>

  <div id=\"message-table-container\">

  <table class=\"table table-striped table-hover\" id=\"message-table\">
    <thead>
      <tr >
        <th width=\"10%\"> <input type=\"checkbox\"  data-role=\"batch-select\"> {{'发信人'|trans}}</th>
        <th width=\"10%\">{{'收信人'|trans}}</th>
        <th width=\"45%\">{{'内容'|trans}}</th>
        <th width=\"15%\">{{'发送时间'|trans}}</th>
      </tr>
      </thead>
      <tbody>
      {% if messages %}
        {% for message in messages %}
          <tr class=\"message-tr\" id=\"message-table-tr-{{ message.id }}\">
            <td><input value=\"{{ message.id }}\" type=\"checkbox\" data-role=\"batch-item\">
              {{ admin_macro.user_link(users[message.fromId]) }}
            </td>

            <td>{{ admin_macro.user_link(users[message.toId]) }} </td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">{{ message.content|plain_text(60) }} <span class=\"trigger\">{{ '(展开)'|trans }}</span>
                </div>
                <div class=\"long-text\">{{ message.content }} <span class=\"trigger\">{{ '(收起)'|trans }}</span></div>
              </div>
            </td>
            <td>{{ message.createdTime|date('Y-n-d H:i') }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td colspan=\"20\">
            <div class=\"empty\">{{ '暂无私信记录'|trans }}</div>
          </td>
        </tr>
      {% endif %}

      </tbody>
    </table>
    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\">{{ '全选'|trans }}</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"{{ '私信'|trans }}\"
              data-url=\"{{ path('admin_message_delete_messages') }}\">{{ '删除'|trans }}
      </button>
    </div>

  </div>

  <div>
    {{ admin_macro.paginator(paginator) }}
  </div>

{% endblock %}
";
    }
}
