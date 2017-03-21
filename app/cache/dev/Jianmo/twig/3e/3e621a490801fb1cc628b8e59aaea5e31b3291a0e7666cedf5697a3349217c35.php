<?php

/* TopxiaAdminBundle:System:mailer.html.twig */
class __TwigTemplate_5880a1c78e18600e25a1853b09b98301c9e44f4e36111d85d81bb0b1daca3a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mailer.html.twig", 1);
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
        $__internal_521f32d415b8b98b1951cdd4ee5a26d797c3642d07564a8462defebdc85697f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521f32d415b8b98b1951cdd4ee5a26d797c3642d07564a8462defebdc85697f4->enter($__internal_521f32d415b8b98b1951cdd4ee5a26d797c3642d07564a8462defebdc85697f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:mailer.html.twig"));

        // line 3
        $context["script_controller"] = "system/mailer";
        // line 4
        $context["script_arguments"] = array("registerEmailVerified" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("auth.email_enabled", "closed"));
        // line 6
        $context["menu"] = "admin_setting_mailer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521f32d415b8b98b1951cdd4ee5a26d797c3642d07564a8462defebdc85697f4->leave($__internal_521f32d415b8b98b1951cdd4ee5a26d797c3642d07564a8462defebdc85697f4_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_c7f3ccd9f2ab57ad862611d72c70a200885a38679e91ddd853197af7c404c477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f3ccd9f2ab57ad862611d72c70a200885a38679e91ddd853197af7c404c477->enter($__internal_c7f3ccd9f2ab57ad862611d72c70a200885a38679e91ddd853197af7c404c477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "  ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial()) {
            // line 10
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        <p style = \"text-align:center;font-size:16px\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前版本为试⽤版,不能进⾏邮件服务设置。如需购买授权版,请联系销售人员。"), "html", null, true);
            echo " 
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或"), "html", null, true);
            echo "
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
  ";
        } else {
            // line 30
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" ";
            // line 31
            echo "novalidate data-user-setting=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_auth");
            echo "\">
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label >";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮件发送"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
            // line 37
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "enabled", array()));
            echo "
          <p class=\"help-block\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("需要登录邮箱，并在邮箱设置中开启smtp服务才能发送验证邮件"), "html", null, true);
            echo "</p>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"host\">SMTP";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务器地址"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "host", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">
            ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("每种邮箱的地址都不相同，请根据使用的邮箱类型，查找邮箱服务器地址，如：smtp.yourmail.com"), "html", null, true);
            echo "
            ";
            // line 50
            if (( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned") || ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright") == "2"))) {
                // line 51
                echo "              <a href=\"http://www.qiqiuyu.com/article/785\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用邮箱配置文档"), "html", null, true);
                echo "</a>
            ";
            }
            // line 53
            echo "          </p>
        </div>
      </div>
      <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"port\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP端口号"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "port", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通常端口号为"), "html", null, true);
            echo "25</p>
        </div>
      </div>
     <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"username\" >";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP用户名"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "username", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确格式应为"), "html", null, true);
            echo "abc@mail.com</p>
        </div>
      </div>
     <p></p>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"password\" >";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP密码"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "password", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("smtp密码：即邮箱密码/客户端授权密码"), "html", null, true);
            echo "</p>
        </div>
      </div>
     <p></p>

     <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"from\" >";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人地址"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "from", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正确格式应为"), "html", null, true);
            echo "abc@mail.com</p>
        </div>
      </div>
     <p></p>

     <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"name\" >";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发信人名称"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "name", array()), "html", null, true);
            echo "\">
        </div>
      </div>
     <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\">";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
            echo "</button>
          ";
            // line 113
            if ($this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : $this->getContext($context, "mailer")), "enabled", array())) {
                // line 114
                echo "            <a class=\"btn btn-primary js-self-test\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mailer_test");
                echo "\" href=\"javascript:;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证"), "html", null, true);
                echo "</a>
            <div class=\"mtl ptm\">
              <div class=\"alert alert-info\" role=\"alert\">
                ";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("验证时会给当前用户发送验证邮件，请确保当前用户邮箱为正确邮箱且邮箱服务器设置已提交保存。"), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 121
            echo "        </div>
      </div>
      <input type=\"hidden\" name=\"email-setting-status\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>

  ";
        }
        
        $__internal_c7f3ccd9f2ab57ad862611d72c70a200885a38679e91ddd853197af7c404c477->leave($__internal_c7f3ccd9f2ab57ad862611d72c70a200885a38679e91ddd853197af7c404c477_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 124,  266 => 123,  262 => 121,  255 => 117,  246 => 114,  244 => 113,  240 => 112,  230 => 105,  224 => 102,  214 => 95,  210 => 94,  204 => 91,  194 => 84,  190 => 83,  184 => 80,  174 => 73,  170 => 72,  164 => 69,  155 => 63,  151 => 62,  145 => 59,  137 => 53,  131 => 51,  129 => 50,  125 => 49,  120 => 47,  114 => 44,  105 => 38,  101 => 37,  95 => 34,  88 => 31,  83 => 30,  68 => 20,  64 => 19,  60 => 18,  50 => 10,  47 => 9,  41 => 8,  34 => 1,  32 => 6,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'system/mailer' %}
{% set script_arguments = { registerEmailVerified: setting('auth.email_enabled','closed') } %}

{% set menu = 'admin_setting_mailer' %}

{% block main %}
  {% if is_trial() %}
    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        <p style = \"text-align:center;font-size:16px\">{{'当前版本为试⽤版,不能进⾏邮件服务设置。如需购买授权版,请联系销售人员。'|trans}} 
        {{'电话：'|trans}}4008041114 {{'或'|trans}}
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
  {% else %}
    {{ web_macro.flash_messages() }}
    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" {#hidden=\"hidden\"#}novalidate data-user-setting=\"{{ path('admin_setting_auth') }}\">
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label >{{'邮件发送'|trans}}</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          {{ radios('enabled', {1:'开启'|trans, 0:'关闭'|trans}, mailer.enabled) }}
          <p class=\"help-block\">{{'需要登录邮箱，并在邮箱设置中开启smtp服务才能发送验证邮件'|trans}}</p>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"host\">SMTP{{'服务器地址'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"{{mailer.host}}\">
          <p class=\"help-block\">
            {{'每种邮箱的地址都不相同，请根据使用的邮箱类型，查找邮箱服务器地址，如：smtp.yourmail.com'|trans}}
            {% if not setting('copyright.owned') or setting('copyright.thirdCopyright') == \"2\" %}
              <a href=\"http://www.qiqiuyu.com/article/785\" target=\"_blank\">{{'常用邮箱配置文档'|trans}}</a>
            {% endif %}
          </p>
        </div>
      </div>
      <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"port\">{{'SMTP端口号'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"{{mailer.port}}\">
          <p class=\"help-block\">{{'通常端口号为'|trans}}25</p>
        </div>
      </div>
     <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"username\" >{{'SMTP用户名'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"{{mailer.username}}\">
          <p class=\"help-block\">{{'正确格式应为'|trans}}abc@mail.com</p>
        </div>
      </div>
     <p></p>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"password\" >{{'SMTP密码'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"{{mailer.password}}\">
          <p class=\"help-block\">{{'smtp密码：即邮箱密码/客户端授权密码'|trans}}</p>
        </div>
      </div>
     <p></p>

     <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"from\" >{{'发信人地址'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"{{mailer.from}}\">
          <p class=\"help-block\">{{'正确格式应为'|trans}}abc@mail.com</p>
        </div>
      </div>
     <p></p>

     <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"name\" >{{'发信人名称'|trans}}</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{mailer.name}}\">
        </div>
      </div>
     <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
          {% if mailer.enabled %}
            <a class=\"btn btn-primary js-self-test\" data-url=\"{{ path('admin_setting_mailer_test') }}\" href=\"javascript:;\">{{'验证'|trans}}</a>
            <div class=\"mtl ptm\">
              <div class=\"alert alert-info\" role=\"alert\">
                {{'验证时会给当前用户发送验证邮件，请确保当前用户邮箱为正确邮箱且邮箱服务器设置已提交保存。'|trans}}
              </div>
            </div>
          {% endif %}
        </div>
      </div>
      <input type=\"hidden\" name=\"email-setting-status\" value=\"{{status}}\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>

  {% endif %}
{% endblock %}";
    }
}
