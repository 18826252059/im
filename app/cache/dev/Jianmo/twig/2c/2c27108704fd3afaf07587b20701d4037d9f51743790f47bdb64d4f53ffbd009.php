<?php

/* TopxiaAdminBundle:System:auth.html.twig */
class __TwigTemplate_497ef7d4e8eaf67e2abc9ad510f2622688ff076a5a57d8961d2b27a207f9210e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:auth.html.twig", 1);
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
        $__internal_5b503ea1f807cf3bbf24dba0637444b5bb310c929c2424ed926de8f799686469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b503ea1f807cf3bbf24dba0637444b5bb310c929c2424ed926de8f799686469->enter($__internal_5b503ea1f807cf3bbf24dba0637444b5bb310c929c2424ed926de8f799686469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:auth.html.twig"));

        // line 3
        $context["menu"] = "admin_user_auth";
        // line 5
        $context["script_controller"] = "setting/auth";
        // line 6
        $context["script_arguments"] = array("emailVerified" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "emailVerified", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b503ea1f807cf3bbf24dba0637444b5bb310c929c2424ed926de8f799686469->leave($__internal_5b503ea1f807cf3bbf24dba0637444b5bb310c929c2424ed926de8f799686469_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_8194d064c743ec054eb5219ed324eaa9f2f1f65e27a62be0930d98d455b4c12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8194d064c743ec054eb5219ed324eaa9f2f1f65e27a62be0930d98d455b4c12f->enter($__internal_8194d064c743ec054eb5219ed324eaa9f2f1f65e27a62be0930d98d455b4c12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册设置"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户注册模式"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 20
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "email")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱注册"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 21
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机注册"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 22
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "email_or_mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email_or_mobile\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱或手机注册"), "html", null, true);
        echo "</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 23
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "closed")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"closed\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"register_mode\" />
        <div class=\"help-block\" >";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启云短信后，才可使用“手机注册”或“邮箱或手机注册”"), "html", null, true);
        echo "</div>
      </div>
    </div>

    
    <div class=\"email-content ";
        // line 31
        if ((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "mobile") || ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "register_mode", array()) == "closed"))) {
            echo "hidden";
        }
        echo "\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮箱验证登录"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 37
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("email_enabled", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_enabled", array()));
        echo "
         <button type=\"button\" class=\"btn btn-primary btn-sm js-email-send-check hidden\"  data-url=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_email_send");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("检测邮箱服务"), "html", null, true);
        echo "</button>
         <div class=\"alert alert-info js-email-status hidden\"  data-url=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer");
        echo "\"role=\"alert\" style=\"padding: 5px;margin-bottom: 0\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在检测....."), "html", null, true);
        echo "</div>
         <div class=\"help-block\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后,邮箱未验证的用户将无法登录,请先保证邮件服务器已设置"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <input type=\"hidden\" name=\"setting_time\"  value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.setting_time"), "html", null, true);
        echo "\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新用户激活邮件标题"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_activation_title", array()), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新用户激活邮件内容"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "email_activation_body", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            <div>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
            <ul>
              <li>";
        // line 64
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为接收方用户昵称"), "html", null, true);
        echo "</li>
              <li>";
        // line 65
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为网站名称"), "html", null, true);
        echo "</li>
              <li>";
        // line 66
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为网站的地址"), "html", null, true);
        echo "</li>
              <li>";
        // line 67
        echo "{{verifyurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为邮箱验证地址"), "html", null, true);
        echo "</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册防护机制"), "html", null, true);
        echo "</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" ";
        // line 82
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "none")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" ";
        // line 85
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("低"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" ";
        // line 88
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中"), "html", null, true);
        echo "
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"";
        // line 91
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
            echo "checked=\"checked\"";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("高"), "html", null, true);
        echo "
        </label>
      </div>

      <div class=\"controls col-md-8 mtl low register-help  col-md-offset-3\" ";
        // line 95
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("方案说明："), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时需填写验证码。"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl middle register-help  col-md-offset-3\" ";
        // line 102
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("方案说明："), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时需填写验证码。"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">2：";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("同一IP24小时內只能注册30次。"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl high register-help  col-md-offset-3\" ";
        // line 110
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          ";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("方案说明："), "html", null, true);
        echo "
          <p class=\"mll mtm\">1：";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时需填写验证码。"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">2：";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("同一IP24小时內只能注册10次。"), "html", null, true);
        echo "</p>
          <p class=\"mll mtm\">3：";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("同一IP1小时內只能注册1个账号。"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎信息设置"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送欢迎信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 130
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->checkboxs("welcome_methods", array("message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站内私信"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电子邮件")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_methods", array()));
        echo "
        <div class=\"help-block\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效"), "html", null, true);
        echo "。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送欢迎信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 140
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("welcome_enabled", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_enabled", array()));
        echo "
        <div class=\"help-block\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎信以站内私信的方式，发送给新用户。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎信息发送方"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_sender", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通常为这个网站的管理员，请输入用户用户名。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎信息标题"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎信息内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "welcome_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          <div>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注意： 私信长度不能超过1000个字符"), "html", null, true);
        echo "</div>
          <div>";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 174
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为接收方用户用户名"), "html", null, true);
        echo "</li>
            <li>";
        // line 175
        echo "{{sitename}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为网站名称"), "html", null, true);
        echo "</li>
            <li>";
        // line 176
        echo "{{siteurl}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为网站的地址"), "html", null, true);
        echo "</li>
          </ul>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务条款设置"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否开启服务条款"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 190
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("user_terms", array("opened" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "user_terms", array()));
        echo "
        <div class=\"help-block\">";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后用户注册时必须同意条款才能注册"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("条款内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : $this->getContext($context, "auth")), "user_terms_body", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>


  ";
        // line 207
        if (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.username_setting"), false)) {
            // line 208
            echo "    <fieldset>
      <legend>";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称设置"), "html", null, true);
            echo "</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名称"), "html", null, true);
            echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" ";
            // line 215
            if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "user_name", array())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"))), "html", null, true);
                echo "\" ";
            }
            echo ">
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> ";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称"), "html", null, true);
            echo "
        </strong></p>
      </div>
    </fieldset> 
  ";
        }
        // line 225
        echo "  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
        
        $__internal_8194d064c743ec054eb5219ed324eaa9f2f1f65e27a62be0930d98d455b4c12f->leave($__internal_8194d064c743ec054eb5219ed324eaa9f2f1f65e27a62be0930d98d455b4c12f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 233,  559 => 232,  553 => 229,  547 => 225,  539 => 220,  527 => 215,  521 => 212,  515 => 209,  512 => 208,  510 => 207,  498 => 200,  492 => 197,  483 => 191,  479 => 190,  473 => 187,  467 => 184,  454 => 176,  448 => 175,  442 => 174,  437 => 172,  433 => 171,  428 => 169,  422 => 166,  413 => 160,  407 => 157,  398 => 151,  394 => 150,  388 => 147,  379 => 141,  375 => 140,  369 => 137,  360 => 131,  356 => 130,  350 => 127,  343 => 123,  332 => 115,  328 => 114,  324 => 113,  320 => 112,  312 => 110,  305 => 106,  301 => 105,  297 => 104,  289 => 102,  282 => 98,  278 => 97,  270 => 95,  259 => 91,  249 => 88,  239 => 85,  229 => 82,  221 => 77,  206 => 67,  200 => 66,  194 => 65,  188 => 64,  183 => 62,  178 => 60,  172 => 57,  163 => 51,  157 => 48,  150 => 44,  143 => 40,  137 => 39,  131 => 38,  127 => 37,  121 => 34,  113 => 31,  105 => 26,  101 => 25,  92 => 23,  84 => 22,  76 => 21,  68 => 20,  61 => 16,  55 => 13,  47 => 8,  41 => 7,  34 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_user_auth' %}

{% set script_controller = 'setting/auth' %}
{% set script_arguments = { emailVerified: app.user.emailVerified} %}
{% block main %}
{{ web_macro.flash_messages() }}

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>{{'注册设置'|trans}}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'用户注册模式'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"email\" %}btn-primary{% endif %} model\" data-modle=\"email\">{{'邮箱注册'|trans}}</button>
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"mobile\" %}btn-primary{% endif %} model\" data-modle=\"mobile\">{{'手机注册'|trans}}</button>
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"email_or_mobile\" %}btn-primary{% endif %} model\" data-modle=\"email_or_mobile\">{{'邮箱或手机注册'|trans}}</button>
          <button type=\"button\" class=\"btn btn-default {% if auth.register_mode ==\"closed\" %}btn-primary{% endif %} model\" data-modle=\"closed\">{{'关闭'|trans}}</button>
        </div>
        <input type=\"hidden\" value=\"{{ auth.register_mode|default('none') }}\" name=\"register_mode\" />
        <div class=\"help-block\" >{{'开启云短信后，才可使用“手机注册”或“邮箱或手机注册”'|trans}}</div>
      </div>
    </div>

    
    <div class=\"email-content {% if auth.register_mode == 'mobile' or auth.register_mode == 'closed' %}hidden{% endif %}\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >{{'邮箱验证登录'|trans}}</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          {{ radios('email_enabled', {'opened':'开启'|trans, 'closed':'关闭'|trans}, auth.email_enabled) }}
         <button type=\"button\" class=\"btn btn-primary btn-sm js-email-send-check hidden\"  data-url=\"{{ path('admin_report_status_email_send') }}\">{{ '检测邮箱服务'|trans }}</button>
         <div class=\"alert alert-info js-email-status hidden\"  data-url=\"{{path('admin_setting_mailer')}}\"role=\"alert\" style=\"padding: 5px;margin-bottom: 0\">{{ '正在检测.....'|trans }}</div>
         <div class=\"help-block\">{{ '开启后,邮箱未验证的用户将无法登录,请先保证邮件服务器已设置'|trans }}</div>
        </div>
      </div>

      <input type=\"hidden\" name=\"setting_time\"  value=\"{{setting('auth.setting_time') }}\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >{{'新用户激活邮件标题'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"{{auth.email_activation_title}}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">{{'新用户激活邮件内容'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">{{auth.email_activation_body}}</textarea>
          <div class=\"help-block\">
            <div>{{'变量说明：'|trans}}</div>
            <ul>
              <li>{% verbatim %}{{nickname}}{% endverbatim %} {{'为接收方用户昵称'|trans}}</li>
              <li>{% verbatim %}{{sitename}}{% endverbatim %} {{'为网站名称'|trans}}</li>
              <li>{% verbatim %}{{siteurl}}{% endverbatim %} {{'为网站的地址'|trans}}</li>
              <li>{% verbatim %}{{verifyurl}}{% endverbatim %} {{'为邮箱验证地址'|trans}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'注册防护机制'|trans}}</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" {% if auth.register_protective|default(none) == \"none\" %}checked=\"checked\"{% endif %}> {{'无'|trans}}
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" {% if  auth.register_protective|default(null) == \"low\" %}checked=\"checked\"{% endif %}> {{'低'|trans}}
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" {% if  auth.register_protective|default(null) == \"middle\" %}checked=\"checked\"{% endif %}> {{'中'|trans}}
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"{% if auth.register_protective|default(null) == \"high\" %}checked=\"checked\"{% endif %}> {{'高'|trans}}
        </label>
      </div>

      <div class=\"controls col-md-8 mtl low register-help  col-md-offset-3\" {% if  auth.register_protective|default(null) == \"low\" %}{% else %}style=\"display:none;\"{% endif %}>
        <div class=\"well\">
          {{'方案说明：'|trans}}
          <p class=\"mll mtm\">1：{{'注册时需填写验证码。'|trans}}</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl middle register-help  col-md-offset-3\" {% if  auth.register_protective|default(null) == \"middle\" %}{% else %}style=\"display:none;\"{% endif %}>
        <div class=\"well\">
          {{'方案说明：'|trans}}
          <p class=\"mll mtm\">1：{{'注册时需填写验证码。'|trans}}</p>
          <p class=\"mll mtm\">2：{{'同一IP24小时內只能注册30次。'|trans}}</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl high register-help  col-md-offset-3\" {% if  auth.register_protective|default(null) == \"high\" %}{% else %}style=\"display:none;\"{% endif %}>
        <div class=\"well\">
          {{'方案说明：'|trans}}
          <p class=\"mll mtm\">1：{{'注册时需填写验证码。'|trans}}</p>
          <p class=\"mll mtm\">2：{{'同一IP24小时內只能注册10次。'|trans}}</p>
          <p class=\"mll mtm\">3：{{'同一IP1小时內只能注册1个账号。'|trans}}</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>{{'欢迎信息设置'|trans}}</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>{{'发送欢迎信息'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        {{ checkboxs('welcome_methods', {'message':'站内私信'|trans, 'email':'电子邮件'|trans}, auth.welcome_methods) }}
        <div class=\"help-block\">{{'新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效'|trans}}。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">{{'发送欢迎信息'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('welcome_enabled', {'opened':'开启'|trans, 'closed':'关闭'|trans}, auth.welcome_enabled) }}
        <div class=\"help-block\">{{'欢迎信以站内私信的方式，发送给新用户。'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">{{'欢迎信息发送方'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"{{auth.welcome_sender}}\">
        <div class=\"help-block\">{{'通常为这个网站的管理员，请输入用户用户名。'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">{{'欢迎信息标题'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"{{auth.welcome_title}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">{{'欢迎信息内容'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">{{auth.welcome_body}}</textarea>
        <div class=\"help-block\">
          <div>{{'注意： 私信长度不能超过1000个字符'|trans}}</div>
          <div>{{'变量说明：'|trans}}</div>
          <ul>
            <li>{% verbatim %}{{nickname}}{% endverbatim %} {{'为接收方用户用户名'|trans}}</li>
            <li>{% verbatim %}{{sitename}}{% endverbatim %} {{'为网站名称'|trans}}</li>
            <li>{% verbatim %}{{siteurl}}{% endverbatim %} {{'为网站的地址'|trans}}</li>
          </ul>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>{{'服务条款设置'|trans}}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">{{'是否开启服务条款'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('user_terms', {'opened':'开启'|trans, 'closed':'关闭'|trans}, auth.user_terms) }}
        <div class=\"help-block\">{{'开启后用户注册时必须同意条款才能注册'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">{{'条款内容'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('default')}) }}\">{{ auth.user_terms_body }}</textarea>
      </div>
    </div>

  </fieldset>


  {% if setting('magic.username_setting')|default(false) %}
    <fieldset>
      <legend>{{'名称设置'|trans}}</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">{{'用户名称'|trans}}</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" {% if defaultSetting.user_name %}value=\"{{defaultSetting.user_name|default('学员'|trans)}}\" {% endif %}>
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> {{'注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称'|trans}}
        </strong></p>
      </div>
    </fieldset> 
  {% endif %}
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"{{setting('cloud_sms.sms_enabled')}}\">
</form>

{% endblock %}";
    }
}
