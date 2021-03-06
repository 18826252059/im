<?php

/* TopxiaWebBundle:Default:top-navigation.html.twig */
class __TwigTemplate_7aaec1223bcc6745846e250aa546417f287e77241f3169e6a5781671ce292582 extends Twig_Template
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
        $__internal_858d48539892ec595705c3cbe972ee12ddb7e08f11d399a2015174b163fcaa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858d48539892ec595705c3cbe972ee12ddb7e08f11d399a2015174b163fcaa71->enter($__internal_858d48539892ec595705c3cbe972ee12ddb7e08f11d399a2015174b163fcaa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:top-navigation.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            if ($this->getAttribute($context["nav"], "isOpen", array())) {
                // line 2
                echo "  ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                // line 3
                echo "  ";
                if ((($this->getAttribute($context["loop"], "index", array()) == 6) &&  !((array_key_exists("isMobile", $context)) ? (_twig_default_filter((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 4
                    echo "    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), 5, null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                        if ($this->getAttribute($context["nav"], "isOpen", array())) {
                            // line 10
                            echo "          ";
                            $context["subNavs"] = (($this->getAttribute($context["nav"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", array()), array())) : (array()));
                            // line 11
                            echo "
          ";
                            // line 12
                            $this->loadTemplate("TopxiaWebBundle:Default:navigation-li.html.twig", "TopxiaWebBundle:Default:top-navigation.html.twig", 12)->display($context);
                            // line 13
                            echo "        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "      </ul>
    </li>
  ";
                }
                // line 17
                echo "
  ";
                // line 18
                if ((($this->getAttribute($context["loop"], "index", array()) < 6) || ((array_key_exists("isMobile", $context)) ? (_twig_default_filter((isset($context["isMobile"]) ? $context["isMobile"] : $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 19
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Default:navigation-li.html.twig", "TopxiaWebBundle:Default:top-navigation.html.twig", 19)->display($context);
                    // line 20
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_858d48539892ec595705c3cbe972ee12ddb7e08f11d399a2015174b163fcaa71->leave($__internal_858d48539892ec595705c3cbe972ee12ddb7e08f11d399a2015174b163fcaa71_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  85 => 19,  83 => 18,  80 => 17,  75 => 14,  65 => 13,  63 => 12,  60 => 11,  57 => 10,  46 => 9,  39 => 4,  36 => 3,  33 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for nav in navigations if nav.isOpen %}
  {% set subNavs = nav.children|default([]) %}
  {% if  loop.index == 6  and not isMobile|default(false) %}
    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        {% for nav in navigations[5:]  if nav.isOpen %}
          {% set subNavs = nav.children|default([]) %}

          {% include 'TopxiaWebBundle:Default:navigation-li.html.twig' %}
        {% endfor %}
      </ul>
    </li>
  {% endif %}

  {% if loop.index < 6 or isMobile|default(false) %}
    {% include 'TopxiaWebBundle:Default:navigation-li.html.twig' %}
  {% endif %}
{% endfor %}
";
    }
}
