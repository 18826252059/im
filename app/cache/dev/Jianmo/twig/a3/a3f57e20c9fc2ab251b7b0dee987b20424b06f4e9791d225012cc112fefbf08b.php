<?php

/* TopxiaWebBundle:CourseManage:base.html.twig */
class __TwigTemplate_546923e9f55aab53cf00b7403b09174b0e14ad59007d630621a5693feb8e82f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a55a08be99f981a17a7514d59eab3dec79bf1c1608acf76b8c7beb974719057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a55a08be99f981a17a7514d59eab3dec79bf1c1608acf76b8c7beb974719057->enter($__internal_8a55a08be99f981a17a7514d59eab3dec79bf1c1608acf76b8c7beb974719057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseManage:base.html.twig"));

        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 7
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("location_all"), "isCoursePublished" => $this->getAttribute(        // line 11
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a55a08be99f981a17a7514d59eab3dec79bf1c1608acf76b8c7beb974719057->leave($__internal_8a55a08be99f981a17a7514d59eab3dec79bf1c1608acf76b8c7beb974719057_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e99ee97c1fa5d32d2939d1ba25ea9a2d9e291cccd58c06b5714a46ecf509899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e99ee97c1fa5d32d2939d1ba25ea9a2d9e291cccd58c06b5714a46ecf509899->enter($__internal_4e99ee97c1fa5d32d2939d1ba25ea9a2d9e291cccd58c06b5714a46ecf509899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_4e99ee97c1fa5d32d2939d1ba25ea9a2d9e291cccd58c06b5714a46ecf509899->leave($__internal_4e99ee97c1fa5d32d2939d1ba25ea9a2d9e291cccd58c06b5714a46ecf509899_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_ed5f590134fcafd1afdd485034f8a251b9fd2632a063ef299ac24d947ae59772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5f590134fcafd1afdd485034f8a251b9fd2632a063ef299ac24d947ae59772->enter($__internal_ed5f590134fcafd1afdd485034f8a251b9fd2632a063ef299ac24d947ae59772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "
  <div class=\"panel panel-default panel-col\" >
    <div class=\"panel-heading\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("聊天界面"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\" style=\"overflow-x: hidden;overflow-y:auto;height: 100%;\">

      <ul class=\"nav nav-pills nav-pills-sm\">
        <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" style=\"float: left;margin: 0 10px 0 0;\"/>
          <p class=\"contact__name\" style=\"margin: 0 0 10px;\">Ethan Hawke</p>

          <p class=\"contact__content\" style=\"display: inline-block;padding: 10px 15px;border-radius: 5px;background: #93C763\">jdkjfajfjksdjf</p>
        </a>
      </ul>

      <ul class=\"nav nav-pills nav-pills-sm\" style=\"text-align: right;\">
        <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
          <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" style=\"float: right;margin: 0 0 0 10px;\"/>
          <p class=\"contact__name\" style=\"text-align: right;margin: 0 0 10px;\">Ethan Hawke</p>
          ";
        // line 33
        echo "          <p class=\"contact__content\" style=\"display: inline-block;padding: 10px 15px;border-radius: 5px;background: #93C763;\">jdkjfajfjksdjf</p>
        </a>
      </ul>

      <ul class=\"nav nav-pills nav-pills-sm\">
        <p style=\"text-align: center;\">12:30</p>
        </ul>
      <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

        ";
        // line 43
        echo "
        <div class=\"form-group\">
          ";
        // line 46
        echo "          ";
        // line 47
        echo "            ";
        // line 48
        echo "                   ";
        // line 49
        echo "            ";
        // line 50
        echo "          ";
        // line 51
        echo "        </div>

        <div class=\"form-group\">
          ";
        // line 55
        echo "          ";
        // line 56
        echo "            ";
        // line 57
        echo "                      ";
        // line 58
        echo "            ";
        // line 59
        echo "          ";
        // line 60
        echo "        </div>

        <div class=\"form-group\">
          ";
        // line 64
        echo "          ";
        // line 65
        echo "            ";
        // line 66
        echo "                   ";
        // line 67
        echo "                   ";
        // line 68
        echo "            ";
        // line 69
        echo "          ";
        // line 70
        echo "        </div>

        ";
        // line 73
        echo "
          ";
        // line 75
        echo "            ";
        // line 76
        echo "                   ";
        // line 77
        echo "            ";
        // line 78
        echo "              ";
        // line 79
        echo "                     ";
        // line 80
        echo "                     ";
        // line 81
        echo "            ";
        // line 82
        echo "            ";
        // line 83
        echo "              ";
        // line 84
        echo "              ";
        // line 85
        echo "            ";
        // line 86
        echo "          ";
        // line 87
        echo "
        ";
        // line 89
        echo "
        <div class=\"form-group\">
          ";
        // line 92
        echo "          ";
        // line 93
        echo "            ";
        // line 94
        echo "              ";
        // line 95
        echo "              ";
        // line 96
        echo "            ";
        // line 97
        echo "              ";
        // line 98
        echo "            ";
        // line 99
        echo "            ";
        // line 100
        echo "          ";
        // line 101
        echo "        </div>
        <div class=\"form-group expiry-day-js ";
        // line 102
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")) == "none")) {
            echo " hidden ";
        }
        echo "\">
          ";
        // line 104
        echo "          ";
        // line 105
        echo "            ";
        // line 106
        echo "                   ";
        // line 107
        echo "                ";
        // line 108
        echo "            ";
        // line 109
        echo "            ";
        // line 110
        echo "            ";
        // line 111
        echo "              ";
        // line 112
        echo "            ";
        // line 113
        echo "          ";
        // line 114
        echo "        </div>
        ";
        // line 116
        echo "          ";
        // line 117
        echo "            ";
        // line 118
        echo "            ";
        // line 119
        echo "              ";
        // line 120
        echo "            ";
        // line 121
        echo "          ";
        // line 122
        echo "        ";
        // line 123
        echo "
        ";
        // line 125
        echo "          ";
        // line 126
        echo "            ";
        // line 127
        echo "            ";
        // line 128
        echo "              ";
        // line 129
        echo "                     ";
        // line 130
        echo "                     ";
        // line 131
        echo "              ";
        // line 132
        echo "            ";
        // line 133
        echo "          ";
        // line 134
        echo "        ";
        // line 135
        echo "
        ";
        // line 137
        echo "          ";
        // line 138
        echo "            ";
        // line 139
        echo "            ";
        // line 140
        echo "              ";
        // line 141
        echo "              ";
        // line 142
        echo "            ";
        // line 143
        echo "          ";
        // line 144
        echo "        ";
        // line 145
        echo "
        <div class=\"form-group\">
          ";
        // line 148
        echo "          ";
        // line 149
        echo "            ";
        // line 150
        echo "                    ";
        // line 151
        echo "              ";
        // line 152
        echo "            ";
        // line 153
        echo "            ";
        // line 154
        echo "          ";
        // line 155
        echo "        </div>

        ";
        // line 157
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 157)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 158
        echo "
        ";
        // line 160
        echo "          ";
        // line 161
        echo "            ";
        // line 162
        echo "              ";
        // line 163
        echo "            ";
        // line 164
        echo "          ";
        // line 165
        echo "        ";
        // line 166
        echo "        <div class=\"form-group\">
          ";
        // line 168
        echo "            ";
        // line 169
        echo "          ";
        // line 170
        echo "        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>
    <div class=\"panel-footer\">
      <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\"
                class=\"form-control\">";
        // line 178
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      ";
        // line 180
        echo "        <button class=\"btn btn-fat btn-primary form-control\" id=\"course-create-btn\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发送"), "html", null, true);
        echo "</button>
      ";
        // line 182
        echo "    </div>
  </div>

";
        
        $__internal_ed5f590134fcafd1afdd485034f8a251b9fd2632a063ef299ac24d947ae59772->leave($__internal_ed5f590134fcafd1afdd485034f8a251b9fd2632a063ef299ac24d947ae59772_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 182,  356 => 180,  352 => 178,  343 => 172,  339 => 170,  337 => 169,  335 => 168,  332 => 166,  330 => 165,  328 => 164,  326 => 163,  324 => 162,  322 => 161,  320 => 160,  317 => 158,  315 => 157,  311 => 155,  309 => 154,  307 => 153,  305 => 152,  303 => 151,  301 => 150,  299 => 149,  297 => 148,  293 => 145,  291 => 144,  289 => 143,  287 => 142,  285 => 141,  283 => 140,  281 => 139,  279 => 138,  277 => 137,  274 => 135,  272 => 134,  270 => 133,  268 => 132,  266 => 131,  264 => 130,  262 => 129,  260 => 128,  258 => 127,  256 => 126,  254 => 125,  251 => 123,  249 => 122,  247 => 121,  245 => 120,  243 => 119,  241 => 118,  239 => 117,  237 => 116,  234 => 114,  232 => 113,  230 => 112,  228 => 111,  226 => 110,  224 => 109,  222 => 108,  220 => 107,  218 => 106,  216 => 105,  214 => 104,  208 => 102,  205 => 101,  203 => 100,  201 => 99,  199 => 98,  197 => 97,  195 => 96,  193 => 95,  191 => 94,  189 => 93,  187 => 92,  183 => 89,  180 => 87,  178 => 86,  176 => 85,  174 => 84,  172 => 83,  170 => 82,  168 => 81,  166 => 80,  164 => 79,  162 => 78,  160 => 77,  158 => 76,  156 => 75,  153 => 73,  149 => 70,  147 => 69,  145 => 68,  143 => 67,  141 => 66,  139 => 65,  137 => 64,  132 => 60,  130 => 59,  128 => 58,  126 => 57,  124 => 56,  122 => 55,  117 => 51,  115 => 50,  113 => 49,  111 => 48,  109 => 47,  107 => 46,  103 => 43,  92 => 33,  87 => 30,  75 => 21,  67 => 16,  63 => 14,  57 => 13,  43 => 3,  36 => 1,  34 => 11,  33 => 7,  31 => 6,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}

{% block title %}{{ '基本信息'|trans }} - {{ parent() }}{% endblock %}

{% set side_nav = 'base' %}
{% set script_controller = 'course-manage/base' %}
{% set script_arguments = {
categoryUrl: path('category_all'),
tagMatchUrl: path('tag_match'),
locationUrl: path('location_all'),
isCoursePublished: course.status,
} %}
{% block main %}

  <div class=\"panel panel-default panel-col\" >
    <div class=\"panel-heading\">{{ '聊天界面'|trans }}</div>
    <div class=\"panel-body\" style=\"overflow-x: hidden;overflow-y:auto;height: 100%;\">

      <ul class=\"nav nav-pills nav-pills-sm\">
        <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
          <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" style=\"float: left;margin: 0 10px 0 0;\"/>
          <p class=\"contact__name\" style=\"margin: 0 0 10px;\">Ethan Hawke</p>

          <p class=\"contact__content\" style=\"display: inline-block;padding: 10px 15px;border-radius: 5px;background: #93C763\">jdkjfajfjksdjf</p>
        </a>
      </ul>

      <ul class=\"nav nav-pills nav-pills-sm\" style=\"text-align: right;\">
        <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
          <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" style=\"float: right;margin: 0 0 0 10px;\"/>
          <p class=\"contact__name\" style=\"text-align: right;margin: 0 0 10px;\">Ethan Hawke</p>
          {#<span class=\"contact__status online\"></span>#}
          <p class=\"contact__content\" style=\"display: inline-block;padding: 10px 15px;border-radius: 5px;background: #93C763;\">jdkjfajfjksdjf</p>
        </a>
      </ul>

      <ul class=\"nav nav-pills nav-pills-sm\">
        <p style=\"text-align: center;\">12:30</p>
        </ul>
      <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

        {#{{ web_macro.flash_messages() }}#}

        <div class=\"form-group\">
          {#<label class=\"col-md-2 control-label\">{{ '标题'|trans }}</label>#}
          {#<div class=\"col-md-8 controls\">#}
            {#<input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"#}
                   {#value=\"{{ course.title|default('') }}\">#}
            {#<div class=\"help-block\" style=\"display:none;\"></div>#}
          {#</div>#}
        </div>

        <div class=\"form-group\">
          {#<label class=\"col-md-2 control-label\">{{ '副标题'|trans }}</label>#}
          {#<div class=\"col-md-8 controls\">#}
            {#<textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\"#}
                      {#class=\"form-control\">{{ course.subtitle|default('') }}</textarea>#}
            {#<div class=\"help-block\" style=\"display:none;\"></div>#}
          {#</div>#}
        </div>

        <div class=\"form-group\">
          {#<label class=\"col-md-2 control-label\">{{ '标签'|trans }}</label>#}
          {#<div class=\"col-md-8 controls\">#}
            {#<input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\"#}
                   {#tabindex=\"-1\" value=\"{{ tags|join(',') }}\"#}
                   {#data-explain=\"{{ '用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理'|trans }}\">#}
            {#<div class=\"help-block\">{{ '用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理'|trans }}</div>#}
          {#</div>#}
        </div>

        {#{% if course.type == 'live' %}#}

          {#<div class=\"form-group\">#}
            {#<label class=\"col-md-2 control-label\"#}
                   {#for=\"maxStudentNum-field\">课程人数</label>#}
            {#<div class=\"col-md-10 controls\">#}
              {#<input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\"#}
                     {#class=\"form-control width-input width-input-large\" value=\"{{ course.maxStudentNum|default(20) }}\"#}
                     {#data-live-capacity-url=\"{{ path('live_capacity',{id:course.id}) }}\"> {{ '人'|trans }}#}
            {#</div>#}
            {#<div class=\"col-md-offset-2 col-md-10 js-course-rule\">#}
              {#<p class=\"alert-warning\"></p>#}
              {#<a href=\"{{path('content_course_rule')}}\" target=\"_blank\">【查看直播课程细则】</a>#}
            {#</div>#}
          {#</div>#}

        {#{% endif %}#}

        <div class=\"form-group\">
          {#<label class=\"col-md-2 control-label\">{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}{{ '有效期'|trans }}</label>#}
          {#<div class=\"col-md-8 controls radios\">#}
            {#{% if course.status == 'published' %}#}
              {#<input type=\"hidden\" name=\"expiryMode\" value=\"{{ course.expiryMode }}\">#}
              {#{{ radios('expiryMode', {'date':'截止日期'|trans, 'days':'有效期天数'|trans,'none':'无'|trans}, course.expiryMode|default('none'), 'disabled') }}#}
            {#{% else %}#}
              {#{{ radios('expiryMode', {'date':'截止日期'|trans, 'days':'有效期天数'|trans,'none':'无'|trans}, course.expiryMode|default('none')) }}#}
            {#{% endif %}#}
            {#<div class=\"help-block\">{{ '已发布课程无法修改有效期方式，如需要修改，请关闭课程后再设置；有效期变更，不影响已经加入课程的学员。'|trans }}</div>#}
          {#</div>#}
        </div>
        <div class=\"form-group expiry-day-js {% if course.expiryMode|default('none') == 'none' %} hidden {% endif %}\">
          {#<label class=\"col-md-2 control-label\"></label>#}
          {#<div class=\"col-md-8 controls\">#}
            {#<input type=\"text\" id=\"course_expiryDay\" name=\"expiryDay\" required=\"required\" value=\"{% if course.expiryMode|default('none') == 'date' %}{{ course.expiryDay|date('Y-m-d') }}{% else %}{{ course.expiryDay }}{% endif %}\"#}
                   {#class=\"form-control width-input width-input-large\" > <span#}
                {#{% if course.expiryMode|default('none') != 'days' %}class=\"hidden\" {% endif %}>{{ '天'|trans }} </span>#}
            {#{% set date_help = '设置该值后，%user_name%只能在截止日期前进行课程的学习，系统默认会在截止时间前10天提醒学员。'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)}) %}#}
            {#{% set days_help = '设置该值后，%user_name%学员只能在有效天数内进行课程的学习，系统默认会在有效期前10天提醒学员。'|trans({'%user_name%': setting('default.user_name')|default('学员'|trans)}) %}#}
            {#<div class=\"help-block\" data-date=\"{{ date_help }}\" data-days=\"{{ days_help }}\">#}
              {#{% if course.expiryMode|default('none') == 'date' %}  {{ date_help }}{% elseif  course.expiryMode|default('none') == 'days' %}{{ days_help }} {% endif %}#}
            {#</div>#}{#即有效期为N天，则只能学习N天，即有效期至yyyy-mm-dd，则只能学习至yyyy-mm-dd 即有效期为N天，则只能学习N天，#}
          {#</div>#}
        </div>
        {#{% if course.type == 'normal' %}#}
          {#<div class=\"form-group\">#}
            {#<label class=\"col-md-2 control-label\">{{ '连载状态'|trans }}</label>#}
            {#<div class=\"col-md-8 controls radios\">#}
              {#{{ radios('serializeMode', {'none':'非连载课程'|trans, 'serialize':'更新中'|trans, 'finished':'已完结'|trans}, course.serializeMode|default('none') ) }}#}
            {#</div>#}
          {#</div>#}
        {#{% endif %}#}

        {#{% if setting('magic.lesson_watch_limit') %}#}
          {#<div class=\"form-group\">#}
            {#<label class=\"col-md-2 control-label\">{{ '视频观看时间限制'|trans }}</label>#}
            {#<div class=\"col-md-8 controls\">#}
              {#<input type=\"text\"  name=\"watchLimit\" required=\"required\"#}
                     {#class=\"form-control width-input width-input-large\"#}
                     {#value=\"{{ course.watchLimit }}\"> {{ '倍单视频总时长'|trans }}#}
              {#<div class=\"help-block\">{{ '0表示不限制。'|trans }}</div>#}
            {#</div>#}
          {#</div>#}
        {#{% endif %}#}

        {#{% if setting('magic.buy_before_approval') %}#}
          {#<div class=\"form-group\">#}
            {#<label class=\"col-md-2 control-label\">{{ '实名认证'|trans }}</label>#}
            {#<div class=\"col-md-8 controls radios\">#}
              {#{{ radios('approval', {'1':'是'|trans, '0':'否'|trans}, course.approval ) }}#}
              {#<div class=\"help-block\">{{ '设置该值后，学员购买课程前，必须先去申请实名认证。'|trans }}</div>#}
            {#</div>#}
          {#</div>#}
        {#{% endif %}#}

        <div class=\"form-group\">
          {#<label class=\"col-md-2 control-label\">{{ '分类'|trans }}</label>#}
          {#<div class=\"col-md-8 controls\">#}
            {#<select id=\"course_categoryId\" name=\"categoryId\" required=\"required\"#}
                    {#class=\"form-control width-input width-input-large\">#}
              {#{{ select_options(category_choices('course'), course.categoryId, '分类'|trans) }}#}
            {#</select>#}
            {#<div class=\"help-block\" style=\"display:none;\"></div>#}
          {#</div>#}
        </div>

        {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode : course.orgCode, inputClass: 'width-input width-input-large'} %}

        {#{% if course.type == 'live' %}#}
          {#<div id=\"live-plugin-url\" class=\"form-group hidden\">#}
            {#<div class=\"col-md-offset-2 col-md-8 controls\">#}
              {#<a href=\"\" target=\"_blank\">{{ '直播“桌面分享”插件下载'|trans }}</a>#}
            {#</div>#}
          {#</div>#}
        {#{% endif %}#}
        <div class=\"form-group\">
          {#<div class=\"col-md-offset-2 col-md-8 controls\">#}
            {#<button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">{{ '保存'|trans }}</button>#}
          {#</div>#}
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

      </form>
    </div>
    <div class=\"panel-footer\">
      <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\"
                class=\"form-control\">{{ course.subtitle|default('') }}</textarea>
      {#<div class=\"col-md-offset-2 col-md-8 controls\">#}
        <button class=\"btn btn-fat btn-primary form-control\" id=\"course-create-btn\" type=\"submit\">{{ '发送'|trans }}</button>
      {#</div>#}
    </div>
  </div>

{% endblock %}



";
    }
}
