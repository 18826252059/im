<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_ecf442bd1d683de52747c5eff6fe6ef86093af6ab33014693d47be89f4bf1b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-setting.html.twig", 1);
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
        $__internal_b42d1e35187aef37f510f404568d0c90e627469354943fb8aa7a47b6fef53842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42d1e35187aef37f510f404568d0c90e627469354943fb8aa7a47b6fef53842->enter($__internal_b42d1e35187aef37f510f404568d0c90e627469354943fb8aa7a47b6fef53842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:course-setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b42d1e35187aef37f510f404568d0c90e627469354943fb8aa7a47b6fef53842->leave($__internal_b42d1e35187aef37f510f404568d0c90e627469354943fb8aa7a47b6fef53842_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_c9afa3814145bebd603e1e2fe94dfb2c373cc99f1f2ad185850be50fbe34d6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9afa3814145bebd603e1e2fe94dfb2c373cc99f1f2ad185850be50fbe34d6dc->enter($__internal_c9afa3814145bebd603e1e2fe94dfb2c373cc99f1f2ad185850be50fbe34d6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>课程规则</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >
          ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("给新"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%发送欢迎私信", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        echo "
        </label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 22
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("welcome_message_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，新"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%加入课程后，会收到教师的欢迎私信", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        echo "
      </p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎私信内容"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">

          <div>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("变量说明："), "html", null, true);
        echo "</div>
          <ul>
            <li>";
        // line 39
        echo "{{nickname}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为接收方用户用户名"), "html", null, true);
        echo "</li>
            <li>";
        // line 40
        echo "{{course}}";
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("为课程名称"), "html", null, true);
        echo "</li>
          </ul>

        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程详情页显示相关课程"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 52
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "relatedCourses", array()));
        echo "
        <div class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("根据课程的标签，显示相关课程"), "html", null, true);
        echo "</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>权限与版权</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许教师设置课程价格"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 65
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("teacher_modify_price", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_modify_price", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许教师查询课程订单"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 74
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("teacher_search_order", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_search_order", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许教师添加/移除"), "html", null, true);
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 83
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("teacher_manage_student", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许教师导出"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%资料", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 92
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("teacher_export_student", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("是"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "teacher_export_student", array()));
        echo "
      </div>
    </div>
    ";
        // line 95
        $context["smsSetting"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms");
        // line 96
        echo "    ";
        if (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array()), 0)) : (0)) && (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array()), "off")) : ("off")) == "on") || ((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array()), "off")) : ("off")) == "on")))) {
            // line 97
            echo "    ";
        }
        // line 98
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%下载课时的音视频", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 105
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("student_download_media", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("不允许"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("允许")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "student_download_media", array()));
        echo "
        <div class=\"help-block\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启此项设置后，"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%user_name%可在课时学习界面侧栏的\"资料\"面板中下载。", array("%user_name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程列表页默认排序"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 115
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("explore_default_orderBy", array("latest" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "studentNum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "recommendedSeq" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "explore_default_orderBy", array()));
        echo "
        <p class=\"help-block\"><a target=\"_blank\" href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore");
        echo "\">课程列表页</a>地址：域名/course/explore,任何人都可在此页面查看网站所有已发布课程,如需设置网站首页课程排序，请到【站点设置】-【主题】-【管理】中设置，目前仅简墨和雅致简洁主题支持。</p>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图文、文档课时防复制"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 125
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("copy_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷防复制"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 135
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("testpaperCopy_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "testpaperCopy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>课程运营模式</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费试看/免费课时允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 150
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">如果允许此项设置，未登录用户（游客）可观看免费试看/免费课时</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程中允许显示%user_name%人数", array("%user_name%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")))), "html", null, true);
        echo "</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 158
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("show_student_num_enabled", array("1" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "0" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>

  </fieldset>

  <fieldset>
      <legend>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称设置"), "html", null, true);
        echo "</legend>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置章节名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
        // line 172
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("custom_chapter_enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "custom_chapter_enabled", array()));
        echo "
            <div class=\"help-block\">
              ";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。"), "html", null, true);
        echo "</div>
          </div>
        </div>

      <div id=\"show_course_chapter_name\"  style=\"display: ";
        // line 178
        if ($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : $this->getContext($context, "courseSetting")), "custom_chapter_enabled", array())) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"chapter_name\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程章名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" ";
        // line 184
        if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "chapter_name", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "chapter_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("章"), "html", null, true);
            echo "\" ";
        }
        echo ">
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"part_name\">";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程节名称"), "html", null, true);
        echo "</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" ";
        // line 193
        if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "part_name", array())) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : $this->getContext($context, "defaultSetting")), "part_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("节"), "html", null, true);
            echo "\" ";
        }
        echo ">
          </div>
        </div>
      </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    ";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称"), "html", null, true);
        echo "
    </strong></p>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
        
        $__internal_c9afa3814145bebd603e1e2fe94dfb2c373cc99f1f2ad185850be50fbe34d6dc->leave($__internal_c9afa3814145bebd603e1e2fe94dfb2c373cc99f1f2ad185850be50fbe34d6dc_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 210,  413 => 207,  402 => 199,  385 => 193,  379 => 190,  362 => 184,  356 => 181,  346 => 178,  339 => 174,  334 => 172,  328 => 169,  321 => 165,  311 => 158,  306 => 156,  297 => 150,  279 => 135,  273 => 132,  263 => 125,  257 => 122,  248 => 116,  244 => 115,  238 => 112,  228 => 106,  224 => 105,  217 => 102,  211 => 98,  208 => 97,  205 => 96,  203 => 95,  197 => 92,  190 => 89,  181 => 83,  174 => 80,  165 => 74,  159 => 71,  150 => 65,  144 => 62,  132 => 53,  128 => 52,  122 => 49,  108 => 40,  102 => 39,  97 => 37,  91 => 34,  85 => 31,  74 => 24,  69 => 22,  61 => 18,  49 => 9,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_course' %}
{% set script_controller = 'setting/course' %}

{% block main %}


{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <legend>课程规则</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >
          {{'给新'|trans}}{{'%user_name%发送欢迎私信'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)})}}
        </label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('welcome_message_enabled', {1:'开启'|trans, 0:'关闭'|trans}, courseSetting.welcome_message_enabled) }}
      <p class=\"help-block\">
        {{'开启后，新'|trans}}{{'%user_name%加入课程后，会收到教师的欢迎私信'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)})}}
      </p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">{{'欢迎私信内容'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">{{ courseSetting.welcome_message_body }}</textarea>
        <div class=\"help-block\">

          <div>{{'变量说明：'|trans}}</div>
          <ul>
            <li>{% verbatim %}{{nickname}}{% endverbatim %} {{'为接收方用户用户名'|trans}}</li>
            <li>{% verbatim %}{{course}}{% endverbatim %} {{'为课程名称'|trans}}</li>
          </ul>

        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{'课程详情页显示相关课程'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('relatedCourses', {1:'开启', 0:'关闭'}, courseSetting.relatedCourses) }}
        <div class=\"help-block\">{{'根据课程的标签，显示相关课程'|trans}}</div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>权限与版权</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'允许教师设置课程价格'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_modify_price', {1:'是'|trans, 0:'否'|trans}, courseSetting.teacher_modify_price) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'允许教师查询课程订单'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_search_order', {1:'是'|trans, 0:'否'|trans}, courseSetting.teacher_search_order) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'允许教师添加/移除'|trans}}{{setting('default.user_name')|default('学员'|trans)}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_manage_student', {1:'是'|trans, 0:'否'|trans}, courseSetting.teacher_manage_student) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'允许教师导出'|trans}}{{'%user_name%资料'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)})}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('teacher_export_student', {1:'是'|trans, 0:'否'|trans}, courseSetting.teacher_export_student) }}
      </div>
    </div>
    {% set smsSetting = setting('cloud_sms') %}
    {% if smsSetting.sms_enabled|default(0) and (smsSetting.sms_normal_lesson_publish|default('off') == 'on' or smsSetting.sms_live_lesson_publish|default('off') == 'on')%}
    {% endif %}


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'允许'|trans}}{{'%user_name%下载课时的音视频'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)})}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('student_download_media', {0:'不允许'|trans, 1:'允许'|trans}, courseSetting.student_download_media) }}
        <div class=\"help-block\">{{'开启此项设置后，'|trans}}{{'%user_name%可在课时学习界面侧栏的\"资料\"面板中下载。'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)})}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >{{'课程列表页默认排序'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('explore_default_orderBy', {latest:'最新'|trans, studentNum:'最热'|trans,recommendedSeq:'推荐'|trans}, courseSetting.explore_default_orderBy) }}
        <p class=\"help-block\"><a target=\"_blank\" href=\"{{ path('course_explore') }}\">课程列表页</a>地址：域名/course/explore,任何人都可在此页面查看网站所有已发布课程,如需设置网站首页课程排序，请到【站点设置】-【主题】-【管理】中设置，目前仅简墨和雅致简洁主题支持。</p>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{'图文、文档课时防复制'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('copy_enabled', {1:'开启'|trans, 0:'关闭'|trans}, courseSetting.copy_enabled) }}
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>{{'试卷防复制'|trans}}</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('testpaperCopy_enabled', {1:'开启'|trans, 0:'关闭'|trans}, courseSetting.testpaperCopy_enabled) }}
        <div class=\"help-block\"></div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>课程运营模式</legend>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费试看/免费课时允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        {{ radios('allowAnonymousPreview', {1:'允许', 0:'不允许'}, courseSetting.allowAnonymousPreview) }}
        <div class=\"help-block\">如果允许此项设置，未登录用户（游客）可观看免费试看/免费课时</div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">{{'课程中允许显示%user_name%人数'|trans({'%user_name%': setting('default.user_name', '学员'|trans)})}}</label>
      <div class=\"col-md-8 controls radios\">
        {{ radios('show_student_num_enabled', {'1':'开启'|trans, '0':'关闭'|trans}, courseSetting.show_student_num_enabled|default('1') ) }}
      </div>
    </div>

  </fieldset>

  <fieldset>
      <legend>{{'名称设置'|trans}}</legend>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label>{{'设置章节名称'|trans}}</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            {{ radios('custom_chapter_enabled', {1:'开启'|trans, 0:'关闭'|trans}, courseSetting.custom_chapter_enabled) }}
            <div class=\"help-block\">
              {{'开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。'|trans}}</div>
          </div>
        </div>

      <div id=\"show_course_chapter_name\"  style=\"display: {% if  courseSetting.custom_chapter_enabled %} block {% else %} none {% endif %};\">
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"chapter_name\">{{'课程章名称'|trans}}</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" {% if defaultSetting.chapter_name %}value=\"{{defaultSetting.chapter_name}}\" {% else %} value=\"{{'章'|trans}}\" {% endif %}>
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"part_name\">{{'课程节名称'|trans}}</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" {% if defaultSetting.part_name %} value=\"{{defaultSetting.part_name}}\" {% else %} value=\"{{'节'|trans}}\" {% endif %}>
          </div>
        </div>
      </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    {{'注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称'|trans}}
    </strong></p>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>

{% endblock %}



";
    }
}
