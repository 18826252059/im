<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_ed063b7f504a17577bc6e9cd19682512b33ae46fa2688a3061cbb646c3072ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3185375cd058048585e96718abb1ec8c7176493b5c6508e35e54d86ef6b3297f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3185375cd058048585e96718abb1ec8c7176493b5c6508e35e54d86ef6b3297f->enter($__internal_3185375cd058048585e96718abb1ec8c7176493b5c6508e35e54d86ef6b3297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseManage:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3185375cd058048585e96718abb1ec8c7176493b5c6508e35e54d86ef6b3297f->leave($__internal_3185375cd058048585e96718abb1ec8c7176493b5c6508e35e54d86ef6b3297f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f79690cd7f64b3b505aedbd4644a4befd81ccdc660d140f67d2802fd20570a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79690cd7f64b3b505aedbd4644a4befd81ccdc660d140f67d2802fd20570a19->enter($__internal_f79690cd7f64b3b505aedbd4644a4befd81ccdc660d140f67d2802fd20570a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_f79690cd7f64b3b505aedbd4644a4befd81ccdc660d140f67d2802fd20570a19->leave($__internal_f79690cd7f64b3b505aedbd4644a4befd81ccdc660d140f67d2802fd20570a19_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_639ae50bd40b8a4573c24f4514e94aebfe1309d30ca250e3083912fcf1e0a6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639ae50bd40b8a4573c24f4514e94aebfe1309d30ca250e3083912fcf1e0a6d1->enter($__internal_639ae50bd40b8a4573c24f4514e94aebfe1309d30ca250e3083912fcf1e0a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<style>
    body {
        width: 100%;
        height:100%;
    }
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 21
        echo "
<div class=\"row\" style=\"height: 100%;\">
  <div class=\"col-md-3\" style=\"height: 100%;\">
    ";
        // line 24
        $this->displayBlock('side', $context, $blocks);
        // line 317
        echo "  </div>
  <div class=\"col-md-9\" style=\"height: 100%;\">
    ";
        // line 319
        $this->displayBlock('main', $context, $blocks);
        // line 320
        echo "  </div>
</div>
";
        
        $__internal_639ae50bd40b8a4573c24f4514e94aebfe1309d30ca250e3083912fcf1e0a6d1->leave($__internal_639ae50bd40b8a4573c24f4514e94aebfe1309d30ca250e3083912fcf1e0a6d1_prof);

    }

    // line 24
    public function block_side($context, array $blocks = array())
    {
        $__internal_b6acfd1671d3fd735db8aef592f21eeba5bf812003e67dde8e049756704538dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6acfd1671d3fd735db8aef592f21eeba5bf812003e67dde8e049756704538dd->enter($__internal_b6acfd1671d3fd735db8aef592f21eeba5bf812003e67dde8e049756704538dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 25
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 26
        echo "      <div class=\"sidenav locked\" style=\"height: 80%;\">
          ";
        // line 28
        echo "          <ul class=\"nav nav-tabs nav-justified\">
              <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\"
                     data-toggle=\"tab\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("历史消息"), "html", null, true);
        echo "</a></li>
              <li>
                  <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
                      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("好友列表"), "html", null, true);
        echo "
                  </a>
              </li>

          </ul>
          <div style=\"overflow: auto; height: 80%;\">
          <ul class=\"nav nav-pills nav-pills-sm\">
              <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
              <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" style=\"border-radius: 50%;width: 34px;height: 34px;\" />
              <span class=\"contact__name\">Ethan Hawke</span>
              <span class=\"contact__status online\"></span>
              </a>
          </ul>
          <ul class=\"nav nav-pills nav-pills-sm\">
              <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
              <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
              <span class=\"contact__name\">Ethan Hawke</span>
              <span class=\"contact__status online\"></span>
              </a>
          </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
          </div>
          ";
        // line 118
        echo "              ";
        // line 119
        echo "
                  ";
        // line 121
        echo "                      ";
        // line 122
        echo "
                      ";
        // line 124
        echo "                          ";
        // line 125
        echo "                              ";
        // line 126
        echo "                              ";
        // line 127
        echo "                              ";
        // line 128
        echo "                          ";
        // line 129
        echo "                          ";
        // line 130
        echo "                              ";
        // line 131
        echo "                              ";
        // line 132
        echo "                              ";
        // line 133
        echo "                          ";
        // line 134
        echo "                          ";
        // line 135
        echo "                              ";
        // line 136
        echo "                              ";
        // line 137
        echo "                              ";
        // line 138
        echo "                          ";
        // line 139
        echo "                      ";
        // line 140
        echo "
                      ";
        // line 142
        echo "                      ";
        // line 143
        echo "                    ";
        // line 144
        echo "                           ";
        // line 145
        echo "                           ";
        // line 146
        echo "                           ";
        // line 147
        echo "                              ";
        // line 148
        echo "                                  ";
        // line 149
        echo "                              ";
        // line 150
        echo "                                  ";
        // line 151
        echo "                              ";
        // line 152
        echo "                           ";
        // line 153
        echo "                      ";
        // line 154
        echo "

                      ";
        // line 157
        echo "                          ";
        // line 158
        echo "                              ";
        // line 159
        echo "                                  ";
        // line 160
        echo "                                  ";
        // line 161
        echo "                                  ";
        // line 162
        echo "                                      ";
        // line 163
        echo "                                  ";
        // line 164
        echo "                              ";
        // line 165
        echo "                                  ";
        // line 166
        echo "                                      ";
        // line 167
        echo "                                  ";
        // line 168
        echo "                                  ";
        // line 169
        echo "                                      ";
        // line 170
        echo "                                      ";
        // line 171
        echo "                                      ";
        // line 172
        echo "                                         ";
        // line 173
        echo "                                  ";
        // line 174
        echo "                              ";
        // line 175
        echo "                          ";
        // line 176
        echo "                      ";
        // line 177
        echo "
                  ";
        // line 179
        echo "
              ";
        // line 181
        echo "        ";
        // line 182
        echo "          ";
        // line 183
        echo "          ";
        // line 184
        echo "            ";
        // line 185
        echo "            ";
        // line 186
        echo "            ";
        // line 187
        echo "            ";
        // line 188
        echo "              ";
        // line 189
        echo "            ";
        // line 190
        echo "          ";
        // line 191
        echo "          ";
        // line 192
        echo "            ";
        // line 193
        echo "            ";
        // line 194
        echo "            ";
        // line 195
        echo "            ";
        // line 196
        echo "              ";
        // line 197
        echo "            ";
        // line 198
        echo "          ";
        // line 199
        echo "          ";
        // line 200
        echo "            ";
        // line 201
        echo "            ";
        // line 202
        echo "            ";
        // line 203
        echo "            ";
        // line 204
        echo "              ";
        // line 205
        echo "            ";
        // line 206
        echo "          ";
        // line 207
        echo "          ";
        // line 208
        echo "            ";
        // line 209
        echo "            ";
        // line 210
        echo "            ";
        // line 211
        echo "            ";
        // line 212
        echo "              ";
        // line 213
        echo "            ";
        // line 214
        echo "          ";
        // line 215
        echo "          ";
        // line 216
        echo "            ";
        // line 217
        echo "              ";
        // line 218
        echo "            ";
        // line 219
        echo "            ";
        // line 220
        echo "            ";
        // line 221
        echo "            ";
        // line 222
        echo "          ";
        // line 223
        echo "          ";
        // line 224
        echo "            ";
        // line 225
        echo "            ";
        // line 226
        echo "            ";
        // line 227
        echo "            ";
        // line 228
        echo "              ";
        // line 229
        echo "            ";
        // line 230
        echo "          ";
        // line 231
        echo "        ";
        // line 232
        echo "
        ";
        // line 234
        echo "          ";
        // line 235
        echo "          ";
        // line 236
        echo "            ";
        // line 237
        echo "            ";
        // line 238
        echo "            ";
        // line 239
        echo "            ";
        // line 240
        echo "              ";
        // line 241
        echo "            ";
        // line 242
        echo "          ";
        // line 243
        echo "          ";
        // line 244
        echo "            ";
        // line 245
        echo "            ";
        // line 246
        echo "            ";
        // line 247
        echo "            ";
        // line 248
        echo "              ";
        // line 249
        echo "            ";
        // line 250
        echo "          ";
        // line 251
        echo "          ";
        // line 252
        echo "            ";
        // line 253
        echo "              ";
        // line 254
        echo "            ";
        // line 255
        echo "          ";
        // line 256
        echo "        ";
        // line 257
        echo "
        ";
        // line 259
        echo "          ";
        // line 260
        echo "          ";
        // line 261
        echo "            ";
        // line 262
        echo "            ";
        // line 263
        echo "            ";
        // line 264
        echo "            ";
        // line 265
        echo "              ";
        // line 266
        echo "            ";
        // line 267
        echo "          ";
        // line 268
        echo "
          ";
        // line 270
        echo "            ";
        // line 271
        echo "              ";
        // line 272
        echo "              ";
        // line 273
        echo "              ";
        // line 274
        echo "              ";
        // line 275
        echo "                ";
        // line 276
        echo "              ";
        // line 277
        echo "            ";
        // line 278
        echo "          ";
        // line 279
        echo "
          ";
        // line 281
        echo "            ";
        // line 282
        echo "          ";
        // line 283
        echo "
          ";
        // line 285
        echo "            ";
        // line 286
        echo "            ";
        // line 287
        echo "            ";
        // line 288
        echo "            ";
        // line 289
        echo "              ";
        // line 290
        echo "            ";
        // line 291
        echo "          ";
        // line 292
        echo "          ";
        // line 293
        echo "            ";
        // line 294
        echo "          ";
        // line 295
        echo "          ";
        // line 296
        echo "            ";
        // line 297
        echo "              ";
        // line 298
        echo "            ";
        // line 299
        echo "          ";
        // line 300
        echo "        ";
        // line 301
        echo "
        ";
        // line 303
        echo "          ";
        // line 304
        echo "          ";
        // line 305
        echo "            ";
        // line 306
        echo "              ";
        // line 307
        echo "          ";
        // line 308
        echo "
          ";
        // line 310
        echo "            ";
        // line 311
        echo "              ";
        // line 312
        echo "            ";
        // line 313
        echo "          ";
        // line 314
        echo "        ";
        // line 315
        echo "      </div>
    ";
        
        $__internal_b6acfd1671d3fd735db8aef592f21eeba5bf812003e67dde8e049756704538dd->leave($__internal_b6acfd1671d3fd735db8aef592f21eeba5bf812003e67dde8e049756704538dd_prof);

    }

    // line 319
    public function block_main($context, array $blocks = array())
    {
        $__internal_0190047521f98bb8fcdbd30fa04517f0fc7c7cd7031cef874fc7d4ea42d503e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0190047521f98bb8fcdbd30fa04517f0fc7c7cd7031cef874fc7d4ea42d503e6->enter($__internal_0190047521f98bb8fcdbd30fa04517f0fc7c7cd7031cef874fc7d4ea42d503e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0190047521f98bb8fcdbd30fa04517f0fc7c7cd7031cef874fc7d4ea42d503e6->leave($__internal_0190047521f98bb8fcdbd30fa04517f0fc7c7cd7031cef874fc7d4ea42d503e6_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 319,  617 => 315,  615 => 314,  613 => 313,  611 => 312,  609 => 311,  607 => 310,  604 => 308,  602 => 307,  600 => 306,  598 => 305,  596 => 304,  594 => 303,  591 => 301,  589 => 300,  587 => 299,  585 => 298,  583 => 297,  581 => 296,  579 => 295,  577 => 294,  575 => 293,  573 => 292,  571 => 291,  569 => 290,  567 => 289,  565 => 288,  563 => 287,  561 => 286,  559 => 285,  556 => 283,  554 => 282,  552 => 281,  549 => 279,  547 => 278,  545 => 277,  543 => 276,  541 => 275,  539 => 274,  537 => 273,  535 => 272,  533 => 271,  531 => 270,  528 => 268,  526 => 267,  524 => 266,  522 => 265,  520 => 264,  518 => 263,  516 => 262,  514 => 261,  512 => 260,  510 => 259,  507 => 257,  505 => 256,  503 => 255,  501 => 254,  499 => 253,  497 => 252,  495 => 251,  493 => 250,  491 => 249,  489 => 248,  487 => 247,  485 => 246,  483 => 245,  481 => 244,  479 => 243,  477 => 242,  475 => 241,  473 => 240,  471 => 239,  469 => 238,  467 => 237,  465 => 236,  463 => 235,  461 => 234,  458 => 232,  456 => 231,  454 => 230,  452 => 229,  450 => 228,  448 => 227,  446 => 226,  444 => 225,  442 => 224,  440 => 223,  438 => 222,  436 => 221,  434 => 220,  432 => 219,  430 => 218,  428 => 217,  426 => 216,  424 => 215,  422 => 214,  420 => 213,  418 => 212,  416 => 211,  414 => 210,  412 => 209,  410 => 208,  408 => 207,  406 => 206,  404 => 205,  402 => 204,  400 => 203,  398 => 202,  396 => 201,  394 => 200,  392 => 199,  390 => 198,  388 => 197,  386 => 196,  384 => 195,  382 => 194,  380 => 193,  378 => 192,  376 => 191,  374 => 190,  372 => 189,  370 => 188,  368 => 187,  366 => 186,  364 => 185,  362 => 184,  360 => 183,  358 => 182,  356 => 181,  353 => 179,  350 => 177,  348 => 176,  346 => 175,  344 => 174,  342 => 173,  340 => 172,  338 => 171,  336 => 170,  334 => 169,  332 => 168,  330 => 167,  328 => 166,  326 => 165,  324 => 164,  322 => 163,  320 => 162,  318 => 161,  316 => 160,  314 => 159,  312 => 158,  310 => 157,  306 => 154,  304 => 153,  302 => 152,  300 => 151,  298 => 150,  296 => 149,  294 => 148,  292 => 147,  290 => 146,  288 => 145,  286 => 144,  284 => 143,  282 => 142,  279 => 140,  277 => 139,  275 => 138,  273 => 137,  271 => 136,  269 => 135,  267 => 134,  265 => 133,  263 => 132,  261 => 131,  259 => 130,  257 => 129,  255 => 128,  253 => 127,  251 => 126,  249 => 125,  247 => 124,  244 => 122,  242 => 121,  239 => 119,  237 => 118,  228 => 111,  218 => 104,  208 => 97,  198 => 90,  188 => 83,  178 => 76,  168 => 69,  158 => 62,  148 => 55,  138 => 48,  128 => 41,  117 => 33,  111 => 30,  107 => 28,  104 => 26,  101 => 25,  95 => 24,  86 => 320,  84 => 319,  80 => 317,  78 => 24,  73 => 21,  57 => 6,  51 => 5,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{'课程管理'|trans}} - {{ parent() }}{% endblock %}

{% block content %}
<style>
    body {
        width: 100%;
        height:100%;
    }
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  {#{{ render(controller('TopxiaWebBundle:Course:header', {course:course, manage: true})) }}#}

<div class=\"row\" style=\"height: 100%;\">
  <div class=\"col-md-3\" style=\"height: 100%;\">
    {% block side %}
      {% set side_nav = side_nav|default(null) %}
      <div class=\"sidenav locked\" style=\"height: 80%;\">
          {#<ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">#}
          <ul class=\"nav nav-tabs nav-justified\">
              <li><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\"
                     data-toggle=\"tab\">{{ '历史消息'|trans }}</a></li>
              <li>
                  <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
                      {{ '好友列表'|trans }}
                  </a>
              </li>

          </ul>
          <div style=\"overflow: auto; height: 80%;\">
          <ul class=\"nav nav-pills nav-pills-sm\">
              <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
              <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" style=\"border-radius: 50%;width: 34px;height: 34px;\" />
              <span class=\"contact__name\">Ethan Hawke</span>
              <span class=\"contact__status online\"></span>
              </a>
          </ul>
          <ul class=\"nav nav-pills nav-pills-sm\">
              <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
              <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
              <span class=\"contact__name\">Ethan Hawke</span>
              <span class=\"contact__status online\"></span>
              </a>
          </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
              <ul class=\"nav nav-pills nav-pills-sm\">
                  <a href=\"#\" class=\"list-group-item\" style=\"border: 0px;\">
                      <img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />
                      <span class=\"contact__name\">Ethan Hawke</span>
                      <span class=\"contact__status online\"></span>
                  </a>
              </ul>
          </div>
          {#<div class=\"tab-content\">#}
              {#<div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">#}

                  {#<div class=\"file-chooser-uploader\">#}
                      {#{{ '好友列表'|trans }}#}

                      {#<div class=\"list-group\">#}
                          {#<a href=\"#\" class=\"list-group-item\">#}
                              {#<img src=\"{{ asset('assets/img/avatar/1.png') }}\" alt=\"\" class=\"contact__photo\" />#}
                              {#<span class=\"contact__name\">Ethan Hawke</span>#}
                              {#<span class=\"contact__status online\"></span>#}
                          {#</a>#}
                          {#<a href=\"#\" class=\"list-group-item\">#}
                              {#<img src=\"{{ asset('assets/img/avatar/2.png') }}\" alt=\"\" class=\"contact__photo\" />#}
                              {#<span class=\"contact__name\">Ethan Hawke</span>#}
                              {#<span class=\"contact__status online\"></span>#}
                          {#</a>#}
                          {#<a href=\"#\" class=\"list-group-item\">#}
                              {#<img src=\"{{ asset('assets/img/avatar/3.png') }}\" alt=\"\" class=\"contact__photo\" />#}
                              {#<span class=\"contact__name\">Ethan Hawke</span>#}
                              {#<span class=\"contact__status online\"></span>#}
                          {#</a>#}
                      {#</div>#}

                      {#{% include 'TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig' %}#}
                      {#{% set token = uploader_token(targetType, targetId, 'private') %}#}
                    {#  <div class=\"balloon-uploader\"#}
                           {#data-init-url=\"{{ path('uploader_init', {token:token}) }}\"#}
                           {#data-finish-url=\"{{ path('uploader_finished', {token:token}) }}\"#}
                           {#data-upload-auth-url=\"{{ path('uploader_auth', {token:token}) }}\"#}
                              {#{% if storageSetting.upload_mode == 'cloud' %}#}
                                  {#data-accept=\"{{ uploader_accept(targetType, 'video')|json_encode }}\"#}
                              {#{% else %}#}
                                  {#data-accept=\"{{ uploader_accept(targetType, 'local_video')|json_encode }}\"#}
                              {#{% endif %}#}
                           {#data-process=\"{{ uploader_process(targetType) }}\"#}
                      {#></div>#}


                      {#<div class=\"alert alert-info\">#}
                          {#<ul>#}
                              {#{% if storageSetting.upload_mode == 'cloud' %}#}
                                  {#<li>{{ '支持'|trans|raw }}<strong>mp4, avi, flv, wmv, mov, m4v, mpg</strong>{{ '格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。'|trans|raw }}</li>#}
                                  {#<li>{{ '支持'|trans|raw }}<strong>{{ '断点续传'|trans|raw }}</strong>{{ '（仅支持HTML5浏览器）。'|trans|raw }}</li>#}
                                  {#<li>{{ '视频将上传到'|trans|raw }}#}
                                      {#<strong>{{ '云视频服务器'|trans|raw }}</strong>{{ '，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。'|trans|raw }}#}
                                  {#</li>#}
                              {#{% else %}#}
                                  {#<li>{{ '支持'|trans }}<strong>mp4</strong>{{ '格式的视频文件上传，文件大小不能超过'|trans }}#}
                                      {#<strong>{{ upload_max_filesize() }} </strong>{{ '。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。'|trans }}#}
                                  {#</li>#}
                                  {#<li>#}
                                      {#{{ '视频将上传到'|trans }}#}
                                      {#<strong>{{ '网站服务器'|trans }}</strong>{{ '。如需使用%Edusoho%云视频,点击'|trans({'%Edusoho%':'EduSoho'|copyright_less}) }}#}
                                      {#<a href=\"http://open.edusoho.com/show/cloud/video\"#}
                                         {#target=\"_blank\">{{ '这里'|trans }}</a>{{ '了解详情,%Edusoho%云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。'|trans({'%Edusoho%':'EduSoho'|copyright_less}) }}#}
                                  {#</li>#}
                              {#{% endif %}#}
                          {#</ul>#}
                      {#</div>#}

                  {#</div>#}

              {#</div>#}
        {#<ul class=\"list-group\">#}
          {#<li class=\"list-group-heading\">{{'课程信息'|trans}}</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'base' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'base'}) }}{% else %}#}
            {#{{ path('course_manage_base', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'基本信息'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'detail' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'detail'}) }}{% else %}#}
            {#{{ path('course_manage_detail', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'详细信息'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'picture' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'picture'}) }}{% else %}#}
            {#{{ path('course_manage_picture', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'课程图片'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'lesson' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'lesson'}) }}{% else %}#}
            {#{{ path('course_manage_lesson', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'课时管理'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#{% if course.type == 'live' %}#}
            {#<li class=\"list-group-item {% if side_nav == 'replay' %}active{% endif %}\" >#}
              {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'replay'}) }}{% else %}#}
            {#{{ path('live_course_manage_replay', {id:course.id}) }}#}
            {#{% endif %}\"><span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'录播管理'|trans}}</a>#}
            {#</li>#}
          {#{% endif %}#}
          {#<li class=\"list-group-item {% if side_nav == 'files' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'files'}) }}{% else %}#}
            {#{{ path('course_manage_files', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'课程文件'|trans}}#}
            {#</a>#}
          {#</li>#}
        {#</ul>#}

        {#<ul class=\"list-group\">#}
          {#<li class=\"list-group-heading\">{{'课程设置'|trans}}</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'price' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'price'}) }}{% else %}#}
            {#{{ path('course_manage_price', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'价格设置'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'teachers' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'teachers'}) }}{% else %}#}
            {#{{ path('course_manage_teachers', {id:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'教师设置'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'students' %}active{% endif %}\">#}
            {#<a href=\"{{ path('course_manage_students', {id:course.id}) }}\">#}
              {#<span></span>{{setting('default.user_name')|default('学员'|trans)}}{{'管理'|trans}}#}
            {#</a>#}
          {#</li>#}
        {#</ul>#}

        {#<ul class=\"list-group\">#}
          {#<li class=\"list-group-heading\">{{'题库'|trans}}</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'question' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'question'}) }}{% else %}#}
            {#{{ path('course_manage_question', {courseId:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'题目管理'|trans}}#}
            {#</a>#}
          {#</li>#}

          {#{% if is_plugin_installed('QuestionPlus') and setting('question_plus.enabled') %}#}
            {#<li class=\"list-group-item {% if side_nav == 'question_plumber' %}active{% endif %}\">#}
              {#<a href=\"{% if course.locked|default(0) == 1 %}#}
              {#{{ path('course_manage_course_sync', {id:course.id,type:'question_plumber'}) }}{% else %}#}
              {#{{ path('course_question_plumber', {courseId:course.id, type:'import'}) }}#}
              {#{% endif %}\">#}
                {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'题目导入/导出'|trans}}#}
              {#</a>#}
            {#</li>#}
          {#{% endif %}#}

          {#<!-- <li class=\"list-group-item {% if side_nav == 'question_category' %}active{% endif %}\">#}
            {#<a href=\"{{ path('course_manage_question_category', {courseId:course.id}) }}\">题目类别管理</a>#}
          {#</li> -->#}

          {#<li class=\"list-group-item {% if side_nav == 'testpaper' %}active{% endif %}\">#}
            {#<a href=\"{% if course.locked|default(0) == 1 %}#}
            {#{{ path('course_manage_course_sync', {id:course.id,type:'testpaper'}) }}{% else %}#}
            {#{{ path('course_manage_testpaper', {courseId:course.id}) }}#}
            {#{% endif %}\">#}
              {#<span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'试卷管理'|trans}}#}
            {#</a>#}
          {#</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'testCheck' %}active{% endif %}\">#}
            {#<a href=\"{{ path('course_manage_test_check', {id:course.id, status:'reviewing'}) }}\"><span></span>{{'试卷批阅'|trans}}</a>#}
          {#</li>#}
          {#{% if is_plugin_installed('Homework') %}#}
            {#<li class=\"list-group-item {% if side_nav == 'homeworkCheck' %}active{% endif %}\">#}
              {#<a href=\"{{ path('course_homework_check_list', {courseId:course.id,status:'reviewing'}) }}\"><span></span>{{'作业批改'|trans}}</a>#}
            {#</li>#}
          {#{% endif %}#}
        {#</ul>#}

        {#<ul class=\"list-group\">#}
          {#<li class=\"list-group-heading\">{{'课程运营'|trans}}</li>#}
          {#<li class=\"list-group-item {% if side_nav == 'course_manage_dashboard' %}active{% endif %}\">#}
            {#<a href=\"{{path('course_manage_course_dashboard',{id:course.id})}}\">#}
              {#<span></span>{{'课程学习数据'|trans}}</a>#}
          {#</li>#}

          {#{% if app.user.isAdmin() or setting('course.teacher_search_order') == 1 %}#}
            {#<li class=\"list-group-item {% if side_nav == 'course_manage_order' %}active{% endif %}\">#}
              {#<a href=\"{{path('course_manage_order',{id:course.id})}}\"><span></span>{{'课程订单查询'|trans}}</a>#}
            {#</li>#}
          {#{% endif %}#}
        {#</ul>#}
      </div>
    {% endblock %}
  </div>
  <div class=\"col-md-9\" style=\"height: 100%;\">
    {% block main %}{% endblock %}
  </div>
</div>
{% endblock %}";
    }
}
