<?php

/* TopxiaAdminBundle:Theme:index.html.twig */
class __TwigTemplate_828f08faeadc8146694773790eabf26c006b09eb010b90298378a49f4d6d3909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Theme:index.html.twig", 1);
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
        $__internal_f8bfe210bdb5ffa009c9bcd548ddac186d7e59325162ef76e7fcc5f4ee4e6447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bfe210bdb5ffa009c9bcd548ddac186d7e59325162ef76e7fcc5f4ee4e6447->enter($__internal_f8bfe210bdb5ffa009c9bcd548ddac186d7e59325162ef76e7fcc5f4ee4e6447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Theme:index.html.twig"));

        // line 3
        $context["script_controller"] = "setting/theme";
        // line 5
        $context["menu"] = "admin_setting_theme";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8bfe210bdb5ffa009c9bcd548ddac186d7e59325162ef76e7fcc5f4ee4e6447->leave($__internal_f8bfe210bdb5ffa009c9bcd548ddac186d7e59325162ef76e7fcc5f4ee4e6447_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_bcf212269e23625f487276bdf44a4514b9e4a0f96b328f0e5c60153289b188bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf212269e23625f487276bdf44a4514b9e4a0f96b328f0e5c60153289b188bb->enter($__internal_bcf212269e23625f487276bdf44a4514b9e4a0f96b328f0e5c60153289b188bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题版本"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 20
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("themes/" . $this->getAttribute($context["theme"], "uri", array())) . "/") . $this->getAttribute($context["theme"], "thumb", array()))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</h5>
                ";
            // line 27
            echo (($this->getAttribute($context["theme"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "description", array()), "")) : (""));
            echo "
                ";
            // line 28
            if ((($this->getAttribute($context["theme"], "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "setting", array()), null)) : (null))) {
                // line 29
                echo "                  <a href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "setting", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
                echo "</a>
                ";
            }
            // line 31
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "author", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 37
            if (($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "uri", array()) == $this->getAttribute($context["theme"], "uri", array()))) {
                // line 38
                echo "              <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前正在使用该主题"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 40
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("使用"), "html", null, true);
                echo "</button>
            ";
            }
            // line 42
            echo "            ";
            if ((($this->getAttribute($context["theme"], "uri", array()) == "jianmo") && ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "uri", array()) == "jianmo"))) {
                // line 43
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\"class=\"btn btn-primary\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
                echo "</a>
            ";
            }
            // line 45
            echo "            ";
            if (((($this->getAttribute($context["theme"], "uri", array()) == "graceful") && ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "uri", array()) == "graceful")) && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->versionCompare($this->getAttribute($context["theme"], "version", array()), "1.4.14", ">="))) {
                // line 46
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\"class=\"btn btn-primary\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
                echo "</a>
            ";
            }
            // line 48
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
  </table>


";
        
        $__internal_bcf212269e23625f487276bdf44a4514b9e4a0f96b328f0e5c60153289b188bb->leave($__internal_bcf212269e23625f487276bdf44a4514b9e4a0f96b328f0e5c60153289b188bb_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  155 => 48,  147 => 46,  144 => 45,  136 => 43,  133 => 42,  125 => 40,  119 => 38,  117 => 37,  112 => 35,  108 => 34,  103 => 31,  95 => 29,  93 => 28,  89 => 27,  85 => 26,  80 => 24,  74 => 20,  70 => 19,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'setting/theme' %}

{% set menu = 'admin_setting_theme' %}

{% block main %}

  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>{{'名称'|trans}}</th>
      <th width=\"10%\">{{'主题版本'|trans}}</th>
      <th>{{'作者'|trans}}</th>
      <th>{{'操作'|trans}}</th>
    </tr>
    </thead>
    <tbody>
      {% for theme in themes %}
        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"{{ asset('themes/' ~ theme.uri ~ '/' ~ theme.thumb) }}\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">{{ theme.name }}</h5>
                {{ theme.description|default('')|raw }}
                {% if theme.setting|default(null) %}
                  <a href=\"../{{ theme.setting }}\">{{'设置'|trans}}</a>
                {% endif %}
              </div>
            </div>
          </td>
          <td>{{ theme.version }}</td>
          <td>{{ theme.author }}</td>
          <td>
            {% if currentTheme.uri == theme.uri %}
              <span class=\"text-success\">{{'当前正在使用该主题'|trans}}</span>
            {% else %}
              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"{{ path('admin_setting_theme_change', {uri:theme.uri}) }}\">{{'使用'|trans}}</button>
            {% endif %}
            {% if theme.uri == 'jianmo' and currentTheme.uri == 'jianmo' %}
            <a href=\"{{ path('admin_theme_manage', {uri:theme.uri}) }}\"class=\"btn btn-primary\" >{{'管理'|trans}}</a>
            {% endif %}
            {% if theme.uri == 'graceful' and currentTheme.uri == 'graceful' and version_compare(theme.version,'1.4.14','>=') %}
            <a href=\"{{ path('admin_theme_manage', {uri:theme.uri}) }}\"class=\"btn btn-primary\" >{{'管理'|trans}}</a>
            {% endif %}
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>


{% endblock %}";
    }
}
