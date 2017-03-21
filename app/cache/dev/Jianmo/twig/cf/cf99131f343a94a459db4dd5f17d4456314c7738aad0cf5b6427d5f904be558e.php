<?php

/* PermissionBundle:Templates:navigation.html.twig */
class __TwigTemplate_7bc69ecdc19137b5bf58ac2ea4c92eea45797a0a704a3c419bebe02cb4df5e46 extends Twig_Template
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
        $__internal_102e481433c6028ef8e7cca2619197b2b2d69c5cc2cb294feeabb9a1284393d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102e481433c6028ef8e7cca2619197b2b2d69c5cc2cb294feeabb9a1284393d2->enter($__internal_102e481433c6028ef8e7cca2619197b2b2d69c5cc2cb294feeabb9a1284393d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Templates:navigation.html.twig"));

        // line 1
        echo "\\";
        $context["permissions"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions((isset($context["parentCode"]) ? $context["parentCode"] : $this->getContext($context, "parentCode")));
        // line 2
        echo "
";
        // line 3
        if (((array_key_exists("permissions", $context)) ? (_twig_default_filter((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), null)) : (null))) {
            // line 4
            echo "  ";
            if (((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array()));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionByCode("admin");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
  <ul class=\"nav navbar-nav\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array())))) {
                    // line 12
                    echo "      ";
                    // line 13
                    echo "      ";
                    if (($this->getAttribute($context["m"], "code", array()) != "admin_homepage")) {
                        // line 14
                        echo "        <li ";
                        if (((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) && ($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["rootMenu"]) ? $context["rootMenu"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["rootMenu"]) ? $context["rootMenu"] : null), "code", array()), null)) : (null))))) {
                            echo "class=\"active\"";
                        }
                        echo ">
          
          ";
                        // line 16
                        $context["tabMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getFirstChild($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getFirstChild($context["m"]));
                        // line 17
                        echo "          ";
                        if (((($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array()), "")) : ("")) == "capsules")) {
                            // line 18
                            echo "            ";
                            $context["tabMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getFirstChild((isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu")));
                            // line 19
                            echo "          ";
                        }
                        // line 20
                        echo "          <a
              title=\"";
                        // line 21
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                        echo "\"
              href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu"))), "html", null, true);
                        echo "\"
              ";
                        // line 23
                        if ((($this->getAttribute($context["m"], "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "blank", array()), false)) : (false))) {
                            // line 24
                            echo "                target=\"_blank\"
              ";
                        }
                        // line 26
                        echo "          >
            ";
                        // line 27
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                        echo "
          </a>

        ";
                        // line 31
                        echo "      </li>
      ";
                    }
                    // line 33
                    echo "      ";
                    // line 34
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </ul>
";
        }
        
        $__internal_102e481433c6028ef8e7cca2619197b2b2d69c5cc2cb294feeabb9a1284393d2->leave($__internal_102e481433c6028ef8e7cca2619197b2b2d69c5cc2cb294feeabb9a1284393d2_prof);

    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  110 => 34,  108 => 33,  104 => 31,  98 => 27,  95 => 26,  91 => 24,  89 => 23,  85 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  67 => 16,  59 => 14,  56 => 13,  54 => 12,  49 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  28 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\\{% set permissions = sub_permissions(parentCode) %}

{% if permissions|default(null) %}
  {% if menu|default(null) %}
    {% set rootMenu = menu|parent_permission.code|parent_permission %}
  {% else %}
    {% set rootMenu = permission('admin') %}
  {% endif %}

  <ul class=\"nav navbar-nav\">
    {% for m in permissions if not m.visable is defined or eval_expression(m.visable) %}
      {# {% if not (m.code == 'admin_app' and (setting('copyright.thirdCopyright') == 1 or is_without_network())) %} #}
      {% if m.code != 'admin_homepage' %}
        <li {% if menu and  m.code == rootMenu.code|default(null) %}class=\"active\"{% endif %}>
          
          {% set tabMenu = first_child_permission(first_child_permission(m)) %}
          {% if tabMenu.mode|default('') == 'capsules' %}
            {% set tabMenu = first_child_permission(tabMenu) %}
          {% endif %}
          <a
              title=\"{{ m.name|trans }}\"
              href=\"{{ permission_path(tabMenu) }}\"
              {% if m.blank|default(false)%}
                target=\"_blank\"
              {% endif %}
          >
            {{ m.name|trans }}
          </a>

        {# {{ self_macro.menu_link_html(_context, currentMenu) }} #}
      </li>
      {% endif %}
      {# {% endif %} #}
    {% endfor %}
  </ul>
{% endif %}
";
    }
}
