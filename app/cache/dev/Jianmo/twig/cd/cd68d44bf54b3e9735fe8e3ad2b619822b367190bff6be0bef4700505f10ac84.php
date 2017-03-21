<?php

/* TopxiaAdminBundle:Navigation:tbody.html.twig */
class __TwigTemplate_5640fea8c3e8f8a27ebdeda8c98484ea80fefdf91bfccbdfe6dce49dc1e90ab7 extends Twig_Template
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
        $__internal_41b3115347bd084226fadd76e4ea5dc296dc8d4c32e6f065e999c97cb89cfd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b3115347bd084226fadd76e4ea5dc296dc8d4c32e6f065e999c97cb89cfd04->enter($__internal_41b3115347bd084226fadd76e4ea5dc296dc8d4c32e6f065e999c97cb89cfd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Navigation:tbody.html.twig"));

        // line 1
        echo "<tbody data-update-seqs-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_seqs_update");
        echo "\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["navigation"]) {
            // line 3
            echo "\t\t<tr class=\"treegrid-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) != 0)) {
                echo "treegrid-parent-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            }
            echo " ";
            if (($this->getAttribute($context["navigation"], "parentId", array()) == 0)) {
                echo "has-subItems";
            } else {
                echo " child";
            }
            echo "\" id=\"navigations-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\" data-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "parentId", array()), "html", null, true);
            echo "\">
\t\t  <td class=\"sort-handle\" style=\"vertical-align: middle; ";
            // line 4
            if (($this->getAttribute($context["navigation"], "parentId", array()) != 0)) {
                echo "padding-left: 30px";
            }
            echo "\">
        ";
            // line 8
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->navigationUrlFilter($this->getAttribute($context["navigation"], "url", array())), "html", null, true);
            echo "\" target=\"_blank\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "name", array()), "html", null, true);
            echo " </a>
      </td>
\t\t  <td>
\t\t\t\t";
            // line 11
            if (($this->getAttribute($context["navigation"], "isNewWin", array()) == 0)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), "html", null, true);
            }
            // line 12
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 14
            if (($this->getAttribute($context["navigation"], "isOpen", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            }
            // line 15
            echo "  \t\t</td>
\t\t  <td>
        ";
            // line 17
            if ((($this->getAttribute($context["navigation"], "type", array()) == "top") && ($this->getAttribute($context["navigation"], "parentId", array()) == 0))) {
                // line 18
                echo "\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_create", array("type" => $this->getAttribute($context["navigation"], "type", array()), "parentId" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加二级导航"), "html", null, true);
                echo "</button>
        ";
            }
            // line 20
            echo "          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_update", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
            echo "</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_navigation_delete", array("id" => $this->getAttribute($context["navigation"], "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
\t\t   </td>
\t\t </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无导航记录"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</tbody>";
        
        $__internal_41b3115347bd084226fadd76e4ea5dc296dc8d4c32e6f065e999c97cb89cfd04->leave($__internal_41b3115347bd084226fadd76e4ea5dc296dc8d4c32e6f065e999c97cb89cfd04_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  119 => 25,  106 => 21,  99 => 20,  91 => 18,  89 => 17,  85 => 15,  79 => 14,  75 => 12,  69 => 11,  60 => 8,  54 => 4,  32 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<tbody data-update-seqs-url=\"{{ path('admin_navigation_seqs_update') }}\">
  {% for navigation in navigations %}
\t\t<tr class=\"treegrid-{{ navigation.id }} {% if navigation.parentId != 0 %}treegrid-parent-{{ navigation.parentId }}{% endif %} {% if navigation.parentId == 0 %}has-subItems{% else %} child{% endif %}\" id=\"navigations-tr-{{ navigation.id }}\" data-id=\"{{ navigation.id }}\" data-parent-id=\"{{ navigation.parentId }}\">
\t\t  <td class=\"sort-handle\" style=\"vertical-align: middle; {% if navigation.parentId != 0 %}padding-left: 30px{% endif %}\">
        {# {% if navigation.parentId == 0 %}
          <span class=\"glyphicon glyphicon-resize-vertical\"></span>
        {% endif %} #}
        <a href=\"{{navigation.url|navigation_url}}\" target=\"_blank\"> {{navigation.name}} </a>
      </td>
\t\t  <td>
\t\t\t\t{% if navigation.isNewWin == 0 %}{{'否'|trans}}{% else %}{{'是'|trans}}{% endif %}
  \t\t</td>
\t\t  <td>
        {% if navigation.isOpen == 1 %}{{'开启'|trans}}{% else %}{{'关闭'|trans}}{% endif %}
  \t\t</td>
\t\t  <td>
        {% if navigation.type == 'top' and navigation.parentId == 0 %}
\t        <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"{{ path('admin_navigation_create', {type: navigation.type, parentId: navigation.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'添加二级导航'|trans}}</button>
        {% endif %}
          <button class=\"btn btn-sm btn-default edit-btn\" data-url=\"{{ path('admin_navigation_update', {id:navigation.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'编辑'|trans}}</button>
\t        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"{{ path('admin_navigation_delete', {id:navigation.id}) }}\" data-target=\"{{ navigation.id }}\">{{'删除'|trans}}</button>
\t\t   </td>
\t\t </tr>
\t{% else %}
\t  <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无导航记录'|trans}}</div></td></tr>
  {% endfor %}

</tbody>";
    }
}
