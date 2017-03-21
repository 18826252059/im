<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_d88e378d68be86cb6dc623bdd10bf725aa628ba138097be78ef3f5a8b394ca46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41213c5d7ce63d665307b5acb1f98c4cac117b222c15b49b5742ca559dac0a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41213c5d7ce63d665307b5acb1f98c4cac117b222c15b49b5742ca559dac0a15->enter($__internal_41213c5d7ce63d665307b5acb1f98c4cac117b222c15b49b5742ca559dac0a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig"));

        // line 1
        echo "<style>
  .webuploader-container {
    position: relative;
  }

  .webuploader-element-invisible {
    position: absolute !important;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px, 1px, 1px, 1px);
  }

  .webuploader-pick {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #fff;
    padding: 5px 10px;
    color: #333;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #ccc;
    overflow: hidden;
  }

  .webuploader-pick-hover {
    background: #e6e6e6;
    border-color: #adadad;
  }

  .webuploader-pick-disable {
    opacity: 0.6;
    pointer-events: none;
  }

  .balloon-uploader {
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .balloon-uploader-heading {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
    display: none;
  }

  .balloon-uploader-footer {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-top: 1px solid #ddd;
    text-align: right;
  }

  .balloon-filelist {
    width: 100%;
  }

  .balloon-filelist-heading {
    padding: 8px 10px;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
  }

  .balloon-uploader-body {
    position: relative;

  }

  .balloon-filelist .file-name,
  .balloon-filelist .file-size,
  .balloon-filelist .file-status,
  .balloon-filelist .file-manage {
    position: relative;
    z-index: 1;
  }

  .balloon-filelist .file-name {
    display: inline-block;
    width: 40%;
  }

  .balloon-filelist .file-size {
    display: inline-block;
    width: 20%;
  }

  .balloon-filelist .file-status {
    display: inline-block;
    width: 18%;
  }

  .balloon-filelist .file-manage {
    display: inline-block;
    width: 20%;
    z-index: 9999;
    position: absolute;
  }

  .balloon-filelist ul {
    list-style: none;
    margin: 0;
    padding: 0;
    min-height: 100px;
    max-height: 300px;
    overflow-y: scroll;
  }

  .balloon-filelist ul li {
    position: relative;
    border-bottom: 1px solid #ddd;
    padding: 8px 10px;
  }

  .balloon-dnd {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-uploader-footer,
  .balloon-uploader-none .balloon-uploader-body {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-dnd {
    visibility: visible;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    vertical-align: middle;
  }

  .balloon-nofile {
    position: absolute;
    top: 40px;
    left: 0;
    right: 0;
    bottom: 0;
    line-height: 100px;
    text-align: center;
    color: #999;
  }

  .balloon-uploader .file-pick-btn {
    display: inline-block;
  }

  .balloon-uploader .start-upload-btn {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #5bc0de;
    padding: 5px 10px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #46b8da;
    overflow: hidden;
  }

  .balloon-uploader .start-upload-btn:hover {
    background: #31b0d5;
    border-color: #269abc;
  }

  .balloon-filelist .file-progress {
    position: absolute;
    top: 0;
    left: 0;
    right: -40px;
    bottom: 0;
  }

  .balloon-filelist .file-progress-bar {
    background: rgb(219, 242, 215);
    background: rgba(59, 181, 33, 0.18);
    float: left;
    height: 100%;
  }

</style>

";
        // line 186
        $context["courseType"] = ((array_key_exists("courseType", $context)) ? (_twig_default_filter((isset($context["courseType"]) ? $context["courseType"] : $this->getContext($context, "courseType")), "course")) : ("course"));
        // line 187
        if (twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 188
            echo "  ";
            $context["courseMaterialUrl"] = "open_course_manage_material_browser";
        } else {
            // line 190
            echo "  ";
            $context["courseMaterialUrl"] = "course_manage_material_browser";
        }
        // line 192
        echo "
";
        // line 193
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), null)) : (null));
        // line 194
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
       data-targetType=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\"
           style=\"display:none;\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。"), "html", null, true);
        echo "<br/>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("转换完成后将以站内消息通知您。"), "html", null, true);
        echo "</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传视频"), "html", null, true);
        echo "</a></li>
        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a>
        </li>

        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

        <li ";
        // line 224
        if (((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaSource", array()) != "self"))) {
            echo "class=\"active\"";
        }
        echo ">
          <a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导入网络视频"), "html", null, true);
        echo "</a>
        </li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 232
        $this->loadTemplate("TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig", "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", 232)->display($context);
        // line 233
        echo "            ";
        $context["token"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "private");
        // line 234
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                ";
        // line 238
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
            // line 239
            echo "                  data-accept=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "video")), "html", null, true);
            echo "\"
                ";
        } else {
            // line 241
            echo "                  data-accept=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "local_video")), "html", null, true);
            echo "\"
                ";
        }
        // line 243
        echo "                 data-process=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                ";
        // line 249
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
            // line 250
            echo "                  <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持");
            echo "<strong>mp4, avi, flv, wmv, mov, m4v, mpg</strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。");
            echo "</li>
                  <li>";
            // line 251
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持");
            echo "<strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("断点续传");
            echo "</strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("（仅支持HTML5浏览器）。");
            echo "</li>
                  <li>";
            // line 252
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频将上传到");
            echo "
                    <strong>";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云视频服务器");
            echo "</strong>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。");
            echo "
                  </li>
                ";
        } else {
            // line 256
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
            echo "<strong>mp4</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的视频文件上传，文件大小不能超过"), "html", null, true);
            echo "
                    <strong>";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。"), "html", null, true);
            echo "
                  </li>
                  <li>
                    ";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频将上传到"), "html", null, true);
            echo "
                    <strong>";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站服务器"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("。如需使用%Edusoho%云视频,点击", array("%Edusoho%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情,%Edusoho%云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。", array("%Edusoho%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
            echo "
                  </li>
                ";
        }
        // line 266
        echo "              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
          <div id=\"file-browser-video\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
               data-default-url=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 276
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无视频文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
          <div id=\"file-browser-video\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : $this->getContext($context, "courseMaterialUrl")), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "video", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : $this->getContext($context, "courseType")))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无视频文件，请先上传。"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          ";
        // line 290
        if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
            // line 291
            echo "            <div>原地址：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaUri", array()), "html", null, true);
            echo "</div>
          ";
        }
        // line 293
        echo "          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持优酷、土豆、腾讯、网易公开课的视频页面地址导入"), "html", null, true);
        echo "\"
                   data-role=\"import-url\">
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\"
                      data-url=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\"
                      data-loading-text=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在导入，请稍等"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导入"), "html", null, true);
        echo "</button>
            </span>
          </div>
          <strong class=\"text-danger\">* ";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("腾讯和网易的视频不支持手机端播放"), "html", null, true);
        echo "</strong>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
       data-targetType=\"";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传音频"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 339
        $context["token"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "private");
        // line 340
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 344
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "audio")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
        echo "<strong>mp3</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的音频文件上传，且文件大小不能超过"), "html", null, true);
        echo "<strong>
                    ";
        // line 352
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
            // line 353
            echo "                      500M
                    ";
        } else {
            // line 355
            echo "                      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getUploadMaxFilesize(), "html", null, true);
            echo "
                    ";
        }
        // line 357
        echo "                  </strong>。
                </li>
                ";
        // line 359
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()) == "cloud")) {
            // line 360
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("断点续传"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("（仅支持HTML5浏览器）。"), "html", null, true);
            echo "</li>
                  <li>";
            // line 361
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频将上传到"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
            echo "</strong></li>
                ";
        } else {
            // line 363
            echo "                  <li>
                    ";
            // line 364
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频将上传到"), "html", null, true);
            echo "
                    <strong>";
            // line 365
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站服务器"), "html", null, true);
            echo "</strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("，%Edusoho%点击", array("%Edusoho%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright("如需使用EduSoho云视频,"))), "html", null, true);
            echo "
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">";
            // line 367
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情。"), "html", null, true);
            echo "
                  </li>
                ";
        }
        // line 370
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 377
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "audio"));
        echo "\"
               data-default-url=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 379
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无音频文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : $this->getContext($context, "courseMaterialUrl")), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "audio", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : $this->getContext($context, "courseType")))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无音频文件，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 426
        $context["token"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "private");
        // line 427
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 431
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "ppt")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
        echo "<strong>ppt, pptx</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的PPT文件上传，且文件大小不能超过"), "html", null, true);
        echo "<strong>100 MB</strong>。
                </li>
                <li>";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PPT将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 448
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "ppt"));
        echo "\"
               data-default-url=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 450
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无PPT文件，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
          <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : $this->getContext($context, "courseMaterialUrl")), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "ppt", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : $this->getContext($context, "courseType")))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无PPT文件，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "convertor" => "document")), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 470
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传文档"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">

            ";
        // line 499
        $context["token"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "private");
        // line 500
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 504
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "cloud_document")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))), "html", null, true);
        echo "\"></div>

            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持"), "html", null, true);
        echo "<strong>pdf,doc,docx,xls,xlsx</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的文档上传，且文件大小不能超过"), "html", null, true);
        echo "
                  <strong>";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("100 MB"), "html", null, true);
        echo "</strong>。
                </li>
                <li>";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文档将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
          <div id=\"file-browser-document\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 520
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "document"));
        echo "\"
               data-default-url=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 522
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无文档，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
          <div id=\"file-browser-document\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : $this->getContext($context, "courseMaterialUrl")), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "document", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : $this->getContext($context, "courseType")))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无文档，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
       data-params-url=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : $this->getContext($context, "storageSetting")), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "convertor" => "")), "html", null, true);
        echo "\"
       data-targetType=\"";
        // line 542
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "html", null, true);
        echo "\"
       data-targetId=\"";
        // line 543
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> ";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\"
               data-toggle=\"tab\">";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传Flash"), "html", null, true);
        echo "</a></li>
        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
            ";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从资料库中选择"), "html", null, true);
        echo "
          </a></li>

        <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            ";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("从课程文件中选择"), "html", null, true);
        echo "
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 570
        $context["token"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "private");
        // line 571
        echo "            <div class=\"balloon-uploader\"
                 data-init-url=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-finish-url=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-upload-auth-url=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\"
                 data-accept=\"";
        // line 575
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "flash")), "html", null, true);
        echo "\"
                 data-process=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\UploaderExtension')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                <li>";
        // line 582
        echo "支持";
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("swf"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式的文件上传，且文件大小不能超过"), "html", null, true);
        echo "
                  <strong>";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("100 MB"), "html", null, true);
        echo "</strong>。
                </li>
                <li>";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Flash将上传到"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("云服务器"), "html", null, true);
        echo "</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
          <div id=\"file-browser-flash\" data-role=\"file-browser\"
               data-base-url=\"";
        // line 593
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "flash"));
        echo "\"
               data-default-url=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
        echo "\"
               data-my-sharing-contacts-url=\"";
        // line 595
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("material_lib_my_sharing_contacts");
        echo "\"
               data-empty=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无Flash，请先上传。"), "html", null, true);
        echo "\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
          <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
               data-url=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["courseMaterialUrl"]) ? $context["courseMaterialUrl"] : $this->getContext($context, "courseMaterialUrl")), array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : $this->getContext($context, "targetId")), "type" => "flash", "courseType" => (isset($context["courseType"]) ? $context["courseType"] : $this->getContext($context, "courseType")))), "html", null, true);
        echo "\"
               data-empty=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无Flash，请先上传。"), "html", null, true);
        echo "\"></div>
        </div>

      </div>
    </div>

  </div>


</div>
";
        
        $__internal_41213c5d7ce63d665307b5acb1f98c4cac117b222c15b49b5742ca559dac0a15->leave($__internal_41213c5d7ce63d665307b5acb1f98c4cac117b222c15b49b5742ca559dac0a15_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1085 => 604,  1081 => 603,  1071 => 596,  1067 => 595,  1063 => 594,  1059 => 593,  1046 => 585,  1041 => 583,  1033 => 582,  1024 => 576,  1020 => 575,  1016 => 574,  1012 => 573,  1008 => 572,  1005 => 571,  1003 => 570,  991 => 561,  983 => 556,  978 => 554,  969 => 548,  961 => 543,  957 => 542,  953 => 541,  940 => 531,  936 => 530,  926 => 523,  922 => 522,  918 => 521,  914 => 520,  901 => 512,  896 => 510,  890 => 509,  883 => 505,  879 => 504,  875 => 503,  871 => 502,  867 => 501,  864 => 500,  862 => 499,  849 => 489,  841 => 484,  836 => 482,  827 => 476,  819 => 471,  815 => 470,  811 => 469,  798 => 459,  794 => 458,  784 => 451,  780 => 450,  776 => 449,  772 => 448,  759 => 440,  752 => 438,  743 => 432,  739 => 431,  735 => 430,  731 => 429,  727 => 428,  724 => 427,  722 => 426,  710 => 417,  702 => 412,  692 => 405,  684 => 400,  680 => 399,  676 => 398,  663 => 388,  659 => 387,  649 => 380,  645 => 379,  641 => 378,  637 => 377,  628 => 370,  620 => 367,  613 => 365,  609 => 364,  606 => 363,  599 => 361,  590 => 360,  588 => 359,  584 => 357,  578 => 355,  574 => 353,  572 => 352,  566 => 351,  557 => 345,  553 => 344,  549 => 343,  545 => 342,  541 => 341,  538 => 340,  536 => 339,  524 => 330,  516 => 325,  511 => 323,  502 => 317,  494 => 312,  490 => 311,  478 => 302,  470 => 299,  466 => 298,  459 => 294,  456 => 293,  450 => 291,  448 => 290,  440 => 285,  436 => 284,  426 => 277,  422 => 276,  418 => 275,  414 => 274,  404 => 266,  396 => 263,  389 => 261,  385 => 260,  377 => 257,  370 => 256,  362 => 253,  358 => 252,  350 => 251,  343 => 250,  341 => 249,  331 => 243,  325 => 241,  319 => 239,  317 => 238,  313 => 237,  309 => 236,  305 => 235,  302 => 234,  299 => 233,  297 => 232,  287 => 225,  281 => 224,  274 => 220,  265 => 214,  259 => 211,  248 => 205,  243 => 203,  235 => 198,  231 => 197,  226 => 194,  224 => 193,  221 => 192,  217 => 190,  213 => 188,  211 => 187,  209 => 186,  22 => 1,);
    }

    public function getSource()
    {
        return "<style>
  .webuploader-container {
    position: relative;
  }

  .webuploader-element-invisible {
    position: absolute !important;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px, 1px, 1px, 1px);
  }

  .webuploader-pick {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #fff;
    padding: 5px 10px;
    color: #333;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #ccc;
    overflow: hidden;
  }

  .webuploader-pick-hover {
    background: #e6e6e6;
    border-color: #adadad;
  }

  .webuploader-pick-disable {
    opacity: 0.6;
    pointer-events: none;
  }

  .balloon-uploader {
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .balloon-uploader-heading {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-bottom: 1px solid #ddd;
    display: none;
  }

  .balloon-uploader-footer {
    background-color: #f5f5f5;
    color: #333;
    padding: 10px 15px;
    border-top: 1px solid #ddd;
    text-align: right;
  }

  .balloon-filelist {
    width: 100%;
  }

  .balloon-filelist-heading {
    padding: 8px 10px;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
  }

  .balloon-uploader-body {
    position: relative;

  }

  .balloon-filelist .file-name,
  .balloon-filelist .file-size,
  .balloon-filelist .file-status,
  .balloon-filelist .file-manage {
    position: relative;
    z-index: 1;
  }

  .balloon-filelist .file-name {
    display: inline-block;
    width: 40%;
  }

  .balloon-filelist .file-size {
    display: inline-block;
    width: 20%;
  }

  .balloon-filelist .file-status {
    display: inline-block;
    width: 18%;
  }

  .balloon-filelist .file-manage {
    display: inline-block;
    width: 20%;
    z-index: 9999;
    position: absolute;
  }

  .balloon-filelist ul {
    list-style: none;
    margin: 0;
    padding: 0;
    min-height: 100px;
    max-height: 300px;
    overflow-y: scroll;
  }

  .balloon-filelist ul li {
    position: relative;
    border-bottom: 1px solid #ddd;
    padding: 8px 10px;
  }

  .balloon-dnd {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-uploader-footer,
  .balloon-uploader-none .balloon-uploader-body {
    visibility: hidden;
  }

  .balloon-uploader-none .balloon-dnd {
    visibility: visible;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    vertical-align: middle;
  }

  .balloon-nofile {
    position: absolute;
    top: 40px;
    left: 0;
    right: 0;
    bottom: 0;
    line-height: 100px;
    text-align: center;
    color: #999;
  }

  .balloon-uploader .file-pick-btn {
    display: inline-block;
  }

  .balloon-uploader .start-upload-btn {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background: #5bc0de;
    padding: 5px 10px;
    color: #fff;
    text-align: center;
    border-radius: 3px;
    border: 1px solid #46b8da;
    overflow: hidden;
  }

  .balloon-uploader .start-upload-btn:hover {
    background: #31b0d5;
    border-color: #269abc;
  }

  .balloon-filelist .file-progress {
    position: absolute;
    top: 0;
    left: 0;
    right: -40px;
    bottom: 0;
  }

  .balloon-filelist .file-progress-bar {
    background: rgb(219, 242, 215);
    background: rgba(59, 181, 33, 0.18);
    float: left;
    height: 100%;
  }

</style>

{% set courseType = courseType|default('course') %}
{% if course.type in ['open','liveOpen'] %}
  {% set courseMaterialUrl = 'open_course_manage_material_browser' %}
{% else %}
  {% set courseMaterialUrl = 'course_manage_material_browser' %}
{% endif %}

{% set lesson = lesson|default(null) %}
<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
       data-targetType=\"{{ targetType }}\"
       data-targetId=\"{{ targetId }}\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> {{ '编辑'|trans }}</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\"
           style=\"display:none;\">{{ '正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。'|trans }}<br/>{{ '转换完成后将以站内消息通知您。'|trans }}</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\"
               data-toggle=\"tab\">{{ '上传视频'|trans }}</a></li>
        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            {{ '从资料库中选择'|trans }}
          </a>
        </li>

        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            {{ '从课程文件中选择'|trans }}
          </a>
        </li>

        <li {% if lesson and lesson.mediaSource != 'self' %}class=\"active\"{% endif %}>
          <a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">{{ '导入网络视频'|trans }}</a>
        </li>
      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            {% include 'TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig' %}
            {% set token = uploader_token(targetType, targetId, 'private') %}
            <div class=\"balloon-uploader\"
                 data-init-url=\"{{ path('uploader_init', {token:token}) }}\"
                 data-finish-url=\"{{ path('uploader_finished', {token:token}) }}\"
                 data-upload-auth-url=\"{{ path('uploader_auth', {token:token}) }}\"
                {% if storageSetting.upload_mode == 'cloud' %}
                  data-accept=\"{{ uploader_accept(targetType, 'video')|json_encode }}\"
                {% else %}
                  data-accept=\"{{ uploader_accept(targetType, 'local_video')|json_encode }}\"
                {% endif %}
                 data-process=\"{{ uploader_process(targetType) }}\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                {% if storageSetting.upload_mode == 'cloud' %}
                  <li>{{ '支持'|trans|raw }}<strong>mp4, avi, flv, wmv, mov, m4v, mpg</strong>{{ '格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。'|trans|raw }}</li>
                  <li>{{ '支持'|trans|raw }}<strong>{{ '断点续传'|trans|raw }}</strong>{{ '（仅支持HTML5浏览器）。'|trans|raw }}</li>
                  <li>{{ '视频将上传到'|trans|raw }}
                    <strong>{{ '云视频服务器'|trans|raw }}</strong>{{ '，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。'|trans|raw }}
                  </li>
                {% else %}
                  <li>{{ '支持'|trans }}<strong>mp4</strong>{{ '格式的视频文件上传，文件大小不能超过'|trans }}
                    <strong>{{ upload_max_filesize() }} </strong>{{ '。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。'|trans }}
                  </li>
                  <li>
                    {{ '视频将上传到'|trans }}
                    <strong>{{ '网站服务器'|trans }}</strong>{{ '。如需使用%Edusoho%云视频,点击'|trans({'%Edusoho%':'EduSoho'|copyright_less}) }}
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">{{ '这里'|trans }}</a>{{ '了解详情,%Edusoho%云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。'|trans({'%Edusoho%':'EduSoho'|copyright_less}) }}
                  </li>
                {% endif %}
              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
          <div id=\"file-browser-video\" data-role=\"file-browser\"
               data-base-url=\"{{ path('uploadfile_browser', {type:'video', source:'upload'}) }}\"
               data-default-url=\"{{ path('uploadfile_browser', {type:'video', source:'upload'}) }}\"
               data-my-sharing-contacts-url=\"{{ path('material_lib_my_sharing_contacts') }}\"
               data-empty=\"{{ '暂无视频文件，请先上传。'|trans }}\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
          <div id=\"file-browser-video\" data-role=\"course-file-browser\"
               data-url=\"{{ path(courseMaterialUrl, {courseId:targetId, type:'video', courseType:courseType}) }}\"
               data-empty=\"{{ '暂无视频文件，请先上传。'|trans }}\">
          </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          {% if lesson %}
            <div>原地址：{{ lesson.mediaUri }}</div>
          {% endif %}
          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"{{ '支持优酷、土豆、腾讯、网易公开课的视频页面地址导入'|trans }}\"
                   data-role=\"import-url\">
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\"
                      data-url=\"{{ path('course_manage_media_import', {id:course.id}) }}\"
                      data-loading-text=\"{{ '正在导入，请稍等'|trans }}\">{{ '导入'|trans }}</button>
            </span>
          </div>
          <strong class=\"text-danger\">* {{ '腾讯和网易的视频不支持手机端播放'|trans }}</strong>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
       data-targetType=\"{{ targetType }}\"
       data-targetId=\"{{ targetId }}\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> {{ '编辑'|trans }}</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\"
               data-toggle=\"tab\">{{ '上传音频'|trans }}</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
            {{ '从资料库中选择'|trans }}
          </a></li>

        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            {{ '从课程文件中选择'|trans }}
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            {% set token = uploader_token(targetType, targetId, 'private') %}
            <div class=\"balloon-uploader\"
                 data-init-url=\"{{ path('uploader_init', {token:token}) }}\"
                 data-finish-url=\"{{ path('uploader_finished', {token:token}) }}\"
                 data-upload-auth-url=\"{{ path('uploader_auth', {token:token}) }}\"
                 data-accept=\"{{ uploader_accept(targetType, 'audio')|json_encode }}\"
                 data-process=\"{{ uploader_process(targetType) }}\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>{{ '支持'|trans }}<strong>mp3</strong>{{ '格式的音频文件上传，且文件大小不能超过'|trans }}<strong>
                    {% if storageSetting.upload_mode == 'cloud' %}
                      500M
                    {% else %}
                      {{ upload_max_filesize() }}
                    {% endif %}
                  </strong>。
                </li>
                {% if storageSetting.upload_mode == 'cloud' %}
                  <li>{{ '支持'|trans }}<strong>{{ '断点续传'|trans }}</strong>{{ '（仅支持HTML5浏览器）。'|trans }}</li>
                  <li>{{ '音频将上传到'|trans }}<strong>{{ '云服务器'|trans }}</strong></li>
                {% else %}
                  <li>
                    {{ '音频将上传到'|trans }}
                    <strong>{{ '网站服务器'|trans }}</strong>{{ '，%Edusoho%点击'|trans({'%Edusoho%': '如需使用EduSoho云视频,'|copyright_less}) }}
                    <a href=\"http://open.edusoho.com/show/cloud/video\"
                       target=\"_blank\">{{ '这里'|trans }}</a>{{ '了解详情。'|trans }}
                  </li>
                {% endif %}
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
               data-base-url=\"{{ path('uploadfile_browser', {type:'audio'}) }}\"
               data-default-url=\"{{ path('uploadfile_browser', {type:'audio', source:'upload'}) }}\"
               data-my-sharing-contacts-url=\"{{ path('material_lib_my_sharing_contacts') }}\"
               data-empty=\"{{ '暂无音频文件，请先上传。'|trans }}\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
               data-url=\"{{ path(courseMaterialUrl, {courseId:targetId, type:'audio', courseType:courseType}) }}\"
               data-empty=\"{{ '暂无音频文件，请先上传。'|trans }}\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
       data-params-url=\"{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId, convertor:'ppt', lazyConvert:1}) }}\"
       data-targetType=\"{{ targetType }}\"
       data-targetId=\"{{ targetId }}\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> {{ '编辑'|trans }}</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
            {{ '从资料库中选择'|trans }}
          </a></li>

        <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            {{ '从课程文件中选择'|trans }}
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            {% set token = uploader_token(targetType, targetId, 'private') %}
            <div class=\"balloon-uploader\"
                 data-init-url=\"{{ path('uploader_init', {token:token}) }}\"
                 data-finish-url=\"{{ path('uploader_finished', {token:token}) }}\"
                 data-upload-auth-url=\"{{ path('uploader_auth', {token:token}) }}\"
                 data-accept=\"{{ uploader_accept(targetType, 'ppt')|json_encode }}\"
                 data-process=\"{{ uploader_process(targetType) }}\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>{{ '支持'|trans }}<strong>ppt, pptx</strong>{{ '格式的PPT文件上传，且文件大小不能超过'|trans }}<strong>100 MB</strong>。
                </li>
                <li>{{ 'PPT将上传到'|trans }}<strong>{{ '云服务器'|trans }}</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
               data-base-url=\"{{ path('uploadfile_browser', {type:'ppt'}) }}\"
               data-default-url=\"{{ path('uploadfile_browser', {type:'ppt', source:'upload'}) }}\"
               data-my-sharing-contacts-url=\"{{ path('material_lib_my_sharing_contacts') }}\"
               data-empty=\"{{ '暂无PPT文件，请先上传。'|trans }}\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
          <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
               data-url=\"{{ path(courseMaterialUrl, {courseId:targetId, type:'ppt', courseType:courseType}) }}\"
               data-empty=\"{{ '暂无PPT文件，请先上传。'|trans }}\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
       data-params-url=\"{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId, convertor:'document'}) }}\"
       data-targetType=\"{{ targetType }}\"
       data-targetId=\"{{ targetId }}\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> {{ '编辑'|trans }}</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\"
               data-toggle=\"tab\">{{ '上传文档'|trans }}</a></li>
        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
            {{ '从资料库中选择'|trans }}
          </a></li>

        <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            {{ '从课程文件中选择'|trans }}
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">

            {% set token = uploader_token(targetType, targetId, 'private') %}
            <div class=\"balloon-uploader\"
                 data-init-url=\"{{ path('uploader_init', {token:token}) }}\"
                 data-finish-url=\"{{ path('uploader_finished', {token:token}) }}\"
                 data-upload-auth-url=\"{{ path('uploader_auth', {token:token}) }}\"
                 data-accept=\"{{ uploader_accept(targetType, 'cloud_document')|json_encode }}\"
                 data-process=\"{{ uploader_process(targetType) }}\"></div>

            <div class=\"alert alert-info\">
              <ul>
                <li>{{ '支持'|trans }}<strong>pdf,doc,docx,xls,xlsx</strong>{{ '格式的文档上传，且文件大小不能超过'|trans }}
                  <strong>{{ '100 MB'|trans }}</strong>。
                </li>
                <li>{{ '文档将上传到'|trans }}<strong>{{ '云服务器'|trans }}</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
          <div id=\"file-browser-document\" data-role=\"file-browser\"
               data-base-url=\"{{ path('uploadfile_browser', {type:'document'}) }}\"
               data-default-url=\"{{ path('uploadfile_browser', {type:'document', source:'upload'}) }}\"
               data-my-sharing-contacts-url=\"{{ path('material_lib_my_sharing_contacts') }}\"
               data-empty=\"{{ '暂无文档，请先上传。'|trans }}\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
          <div id=\"file-browser-document\" data-role=\"course-file-browser\"
               data-url=\"{{ path(courseMaterialUrl, {courseId:targetId, type:'document', courseType:courseType}) }}\"
               data-empty=\"{{ '暂无文档，请先上传。'|trans }}\"></div>
        </div>

      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
       data-params-url=\"{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId, convertor:''}) }}\"
       data-targetType=\"{{ targetType }}\"
       data-targetId=\"{{ targetId }}\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i
            class=\"glyphicon glyphicon-edit\"></i> {{ '编辑'|trans }}</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\"
               data-toggle=\"tab\">{{ '上传Flash'|trans }}</a></li>
        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
            {{ '从资料库中选择'|trans }}
          </a></li>

        <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            {{ '从课程文件中选择'|trans }}
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            {% set token = uploader_token(targetType, targetId, 'private') %}
            <div class=\"balloon-uploader\"
                 data-init-url=\"{{ path('uploader_init', {token:token}) }}\"
                 data-finish-url=\"{{ path('uploader_finished', {token:token}) }}\"
                 data-upload-auth-url=\"{{ path('uploader_auth', {token:token}) }}\"
                 data-accept=\"{{ uploader_accept(targetType, 'flash')|json_encode }}\"
                 data-process=\"{{ uploader_process(targetType) }}\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                <li>{{ '支持' }}<strong>{{ 'swf'|trans }}</strong>{{ '格式的文件上传，且文件大小不能超过'|trans }}
                  <strong>{{ '100 MB'|trans }}</strong>。
                </li>
                <li>{{ 'Flash将上传到'|trans }}<strong>{{ '云服务器'|trans }}</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
          <div id=\"file-browser-flash\" data-role=\"file-browser\"
               data-base-url=\"{{ path('uploadfile_browser', {type:'flash'}) }}\"
               data-default-url=\"{{ path('uploadfile_browser', {type:'flash', source:'upload'}) }}\"
               data-my-sharing-contacts-url=\"{{ path('material_lib_my_sharing_contacts') }}\"
               data-empty=\"{{ '暂无Flash，请先上传。'|trans }}\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
          <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
               data-url=\"{{ path(courseMaterialUrl, {courseId:targetId, type:'flash', courseType:courseType}) }}\"
               data-empty=\"{{ '暂无Flash，请先上传。'|trans }}\"></div>
        </div>

      </div>
    </div>

  </div>


</div>
";
    }
}
