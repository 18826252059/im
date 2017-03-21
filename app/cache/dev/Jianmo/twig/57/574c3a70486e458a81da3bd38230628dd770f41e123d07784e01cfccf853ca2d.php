<?php

/* TopxiaAdminBundle:Block:index.html.twig */
class __TwigTemplate_6d747567c4cc02728b5f68d6bb869c11c4ef9ec411628a976957a1e247b05a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 1);
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
        $__internal_33bcae1bc7cf4a0267c9e183f200f624ab70ea49f2ceb7caeaed6265ac39922b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bcae1bc7cf4a0267c9e183f200f624ab70ea49f2ceb7caeaed6265ac39922b->enter($__internal_33bcae1bc7cf4a0267c9e183f200f624ab70ea49f2ceb7caeaed6265ac39922b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Block:index.html.twig"));

        // line 3
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "admin_block")) : ("admin_block"));
        // line 5
        $context["script_controller"] = "block/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33bcae1bc7cf4a0267c9e183f200f624ab70ea49f2ceb7caeaed6265ac39922b->leave($__internal_33bcae1bc7cf4a0267c9e183f200f624ab70ea49f2ceb7caeaed6265ac39922b_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_8c9fded14ce671b78a3e0fc61a647831a7f3ad4eb40bf0c168e2c23e63863d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9fded14ce671b78a3e0fc61a647831a7f3ad4eb40bf0c168e2c23e63863d6f->enter($__internal_8c9fded14ce671b78a3e0fc61a647831a7f3ad4eb40bf0c168e2c23e63863d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo " ";
        $this->loadTemplate("TopxiaAdminBundle:Block:table.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 7)->display($context);
        // line 8
        echo "<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近更新"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        if ((isset($context["blockTemplates"]) ? $context["blockTemplates"] : $this->getContext($context, "blockTemplates"))) {
            // line 18
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTemplates"]) ? $context["blockTemplates"] : $this->getContext($context, "blockTemplates")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockTemplate"]) {
                // line 19
                echo "        ";
                $context["latestHistory"] = (($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["blockTemplate"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["blockTemplate"], "id", array()), array(), "array"), null)) : (null));
                // line 20
                echo "        ";
                $context["latestUpdateUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array"), null)) : (null));
                // line 21
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:Block:list-tr.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 21)->display($context);
                // line 22
                echo "        
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockTemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  ";
        } else {
            // line 25
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无编辑区记录"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        // line 27
        echo "   </tbody>
</table>
 ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
";
        
        $__internal_8c9fded14ce671b78a3e0fc61a647831a7f3ad4eb40bf0c168e2c23e63863d6f->leave($__internal_8c9fded14ce671b78a3e0fc61a647831a7f3ad4eb40bf0c168e2c23e63863d6f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  121 => 27,  115 => 25,  112 => 24,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  70 => 18,  68 => 17,  61 => 13,  57 => 12,  53 => 11,  48 => 8,  45 => 7,  39 => 6,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = menu|default('admin_block') %}

{% set script_controller = 'block/list' %}
{% block main %}
 {% include 'TopxiaAdminBundle:Block:table.html.twig'%}
<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">{{'标题'|trans}}</th>
      <th width=\"25%\">{{'最近更新'|trans}}</th>
      <th width=\"25%\">{{'操作'|trans}}</th>
    </tr>
  </thead>
  <tbody>
    {% if blockTemplates %}
      {% for blockTemplate in blockTemplates %}
        {% set latestHistory = latestHistories[blockTemplate.id]|default(null) %}
        {% set latestUpdateUser = users[latestHistory.userId|default(null)]|default(null) %}
        {% include 'TopxiaAdminBundle:Block:list-tr.html.twig' %}
        
      {% endfor %}
  {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无编辑区记录'|trans}}</div></td></tr>
  {% endif %}
   </tbody>
</table>
 {{ admin_macro.paginator(paginator) }} 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
{% endblock %}
";
    }
}
