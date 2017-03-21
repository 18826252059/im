<?php

/* TopxiaWebBundle:Message:create.html.twig */
class __TwigTemplate_73c8ddbc78c0cdb050c19b872c13b5a54ec2842aad33b9e0cc0a0dcec745f9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Message:create.html.twig", 1);
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
        $__internal_9590521c9064e7058995b6ed43237dcb09a0430b252aec627481682680c8de3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9590521c9064e7058995b6ed43237dcb09a0430b252aec627481682680c8de3e->enter($__internal_9590521c9064e7058995b6ed43237dcb09a0430b252aec627481682680c8de3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Message:create.html.twig"));

        // line 4
        $context["script_controller"] = "message/create";
        // line 6
        $context["script_arguments"] = array("followingMatchByNickname" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("following_match_bynickname"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9590521c9064e7058995b6ed43237dcb09a0430b252aec627481682680c8de3e->leave($__internal_9590521c9064e7058995b6ed43237dcb09a0430b252aec627481682680c8de3e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29dea7748a463bd17ed76be8c042edbe1d2e73a0a1ab3ce44944b39179e2d589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29dea7748a463bd17ed76be8c042edbe1d2e73a0a1ab3ce44944b39179e2d589->enter($__internal_29dea7748a463bd17ed76be8c042edbe1d2e73a0a1ab3ce44944b39179e2d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("写私信"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_29dea7748a463bd17ed76be8c042edbe1d2e73a0a1ab3ce44944b39179e2d589->leave($__internal_29dea7748a463bd17ed76be8c042edbe1d2e73a0a1ab3ce44944b39179e2d589_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d517b10938f8c415f55b05207544553e30419c5a43210b44a1f9fa716a7a3d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d517b10938f8c415f55b05207544553e30419c5a43210b44a1f9fa716a7a3d5d->enter($__internal_d517b10938f8c415f55b05207544553e30419c5a43210b44a1f9fa716a7a3d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<style>

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
<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\" class=\"btn btn-default pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回我的私信"), "html", null, true);
        echo "</a>
        <h2>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("写私信"), "html", null, true);
        echo "</h2>
      </div>

      <form id=\"message-create-form\" class=\"form-horizontal\" method=\"post\">

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "receiver", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收信人用户名"), "data-auto-url" => $this->getAttribute((isset($context["script_arguments"]) ? $context["script_arguments"] : $this->getContext($context, "script_arguments")), "followingMatchByNickname", array()), "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_check_receiver"), "data-display" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收信人用户名"))));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5, "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("想要说的话"), "data-display" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("想要说的话"))));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <button id=\"message-create-btn\" class=\"btn btn-primary pull-right\" data-loading-text=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在发送..."), "html", null, true);
        echo "\" type=\"submit\" value=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送"), "html", null, true);
        echo "
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>


    </div><!-- /panel -->
  </div>
</div>

";
        
        $__internal_d517b10938f8c415f55b05207544553e30419c5a43210b44a1f9fa716a7a3d5d->leave($__internal_d517b10938f8c415f55b05207544553e30419c5a43210b44a1f9fa716a7a3d5d_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  132 => 65,  128 => 64,  119 => 58,  110 => 52,  100 => 45,  94 => 44,  60 => 12,  54 => 11,  40 => 3,  33 => 1,  31 => 6,  29 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{'写私信'|trans}} - {{ parent() }}{% endblock %}
{% set script_controller = 'message/create' %}
{%
  set script_arguments = {
    followingMatchByNickname: path('following_match_bynickname')
  }
%}

{% block content %}
<style>

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
<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a href=\"{{ path('message')}}\" class=\"btn btn-default pull-right\">{{'返回我的私信'|trans}}</a>
        <h2>{{'写私信'|trans}}</h2>
      </div>

      <form id=\"message-create-form\" class=\"form-horizontal\" method=\"post\">

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            {{ form_widget(form.receiver, {attr:{class:'form-control', placeholder:'收信人用户名'|trans, 'data-auto-url':script_arguments.followingMatchByNickname, 'data-url':path('message_check_receiver'), 'data-display':'收信人用户名'|trans}})  }}
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            {{ form_widget(form.content, {attr:{class:'form-control', rows:5, placeholder:'想要说的话'|trans, 'data-display': '想要说的话'|trans}}) }}
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            {{ form_rest(form) }}
            <button id=\"message-create-btn\" class=\"btn btn-primary pull-right\" data-loading-text=\"{{'正在发送...'|trans}}\" type=\"submit\" value=\"\">{{'发送'|trans}}
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
      </form>


    </div><!-- /panel -->
  </div>
</div>

{% endblock %}";
    }
}
