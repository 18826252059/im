<?php

/* TopxiaAdminBundle:System:mobile.setting.html.twig */
class __TwigTemplate_fd3da41610e461339cbc5570add2b0a7720c05e0c7561bb993c288db19dab04a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.setting.html.twig", 1);
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
        $__internal_ea05924434ce40abab6da89af899bc1cdaf8336d62cb4b14f3ed50cdb503d41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea05924434ce40abab6da89af899bc1cdaf8336d62cb4b14f3ed50cdb503d41e->enter($__internal_ea05924434ce40abab6da89af899bc1cdaf8336d62cb4b14f3ed50cdb503d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:mobile.setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_mobile_settings";
        // line 5
        $context["script_controller"] = "setting/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea05924434ce40abab6da89af899bc1cdaf8336d62cb4b14f3ed50cdb503d41e->leave($__internal_ea05924434ce40abab6da89af899bc1cdaf8336d62cb4b14f3ed50cdb503d41e_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_c066ce3653fe62ae3f39d82e524f8f7514d1a70544b5b74e594632448ce5355e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c066ce3653fe62ae3f39d82e524f8f7514d1a70544b5b74e594632448ce5355e->enter($__internal_c066ce3653fe62ae3f39d82e524f8f7514d1a70544b5b74e594632448ce5355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "<style>
#mobile-splash1-container img ,
#mobile-splash2-container img ,
#mobile-splash3-container img ,
#mobile-splash4-container img ,
#mobile-splash5-container img ,
#mobile-logo-container img ,
#site-appcover-container img,
#site-applogo-container img
{max-width: 80%; margin-bottom: 10px;}
</style>

";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是否开启客户端"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 30
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "enabled", array()));
        echo "
      <div class=\"help-block\">1.开启后，可将<a target=\"_blank\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
        echo "\">移动端首页</a>（域名/mobile）地址添加到网站顶部导航中</div>
      <div class=\"help-block\">2.移动端轮播图、发现页模块等内容，点击<a target=\"_blank\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile");
        echo "\">这里</a>进行设置</div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校简介"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "about", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("此简介将显示在移动客户端的\"关于网校"), "html", null, true);
        echo "\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校LOGO"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 51
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" data-upload-token=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "logo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  ";
        // line 68
        echo "
";
        // line 69
        if ((((isset($context["mobileCode"]) ? $context["mobileCode"] : $this->getContext($context, "mobileCode")) != "edusoho") && ((isset($context["mobileCode"]) ? $context["mobileCode"] : $this->getContext($context, "mobileCode")) != "edusohov3"))) {
            // line 70
            echo "  <fieldset>
    <legend>";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("定制APP设置项"), "html", null, true);
            echo "</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appname\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP名称"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appname\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "appname", array()), "html", null, true);
            echo "\" >
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appabout\">";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP简介"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appabout\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "appabout", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"applogo\">";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP图标"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">

         <div id=\"site-applogo-container\" class=\"mbl\">";
            // line 96
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "applogo", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "applogo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-applogo-upload\" data-upload-token=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "applogo"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-applogo-remove\" type=\"button\"
          data-url=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "applogo"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "applogo", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
          <p class=\"help-block\">";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。"), "html", null, true);
            echo "</p>
           <input type=\"hidden\" name=\"applogo\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "applogo", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appcover\">";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APP封面"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
         <div id=\"site-appcover-container\" class=\"mbl\">";
            // line 111
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "appcover", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "appcover", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-appcover-upload\" data-upload-token=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "appcover"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-appcover-remove\" type=\"button\"
          data-url=\"";
            // line 115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "appcover"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "appcover", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
          <p class=\"help-block\">";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。"), "html", null, true);
            echo "</p>
          <input type=\"hidden\" name=\"appcover\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "appcover", array()), "html", null, true);
            echo "\">
        </div>

      </div>
  </fieldset>
";
        }
        // line 123
        echo "
 <fieldset>
  <legend>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置启动图"), "html", null, true);
        echo "</legend>
  <div class=\"help-block\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。"), "html", null, true);
        echo "</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图1"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 132
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" data-upload-token=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件"), "html", null, true);
        echo "。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash1", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图2"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 145
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" data-upload-token=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash2", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图3"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 158
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" data-upload-token=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash3", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图4"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 171
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" data-upload-token=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash4", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("启动图5"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 184
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" data-upload-token=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
      <p class=\"help-block\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "splash5", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>



  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

</form>
";
        
        $__internal_c066ce3653fe62ae3f39d82e524f8f7514d1a70544b5b74e594632448ce5355e->leave($__internal_c066ce3653fe62ae3f39d82e524f8f7514d1a70544b5b74e594632448ce5355e_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 200,  537 => 196,  526 => 188,  522 => 187,  512 => 186,  504 => 185,  496 => 184,  490 => 181,  481 => 175,  477 => 174,  467 => 173,  459 => 172,  451 => 171,  445 => 168,  436 => 162,  432 => 161,  422 => 160,  414 => 159,  406 => 158,  400 => 155,  391 => 149,  387 => 148,  377 => 147,  369 => 146,  361 => 145,  355 => 142,  346 => 136,  342 => 135,  332 => 134,  324 => 133,  316 => 132,  310 => 129,  304 => 126,  300 => 125,  296 => 123,  287 => 117,  283 => 116,  273 => 115,  266 => 113,  262 => 112,  254 => 111,  248 => 108,  239 => 102,  235 => 101,  225 => 100,  218 => 98,  214 => 97,  206 => 96,  199 => 92,  190 => 86,  184 => 83,  175 => 77,  169 => 74,  163 => 71,  160 => 70,  158 => 69,  155 => 68,  148 => 55,  144 => 54,  134 => 53,  126 => 52,  118 => 51,  112 => 48,  103 => 42,  97 => 41,  91 => 38,  82 => 32,  78 => 31,  74 => 30,  68 => 27,  59 => 21,  45 => 9,  39 => 8,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_mobile_settings' %}

{% set script_controller = 'setting/mobile' %}


{% block main %}
<style>
#mobile-splash1-container img ,
#mobile-splash2-container img ,
#mobile-splash3-container img ,
#mobile-splash4-container img ,
#mobile-splash5-container img ,
#mobile-logo-container img ,
#site-appcover-container img,
#site-applogo-container img
{max-width: 80%; margin-bottom: 10px;}
</style>

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >{{'是否开启客户端'|trans}}</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('enabled', {1:'开启'|trans, 0:'关闭'|trans}, mobile.enabled) }}
      <div class=\"help-block\">1.开启后，可将<a target=\"_blank\" href=\"{{ path('mobile') }}\">移动端首页</a>（域名/mobile）地址添加到网站顶部导航中</div>
      <div class=\"help-block\">2.移动端轮播图、发现页模块等内容，点击<a target=\"_blank\" href=\"{{ path('admin_operation_mobile') }}\">这里</a>进行设置</div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">{{'网校简介'|trans}}</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('default')}) }}\">{{ mobile.about }}</textarea>
      <div class=\"help-block\">{{'此简介将显示在移动客户端的\"关于网校'|trans}}\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">{{'网校LOGO'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">{% if mobile.logo %}<img src=\"{{ asset(mobile.logo) }}\">{% endif %}</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\" data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'logo'}) }}\">{{'上传'|trans}}</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'logo'}) }}\" {% if not mobile.logo %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
      <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。'|trans}}</p>
      <input type=\"hidden\" name=\"logo\" value=\"{{ mobile.logo }}\">
    </div>
  </div>

  {#<div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">{{'公告'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" class=\"form-control\" name=\"notice\" value=\"{{ mobile.notice }}\">
      <p class=\"help-block\">{{'将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。'|trans}}</p>
    </div>
  </div>#}

{% if mobileCode != 'edusoho' and mobileCode != 'edusohov3' %}
  <fieldset>
    <legend>{{'定制APP设置项'|trans}}</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appname\">{{'APP名称'|trans}}</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appname\" value=\"{{mobile.appname}}\" >
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appabout\">{{'APP简介'|trans}}</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appabout\" value=\"{{mobile.appabout}}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"applogo\">{{'APP图标'|trans}}</label>
        </div>
        <div class=\"col-md-8 controls\">

         <div id=\"site-applogo-container\" class=\"mbl\">{% if mobile.applogo %}<img src=\"{{ asset(mobile.applogo) }}\">{% endif %}</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-applogo-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\"
          data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'applogo'}) }}\">{{'上传'|trans}}</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-applogo-remove\" type=\"button\"
          data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'applogo'}) }}\" {% if not mobile.applogo %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
          <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。'|trans}}</p>
           <input type=\"hidden\" name=\"applogo\" value=\"{{ mobile.applogo }}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appcover\">{{'APP封面'|trans}}</label>
        </div>
        <div class=\"col-md-8 controls\">
         <div id=\"site-appcover-container\" class=\"mbl\">{% if mobile.appcover %}<img src=\"{{ asset(mobile.appcover) }}\">{% endif %}</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-appcover-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\"
          data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'appcover'}) }}\">{{'上传'|trans}}</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-appcover-remove\" type=\"button\"
          data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'appcover'}) }}\" {% if not mobile.appcover %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
          <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。'|trans}}</p>
          <input type=\"hidden\" name=\"appcover\" value=\"{{ mobile.appcover }}\">
        </div>

      </div>
  </fieldset>
{% endif %}

 <fieldset>
  <legend>{{'设置启动图'|trans}}</legend>
  <div class=\"help-block\">{{'最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。'|trans}}</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">{{'启动图1'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">{% if mobile.splash1 %}<img src=\"{{ asset(mobile.splash1) }}\">{% endif %}</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\"data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'splash1'}) }}\">{{'上传'|trans}}</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'splash1'}) }}\" {% if not mobile.splash1 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
      <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件'|trans}}。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"{{ mobile.splash1 }}\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">{{'启动图2'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">{% if mobile.splash2 %}<img src=\"{{ asset(mobile.splash2) }}\">{% endif %}</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\" data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'splash2'}) }}\">{{'上传'|trans}}</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'splash2'}) }}\" {% if not mobile.splash2 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
      <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>
      <input type=\"hidden\" name=\"splash2\" value=\"{{ mobile.splash2 }}\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">{{'启动图3'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">{% if mobile.splash3 %}<img src=\"{{ asset(mobile.splash3) }}\">{% endif %}</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\" data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'splash3'}) }}\">{{'上传'|trans}}</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'splash3'}) }}\" {% if not mobile.splash3 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
      <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>
      <input type=\"hidden\" name=\"splash3\" value=\"{{ mobile.splash3 }}\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">{{'启动图4'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">{% if mobile.splash4 %}<img src=\"{{ asset(mobile.splash4) }}\">{% endif %}</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\" data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'splash4'}) }}\">{{'上传'|trans}}</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'splash4'}) }}\" {% if not mobile.splash4 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
      <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>
      <input type=\"hidden\" name=\"splash4\" value=\"{{ mobile.splash4 }}\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">{{'启动图5'|trans}}</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">{% if mobile.splash5 %}<img src=\"{{ asset(mobile.splash5) }}\">{% endif %}</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\" data-goto-url=\"{{ path('admin_setting_mobile_picture_upload', {type:'splash5'}) }}\">{{'上传'|trans}}</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"{{ path('admin_setting_mobile_picture_remove', {type:'splash5'}) }}\" {% if not mobile.splash5 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
      <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>
      <input type=\"hidden\" name=\"splash5\" value=\"{{ mobile.splash5 }}\">
    </div>
  </div>

  </fieldset>



  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
    </div>
  </div>

</form>
{% endblock %}";
    }
}
