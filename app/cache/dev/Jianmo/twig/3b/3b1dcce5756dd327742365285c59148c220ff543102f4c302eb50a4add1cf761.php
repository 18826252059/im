<?php

/* PermissionBundle:Templates:macro.html.twig */
class __TwigTemplate_aa9033c291450e03c9b77dd6f6abc550def65b01888a77148c3375dbb3867d15 extends Twig_Template
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
        $__internal_ad857336e7a12df6c203af349ae536e8bb71efce2b8d3e82a00c24f8ad4c88d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad857336e7a12df6c203af349ae536e8bb71efce2b8d3e82a00c24f8ad4c88d1->enter($__internal_ad857336e7a12df6c203af349ae536e8bb71efce2b8d3e82a00c24f8ad4c88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Templates:macro.html.twig"));

        // line 1
        echo "
";
        
        $__internal_ad857336e7a12df6c203af349ae536e8bb71efce2b8d3e82a00c24f8ad4c88d1->leave($__internal_ad857336e7a12df6c203af349ae536e8bb71efce2b8d3e82a00c24f8ad4c88d1_prof);

    }

    // line 2
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4a446d1be7f22bcef7ae992284ce93547d21d5ae9b37d87018f72cfa9f28b3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4a446d1be7f22bcef7ae992284ce93547d21d5ae9b37d87018f72cfa9f28b3f1->enter($__internal_4a446d1be7f22bcef7ae992284ce93547d21d5ae9b37d87018f72cfa9f28b3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 3
            echo "  <a 
    title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), "html", null, true);
            echo "\"
  ";
            // line 5
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 6
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 8
            echo "
  ";
            // line 9
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 10
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  ";
            } elseif (((($this->getAttribute(            // line 14
(isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "none")) {
                // line 15
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    href=\"javascript:;\"
  ";
            } else {
                // line 18
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 20
            echo "  
  ";
            // line 21
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 22
                echo "    target=\"blank\"
  ";
            }
            // line 24
            echo "  >
  ";
            // line 25
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array()), false)) : (false))) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "icon", array()), "html", null, true);
                echo "\"></span>";
            }
            echo " 
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), "html", null, true);
            echo "
  </a>
";
            
            $__internal_4a446d1be7f22bcef7ae992284ce93547d21d5ae9b37d87018f72cfa9f28b3f1->leave($__internal_4a446d1be7f22bcef7ae992284ce93547d21d5ae9b37d87018f72cfa9f28b3f1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  102 => 25,  99 => 24,  95 => 22,  93 => 21,  90 => 20,  84 => 18,  77 => 15,  75 => 14,  67 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  50 => 4,  47 => 3,  30 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{% macro menu_link_html(_context, menu, class) %}
  <a 
    title=\"{{menu.name}}\"
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}

  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  {% elseif menu.mode|default(null) == 'none' %}
    data-url=\"{{ permission_path(menu) }}\"
    href=\"javascript:;\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  
  {% if menu.blank|default(false) %}
    target=\"blank\"
  {% endif %}
  >
  {% if menu.icon|default(false) %}<span class=\"{{menu.icon}}\"></span>{% endif %} 
    {{ menu.name }}
  </a>
{% endmacro %}";
    }
}
