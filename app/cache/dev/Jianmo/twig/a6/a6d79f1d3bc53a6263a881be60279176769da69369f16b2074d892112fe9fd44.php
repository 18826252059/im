<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_53b13d279f31860ff493f06d48a05cd265422242215b6fdcc5b51a91100d1980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d10b828e85687e214a8c549980a495ff543fc89067792b74420f0ed6c3a685a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d10b828e85687e214a8c549980a495ff543fc89067792b74420f0ed6c3a685a->enter($__internal_0d10b828e85687e214a8c549980a495ff543fc89067792b74420f0ed6c3a685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig"));

        // line 3
        $context["modal_class"] = "modal-lg";
        // line 4
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), null)) : (null));
        // line 171
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d10b828e85687e214a8c549980a495ff543fc89067792b74420f0ed6c3a685a->leave($__internal_0d10b828e85687e214a8c549980a495ff543fc89067792b74420f0ed6c3a685a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a46ed01bd4aefeed11c60a43d9995c1b0671b8c2aa50f6867c5c0ce432737710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46ed01bd4aefeed11c60a43d9995c1b0671b8c2aa50f6867c5c0ce432737710->enter($__internal_a46ed01bd4aefeed11c60a43d9995c1b0671b8c2aa50f6867c5c0ce432737710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑课时%number%", array("%number%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加课时"), "html", null, true);
        }
        
        $__internal_a46ed01bd4aefeed11c60a43d9995c1b0671b8c2aa50f6867c5c0ce432737710->leave($__internal_a46ed01bd4aefeed11c60a43d9995c1b0671b8c2aa50f6867c5c0ce432737710_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3ff0b3df823376595ad19deaf3cfe708ee7651379a79b4b535785838c886e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ff0b3df823376595ad19deaf3cfe708ee7651379a79b4b535785838c886e1e->enter($__internal_a3ff0b3df823376595ad19deaf3cfe708ee7651379a79b4b535785838c886e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<form id=\"course-lesson-form\" data-course-id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId")), "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "  data-create-draft-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_draft_create");
        echo "\"
  ";
        // line 15
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            // line 16
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\" data-lesson-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  <div class=\"form-group\" ";
        // line 22
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <div class=\"col-md-2 control-label\"><label>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("类型"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 26
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("type", $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 31
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-9\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 36
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title");
        echo "\" >
        </div>
        <div class=\"col-md-3\">
          <div class=\"checkbox\">
            <label style=\"display: inline-block;\"><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 40
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课时"), "html", null, true);
        echo "
              <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-free-lesson-data-popover\"></span>
              <div class=\"popover-content hidden\">
                <div class=\"popover-item\">
                  <div class=\"content\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("若希望未登录用户能观看免费课时，需管理员在【管理后台】-【系统】-【课程设置】-【课程】中开启【免费课时允许未登录用户观看】。"), "html", null, true);
        echo "</div>
                </div>
              </div>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 54
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("简介"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >";
        // line 57
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "summary");
        echo "</textarea>
    <div class=\"help-block\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("此处填写的内容将显示在该课时学习页右侧的【资料区】。"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">

      ";
        // line 69
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter((isset($context["draft"]) ? $context["draft"] : $this->getContext($context, "draft")), false)) : (false))) {
            // line 70
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_draft_view");
            echo "\" >
        <small>
        ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您有一段自动保存内容，继续编辑请点击"), "html", null, true);
            echo "
        </small>
      </a>
      ";
        }
        // line 76
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      data-flash-upload-url=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_download", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      >";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 84
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo " \">
    <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-2 control-label for-document-type\"><label>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文档"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-2 control-label for-flash-type\"><label>Flash</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 91
        $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 91)->display(array_merge($context, array("lesson" => ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), null)) : (null)))));
        // line 92
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 96
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PPT课时需要开通EduSoho云文档服务才能使用,")), "html", null, true);
        echo "
          ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击"), "html", null, true);
        echo "<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 105
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-document-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文档课时需要开通EduSoho云文档服务才能使用,")), "html", null, true);
        echo "
          ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击"), "html", null, true);
        echo "<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 114
        if (((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) != "cloud")) {
            echo "for-flash-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Flash课时需要开通EduSoho云视频服务才能使用,")), "html", null, true);
        echo "
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击"), "html", null, true);
        echo "<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情。"), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>

  ";
        // line 123
        if ((((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "local")) : ("local")) == "cloud") && ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()), "self")) : ("self")) == "self"))) {
            // line 124
            echo "    <div class=\"form-group for-video-type\" id=\"subtitle-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频字幕"), "html", null, true);
            echo "</label></div>
      <div class=\"col-md-10 controls js-subtitle-list\" data-dialog-url=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_subtitle_manage_dialog");
            echo "\">
        <p style=\"margin-top:6px;color:#a1a1a1\">请等待视频上传完之后再添加字幕</p>
      </div>
      <div class=\"col-md-offset-2 help-block\">
        <p style=\"margin-left:10px;\">字幕文件暂时仅支持UTF-8编码的srt文件，点击<a href=\"http://www.qiqiuyu.com/article/883\" target=\"__blank\">查看</a>编码转换说明。</p>
      </div>
    </div>
  ";
        }
        // line 134
        echo "
  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频时长"), "html", null, true);
        echo "</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频时长或"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 140
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "minute");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
        echo "
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 141
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "second");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秒"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("时长必须为非负整数"), "html", null, true);
        echo "</div>
    </div>
  </div>

  ";
        // line 146
        if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : $this->getContext($context, "features")))) {
            // line 147
            echo "  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学分"), "html", null, true);
            echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
            // line 150
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), 0)) : (0)), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分"), "html", null, true);
            echo "
      <div class=\"help-block\">";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学完此课时，可获得的学分"), "html", null, true);
            echo "</div>
    </div>
  </div>
  ";
        }
        // line 155
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">


</form>


<script>app.load('course-manage/lesson-modal')</script>


";
        
        $__internal_a3ff0b3df823376595ad19deaf3cfe708ee7651379a79b4b535785838c886e1e->leave($__internal_a3ff0b3df823376595ad19deaf3cfe708ee7651379a79b4b535785838c886e1e_prof);

    }

    // line 166
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0cb9de586d1d08d987b03a979cd98f89abe735b3b1ada646870e43ea5ad71355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb9de586d1d08d987b03a979cd98f89abe735b3b1ada646870e43ea5ad71355->enter($__internal_0cb9de586d1d08d987b03a979cd98f89abe735b3b1ada646870e43ea5ad71355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 167
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
        }
        echo "</button>
";
        
        $__internal_0cb9de586d1d08d987b03a979cd98f89abe735b3b1ada646870e43ea5ad71355->leave($__internal_0cb9de586d1d08d987b03a979cd98f89abe735b3b1ada646870e43ea5ad71355_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 168,  443 => 167,  437 => 166,  420 => 156,  417 => 155,  410 => 151,  404 => 150,  399 => 148,  396 => 147,  394 => 146,  387 => 142,  381 => 141,  375 => 140,  370 => 138,  366 => 137,  362 => 136,  358 => 134,  347 => 126,  343 => 125,  340 => 124,  338 => 123,  326 => 118,  322 => 117,  314 => 114,  302 => 109,  298 => 108,  290 => 105,  278 => 100,  274 => 99,  266 => 96,  258 => 92,  256 => 91,  250 => 88,  245 => 86,  241 => 85,  235 => 84,  228 => 80,  222 => 79,  218 => 78,  214 => 76,  207 => 72,  201 => 70,  199 => 69,  193 => 66,  182 => 58,  178 => 57,  173 => 55,  167 => 54,  154 => 44,  143 => 40,  136 => 36,  129 => 32,  123 => 31,  115 => 26,  109 => 23,  103 => 22,  99 => 20,  93 => 18,  85 => 16,  83 => 15,  78 => 14,  70 => 13,  67 => 12,  61 => 11,  49 => 8,  43 => 7,  36 => 1,  34 => 171,  32 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}

{% set modal_class = 'modal-lg' %}
{% set lesson = lesson|default(null) %}


{% block title %}
  {% if lesson %}{{'编辑课时%number%'|trans({'%number%': lesson.number })}}{% else %}{{'添加课时'|trans}}{% endif %}
{% endblock %}

{% block body %}

<form id=\"course-lesson-form\" data-course-id=\"{{course.id}}\" class=\"form-horizontal lesson-form\" method=\"post\" {% if parentId is defined%}data-parentId=\"{{parentId}}\" {% endif %}
  data-create-draft-url=\"{{path('course_draft_create')}}\"
  {% if lesson %}
    action=\"{{ path('course_manage_lesson_edit', {courseId:course.id, lessonId:lesson.id}) }}\" data-lesson-id=\"{{lesson.id}}\"
  {% else %}
    action=\"{{ path('course_manage_lesson_create', {id:course.id}) }}\"
  {% endif %}
  >

  <div class=\"form-group\" {% if lesson %}style=\"display:none;\"{% endif %}>
    <div class=\"col-md-2 control-label\"><label>{{'类型'|trans}}</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        {{ radios('type', dict('lessonType'), field_value(lesson, 'type')|default('video')) }}
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type {% if storageSetting.upload_mode|default('local') == 'cloud' %}for-ppt-type for-document-type for-flash-type{% endif %}\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">{{'标题'|trans}}</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-9\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"{{ field_value(lesson, 'title') }}\" >
        </div>
        <div class=\"col-md-3\">
          <div class=\"checkbox\">
            <label style=\"display: inline-block;\"><input type=\"checkbox\" name=\"free\" value=\"1\" {% if field_value(lesson, 'free') %} checked=\"checked\" {% endif %}> {{'免费课时'|trans}}
              <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-free-lesson-data-popover\"></span>
              <div class=\"popover-content hidden\">
                <div class=\"popover-item\">
                  <div class=\"content\">{{ '若希望未登录用户能观看免费课时，需管理员在【管理后台】-【系统】-【课程设置】-【课程】中开启【免费课时允许未登录用户观看】。'|trans }}</div>
                </div>
              </div>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type {% if storageSetting.upload_mode|default('local') == 'cloud' %}for-ppt-type for-document-type for-flash-type{% endif %}\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">{{'简介'|trans}}</label>
    </div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >{{ field_value(lesson, 'summary') }}</textarea>
    <div class=\"help-block\">{{'此处填写的内容将显示在该课时学习页右侧的【资料区】。'|trans}}</div>
    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">{{'内容'|trans}}</label></div>
    <div class=\"col-md-9 controls\">

      {% if draft|default(false) %}
      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"{{path('course_draft_view')}}\" >
        <small>
        {{'您有一段自动保存内容，继续编辑请点击'|trans}}
        </small>
      </a>
      {% endif %}

      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('course')}) }}\"
      data-flash-upload-url=\"{{ path('editor_upload', {token:upload_token('course', 'flash')}) }}\" data-image-download-url=\"{{ path('editor_download', {token:upload_token('course')}) }}\"
      >{{ lesson.content|default('') }}</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type {% if storageSetting.upload_mode|default('local') == 'cloud' %}for-ppt-type for-document-type for-flash-type{% endif %} \">
    <div class=\"col-md-2 control-label for-video-type\"><label>{{'视频'|trans}}</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>{{'音频'|trans}}</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-2 control-label for-document-type\"><label>{{'文档'|trans}}</label></div>
    <div class=\"col-md-2 control-label for-flash-type\"><label>Flash</label></div>
    <div class=\"col-md-9 controls\">
      {% include \"TopxiaWebBundle:CourseLessonManage:media-choose.html.twig\" with {lesson:lesson|default(null)} %}
      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"{{ field_value(lesson, 'media')|json_encode }}\">
    </div>
  </div>

  <div class=\"form-group for-none-type {% if storageSetting.upload_mode|default('local') != 'cloud' %}for-ppt-type{% endif %}\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>{{ 'PPT课时需要开通EduSoho云文档服务才能使用,'|trans|copyright_less }}
          {{'点击'|trans}}<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">{{'这里'|trans}}</a>{{'了解详情。'|trans}}</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type {% if storageSetting.upload_mode|default('local') != 'cloud' %}for-document-type{% endif %}\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>{{ '文档课时需要开通EduSoho云文档服务才能使用,'|trans|copyright_less }}
          {{'点击'|trans}}<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">{{'这里'|trans}}</a>{{'了解详情。'|trans}}</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type {% if storageSetting.upload_mode|default('local') != 'cloud' %}for-flash-type{% endif %}\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>{{ 'Flash课时需要开通EduSoho云视频服务才能使用,'|trans|copyright_less }}
          {{'点击'|trans}}<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">{{'这里'|trans}}</a>{{'了解详情。'|trans}}</p>
      </div>
    </div>
  </div>

  {% if storageSetting.upload_mode|default('local') == 'cloud' and lesson.mediaSource|default('self') == 'self' %}
    <div class=\"form-group for-video-type\" id=\"subtitle-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>{{'视频字幕'|trans}}</label></div>
      <div class=\"col-md-10 controls js-subtitle-list\" data-dialog-url=\"{{ path('media_subtitle_manage_dialog') }}\">
        <p style=\"margin-top:6px;color:#a1a1a1\">请等待视频上传完之后再添加字幕</p>
      </div>
      <div class=\"col-md-offset-2 help-block\">
        <p style=\"margin-left:10px;\">字幕文件暂时仅支持UTF-8编码的srt文件，点击<a href=\"http://www.qiqiuyu.com/article/883\" target=\"__blank\">查看</a>编码转换说明。</p>
      </div>
    </div>
  {% endif %}

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>{{'视频时长'|trans}}</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">{{'视频时长或'|trans}}</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">{{'音频时长'|trans}}</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"{{ field_value(lesson, 'minute') }}\">{{'分'|trans}}
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"{{ field_value(lesson, 'second') }}\">{{'秒'|trans}}
      <div class=\"help-block\">{{'时长必须为非负整数'|trans}}</div>
    </div>
  </div>

  {% if 'lesson_credit' in features %}
  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">{{'学分'|trans}}</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"{{ lesson.giveCredit|default(0) }}\"> {{'分'|trans}}
      <div class=\"help-block\">{{'学完此课时，可获得的学分'|trans}}</div>
    </div>
  </div>
  {% endif %}

  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">


</form>


<script>app.load('course-manage/lesson-modal')</script>


{% endblock %}
{% block footer %}
    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">{{'取消'|trans}}</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"{{'正在提交'|trans}}\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">{% if lesson %}{{'保存'|trans}}{% else %}{{'添加'|trans}}{% endif %}</button>
{% endblock %}

{% set hideFooter = true %}";
    }
}
