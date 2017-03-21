<?php

/* TopxiaWebBundle:Register:index.html.twig */
class __TwigTemplate_a521825d6201f3d5968916109f2d1b48fd4fd20249c2b85b3799afa83eac7423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:index.html.twig", 1);
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
        $__internal_ebac3b29a6864a086d77f978269cb7f71c3bf8b4e3bf944764295a176cb58082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebac3b29a6864a086d77f978269cb7f71c3bf8b4e3bf944764295a176cb58082->enter($__internal_ebac3b29a6864a086d77f978269cb7f71c3bf8b4e3bf944764295a176cb58082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Register:index.html.twig"));

        // line 4
        $context["script_controller"] = "auth/register";
        // line 6
        $context["parameter"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebac3b29a6864a086d77f978269cb7f71c3bf8b4e3bf944764295a176cb58082->leave($__internal_ebac3b29a6864a086d77f978269cb7f71c3bf8b4e3bf944764295a176cb58082_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3287e03e15445f09053de0abd2de2bdab0d170b5dd671aa75de0ce96e7083b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3287e03e15445f09053de0abd2de2bdab0d170b5dd671aa75de0ce96e7083b7e->enter($__internal_3287e03e15445f09053de0abd2de2bdab0d170b5dd671aa75de0ce96e7083b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3287e03e15445f09053de0abd2de2bdab0d170b5dd671aa75de0ce96e7083b7e->leave($__internal_3287e03e15445f09053de0abd2de2bdab0d170b5dd671aa75de0ce96e7083b7e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9a5e33cbd2cb9120e7941197f728646014744c0de6650975b38da661c61f1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a5e33cbd2cb9120e7941197f728646014744c0de6650975b38da661c61f1f3->enter($__internal_d9a5e33cbd2cb9120e7941197f728646014744c0de6650975b38da661c61f1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录帐号"), "html", null, true);
        echo "</a>
    <a class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册帐号"), "html", null, true);
        echo "</a>
  </div>
  <div class=\"login-main\">
    ";
        // line 15
        if ((isset($context["isRegisterEnabled"]) ? $context["isRegisterEnabled"] : $this->getContext($context, "isRegisterEnabled"))) {
            // line 16
            echo "      <form id=\"register-form\" method=\"post\" action=\"\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "

        ";
            // line 19
            if (((isset($context["inviteCode"]) ? $context["inviteCode"] : $this->getContext($context, "inviteCode")) != null)) {
                // line 20
                echo "          <div class=\"alert alert-info alert-sm\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您正在通过<span class=\"color-gray mhs\">%inviteUser%</span>的邀请注册。", array("%inviteUser%" => $this->getAttribute((isset($context["inviteUser"]) ? $context["inviteUser"] : $this->getContext($context, "inviteUser")), "nickname", array())));
                echo "</div>
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "email")) {
                // line 24
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_email\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱地址"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"email\" id=\"register_email\" name=\"email\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 27
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的邮箱作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } elseif (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                // line 32
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_mobile\">";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 35
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的手机号码作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } else {
                // line 40
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_emailOrmobile\">";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机/邮箱"), "html", null, true);
                echo "</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你常用的邮箱或手机号码作为登录帐号"), "html", null, true);
                echo "\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            }
            // line 48
            echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_nickname\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_nickname_check");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中、英文均可，最长18个英文或9个汉字"), "html", null, true);
            echo "\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_password\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("密码"), "html", null, true);
            echo "</label>
          <div class=\"controls\">
            <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("5-20位英文、数字、符号，区分大小写"), "html", null, true);
            echo "\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        ";
            // line 63
            if (((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.captcha_enabled"), 0) == 1) && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") != "mobile"))) {
                // line 64
                echo "          <div class=\"form-group mbl js-captcha\">
            <label class=\"control-label required\" for=\"captcha_code\">";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证码"), "html", null, true);
                echo "</label>
            <div class=\"controls row\">
              <div class = \"col-xs-7\">
                <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_code\" name=\"captcha_code\" maxlength=\"5\" placeholder=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证码"), "html", null, true);
                echo "\" required=\"required\"  data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_check");
                echo "\" >
                <p class=\"help-block\"></p>
              </div>
              <div class=\"col-xs-5\">
                <img src=\"";
                // line 72
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_num");
                echo "\" id=\"getcode_num\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("看不清，点击换一张"), "html", null, true);
                echo "\" style=\"cursor:pointer;height:40px;width:100%\">
              </div>
              
            </div>
          </div>
        ";
            }
            // line 78
            echo "        ";
            if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") == "mobile"))) {
                // line 79
                echo "          <div class=\"form-group mbl ";
                if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
            <label class=\"control-label required\" for=\"sms_code\">";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("短信验证码"), "html", null, true);
                echo "</label>
            <div class=\"controls row\" >
              <div class = \"col-xs-7\" >
                <input type=\"number\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写你的短信验证码"), "html", null, true);
                echo "\" required=\"required\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", array("type" => "sms_registration"));
                echo "\">
                <p class=\"help-block\"> </p>
              </div>
              <div class=\"col-xs-5\">
                <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg js-sms-send disabled\" data-url=\"";
                // line 87
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_captcha_modal");
                echo "\" data-sms-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send");
                echo "\">
                  <span id=\"js-time-left\"></span>
                  <span id=\"js-fetch-btn-text\">";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("获取短信验证码"), "html", null, true);
                echo "</span>
               </a>
              </div>
            </div>
          </div>
        ";
            }
            // line 95
            echo "        ";
            if (((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("invite.invite_code_setting"), 0) == 1) && ((isset($context["inviteCode"]) ? $context["inviteCode"] : $this->getContext($context, "inviteCode")) == null))) {
                // line 96
                echo "        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"invite_code\">";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邀请码"), "html", null, true);
                echo "<span class=\"text-success\">（";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选填"), "html", null, true);
                echo "）</span></label>
          <div class=\"controls\">
            <input type=\"text\" name=\"invite_code\" required=\"required\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 99
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invitecode_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如果您有邀请码，请填写您的邀请码"), "html", null, true);
                echo "\">
          </div>
        </div>
        ";
            }
            // line 103
            echo "
        ";
            // line 104
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.user_terms") == "opened")) {
                // line 105
                echo "          <div class=\"form-group mbl\">
            <div class=\"controls\">
              <label>
                <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\"> ";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我已阅读并同意"), "html", null, true);
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务协议"), "html", null, true);
                echo "》</a>
              </label>
            </div>
          </div>
        ";
            }
            // line 113
            echo "
        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        ";
            // line 122
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method")) {
                // line 123
                echo "        <input type=\"hidden\" id=\"invite_code\" name=\"invite_code\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method"), "html", null, true);
                echo "\">
        ";
            }
            // line 125
            echo "
      </form>

      ";
            // line 128
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.enabled")) {
                // line 129
                echo "        <div class=\"social-login\">
          <span>
            ";
                // line 131
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), "inviteCode" => ((array_key_exists("inviteCode", $context)) ? (_twig_default_filter((isset($context["inviteCode"]) ? $context["inviteCode"] : $this->getContext($context, "inviteCode")), "")) : ("")))));
                echo "
          </span>
          <div class=\"line\"></div>
        </div>
      ";
            }
            // line 136
            echo "    ";
        } else {
            // line 137
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统暂时关闭注册，请联系管理员"), "html", null, true);
            echo "</div>
    ";
        }
        // line 139
        echo "  </div>
</div>
  ";
        // line 141
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.weixinmob_enabled") == "1")) {
            // line 142
            echo "    ";
            $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("auth/isWeiXin");
            // line 143
            echo "  ";
        }
        
        $__internal_d9a5e33cbd2cb9120e7941197f728646014744c0de6650975b38da661c61f1f3->leave($__internal_d9a5e33cbd2cb9120e7941197f728646014744c0de6650975b38da661c61f1f3_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 143,  367 => 142,  365 => 141,  361 => 139,  355 => 137,  352 => 136,  344 => 131,  340 => 129,  338 => 128,  333 => 125,  327 => 123,  325 => 122,  321 => 121,  317 => 120,  308 => 116,  303 => 113,  291 => 108,  286 => 105,  284 => 104,  281 => 103,  272 => 99,  265 => 97,  262 => 96,  259 => 95,  250 => 89,  243 => 87,  234 => 83,  228 => 80,  221 => 79,  218 => 78,  205 => 72,  196 => 68,  190 => 65,  187 => 64,  185 => 63,  178 => 59,  173 => 57,  163 => 52,  158 => 50,  154 => 48,  144 => 43,  139 => 41,  136 => 40,  126 => 35,  121 => 33,  118 => 32,  108 => 27,  103 => 25,  100 => 24,  98 => 23,  95 => 22,  89 => 20,  87 => 19,  82 => 17,  79 => 16,  77 => 15,  71 => 12,  65 => 11,  60 => 8,  54 => 7,  40 => 3,  33 => 1,  31 => 6,  29 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{'注册'|trans}} - {{ parent() }}{% endblock %}
{% set script_controller = 'auth/register' %}

{% set parameter = get_parameters_from_url(app.request.uri) %}
{% block content %}

<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a href=\"{{ path('login', {goto:_target_path}) }}\">{{'登录帐号'|trans}}</a>
    <a class=\"active\">{{'注册帐号'|trans}}</a>
  </div>
  <div class=\"login-main\">
    {% if isRegisterEnabled %}
      <form id=\"register-form\" method=\"post\" action=\"\">
        {{ web_macro.flash_messages() }}

        {% if inviteCode != null  %}
          <div class=\"alert alert-info alert-sm\">{{'您正在通过<span class=\"color-gray mhs\">%inviteUser%</span>的邀请注册。'|trans({'%inviteUser%': inviteUser.nickname})|raw}}</div>
        {% endif %}

        {% if setting('auth.register_mode') == 'email' %}
          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_email\">{{'邮箱地址'|trans}}</label>
            <div class=\"controls\">
              <input type=\"email\" id=\"register_email\" name=\"email\" required=\"required\" class=\"form-control input-lg\" data-url=\"{{path('register_email_check')}}\" placeholder=\"{{'填写你常用的邮箱作为登录帐号'|trans}}\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        {% elseif setting('auth.register_mode') == 'mobile' %}
          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_mobile\">{{'手机号码'|trans}}</label>
            <div class=\"controls\">
              <input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"{{path('register_mobile_check')}}\" placeholder=\"{{'填写你常用的手机号码作为登录帐号'|trans}}\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        {% else %}
          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_emailOrmobile\">{{'手机/邮箱'|trans}}</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"{{path('register_email_or_mobile_check')}}\" placeholder=\"{{'填写你常用的邮箱或手机号码作为登录帐号'|trans}}\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        {% endif %}

        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_nickname\">{{'用户名'|trans}}</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"{{path('register_nickname_check')}}\" placeholder=\"{{'中、英文均可，最长18个英文或9个汉字'|trans}}\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_password\">{{'密码'|trans}}</label>
          <div class=\"controls\">
            <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"{{'5-20位英文、数字、符号，区分大小写'|trans}}\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        {% if (setting('auth.captcha_enabled')|default(0)) == 1 and setting('auth.register_mode') != 'mobile' %}
          <div class=\"form-group mbl js-captcha\">
            <label class=\"control-label required\" for=\"captcha_code\">{{'验证码'|trans}}</label>
            <div class=\"controls row\">
              <div class = \"col-xs-7\">
                <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_code\" name=\"captcha_code\" maxlength=\"5\" placeholder=\"{{'验证码'|trans}}\" required=\"required\"  data-url=\"{{path('register_captcha_check')}}\" >
                <p class=\"help-block\"></p>
              </div>
              <div class=\"col-xs-5\">
                <img src=\"{{ path('register_captcha_num') }}\" data-url=\"{{ path('register_captcha_num') }}\" id=\"getcode_num\" title=\"{{'看不清，点击换一张'|trans}}\" style=\"cursor:pointer;height:40px;width:100%\">
              </div>
              
            </div>
          </div>
        {% endif %}
        {% if setting('auth.register_mode') == 'email_or_mobile' or setting('auth.register_mode') == 'mobile' %}
          <div class=\"form-group mbl {% if setting('auth.register_mode') != 'mobile' %}hidden{% endif %} email_mobile_msg\">
            <label class=\"control-label required\" for=\"sms_code\">{{'短信验证码'|trans}}</label>
            <div class=\"controls row\" >
              <div class = \"col-xs-7\" >
                <input type=\"number\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"{{'填写你的短信验证码'|trans}}\" required=\"required\" data-url=\"{{path('edu_cloud_sms_check',{type:'sms_registration'})}}\">
                <p class=\"help-block\"> </p>
              </div>
              <div class=\"col-xs-5\">
                <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg js-sms-send disabled\" data-url=\"{{ path('register_captcha_modal') }}\" data-sms-url=\"{{ path('edu_cloud_sms_send') }}\">
                  <span id=\"js-time-left\"></span>
                  <span id=\"js-fetch-btn-text\">{{'获取短信验证码'|trans}}</span>
               </a>
              </div>
            </div>
          </div>
        {% endif %}
        {% if (setting('invite.invite_code_setting')|default(0) == 1) and  inviteCode == null  %}
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"invite_code\">{{'邀请码'|trans}}<span class=\"text-success\">（{{'选填'|trans}}）</span></label>
          <div class=\"controls\">
            <input type=\"text\" name=\"invite_code\" required=\"required\" class=\"form-control input-lg invitecode\" data-url=\"{{path('invitecode_check')}}\" placeholder=\"{{'如果您有邀请码，请填写您的邀请码'|trans}}\">
          </div>
        </div>
        {% endif %}

        {% if setting('auth.user_terms') == 'opened' %}
          <div class=\"form-group mbl\">
            <div class=\"controls\">
              <label>
                <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\"> {{'我已阅读并同意'|trans}}<a href=\"{{ path('user_terms') }}\" target=\"_blank\">《{{'服务协议'|trans}}》</a>
              </label>
            </div>
          </div>
        {% endif %}

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"{{'正在提交'|trans}}\" class=\"btn btn-primary btn-lg btn-block\">{{'注册'|trans}}</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"captcha_enabled\" value=\"{{ setting('auth.captcha_enabled') }}\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        {% if app.request.get('inviteCode', '') %}
        <input type=\"hidden\" id=\"invite_code\" name=\"invite_code\" value=\"{{ app.request.get('inviteCode', '')}}\">
        {% endif %}

      </form>

      {% if setting('login_bind.enabled') %}
        <div class=\"social-login\">
          <span>
            {{ render(controller('TopxiaWebBundle:Login:oauth2LoginsBlock', {targetPath:_target_path,inviteCode:inviteCode|default('')})) }}
          </span>
          <div class=\"line\"></div>
        </div>
      {% endif %}
    {% else %}
      <div class=\"empty\">{{'系统暂时关闭注册，请联系管理员'|trans}}</div>
    {% endif %}
  </div>
</div>
  {% if setting('login_bind.weixinmob_enabled') == '1' %}
    {% do load_script('auth/isWeiXin') %}
  {% endif %}
{% endblock %}";
    }
}
