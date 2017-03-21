<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_6549c7026bb2bbca39c4a5bec66e4c38d6c5f87fb706e765b5ded0e55aa3869d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:index.html.twig", 1);
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
        $__internal_e8d5816ce2d1804e6e9ab108c1fee2ea2c16ad82ef3996010f0498e8910b1cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d5816ce2d1804e6e9ab108c1fee2ea2c16ad82ef3996010f0498e8910b1cf8->enter($__internal_e8d5816ce2d1804e6e9ab108c1fee2ea2c16ad82ef3996010f0498e8910b1cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Login:index.html.twig"));

        // line 4
        $context["script_controller"] = "auth/login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8d5816ce2d1804e6e9ab108c1fee2ea2c16ad82ef3996010f0498e8910b1cf8->leave($__internal_e8d5816ce2d1804e6e9ab108c1fee2ea2c16ad82ef3996010f0498e8910b1cf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6e6664a3cef84b57dcab9022198e1a3ac20ff1dff5de380a24398cea78d5954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e6664a3cef84b57dcab9022198e1a3ac20ff1dff5de380a24398cea78d5954->enter($__internal_a6e6664a3cef84b57dcab9022198e1a3ac20ff1dff5de380a24398cea78d5954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a6e6664a3cef84b57dcab9022198e1a3ac20ff1dff5de380a24398cea78d5954->leave($__internal_a6e6664a3cef84b57dcab9022198e1a3ac20ff1dff5de380a24398cea78d5954_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c52af4441042dbcdae20d1259f6c507e1d6e61b7c1e1d0a8fb53afe0f01dd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c52af4441042dbcdae20d1259f6c507e1d6e61b7c1e1d0a8fb53afe0f01dd2e->enter($__internal_7c52af4441042dbcdae20d1259f6c507e1d6e61b7c1e1d0a8fb53afe0f01dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 7
            echo " <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
";
        }
        // line 9
        echo "<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录帐号"), "html", null, true);
        echo "</a>
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册帐号"), "html", null, true);
        echo "</a>
  </div>
  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

      ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
      ";
        }
        // line 20
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帐号"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required placeholder='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱/手机/用户名"), "html", null, true);
        echo "' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
        echo "'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("记住密码"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo "</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

    <div class=\"mbl\">
      <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("找回密码"), "html", null, true);
        echo "</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有注册帐号？"), "html", null, true);
        echo "</span>
      <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("立即注册"), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 55
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.enabled")) {
            // line 56
            echo "      <div class=\"social-login\">
        <span>
          ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))));
            echo "
        </span>
        <div class=\"line\"></div>
      </div>
    ";
        }
        // line 63
        echo "  </div>
</div>

";
        
        $__internal_7c52af4441042dbcdae20d1259f6c507e1d6e61b7c1e1d0a8fb53afe0f01dd2e->leave($__internal_7c52af4441042dbcdae20d1259f6c507e1d6e61b7c1e1d0a8fb53afe0f01dd2e_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 63,  179 => 58,  175 => 56,  173 => 55,  165 => 52,  161 => 51,  154 => 49,  147 => 45,  143 => 44,  137 => 41,  130 => 37,  121 => 31,  116 => 29,  106 => 24,  101 => 22,  95 => 20,  89 => 18,  87 => 17,  82 => 15,  74 => 12,  70 => 11,  66 => 9,  60 => 7,  58 => 6,  52 => 5,  38 => 3,  31 => 1,  29 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{'登录'|trans}} - {{ parent() }}{% endblock %}
{% set script_controller = 'auth/login' %}
{% block content %}
{% if app.request.cookies.get('modalOpened') == 1 %}
 <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"{{ path('card_info',{'cardType':app.request.query.get('cardType'),'cardId':app.request.query.get('cardId')}) }}\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
{% endif %}
<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a class=\"active\">{{'登录帐号'|trans}}</a>
    <a href=\"{{ path('register', {goto:_target_path}) }}\">{{'注册帐号'|trans}}</a>
  </div>
  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"{{ path('login_check') }}\">

      {% if error %}
        <div class=\"alert alert-danger\">{{ error.message|trans }}</div>
      {% endif %}
      {{ web_macro.flash_messages() }}
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">{{'帐号'|trans}}</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"{{ last_username }}\" required placeholder='{{'邮箱/手机/用户名'|trans}}' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">{{'密码'|trans}}</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='{{'密码'|trans}}'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> {{'记住密码'|trans}}
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">{{'登录'|trans}}</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"{{ _target_path }}\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>

    <div class=\"mbl\">
      <a href=\"{{ path('password_reset') }}\">{{'找回密码'|trans}}</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">{{'还没有注册帐号？'|trans}}</span>
      <a href=\"{{ path('register', {goto:_target_path}) }}\">{{'立即注册'|trans}}</a>
    </div>

    {% if setting('login_bind.enabled') %}
      <div class=\"social-login\">
        <span>
          {{ render(controller('TopxiaWebBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}
        </span>
        <div class=\"line\"></div>
      </div>
    {% endif %}
  </div>
</div>

{% endblock %}";
    }
}
