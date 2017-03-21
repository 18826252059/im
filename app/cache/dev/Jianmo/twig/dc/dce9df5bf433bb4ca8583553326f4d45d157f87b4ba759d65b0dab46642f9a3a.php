<?php

/* TopxiaWebBundle:Message:index.html.twig */
class __TwigTemplate_e0d2a167b3ea0bf64c33090914168662e3612db5284e70c21f3e22f6ccf452de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Message:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aad95e855f20e3c884c78307415c5c16d6f3c1fe4f417c9efca2f83c5f5c8dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad95e855f20e3c884c78307415c5c16d6f3c1fe4f417c9efca2f83c5f5c8dac->enter($__internal_aad95e855f20e3c884c78307415c5c16d6f3c1fe4f417c9efca2f83c5f5c8dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Message:index.html.twig"));

        // line 4
        $context["script_controller"] = "message/conversation-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aad95e855f20e3c884c78307415c5c16d6f3c1fe4f417c9efca2f83c5f5c8dac->leave($__internal_aad95e855f20e3c884c78307415c5c16d6f3c1fe4f417c9efca2f83c5f5c8dac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be8e1700e4b3dfee5f06446ff6af1848821f2d300143a015c157ade9432326f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8e1700e4b3dfee5f06446ff6af1848821f2d300143a015c157ade9432326f0->enter($__internal_be8e1700e4b3dfee5f06446ff6af1848821f2d300143a015c157ade9432326f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_be8e1700e4b3dfee5f06446ff6af1848821f2d300143a015c157ade9432326f0->leave($__internal_be8e1700e4b3dfee5f06446ff6af1848821f2d300143a015c157ade9432326f0_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6db3d7641c78d9d613b78d9073d3fee84e1a013695f29acc780b5f8933dc2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6db3d7641c78d9d613b78d9073d3fee84e1a013695f29acc780b5f8933dc2a4->enter($__internal_a6db3d7641c78d9d613b78d9073d3fee84e1a013695f29acc780b5f8933dc2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_send");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("写私信"), "html", null, true);
        echo "</a>
        <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
        echo "</h2>
      </div>

      <ul class=\"media-list conversation-list\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) ? $context["conversations"] : $this->getContext($context, "conversations")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 17
            echo "          ";
            $context["fromUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["conversation"], "fromId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["conversation"], "fromId", array()), array(), "array"), null)) : (null));
            // line 18
            echo "          ";
            $this->loadTemplate((("TopxiaWebBundle:Message/Template:conversation-" . $this->getAttribute($context["conversation"], "latestMessageType", array())) . ".tpl.html.twig"), "TopxiaWebBundle:Message:index.html.twig", 18)->display($context);
            // line 19
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 20
            echo "          <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无私信"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </ul>

      ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

    </div><!-- /panel -->
  </div>
</div>

";
        
        $__internal_a6db3d7641c78d9d613b78d9073d3fee84e1a013695f29acc780b5f8933dc2a4->leave($__internal_a6db3d7641c78d9d613b78d9073d3fee84e1a013695f29acc780b5f8933dc2a4_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 24,  123 => 22,  114 => 20,  101 => 19,  98 => 18,  95 => 17,  77 => 16,  70 => 12,  64 => 11,  58 => 7,  52 => 6,  38 => 3,  31 => 1,  29 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{'私信'|trans}} - {{ parent() }}{% endblock %}
{% set script_controller = 'message/conversation-list' %}

{% block content %}
<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a class=\"btn btn-primary pull-right\" href=\"{{ path('message_send') }}\">{{'写私信'|trans}}</a>
        <h2>{{'私信'|trans}}</h2>
      </div>

      <ul class=\"media-list conversation-list\">
        {% for conversation in conversations %}
          {% set fromUser = users[conversation.fromId]|default(null) %}
          {% include 'TopxiaWebBundle:Message/Template:conversation-' ~ conversation.latestMessageType ~ '.tpl.html.twig' %}
        {% else %}
          <li class=\"empty\">{{'暂无私信'|trans}}</li>
        {% endfor %}
      </ul>

      {{ web_macro.paginator(paginator) }}

    </div><!-- /panel -->
  </div>
</div>

{% endblock %}";
    }
}
