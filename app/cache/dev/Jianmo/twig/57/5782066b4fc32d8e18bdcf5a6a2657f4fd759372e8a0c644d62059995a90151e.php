<?php

/* TopxiaAdminBundle:Content:content-tr.html.twig */
class __TwigTemplate_0c19dfcf6693f628301c23041ba29fdc75fb9d015397bb2e291122fe19c0d697 extends Twig_Template
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
        $__internal_93fcca569445bf07b25e600663ec11ae28d7340af36ce8ce5d96b599fefebc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fcca569445bf07b25e600663ec11ae28d7340af36ce8ce5d96b599fefebc5a->enter($__internal_93fcca569445bf07b25e600663ec11ae28d7340af36ce8ce5d96b599fefebc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Content:content-tr.html.twig"));

        // line 1
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:Content:content-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"content-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()), "html", null, true);
        echo "\">
\t<td>
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo "</a><br />
\t\t";
        // line 5
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array()) == "page")) {
            // line 6
            echo "\t\t  <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("地址："), "html", null, true);
            echo "page/";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 8
        echo "\t\t";
        if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
            // line 9
            echo "\t\t\t<span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 11
        echo "\t</td>
\t";
        // line 12
        $context["content_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array())))));
        // line 13
        echo "\t<td><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["content_uri"]) ? $context["content_uri"] : $this->getContext($context, "content_uri")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["content_uri"]) ? $context["content_uri"] : $this->getContext($context, "content_uri")), "html", null, true);
        echo "</a></td>
\t<td>";
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("contentType", $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "type", array()));
        echo "</td>
\t<td>";
        // line 15
        echo $context["dict_macro"]->getcontentStatus($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()));
        echo "</td>
\t<td>
\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "<br />
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 27
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) != "published")) {
            // line 28
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_publish", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布"), "html", null, true);
            echo "</a></li>
\t\t    ";
        }
        // line 30
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) != "trash")) {
            // line 31
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_trash", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移至回收站"), "html", null, true);
            echo "</a></li>
\t\t    ";
        }
        // line 33
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "status", array()) == "trash")) {
            // line 34
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_content_delete", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("永久删除"), "html", null, true);
            echo "</a></li>
\t\t\t  ";
        }
        // line 36
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
        
        $__internal_93fcca569445bf07b25e600663ec11ae28d7340af36ce8ce5d96b599fefebc5a->leave($__internal_93fcca569445bf07b25e600663ec11ae28d7340af36ce8ce5d96b599fefebc5a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  122 => 34,  119 => 33,  111 => 31,  108 => 30,  100 => 28,  98 => 27,  88 => 22,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  61 => 13,  59 => 12,  56 => 11,  49 => 9,  46 => 8,  38 => 6,  36 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle:Common:data-dict-macro.html.twig\" as dict_macro %}
<tr id=\"content-{{ content.id }}\">
\t<td>
\t\t<a href=\"{{ path('content_' ~ content.type ~ '_show', {alias:content.alias|default(content.id)}) }}\" target=\"_blank\">{{ content.title }}</a><br />
\t\t{% if content.type == 'page' %}
\t\t  <span class=\"text-muted text-sm\">{{'地址：'|trans}}page/{{ content.alias|default(content.id) }}</span>
\t\t{% endif %}
\t\t{% if category %}
\t\t\t<span class=\"text-muted text-sm\">{{'分类：'|trans}}{{ category.name }}</span>
\t\t{% endif %}
\t</td>
\t{% set content_uri = url('content_' ~ content.type ~ '_show', {alias:content.alias|default(content.id)}) %}
\t<td><a href=\"{{ content_uri }}\" target=\"_blank\">{{ content_uri }}</a></td>
\t<td>{{ dict_text('contentType', content.type) }}</td>
\t<td>{{ dict_macro.contentStatus(content.status) }}</td>
\t<td>
\t\t{{ content.publishedTime|date('Y-n-d H:i') }}<br />
\t\t{{ user.nickname }}
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_content_edit', {id:content.id}) }}\" class=\"btn btn-default btn-sm\">{{'编辑'|trans}}</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t{% if content.status != 'published' %}
\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"{{ path('admin_content_publish', {id:content.id}) }}\">{{'发布'|trans}}</a></li>
\t\t    {% endif  %}
\t\t    {% if content.status != 'trash' %}
\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"{{ path('admin_content_trash', {id:content.id}) }}\">{{'移至回收站'|trans}}</a></li>
\t\t    {% endif %}
\t\t    {% if content.status == 'trash' %}
\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"{{ path('admin_content_delete', {id:content.id}) }}\">{{'永久删除'|trans}}</a></li>
\t\t\t  {% endif %}
\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
    }
}
