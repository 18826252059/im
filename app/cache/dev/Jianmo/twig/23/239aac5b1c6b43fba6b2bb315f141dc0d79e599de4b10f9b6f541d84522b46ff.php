<?php

/* PermissionBundle:Templates:group-button.html.twig */
class __TwigTemplate_d5417505326efe1cc0c1fa0764b50af38eb57fecda05cb4af85b897522cac1ba extends Twig_Template
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
        $__internal_94b0c41119eca024a47e02548a406e3a798a3a3a19fd82ffba4eb0e119c5030a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b0c41119eca024a47e02548a406e3a798a3a3a19fd82ffba4eb0e119c5030a->enter($__internal_94b0c41119eca024a47e02548a406e3a798a3a3a19fd82ffba4eb0e119c5030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Templates:group-button.html.twig"));

        // line 1
        $context["self_macro"] = $this->loadTemplate("PermissionBundle:Templates:macro.html.twig", "PermissionBundle:Templates:group-button.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["permissions"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions((isset($context["parentCode"]) ? $context["parentCode"] : $this->getContext($context, "parentCode")), ((array_key_exists("group", $context)) ? (_twig_default_filter((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), null)) : (null)));
        // line 4
        echo "
";
        // line 5
        $context["dropdownMenusShow"] = false;
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 8
            echo "    ";
            if ($this->getAttribute($context["permission"], "visable", array(), "any", true, true)) {
                // line 9
                echo "      ";
                if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visable", array()))) {
                    // line 10
                    echo "        ";
                    $context["dropdownMenusShow"] = true;
                    // line 11
                    echo "      ";
                }
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "      ";
                $context["dropdownMenusShow"] = true;
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        if (((isset($context["dropdownMenusShow"]) ? $context["dropdownMenusShow"] : $this->getContext($context, "dropdownMenusShow")) && ((array_key_exists("permissions", $context)) ? (_twig_default_filter((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), null)) : (null)))) {
            // line 18
            echo "<a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
  <span class=\"caret\"></span> 
</a>
<ul class=\"dropdown-menu\">
  ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 23
                echo "    <li>
      ";
                // line 24
                if ($this->getAttribute($context["permission"], "visable", array(), "any", true, true)) {
                    // line 25
                    echo "        ";
                    if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["permission"], "visable", array()))) {
                        // line 26
                        echo "          ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                        echo "
        ";
                    }
                    // line 28
                    echo "      ";
                } else {
                    // line 29
                    echo "        ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["permission"], (($this->getAttribute($context["permission"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["permission"], "class", array()), "")) : ("")));
                    echo "
      ";
                }
                // line 31
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
</ul>
";
        }
        
        $__internal_94b0c41119eca024a47e02548a406e3a798a3a3a19fd82ffba4eb0e119c5030a->leave($__internal_94b0c41119eca024a47e02548a406e3a798a3a3a19fd82ffba4eb0e119c5030a_prof);

    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:group-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  104 => 31,  98 => 29,  95 => 28,  89 => 26,  86 => 25,  84 => 24,  81 => 23,  77 => 22,  71 => 18,  69 => 17,  66 => 16,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"PermissionBundle:Templates:macro.html.twig\" as self_macro %}

{% set permissions = sub_permissions(parentCode, group|default(null)) %}

{% set dropdownMenusShow = false %}

{% for permission in permissions %}
    {% if permission.visable is defined  %}
      {% if eval_expression(permission.visable) %}
        {% set dropdownMenusShow = true %}
      {% endif %}
    {% else %}
      {% set dropdownMenusShow = true %}
    {% endif %}
{% endfor %}

{% if dropdownMenusShow and permissions|default(null) %}
<a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
  <span class=\"caret\"></span> 
</a>
<ul class=\"dropdown-menu\">
  {% for permission in permissions %}
    <li>
      {% if permission.visable is defined %}
        {% if eval_expression(permission.visable) %}
          {{ self_macro.menu_link_html(_context, permission, permission.class|default('')) }}
        {% endif %}
      {% else %}
        {{ self_macro.menu_link_html(_context, permission, permission.class|default('')) }}
      {% endif %}
    </li>
  {% endfor %}

</ul>
{% endif %}
";
    }
}
