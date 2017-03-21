<?php

/* TopxiaAdminBundle:Default:domain.html.twig */
class __TwigTemplate_f0d3558dde686b03bc2d4d34d7b4c8160995245d2f6b6eb6754efe444b90900f extends Twig_Template
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
        $__internal_9cb92856c5abe3fb3702f9ba922bdc464901d37a6358d4e60861b1985b375c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb92856c5abe3fb3702f9ba922bdc464901d37a6358d4e60861b1985b375c71->enter($__internal_9cb92856c5abe3fb3702f9ba922bdc464901d37a6358d4e60861b1985b375c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default:domain.html.twig"));

        // line 1
        if ((isset($context["inspectList"]) ? $context["inspectList"] : $this->getContext($context, "inspectList"))) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inspectList"]) ? $context["inspectList"] : $this->getContext($context, "inspectList")));
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "      <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
      <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
        
        $__internal_9cb92856c5abe3fb3702f9ba922bdc464901d37a6358d4e60861b1985b375c71->leave($__internal_9cb92856c5abe3fb3702f9ba922bdc464901d37a6358d4e60861b1985b375c71_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  36 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if inspectList %}
  <div class=\"alert alert-warning\" role=\"alert\">
    {% for inspectItem in inspectList %}
      <span>{{inspectItem.value.errorMessage}}</span>
      <a href='{{inspectItem.value.settingUrl}}'>{{'设置'|trans}}</a>
    {% endfor %}
  </div>
{% endif %}";
    }
}
