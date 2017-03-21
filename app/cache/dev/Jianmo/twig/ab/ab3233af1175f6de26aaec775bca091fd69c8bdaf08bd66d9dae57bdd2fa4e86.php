<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_0ace9560513b528f921f49f82c29dabf71e7ece1badd4d695b2a5bfcf026b67f extends Twig_Template
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
        $__internal_65e75dc870b815686bdc3b73989aa8520d6f17f0956d1be7adad3b5dfa24da0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e75dc870b815686bdc3b73989aa8520d6f17f0956d1be7adad3b5dfa24da0b->enter($__internal_65e75dc870b815686bdc3b73989aa8520d6f17f0956d1be7adad3b5dfa24da0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseLessonManage:list-item.html.twig"));

        // line 1
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
        echo "\" data-file-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId", array()), "html", null, true);
        echo "\" data-lesson-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o text-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o text-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o text-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "live")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera text-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera text-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera text-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "audio")) {
            // line 27
            echo "      <i class=\"fa fa-file-audio-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "testpaper")) {
            // line 29
            echo "      <i class=\"fa fa-file-text-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "text")) {
            // line 31
            echo "      <i class=\"fa fa-file-photo-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "document")) {
            // line 33
            echo "      <i class=\"fa fa-files-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "flash")) {
            // line 35
            echo "      <i class=\"fa fa-film text-success\"></i>
    ";
        } else {
            // line 37
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 41
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时"), "html", null, true);
            echo " <span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()), "html", null, true);
            echo "</span>：
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "free", array()) == 1)) {
            // line 45
            echo "      <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
            echo "</span>
    ";
        } elseif ((($this->getAttribute(        // line 46
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "tryLookable", array()) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video")) && ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 47
            echo "      <span class=\"label label-warning mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试看"), "html", null, true);
            echo "</span>";
        }
        // line 48
        echo "    ";
        if (((!twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()), array(0 => "text", 1 => "live", 2 => "testpaper")) && ($this->getAttribute(        // line 49
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaSource", array()) == "self")) && (($this->getAttribute(        // line 50
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId", array()) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), false)) : (false))) ||  !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId", array())))) {
            // line 52
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时文件已删除"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无效课时"), "html", null, true);
            echo "</span>
    ";
        }
        // line 54
        echo "    ";
        echo $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title", array());
        echo "
    ";
        // line 55
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 56
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()), array(0 => "live"))) {
            // line 60
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit", array()) > 0)) {
            // line 64
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%giveCredit%学分", array("%giveCredit%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit", array()))), "html", null, true);
            echo ")</small>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "requireCredit", array()) > 0)) {
            // line 68
            echo "      <small class=\"text-muted\">
        (";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("需%giveCredit%学分", array("%giveCredit%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "giveCredit", array()))), "html", null, true);
            echo ")
      </small>
    ";
        }
        // line 72
        echo "
    <span data-role=\"mediaStatus\"></span>
    ";
        // line 74
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper")) {
            // line 75
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频")) : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "audio")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件")))));
            // line 76
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "waiting")) {
                // line 77
                echo "        <span class=\"text-warning\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在等待"), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式转换"), "html", null, true);
                echo ")</span>
      ";
            } elseif ((            // line 78
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "doing")) {
                // line 79
                echo "        <span class=\"text-info\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在转换"), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式"), "html", null, true);
                echo ")</span>
      ";
            } elseif ((            // line 80
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : $this->getContext($context, "mediaStatus")) == "error")) {
                // line 81
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : $this->getContext($context, "mediaTypeName")), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("格式转换失败"), "html", null, true);
                echo ")</span>
      ";
            }
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "unpublished")) {
            // line 86
            echo "      <span class=\"unpublish-warning text-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
            echo ")</span>
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper"))) {
            // line 90
            echo "      ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array"), null)) : (null));
            // line 91
            echo "      ";
            if ((isset($context["homework"]) ? $context["homework"] : $this->getContext($context, "homework"))) {
                // line 92
                echo "        <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业"), "html", null, true);
                echo "\"><i class=\"es-icon es-icon-mylibrarybooks mls color-gray\"></i></span>
      ";
            }
            // line 94
            echo "    ";
        }
        // line 95
        echo "
    ";
        // line 96
        $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array"), null)) : (null));
        // line 97
        echo "    ";
        if ((isset($context["exercise"]) ? $context["exercise"] : $this->getContext($context, "exercise"))) {
            // line 98
            echo "      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("练习"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-exam mls color-gray\"></i></span>
    ";
        }
        // line 100
        echo "
    ";
        // line 101
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "materialNum", array()) > 0)) {
            // line 102
            echo "      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资料"), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-paperclip mls color-gray\"></i></span>
    ";
        }
        // line 104
        echo "  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      ";
        // line 108
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "testpaper")) {
            // line 109
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute(        // line 110
(isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "live")) {
            // line 111
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 113
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 115
        echo "      ><span class=\"es-icon es-icon-edit prs\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</a>
    ";
        // line 116
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "testpaper")) {
            // line 117
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "mediaId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 119
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
            echo "</a>
    ";
        }
        // line 121
        echo "    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">

        ";
        // line 126
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper"))) {
            // line 127
            echo "          ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), array(), "array"), null)) : (null));
            // line 128
            echo "          ";
            $context["homeworkId"] = (($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array()), null)) : (null));
            // line 129
            echo "          ";
            if ((isset($context["homework"]) ? $context["homework"] : $this->getContext($context, "homework"))) {
                // line 130
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_homework_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" ><span class=\"es-icon es-icon-mylibrarybooks prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑作业"), "html", null, true);
                echo "</a></li>
            <li><a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_homework_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览作业"), "html", null, true);
                echo "</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_homework_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移除作业"), "html", null, true);
                echo "</a></li>
          ";
            } else {
                // line 134
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_homework_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : $this->getContext($context, "homeworkId")))), "html", null, true);
                echo "\" ><span class=\"es-icon es-icon-mylibrarybooks prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("布置作业"), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 136
            echo "            <li class=\"divider\"></li>
          ";
            // line 137
            $context["lessonId"] = $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array());
            // line 138
            echo "          ";
            $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : $this->getContext($context, "lessonId")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : $this->getContext($context, "lessonId")), array(), "array"), null)) : (null));
            // line 139
            echo "          ";
            if ((isset($context["exercise"]) ? $context["exercise"] : $this->getContext($context, "exercise"))) {
                // line 140
                echo "            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_exercise_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "id" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : $this->getContext($context, "exercise")), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移除练习"), "html", null, true);
                echo "</a></li>
          ";
            } else {
                // line 142
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_exercise_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
                echo "\" ><span class=\"es-icon es-icon-exam prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增练习"), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 144
            echo "          <li class=\"divider\"></li>
        ";
        }
        // line 146
        echo "
        ";
        // line 147
        if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) == "video") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 148
            echo "          ";
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), null)) : (null)) == "cloud")) {
                // line 149
                echo "          <li class=\"mark-manage\" style=\"display:none;\">
            <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_lesson_marker_manage", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>";
                // line 151
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("弹题管理"), "html", null, true);
                echo "
            </a>
          </li>
          <li class=\"divider mark-manage-divider\" style=\"display:none;\"></li>
          ";
            }
            // line 156
            echo "        ";
        }
        // line 157
        echo "
        ";
        // line 158
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "type", array()) != "testpaper")) {
            // line 159
            echo "          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加资料"), "html", null, true);
            echo "</a></li>
          <li class=\"divider\"></li>
        ";
        }
        // line 162
        echo "
        <li class=\"";
        // line 163
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"";
        // line 169
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消发布"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"";
        // line 174
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>
";
        
        $__internal_65e75dc870b815686bdc3b73989aa8520d6f17f0956d1be7adad3b5dfa24da0b->leave($__internal_65e75dc870b815686bdc3b73989aa8520d6f17f0956d1be7adad3b5dfa24da0b_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 176,  518 => 175,  512 => 174,  506 => 171,  502 => 170,  496 => 169,  489 => 165,  485 => 164,  479 => 163,  476 => 162,  467 => 159,  465 => 158,  462 => 157,  459 => 156,  451 => 151,  447 => 150,  444 => 149,  441 => 148,  439 => 147,  436 => 146,  432 => 144,  424 => 142,  416 => 140,  413 => 139,  410 => 138,  408 => 137,  405 => 136,  397 => 134,  390 => 132,  384 => 131,  377 => 130,  374 => 129,  371 => 128,  368 => 127,  366 => 126,  359 => 122,  356 => 121,  346 => 119,  338 => 117,  336 => 116,  331 => 115,  325 => 113,  319 => 111,  317 => 110,  312 => 109,  310 => 108,  304 => 104,  298 => 102,  296 => 101,  293 => 100,  287 => 98,  284 => 97,  282 => 96,  279 => 95,  276 => 94,  270 => 92,  267 => 91,  264 => 90,  262 => 89,  259 => 88,  253 => 86,  251 => 85,  248 => 84,  245 => 83,  238 => 81,  236 => 80,  229 => 79,  227 => 78,  220 => 77,  217 => 76,  214 => 75,  212 => 74,  208 => 72,  202 => 69,  199 => 68,  197 => 67,  194 => 66,  188 => 64,  186 => 63,  183 => 62,  177 => 60,  175 => 59,  172 => 58,  166 => 56,  164 => 55,  159 => 54,  151 => 52,  149 => 50,  148 => 49,  146 => 48,  141 => 47,  139 => 46,  134 => 45,  132 => 44,  129 => 43,  121 => 41,  119 => 40,  116 => 39,  112 => 37,  108 => 35,  106 => 34,  103 => 33,  101 => 32,  98 => 31,  96 => 30,  93 => 29,  91 => 28,  88 => 27,  85 => 26,  81 => 24,  77 => 22,  75 => 21,  72 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  57 => 14,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  38 => 6,  35 => 5,  33 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<li class=\"item-lesson clearfix\" id=\"lesson-{{ lesson.id }}\" data-file-id=\"{{lesson.mediaId}}\" data-lesson-type=\"{{lesson.type}}\" style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    {% set mediaStatus = lesson.mediaStatus|default(null) %}

    {% if lesson.type == 'video' %}
      {% if mediaStatus == 'waiting' %}
      <i class=\"fa fa-file-video-o text-warning\"></i>
      {% elseif mediaStatus == 'doing' %}
      <i class=\"fa fa-file-video-o text-info\"></i>
      {% elseif mediaStatus == 'error' %}
      <i class=\"fa fa-file-video-o text-danger\"></i>
      {% else %}
      <i class=\"fa fa-file-video-o text-success\"></i>
      {% endif %}
    {% elseif lesson.type == 'live' %}
      {% if mediaStatus == 'waiting' %}
      <i class=\"fa fa-video-camera text-warning\"></i>
      {% elseif mediaStatus == 'doing' %}
      <i class=\"fa fa-video-camera text-info\"></i>
      {% elseif mediaStatus == 'error' %}
      <i class=\"fa fa-video-camera text-danger\"></i>
      {% else %}
      <i class=\"fa fa-video-camera text-success\"></i>
      {% endif %}
    {% elseif lesson.type == 'audio' %}
      <i class=\"fa fa-file-audio-o text-success\"></i>
    {% elseif lesson.type == 'testpaper' %}
      <i class=\"fa fa-file-text-o text-success\"></i>
    {% elseif lesson.type == 'text' %}
      <i class=\"fa fa-file-photo-o text-success\"></i>
    {% elseif lesson.type == 'document' %}
      <i class=\"fa fa-files-o text-success\"></i>
    {% elseif lesson.type == 'flash' %}
      <i class=\"fa fa-film text-success\"></i>
    {% else %}
      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    {% endif %}

    {% if setting('course.custom_chapter_enabled')|default(true) %}
      {{'课时'|trans}} <span class=\"number\">{{ lesson.number }}</span>：
    {% endif %}

    {% if lesson.free == 1 %}
      <span class=\"label label-success\">{{'免费'|trans}}</span>
    {% elseif course.tryLookable and lesson.type == 'video' and file.storage|default('') == 'cloud' %}
      <span class=\"label label-warning mrm\">{{'试看'|trans}}</span>{% endif %}
    {% if lesson.type not in ['text','live','testpaper'] 
      and lesson.mediaSource == 'self'
      and (( lesson.mediaId and not file|default(false)) or not lesson.mediaId) 
    %}
      <span class=\"label label-danger fileDeletedLesson\" title=\"{{'课时文件已删除'|trans}}\">{{'无效课时'|trans}}</span>
    {% endif %}
    {{ lesson.title|raw }}
    {% if lesson.type in ['video', 'audio'] %}
      <span class=\"text-muted\">{{ lesson.length|duration }}</span>
    {% endif %}

    {% if lesson.type in ['live'] %}
      <span class=\"text-muted\">{{ lesson.startTime|date_format }}</span>
    {% endif %}

    {% if lesson.giveCredit > 0 %}
      <small class=\"text-muted\">({{'%giveCredit%学分'|trans({'%giveCredit%': lesson.giveCredit })}})</small>
    {% endif %}

    {% if lesson.requireCredit > 0 %}
      <small class=\"text-muted\">
        ({{'需%giveCredit%学分'|trans({'%giveCredit%': lesson.giveCredit })}})
      </small>
    {% endif %}

    <span data-role=\"mediaStatus\"></span>
    {% if lesson.type != 'testpaper' %}
      {% set mediaTypeName = lesson.type == 'video' ? '视频'|trans : (lesson.type == 'audio' ? '音频'|trans : '文件'|trans) %}
      {% if mediaStatus == 'waiting' %}
        <span class=\"text-warning\">({{'正在等待'|trans}}{{ mediaTypeName }}{{'格式转换'|trans}})</span>
      {% elseif mediaStatus == 'doing' %}
        <span class=\"text-info\">({{'正在转换'|trans}}{{ mediaTypeName }}{{'格式'|trans}})</span>
      {% elseif mediaStatus == 'error' %}
        <span class=\"text-danger\">({{ mediaTypeName }}{{'格式转换失败'|trans}})</span>
      {% endif %}
    {% endif  %}

    {% if lesson.status == 'unpublished' %}
      <span class=\"unpublish-warning text-warning\">({{'未发布'|trans}})</span>
    {% endif %}

    {% if is_plugin_installed('Homework') and (lesson.type != 'testpaper') %}
      {% set homework =  homeworks[lesson.id]|default(null) %}
      {% if homework %}
        <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{'作业'|trans}}\"><i class=\"es-icon es-icon-mylibrarybooks mls color-gray\"></i></span>
      {% endif %}
    {% endif %}

    {% set exercise = exercises[lesson.id]|default(null) %}
    {% if exercise %}
      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{'练习'|trans}}\"><i class=\"es-icon es-icon-exam mls color-gray\"></i></span>
    {% endif %}

    {% if lesson.materialNum > 0 %}
      <span data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"{{'资料'|trans}}\"><i class=\"glyphicon glyphicon-paperclip mls color-gray\"></i></span>
    {% endif %}
  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      {% if lesson.type == 'testpaper' %}
        data-url=\"{{ path('course_manage_lesson_edit_testpaper', {courseId:course.id, lessonId:lesson.id}) }}\"
      {% elseif lesson.type == 'live' %}
        data-url=\"{{ path('live_course_manage_lesson_edit', {courseId:course.id, lessonId:lesson.id}) }}\"
      {% else %}
        data-url=\"{{ path('course_manage_lesson_edit', {courseId:course.id, lessonId:lesson.id}) }}\"
      {% endif %}
      ><span class=\"es-icon es-icon-edit prs\"></span>{{'编辑'|trans}}</a>
    {% if lesson.type == 'testpaper' %}
      <a class=\"btn btn-link\" href=\"{{ path('course_manage_preview_test', {testId:lesson.mediaId,lessonId:lesson.id}) }}\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>{{'预览'|trans}}</a>
    {% else %}
      <a class=\"btn btn-link\" href=\"{{ path('course_learn', {id:course.id, preview:1}) }}#lesson/{{ lesson.id }}\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>{{'预览'|trans}}</a>
    {% endif %}
    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>{{'更多'|trans}}</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">

        {% if is_plugin_installed('Homework') and (lesson.type != 'testpaper') %}
          {% set homework =  homeworks[lesson.id]|default(null) %}
          {% set homeworkId =  homework.id|default(null) %}
          {% if homework %}
            <li><a href=\"{{ path('course_manage_lesson_homework_edit', {courseId:course.id, lessonId:lesson.id, homeworkId:homeworkId }) }}\" ><span class=\"es-icon es-icon-mylibrarybooks prs\"></span>{{'编辑作业'|trans}}</a></li>
            <li><a href=\"{{ path('course_homework_preview', {courseId:course.id,homeworkId:homeworkId }) }}\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>{{'预览作业'|trans}}</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"{{ path('course_manage_lesson_homework_remove', {courseId:course.id, lessonId:lesson.id, homeworkId:homeworkId }) }}\" ><span class=\"glyphicon glyphicon-trash prs\"></span>{{'移除作业'|trans}}</a></li>
          {% else %}
            <li><a href=\"{{ path('course_manage_lesson_homework_create', {courseId:course.id, lessonId:lesson.id,homeworkId:homeworkId}) }}\" ><span class=\"es-icon es-icon-mylibrarybooks prs\"></span>{{'布置作业'|trans}}</a></li>
          {% endif %}
            <li class=\"divider\"></li>
          {% set lessonId = lesson.id %}
          {% set exercise = exercises[lessonId]|default(null) %}
          {% if exercise %}
            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"{{ path('course_exercise_delete', {courseId:course.id, lessonId:lesson.id, id:exercise.id }) }}\" ><span class=\"glyphicon glyphicon-trash prs\"></span>{{'移除练习'|trans}}</a></li>
          {% else %}
            <li><a href=\"{{ path('course_exercise_create', {courseId:course.id, lessonId:lesson.id}) }}\" ><span class=\"es-icon es-icon-exam prs\"></span>{{'新增练习'|trans}}</a></li>
          {% endif %}
          <li class=\"divider\"></li>
        {% endif %}

        {% if lesson.type == 'video' and setting('storage.upload_mode') == 'cloud' %}
          {% if  file.storage|default(null) == 'cloud' %}
          <li class=\"mark-manage\" style=\"display:none;\">
            <a href=\"{{ path('course_lesson_marker_manage', {courseId:course.id, lessonId:lesson.id}) }}\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>{{'弹题管理'|trans}}
            </a>
          </li>
          <li class=\"divider mark-manage-divider\" style=\"display:none;\"></li>
          {% endif %}
        {% endif %}

        {% if lesson.type != 'testpaper' %}
          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"{{ path('course_manage_material', {courseId:course.id, lessonId:lesson.id}) }}\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>{{'添加资料'|trans}}</a></li>
          <li class=\"divider\"></li>
        {% endif %}

        <li class=\"{% if lesson.status == 'published' %}hidden {% endif %}\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"{{ path('course_manage_lesson_publish', {courseId:course.id, lessonId:lesson.id}) }}\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>{{'发布'|trans}}
          </a>
        </li>

        <li class=\"{% if lesson.status == 'unpublished' %}hidden {% endif %}\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"{{ path('course_manage_lesson_unpublish', {courseId:course.id, lessonId:lesson.id}) }}\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>{{'取消发布'|trans}}
          </a>
        </li>
        <li class=\"{% if lesson.status == 'published' %}hidden {% endif %}\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"{{ path('course_manage_lesson_delete', {courseId:course.id, lessonId:lesson.id}) }}\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>{{'删除'|trans}}
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>
";
    }
}
