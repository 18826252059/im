<?php

/* TopxiaAdminBundle:Block:list-tr.html.twig */
class __TwigTemplate_c9eb62ff8b5f67ccc8bca45d6305bca8f880c24abffecfffa0c89f4fc69d1e54 extends Twig_Template
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
        $__internal_f4b710d59661da7612092ff6a419f4c11a07b2a78945d95aa25295ae90e23d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b710d59661da7612092ff6a419f4c11a07b2a78945d95aa25295ae90e23d13->enter($__internal_f4b710d59661da7612092ff6a419f4c11a07b2a78945d95aa25295ae90e23d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Block:list-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Block:list-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"blockitem";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()), "html", null, true);
        echo "\">
    <td>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "title", array()), "html", null, true);
        echo "
        <br>
        <span class=\"text-muted text-sm\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编码："), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "code", array()), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 9
        if ((($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null))) {
            // line 10
            echo "        ";
            echo $context["admin_macro"]->getuser_link(((array_key_exists("latestUpdateUser", $context)) ? (_twig_default_filter((isset($context["latestUpdateUser"]) ? $context["latestUpdateUser"] : $this->getContext($context, "latestUpdateUser")), null)) : (null)));
            echo "
        ";
        } else {
            // line 12
            echo "        <span class=\"text-muted\">未编辑</span>
        ";
        }
        // line 14
        echo "        <br>
        ";
        // line 15
        if ((($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "createdTime", array()), null)) : (null))) {
            // line 16
            echo "        <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : $this->getContext($context, "latestHistory")), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "    </td>
    <td>
        ";
        // line 20
        if (($this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "mode", array()) == "html")) {
            // line 21
            echo "            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_update", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑html"), "html", null, true);
            echo "</button>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (($this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "mode", array()) == "template")) {
            // line 25
            echo "            <a class=\"btn btn-sm btn-primary update-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_visual_edit", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑内容"), "html", null, true);
            echo "</a>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("developer.debug")) {
            // line 29
            echo "        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_edit", array("blockTemplateId" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_block_delete", array("id" => $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockTemplate"]) ? $context["blockTemplate"] : $this->getContext($context, "blockTemplate")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
        ";
        }
        // line 33
        echo "    </td>
</tr>";
        
        $__internal_f4b710d59661da7612092ff6a419f4c11a07b2a78945d95aa25295ae90e23d13->leave($__internal_f4b710d59661da7612092ff6a419f4c11a07b2a78945d95aa25295ae90e23d13_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  106 => 31,  100 => 30,  97 => 29,  95 => 28,  92 => 27,  84 => 25,  82 => 24,  79 => 23,  71 => 21,  69 => 20,  65 => 18,  59 => 16,  57 => 15,  54 => 14,  50 => 12,  44 => 10,  42 => 9,  35 => 6,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaAdminBundle::macro.html.twig\" as admin_macro %}
<tr id=\"blockitem{{ blockTemplate.id }}\">
    <td>
        {{ blockTemplate.title }}
        <br>
        <span class=\"text-muted text-sm\">{{'编码：'|trans}}{{ blockTemplate.code }}</span>
    </td>
    <td>
        {% if latestHistory.userId|default(null) %}
        {{ admin_macro.user_link(latestUpdateUser|default(null)) }}
        {% else %}
        <span class=\"text-muted\">未编辑</span>
        {% endif %}
        <br>
        {% if latestHistory.createdTime|default(null) %}
        <span class=\"text-muted text-sm\">{{ latestHistory.createdTime|date('Y-n-d H:i:s') }}</span>
        {% endif %}
    </td>
    <td>
        {% if blockTemplate.mode == 'html' %}
            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"{{ path('admin_block_update', {blockTemplateId:blockTemplate.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'编辑html'|trans}}</button>
        {% endif %}

        {% if blockTemplate.mode == 'template' %}
            <a class=\"btn btn-sm btn-primary update-btn\" href=\"{{ path('admin_block_visual_edit', {blockTemplateId:blockTemplate.id}) }}\">{{'编辑内容'|trans}}</a>
        {% endif %}

        {% if setting('developer.debug') %}
        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"{{ path('admin_block_edit', {blockTemplateId:blockTemplate.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\" >{{'设置'|trans}}</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"{{ path('admin_block_delete', {id:blockTemplate.id}) }}\" data-target=\"{{ blockTemplate.id }}\">{{'删除'|trans}}</button>
        {% endif %}
    </td>
</tr>";
    }
}
