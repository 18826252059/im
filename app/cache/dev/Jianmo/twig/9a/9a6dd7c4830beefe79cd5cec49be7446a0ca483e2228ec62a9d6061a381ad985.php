<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_9f3e806d063353f1ba3d6c494380d4a458d6e8cdfbc5525f573282cfeebd5210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 1);
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
        $__internal_157fcad8377b17e681f0da77654347d32661fe5f418c4f86d3e6666b86b2004b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157fcad8377b17e681f0da77654347d32661fe5f418c4f86d3e6666b86b2004b->enter($__internal_157fcad8377b17e681f0da77654347d32661fe5f418c4f86d3e6666b86b2004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:mobile.html.twig"));

        // line 3
        $context["menu"] = "admin_operation_mobile_banner_manage";
        // line 5
        $context["script_controller"] = "operation/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_157fcad8377b17e681f0da77654347d32661fe5f418c4f86d3e6666b86b2004b->leave($__internal_157fcad8377b17e681f0da77654347d32661fe5f418c4f86d3e6666b86b2004b_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_874236dfbea8ea32992f27b96938a3c9685ad9b44632e65314b84a570c7a720e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874236dfbea8ea32992f27b96938a3c9685ad9b44632e65314b84a570c7a720e->enter($__internal_874236dfbea8ea32992f27b96938a3c9685ad9b44632e65314b84a570c7a720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "<style>

#mobile-banner1-container img , 
#mobile-banner2-container img , 
#mobile-banner3-container img , 
#mobile-banner4-container img , 
#mobile-banner5-container img 
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}


</style>
";
        // line 74
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile.enabled") == 1)) {
            // line 75
            echo "
";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>
    
    <div class=\"help-block\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("客户端显示的轮播图。最多5张，建议图片大小为750*300，格式支持jpg、png。"), "html", null, true);
            echo "</div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner1\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("轮播图1"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner1-container\">";
            // line 88
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner1", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner1", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-upload\" type=\"button\" data-url=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner1"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-remove\" type=\"button\" data-url=\"";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner1"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner1", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>

        <div class=\"banner-setting\" role=\"banner1-setting\" ";
            // line 95
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner1", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" ";
            // line 96
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick1", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"1\" ";
            // line 97
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick1", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"2\" ";
            // line 99
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick1", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl1\" name=\"bannerUrl1\" class=\"form-control\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerUrl1", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick1", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse1\" data-role=\"selectBannerCourse\" ";
            // line 107
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick1", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow1\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 113
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 113)->display(array_merge($context, array("course" => (isset($context["bannerCourse1"]) ? $context["bannerCourse1"] : $this->getContext($context, "bannerCourse1")))));
            // line 114
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId1\" class=\"form-control\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerJumpToCourseId1", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner1\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner1", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner2\">";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("轮播图2"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner2-container\">";
            // line 130
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner2", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner2", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-upload\" type=\"button\" data-url=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner2"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-remove\" type=\"button\" data-url=\"";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner2"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner2", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>







        <div class=\"banner-setting\" role=\"banner2-setting\" ";
            // line 143
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner2", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" ";
            // line 144
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick2", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"1\" ";
            // line 145
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick2", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"2\" ";
            // line 147
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick2", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl2\" name=\"bannerUrl2\" class=\"form-control\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerUrl2", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick2", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse2\" data-role=\"selectBannerCourse\" ";
            // line 155
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick2", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow2\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 161
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 161)->display(array_merge($context, array("course" => (isset($context["bannerCourse2"]) ? $context["bannerCourse2"] : $this->getContext($context, "bannerCourse2")))));
            // line 162
            echo "              </ul>
            </div>

            <input type=\"text\" name=\"bannerJumpToCourseId2\" class=\"form-control\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerJumpToCourseId2", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner2\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner2", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner3\">";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("轮播图3"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner3-container\">";
            // line 179
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner3", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner3", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-upload\" type=\"button\" data-url=\"";
            // line 181
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner3"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-remove\" type=\"button\" data-url=\"";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner3"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner3", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>







        <div class=\"banner-setting\" role=\"banner3-setting\" ";
            // line 192
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner3", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" ";
            // line 193
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick3", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"1\" ";
            // line 194
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick3", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"2\" ";
            // line 196
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick3", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl3\" name=\"bannerUrl3\" class=\"form-control\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerUrl3", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick3", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse3\" data-role=\"selectBannerCourse\" ";
            // line 204
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick3", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow3\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 210
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 210)->display(array_merge($context, array("course" => (isset($context["bannerCourse3"]) ? $context["bannerCourse3"] : $this->getContext($context, "bannerCourse3")))));
            // line 211
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId3\" class=\"form-control\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerJumpToCourseId3", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner3\" value=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner3", array()), "html", null, true);
            echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner4\">";
            // line 225
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("轮播图4"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner4-container\">";
            // line 228
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner4", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner4", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-upload\" type=\"button\" data-url=\"";
            // line 230
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner4"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-remove\" type=\"button\" data-url=\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner4"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner4", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
            echo "</p>







        <div class=\"banner-setting\" role=\"banner4-setting\" ";
            // line 241
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner4", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" ";
            // line 242
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick4", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"1\" ";
            // line 243
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick4", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"2\" ";
            // line 245
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick4", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl4\" name=\"bannerUrl4\" class=\"form-control\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerUrl4", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick4", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse4\" data-role=\"selectBannerCourse\" ";
            // line 253
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick4", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 254
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 255
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow4\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 259
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 259)->display(array_merge($context, array("course" => (isset($context["bannerCourse4"]) ? $context["bannerCourse4"] : $this->getContext($context, "bannerCourse4")))));
            // line 260
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId4\" class=\"form-control\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerJumpToCourseId4", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner4\" value=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner4", array()), "html", null, true);
            echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner5\">";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("轮播图5"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner5-container\">";
            // line 277
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner5", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner5", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-upload\" type=\"button\" data-url=\"";
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner5"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-remove\" type=\"button\" data-url=\"";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner5"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner5", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>

        <p class=\"help-block\">";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件"), "html", null, true);
            echo "。</p>







        <div class=\"banner-setting\" role=\"banner5-setting\" ";
            // line 290
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner5", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" ";
            // line 291
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick5", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("默认（无触发动作）"), "html", null, true);
            echo "
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"1\" ";
            // line 292
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick5", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到连接地址"), "html", null, true);
            echo "

          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"2\" ";
            // line 294
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick5", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("跳转到内部课程"), "html", null, true);
            echo "

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl5\" name=\"bannerUrl5\" class=\"form-control\" value=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerUrl5", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写连接地址"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick5", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse5\" data-role=\"selectBannerCourse\" ";
            // line 302
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerClick5", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             ";
            // line 304
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选课"), "html", null, true);
            echo "
            </a>
            <div name=\"bannerCourseShow5\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 308
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 308)->display(array_merge($context, array("course" => (isset($context["bannerCourse5"]) ? $context["bannerCourse5"] : $this->getContext($context, "bannerCourse5")))));
            // line 309
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId5\" class=\"form-control\" value=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "bannerJumpToCourseId5", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请填写内部课程Id"), "html", null, true);
            echo "\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner5\" value=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile")), "banner5", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 323
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
            // line 327
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
            echo "</button>
    </div>
  </div>

</form>

";
        } else {
            // line 334
            echo "<div class=\"well\" style=\"text-align:center;\">


";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移动端未开启，"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请先在"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统-课程设置-移动端设置 "), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("中设置开启"), "html", null, true);
            echo "

</div>
";
        }
        // line 341
        echo "
";
        
        $__internal_874236dfbea8ea32992f27b96938a3c9685ad9b44632e65314b84a570c7a720e->leave($__internal_874236dfbea8ea32992f27b96938a3c9685ad9b44632e65314b84a570c7a720e_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 341,  812 => 337,  807 => 334,  797 => 327,  790 => 323,  780 => 316,  770 => 311,  766 => 309,  764 => 308,  757 => 304,  753 => 303,  747 => 302,  734 => 298,  723 => 294,  714 => 292,  706 => 291,  700 => 290,  689 => 282,  678 => 280,  672 => 279,  663 => 277,  657 => 274,  647 => 267,  637 => 262,  633 => 260,  631 => 259,  624 => 255,  620 => 254,  614 => 253,  601 => 249,  590 => 245,  581 => 243,  573 => 242,  567 => 241,  556 => 233,  545 => 231,  539 => 230,  530 => 228,  524 => 225,  514 => 218,  504 => 213,  500 => 211,  498 => 210,  491 => 206,  487 => 205,  481 => 204,  468 => 200,  457 => 196,  448 => 194,  440 => 193,  434 => 192,  423 => 184,  412 => 182,  406 => 181,  397 => 179,  391 => 176,  382 => 170,  372 => 165,  367 => 162,  365 => 161,  358 => 157,  354 => 156,  348 => 155,  335 => 151,  324 => 147,  315 => 145,  307 => 144,  301 => 143,  290 => 135,  279 => 133,  273 => 132,  264 => 130,  258 => 127,  249 => 121,  239 => 116,  235 => 114,  233 => 113,  226 => 109,  222 => 108,  216 => 107,  203 => 103,  192 => 99,  183 => 97,  175 => 96,  169 => 95,  164 => 93,  153 => 91,  147 => 90,  138 => 88,  132 => 85,  126 => 82,  117 => 76,  114 => 75,  112 => 74,  45 => 9,  39 => 8,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_operation_mobile_banner_manage' %}

{% set script_controller = 'operation/mobile' %}


{% block main %}
<style>

#mobile-banner1-container img , 
#mobile-banner2-container img , 
#mobile-banner3-container img , 
#mobile-banner4-container img , 
#mobile-banner5-container img 
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}


</style>
{% if setting(\"mobile.enabled\") == 1 %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>
    
    <div class=\"help-block\">{{'客户端显示的轮播图。最多5张，建议图片大小为750*300，格式支持jpg、png。'|trans}}</div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner1\">{{'轮播图1'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner1-container\">{% if mobile.banner1 %}<img src=\"{{ asset(mobile.banner1) }}\">{% endif %}</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-upload\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_upload', {type:'banner1'}) }}\">{{'上传'|trans}}</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-remove\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_remove', {type:'banner1'}) }}\" {% if not mobile.banner1 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>

        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>

        <div class=\"banner-setting\" role=\"banner1-setting\" {% if not mobile.banner1 %}style=\"display:none;\"{% endif %}>
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" {% if not mobile.bannerClick1 %}checked=\"checked\"{% endif %} value=\"0\"/>{{'默认（无触发动作）'|trans}}
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"1\" {% if mobile.bannerClick1 == \"1\" %}checked=\"checked\"{% endif %}/>{{'跳转到连接地址'|trans}}

          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"2\" {% if mobile.bannerClick1 == \"2\" %}checked=\"checked\"{% endif %}/>{{'跳转到内部课程'|trans}}

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl1\" name=\"bannerUrl1\" class=\"form-control\" value=\"{{mobile.bannerUrl1}}\" placeholder=\"{{'请填写连接地址'|trans}}\" {% if mobile.bannerClick1 != \"1\" %}style=\"display:none\"{% endif %}/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse1\" data-role=\"selectBannerCourse\" {% if mobile.bannerClick1 != \"2\" %}style=\"display:none\"{% endif %}>
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('admin_course_search_to_fill_banner')}}\" >
             {{'选课'|trans}}
            </a>
            <div name=\"bannerCourseShow1\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse1} %}
              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId1\" class=\"form-control\" value=\"{{mobile.bannerJumpToCourseId1}}\" placeholder=\"{{'请填写内部课程Id'|trans}}\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner1\" value=\"{{ mobile.banner1 }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner2\">{{'轮播图2'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner2-container\">{% if mobile.banner2 %}<img src=\"{{ asset(mobile.banner2) }}\">{% endif %}</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-upload\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_upload', {type:'banner2'}) }}\">{{'上传'|trans}}</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-remove\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_remove', {type:'banner2'}) }}\" {% if not mobile.banner2 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>

        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>







        <div class=\"banner-setting\" role=\"banner2-setting\" {% if not mobile.banner2 %}style=\"display:none;\"{% endif %}>
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" {% if not mobile.bannerClick2 %}checked=\"checked\"{% endif %} value=\"0\"/>{{'默认（无触发动作）'|trans}}
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"1\" {% if mobile.bannerClick2 == \"1\" %}checked=\"checked\"{% endif %}/>{{'跳转到连接地址'|trans}}

          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"2\" {% if mobile.bannerClick2 == \"2\" %}checked=\"checked\"{% endif %}/>{{'跳转到内部课程'|trans}}

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl2\" name=\"bannerUrl2\" class=\"form-control\" value=\"{{mobile.bannerUrl2}}\" placeholder=\"{{'请填写连接地址'|trans}}\" {% if mobile.bannerClick2 != \"1\" %}style=\"display:none\"{% endif %}/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse2\" data-role=\"selectBannerCourse\" {% if mobile.bannerClick2 != \"2\" %}style=\"display:none\"{% endif %}>
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('admin_course_search_to_fill_banner')}}\" >
             {{'选课'|trans}}
            </a>
            <div name=\"bannerCourseShow2\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse2} %}
              </ul>
            </div>

            <input type=\"text\" name=\"bannerJumpToCourseId2\" class=\"form-control\" value=\"{{mobile.bannerJumpToCourseId2}}\" placeholder=\"{{'请填写内部课程Id'|trans}}\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner2\" value=\"{{ mobile.banner2 }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner3\">{{'轮播图3'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner3-container\">{% if mobile.banner3 %}<img src=\"{{ asset(mobile.banner3) }}\">{% endif %}</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-upload\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_upload', {type:'banner3'}) }}\">{{'上传'|trans}}</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-remove\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_remove', {type:'banner3'}) }}\" {% if not mobile.banner3 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>

        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>







        <div class=\"banner-setting\" role=\"banner3-setting\" {% if not mobile.banner3 %}style=\"display:none;\"{% endif %}>
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" {% if not mobile.bannerClick3 %}checked=\"checked\"{% endif %} value=\"0\"/>{{'默认（无触发动作）'|trans}}
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"1\" {% if mobile.bannerClick3 == \"1\" %}checked=\"checked\"{% endif %}/>{{'跳转到连接地址'|trans}}

          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"2\" {% if mobile.bannerClick3 == \"2\" %}checked=\"checked\"{% endif %}/>{{'跳转到内部课程'|trans}}

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl3\" name=\"bannerUrl3\" class=\"form-control\" value=\"{{mobile.bannerUrl3}}\" placeholder=\"{{'请填写连接地址'|trans}}\" {% if mobile.bannerClick3 != \"1\" %}style=\"display:none\"{% endif %}/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse3\" data-role=\"selectBannerCourse\" {% if mobile.bannerClick3 != \"2\" %}style=\"display:none\"{% endif %}>
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('admin_course_search_to_fill_banner')}}\" >
             {{'选课'|trans}}
            </a>
            <div name=\"bannerCourseShow3\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse3} %}
              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId3\" class=\"form-control\" value=\"{{mobile.bannerJumpToCourseId3}}\" placeholder=\"{{'请填写内部课程Id'|trans}}\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner3\" value=\"{{ mobile.banner3 }}\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner4\">{{'轮播图4'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner4-container\">{% if mobile.banner4 %}<img src=\"{{ asset(mobile.banner4) }}\">{% endif %}</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-upload\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_upload', {type:'banner4'}) }}\">{{'上传'|trans}}</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-remove\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_remove', {type:'banner4'}) }}\" {% if not mobile.banner4 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>

        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>







        <div class=\"banner-setting\" role=\"banner4-setting\" {% if not mobile.banner4 %}style=\"display:none;\"{% endif %}>
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" {% if not mobile.bannerClick4 %}checked=\"checked\"{% endif %} value=\"0\"/>{{'默认（无触发动作）'|trans}}
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"1\" {% if mobile.bannerClick4 == \"1\" %}checked=\"checked\"{% endif %}/>{{'跳转到连接地址'|trans}}

          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"2\" {% if mobile.bannerClick4 == \"2\" %}checked=\"checked\"{% endif %}/>{{'跳转到内部课程'|trans}}

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl4\" name=\"bannerUrl4\" class=\"form-control\" value=\"{{mobile.bannerUrl4}}\" placeholder=\"{{'请填写连接地址'|trans}}\" {% if mobile.bannerClick4 != \"1\" %}style=\"display:none\"{% endif %}/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse4\" data-role=\"selectBannerCourse\" {% if mobile.bannerClick4 != \"2\" %}style=\"display:none\"{% endif %}>
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('admin_course_search_to_fill_banner')}}\" >
             {{'选课'|trans}}
            </a>
            <div name=\"bannerCourseShow4\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse4} %}
              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId4\" class=\"form-control\" value=\"{{mobile.bannerJumpToCourseId4}}\" placeholder=\"{{'请填写内部课程Id'|trans}}\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner4\" value=\"{{ mobile.banner4 }}\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner5\">{{'轮播图5'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner5-container\">{% if mobile.banner5 %}<img src=\"{{ asset(mobile.banner5) }}\">{% endif %}</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-upload\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_upload', {type:'banner5'}) }}\">{{'上传'|trans}}</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-remove\" type=\"button\" data-url=\"{{ path('admin_operation_mobile_picture_remove', {type:'banner5'}) }}\" {% if not mobile.banner5 %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>

        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件'|trans}}。</p>







        <div class=\"banner-setting\" role=\"banner5-setting\" {% if not mobile.banner5 %}style=\"display:none;\"{% endif %}>
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" {% if not mobile.bannerClick5 %}checked=\"checked\"{% endif %} value=\"0\"/>{{'默认（无触发动作）'|trans}}
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"1\" {% if mobile.bannerClick5 == \"1\" %}checked=\"checked\"{% endif %}/>{{'跳转到连接地址'|trans}}

          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"2\" {% if mobile.bannerClick5 == \"2\" %}checked=\"checked\"{% endif %}/>{{'跳转到内部课程'|trans}}

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl5\" name=\"bannerUrl5\" class=\"form-control\" value=\"{{mobile.bannerUrl5}}\" placeholder=\"{{'请填写连接地址'|trans}}\" {% if mobile.bannerClick5 != \"1\" %}style=\"display:none\"{% endif %}/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse5\" data-role=\"selectBannerCourse\" {% if mobile.bannerClick5 != \"2\" %}style=\"display:none\"{% endif %}>
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('admin_course_search_to_fill_banner')}}\" >
             {{'选课'|trans}}
            </a>
            <div name=\"bannerCourseShow5\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse5} %}
              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId5\" class=\"form-control\" value=\"{{mobile.bannerJumpToCourseId5}}\" placeholder=\"{{'请填写内部课程Id'|trans}}\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner5\" value=\"{{ mobile.banner5 }}\">
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

{% else %}
<div class=\"well\" style=\"text-align:center;\">


{{'移动端未开启，'|trans}}{{'请先在'|trans}}<a href=\"{{ path('admin_setting_mobile') }}\"> {{'系统-课程设置-移动端设置 '|trans}}</a>{{'中设置开启'|trans}}

</div>
{% endif %}

{% endblock %}";
    }
}
