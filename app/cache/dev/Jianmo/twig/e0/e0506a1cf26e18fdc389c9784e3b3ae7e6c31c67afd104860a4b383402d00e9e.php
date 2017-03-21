<?php

/* TopxiaAdminBundle:System:esbar-setting.html.twig */
class __TwigTemplate_6ea27f54552a07898a3e7177f8640b10a838a1e25756e131370c9d67d766cd61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:esbar-setting.html.twig", 1);
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
        $__internal_98b7957d9a80b46a3acd1a999752bfe38f7b4f3d7d5a41192b7f7f87b3100a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b7957d9a80b46a3acd1a999752bfe38f7b4f3d7d5a41192b7f7f87b3100a65->enter($__internal_98b7957d9a80b46a3acd1a999752bfe38f7b4f3d7d5a41192b7f7f87b3100a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:esbar-setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_es_bar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b7957d9a80b46a3acd1a999752bfe38f7b4f3d7d5a41192b7f7f87b3100a65->leave($__internal_98b7957d9a80b46a3acd1a999752bfe38f7b4f3d7d5a41192b7f7f87b3100a65_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_580b88771d456b76b89058ee5273d6b89453162e4204e749e373ca9c438ce482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580b88771d456b76b89058ee5273d6b89453162e4204e749e373ca9c438ce482->enter($__internal_580b88771d456b76b89058ee5273d6b89453162e4204e749e373ca9c438ce482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"esbar-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("侧边栏功能"), "html", null, true);
        echo "</label>

    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["esBar"]) ? $context["esBar"] : $this->getContext($context, "esBar")), "enabled", array()));
        echo "
      <p class=\"help-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校开启侧边栏后，客服的悬浮框会失效"), "html", null, true);
        echo "</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
        
        $__internal_580b88771d456b76b89058ee5273d6b89453162e4204e749e373ca9c438ce482->leave($__internal_580b88771d456b76b89058ee5273d6b89453162e4204e749e373ca9c438ce482_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:esbar-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  75 => 24,  65 => 17,  61 => 16,  54 => 12,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_es_bar' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"esbar-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >{{'侧边栏功能'|trans}}</label>

    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('enabled', {1:'开启'|trans, 0:'关闭'|trans}, esBar.enabled) }}
      <p class=\"help-block\">{{'网校开启侧边栏后，客服的悬浮框会失效'|trans}}</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>
{% endblock %}";
    }
}
