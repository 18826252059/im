<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_da6bc936956394ad7ac746d50e8cc6338274e5e6bf5de6bfb7caaa6e95b2e692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_flash_message' => array($this, 'block_page_flash_message'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'tabs' => array($this, 'block_tabs'),
            'capsule' => array($this, 'block_capsule'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbcd4020a7e0c5f5b7854975aa2468885956e8163fbc0e7312a2b75c39c56491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcd4020a7e0c5f5b7854975aa2468885956e8163fbc0e7312a2b75c39c56491->enter($__internal_dbcd4020a7e0c5f5b7854975aa2468885956e8163fbc0e7312a2b75c39c56491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle::layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionByCode((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
";
        // line 15
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "    ";
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 28
        echo "  </title>

  ";
        // line 30
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")) {
            // line 31
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 34
        echo "  
  ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
  ";
        // line 51
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : $this->getContext($context, "cloudSmsInfo"))) {
            // line 52
            echo "    <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>您好，ES云短信发送机制升级优化，网站目前短信剩余";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : null), "remainCount", array()), 0)) : (0)), "html", null, true);
            echo "条，为保证继续使用，请开通教育云，点击 <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\"> 立即开通</a></strong></div></div>
  ";
        }
        // line 54
        echo "    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
        echo "</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        ";
        // line 64
        $this->loadTemplate("PermissionBundle:Templates:navigation.html.twig", "TopxiaAdminBundle::layout.html.twig", 64)->display(array_merge($context, array("parentCode" => "admin")));
        // line 65
        echo "
        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("常用"), "html", null, true);
        echo "</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回首页"), "html", null, true);
        echo "</a></li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container ";
        // line 87
        if ((isset($context["cloudSmsInfo"]) ? $context["cloudSmsInfo"] : $this->getContext($context, "cloudSmsInfo"))) {
            echo "es-admin-container-down";
        }
        echo "\">
    
    ";
        // line 89
        $context["notifies"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->pluginUpdateNotify();
        // line 90
        echo "    ";
        if ( !twig_test_empty((isset($context["notifies"]) ? $context["notifies"] : $this->getContext($context, "notifies")))) {
            // line 91
            echo "      <div class=\"alert alert-warning\">
        【重要】网站升级v7.2.0后，为保证正常使用，请务必及时升级插件（";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["notifies"]) ? $context["notifies"] : $this->getContext($context, "notifies")), "html", null, true);
            echo "）至最新版！请立即升级！ <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\">查看详情</a>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('container', $context, $blocks);
        // line 145
        echo "
  </div>

  ";
        // line 148
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "
  ";
        // line 152
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 152)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 153
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 154
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 155
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("产品"), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("反馈"), "html", null, true);
            echo "</span>
      </a>
    </div>
  ";
        }
        // line 162
        echo "</body>
</html>

";
        
        $__internal_dbcd4020a7e0c5f5b7854975aa2468885956e8163fbc0e7312a2b75c39c56491->leave($__internal_dbcd4020a7e0c5f5b7854975aa2468885956e8163fbc0e7312a2b75c39c56491_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_20afe10512ce0d3701e0dfbf7335e514e5eb67fe74972018c2ec9afe39b7cbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20afe10512ce0d3701e0dfbf7335e514e5eb67fe74972018c2ec9afe39b7cbd5->enter($__internal_20afe10512ce0d3701e0dfbf7335e514e5eb67fe74972018c2ec9afe39b7cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : $this->getContext($context, "currentMenu")), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "name", array())), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array())), "name", array())), "html", null, true);
        echo "
    ";
        
        $__internal_20afe10512ce0d3701e0dfbf7335e514e5eb67fe74972018c2ec9afe39b7cbd5->leave($__internal_20afe10512ce0d3701e0dfbf7335e514e5eb67fe74972018c2ec9afe39b7cbd5_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a553aee7137366020657642904c2398afafe14b2b7a16e9f2ada414a9799d9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a553aee7137366020657642904c2398afafe14b2b7a16e9f2ada414a9799d9ae->enter($__internal_a553aee7137366020657642904c2398afafe14b2b7a16e9f2ada414a9799d9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 36
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
        
        $__internal_a553aee7137366020657642904c2398afafe14b2b7a16e9f2ada414a9799d9ae->leave($__internal_a553aee7137366020657642904c2398afafe14b2b7a16e9f2ada414a9799d9ae_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bc324ad5d4a580cbf42db9658d5f1ff09bfcbf6a06e0848a67543b91b94bbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc324ad5d4a580cbf42db9658d5f1ff09bfcbf6a06e0848a67543b91b94bbaa->enter($__internal_8bc324ad5d4a580cbf42db9658d5f1ff09bfcbf6a06e0848a67543b91b94bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bc324ad5d4a580cbf42db9658d5f1ff09bfcbf6a06e0848a67543b91b94bbaa->leave($__internal_8bc324ad5d4a580cbf42db9658d5f1ff09bfcbf6a06e0848a67543b91b94bbaa_prof);

    }

    // line 96
    public function block_container($context, array $blocks = array())
    {
        $__internal_17a35b18b669a7a771c8dff90419812d2166b90d421a67bcaa970d39917b427f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a35b18b669a7a771c8dff90419812d2166b90d421a67bcaa970d39917b427f->enter($__internal_17a35b18b669a7a771c8dff90419812d2166b90d421a67bcaa970d39917b427f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 97
        echo "      <div class=\"row\">  
        ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "      </div>
    ";
        
        $__internal_17a35b18b669a7a771c8dff90419812d2166b90d421a67bcaa970d39917b427f->leave($__internal_17a35b18b669a7a771c8dff90419812d2166b90d421a67bcaa970d39917b427f_prof);

    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d0fd496f188e08d2d6f15198a5ad9f2d948d1bb4b680dc83dafa98faa963d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0fd496f188e08d2d6f15198a5ad9f2d948d1bb4b680dc83dafa98faa963d38->enter($__internal_6d0fd496f188e08d2d6f15198a5ad9f2d948d1bb4b680dc83dafa98faa963d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 99
        echo "          <div class=\"col-md-2\">
            ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">
              ";
        // line 107
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 110
        echo "              <h1 class=\"pull-left\">
                ";
        // line 111
        $this->displayBlock('page_title', $context, $blocks);
        // line 114
        echo "              </h1>
              <div class=\"pull-right\">

                ";
        // line 117
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 129
        echo "
              </div>
            </div>

            ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 134
        echo "            
            ";
        // line 135
        $this->displayBlock('tabs', $context, $blocks);
        // line 136
        echo "
            ";
        // line 137
        $this->displayBlock('capsule', $context, $blocks);
        // line 138
        echo "
            ";
        // line 139
        $this->displayBlock('main', $context, $blocks);
        // line 140
        echo "          </div>

        ";
        
        $__internal_6d0fd496f188e08d2d6f15198a5ad9f2d948d1bb4b680dc83dafa98faa963d38->leave($__internal_6d0fd496f188e08d2d6f15198a5ad9f2d948d1bb4b680dc83dafa98faa963d38_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1082237a9405d1180def45025d90eb499fde631ce963994814b0f4fee538776c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1082237a9405d1180def45025d90eb499fde631ce963994814b0f4fee538776c->enter($__internal_1082237a9405d1180def45025d90eb499fde631ce963994814b0f4fee538776c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "              ";
        $this->loadTemplate("PermissionBundle:Templates:side-bar.html.twig", "TopxiaAdminBundle::layout.html.twig", 101)->display($context);
        // line 102
        echo "            ";
        
        $__internal_1082237a9405d1180def45025d90eb499fde631ce963994814b0f4fee538776c->leave($__internal_1082237a9405d1180def45025d90eb499fde631ce963994814b0f4fee538776c_prof);

    }

    // line 107
    public function block_page_flash_message($context, array $blocks = array())
    {
        $__internal_96f1bfa84c4ab862281efce3d90df0f1427f1e17ec76decd646e29ca9d382861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f1bfa84c4ab862281efce3d90df0f1427f1e17ec76decd646e29ca9d382861->enter($__internal_96f1bfa84c4ab862281efce3d90df0f1427f1e17ec76decd646e29ca9d382861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_flash_message"));

        // line 108
        echo "
              ";
        
        $__internal_96f1bfa84c4ab862281efce3d90df0f1427f1e17ec76decd646e29ca9d382861->leave($__internal_96f1bfa84c4ab862281efce3d90df0f1427f1e17ec76decd646e29ca9d382861_prof);

    }

    // line 111
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bf8cfba2f0a6378aacf752f5a12cf6d035b1e59e4bddd13651910abaab6c18a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8cfba2f0a6378aacf752f5a12cf6d035b1e59e4bddd13651910abaab6c18a9->enter($__internal_bf8cfba2f0a6378aacf752f5a12cf6d035b1e59e4bddd13651910abaab6c18a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 112
        echo "                  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : $this->getContext($context, "currentMenu")), "code", array())), "name", array())), "html", null, true);
        echo "
                ";
        
        $__internal_bf8cfba2f0a6378aacf752f5a12cf6d035b1e59e4bddd13651910abaab6c18a9->leave($__internal_bf8cfba2f0a6378aacf752f5a12cf6d035b1e59e4bddd13651910abaab6c18a9_prof);

    }

    // line 117
    public function block_page_buttons($context, array $blocks = array())
    {
        $__internal_d10229e2f9e9e13d334c52f3e399f4e17e901536c6b953c6de79ce8ae5293012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10229e2f9e9e13d334c52f3e399f4e17e901536c6b953c6de79ce8ae5293012->enter($__internal_d10229e2f9e9e13d334c52f3e399f4e17e901536c6b953c6de79ce8ae5293012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_buttons"));

        // line 118
        echo "
                  ";
        // line 119
        if ((((($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : null), "mode", array()), "")) : ("")) == "capsules") && ((array_key_exists("capsule", $context)) ? (_twig_default_filter((isset($context["capsule"]) ? $context["capsule"] : $this->getContext($context, "capsule")), false)) : (false)))) {
            // line 120
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionByCode((isset($context["capsule"]) ? $context["capsule"] : $this->getContext($context, "capsule"))), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 121
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                  ";
        } else {
            // line 124
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions($this->getAttribute((isset($context["currentMenu"]) ? $context["currentMenu"] : $this->getContext($context, "currentMenu")), "code", array()), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 125
                echo "                      ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                  ";
        }
        // line 128
        echo "                ";
        
        $__internal_d10229e2f9e9e13d334c52f3e399f4e17e901536c6b953c6de79ce8ae5293012->leave($__internal_d10229e2f9e9e13d334c52f3e399f4e17e901536c6b953c6de79ce8ae5293012_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_2d1d7285104921a45b87889c5daca818a44f5b7de856e28d1f9b5a2344c0608f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1d7285104921a45b87889c5daca818a44f5b7de856e28d1f9b5a2344c0608f->enter($__internal_2d1d7285104921a45b87889c5daca818a44f5b7de856e28d1f9b5a2344c0608f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_2d1d7285104921a45b87889c5daca818a44f5b7de856e28d1f9b5a2344c0608f->leave($__internal_2d1d7285104921a45b87889c5daca818a44f5b7de856e28d1f9b5a2344c0608f_prof);

    }

    // line 135
    public function block_tabs($context, array $blocks = array())
    {
        $__internal_283584c984abfe5682dae3a27a71b82ec365fb6e437914406759258d2ac8cd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283584c984abfe5682dae3a27a71b82ec365fb6e437914406759258d2ac8cd57->enter($__internal_283584c984abfe5682dae3a27a71b82ec365fb6e437914406759258d2ac8cd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

        $this->loadTemplate("PermissionBundle:Templates:tabs.html.twig", "TopxiaAdminBundle::layout.html.twig", 135)->display($context);
        
        $__internal_283584c984abfe5682dae3a27a71b82ec365fb6e437914406759258d2ac8cd57->leave($__internal_283584c984abfe5682dae3a27a71b82ec365fb6e437914406759258d2ac8cd57_prof);

    }

    // line 137
    public function block_capsule($context, array $blocks = array())
    {
        $__internal_7dd2f5e01e70664538fc21478ccf7aaa7a7370784b856cbc20b7af4f41cd0da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd2f5e01e70664538fc21478ccf7aaa7a7370784b856cbc20b7af4f41cd0da3->enter($__internal_7dd2f5e01e70664538fc21478ccf7aaa7a7370784b856cbc20b7af4f41cd0da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "capsule"));

        
        $__internal_7dd2f5e01e70664538fc21478ccf7aaa7a7370784b856cbc20b7af4f41cd0da3->leave($__internal_7dd2f5e01e70664538fc21478ccf7aaa7a7370784b856cbc20b7af4f41cd0da3_prof);

    }

    // line 139
    public function block_main($context, array $blocks = array())
    {
        $__internal_1ccd448ed11377d8ac54134efae6301a0ec0e871e6631e7d3bd9ae8e603aceea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccd448ed11377d8ac54134efae6301a0ec0e871e6631e7d3bd9ae8e603aceea->enter($__internal_1ccd448ed11377d8ac54134efae6301a0ec0e871e6631e7d3bd9ae8e603aceea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1ccd448ed11377d8ac54134efae6301a0ec0e871e6631e7d3bd9ae8e603aceea->leave($__internal_1ccd448ed11377d8ac54134efae6301a0ec0e871e6631e7d3bd9ae8e603aceea_prof);

    }

    // line 148
    public function block_footer($context, array $blocks = array())
    {
        $__internal_268a98154fd29f90bcd984b189dbd19db43bd9c3ef92718e1c757f447d688984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268a98154fd29f90bcd984b189dbd19db43bd9c3ef92718e1c757f447d688984->enter($__internal_268a98154fd29f90bcd984b189dbd19db43bd9c3ef92718e1c757f447d688984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 149
        echo "    ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.analytics");
        echo " 
  ";
        
        $__internal_268a98154fd29f90bcd984b189dbd19db43bd9c3ef92718e1c757f447d688984->leave($__internal_268a98154fd29f90bcd984b189dbd19db43bd9c3ef92718e1c757f447d688984_prof);

    }

    // line 165
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0adb7023c8c359bad964c29454d2162b07c1d06e8e4a4823d35b97a1f134b70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0adb7023c8c359bad964c29454d2162b07c1d06e8e4a4823d35b97a1f134b70e->enter($__internal_0adb7023c8c359bad964c29454d2162b07c1d06e8e4a4823d35b97a1f134b70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 166
            echo "  <a 
  ";
            // line 167
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 168
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 170
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 171
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 175
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 177
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 178
                echo "    target=\"blank\"
  ";
            }
            // line 180
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array())), "html", null, true);
            echo "</a>
";
            
            $__internal_0adb7023c8c359bad964c29454d2162b07c1d06e8e4a4823d35b97a1f134b70e->leave($__internal_0adb7023c8c359bad964c29454d2162b07c1d06e8e4a4823d35b97a1f134b70e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 180,  623 => 178,  620 => 177,  614 => 175,  606 => 171,  603 => 170,  597 => 168,  595 => 167,  592 => 166,  575 => 165,  565 => 149,  559 => 148,  548 => 139,  537 => 137,  525 => 135,  514 => 133,  507 => 128,  504 => 127,  495 => 125,  490 => 124,  487 => 123,  478 => 121,  473 => 120,  471 => 119,  468 => 118,  462 => 117,  452 => 112,  446 => 111,  438 => 108,  432 => 107,  425 => 102,  422 => 101,  416 => 100,  407 => 140,  405 => 139,  402 => 138,  400 => 137,  397 => 136,  395 => 135,  392 => 134,  390 => 133,  384 => 129,  382 => 117,  377 => 114,  375 => 111,  372 => 110,  370 => 107,  364 => 103,  362 => 100,  359 => 99,  353 => 98,  345 => 143,  343 => 98,  340 => 97,  334 => 96,  323 => 43,  314 => 40,  310 => 39,  306 => 38,  302 => 37,  297 => 36,  291 => 35,  277 => 25,  271 => 24,  261 => 162,  252 => 158,  247 => 156,  244 => 155,  242 => 154,  239 => 153,  237 => 152,  234 => 151,  232 => 148,  227 => 145,  225 => 96,  222 => 95,  214 => 92,  211 => 91,  208 => 90,  206 => 89,  199 => 87,  185 => 78,  180 => 76,  172 => 73,  166 => 70,  161 => 68,  157 => 67,  153 => 65,  151 => 64,  140 => 61,  131 => 54,  125 => 52,  123 => 51,  115 => 46,  111 => 45,  108 => 44,  106 => 43,  103 => 42,  101 => 35,  98 => 34,  93 => 32,  88 => 31,  86 => 30,  82 => 28,  77 => 27,  75 => 24,  69 => 21,  59 => 15,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
{% import \"TopxiaAdminBundle::macro.html.twig\" as admin_macro %}
{% import _self as self_macro %}

{% set menu = menu|default(null) %}
{% set currentMenu = permission(menu) %}
{% set cloudSmsInfo = isOldSmsUser()|default(false) %}

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
{# returns app.request.locale if available and app.request.defaultLocale if app.request.locale is not set#}
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\" />
  <title>

    {% block title %}
      {{ currentMenu.name|trans }} - {{ menu|parent_permission.name|trans }} - {{ menu|parent_permission.code|parent_permission.name|trans  }}
    {% endblock %}
    {% if not setting('copyright.owned') %} | EduSoho{% endif %}
  </title>

  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" />
    <link href=\"{{ asset(setting('site.favicon')) }}\" rel=\"shortcut icon\" />
  {% endif %}
  
  {% block stylesheets %}
  <link href=\"{{ asset('assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('assets/css/common.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('bundles/topxiaadmin/css/admin.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('bundles/topxiaadmin/css/admin_v2.css') }}\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assets/v2/css/es-icon.css') }}\" />
  {% endblock %}

  {% block javascripts %}{% endblock %}
  <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/libs/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/respond.min.js') }}\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
  {% if cloudSmsInfo %}
    <div class=\"alert alert-danger es-admin-alert\" role=\"alert\"><div class=\"text-center\"><strong>您好，ES云短信发送机制升级优化，网站目前短信剩余{{cloudSmsInfo.remainCount|default(0)}}条，为保证继续使用，请开通教育云，点击 <a href=\"http://open.edusoho.com/cloud/access\" target=\"_blank\"> 立即开通</a></strong></div></div>
  {% endif %}
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ url('admin') }}\">{% if not setting('copyright.owned') %}EduSoho{% endif %}{{'管理后台'|trans}}</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        {% include 'PermissionBundle:Templates:navigation.html.twig' with {parentCode:'admin'} %}

        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"{{path('admin_common_admin')}}\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> {{'常用'|trans}}</a>
            <ul class=\"dropdown-menu shortcuts\">
              {{ render(controller('TopxiaAdminBundle:CommonAdmin:commonAdmin')) }}
            </ul>
          </li>
          <li><a href=\"{{ path('homepage') }}\"><i class=\"glyphicon glyphicon-home\"></i> {{'回首页'|trans}}</a></li>

          <li class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> {{ app.user.nickname }} <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu main-list\">
              <li><a href=\"{{ path('logout') }}\"><i class=\"glyphicon glyphicon-off\"></i> {{'退出'|trans}}</a></li>
            </ul>
          </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container {% if cloudSmsInfo %}es-admin-container-down{% endif %}\">
    
    {% set notifies = plugin_update_notify() %}
    {% if not notifies is empty %}
      <div class=\"alert alert-warning\">
        【重要】网站升级v7.2.0后，为保证正常使用，请务必及时升级插件（{{ notifies }}）至最新版！请立即升级！ <a href=\"{{ path('admin_app_upgrades') }}\">查看详情</a>
      </div>
    {% endif %}

    {% block container %}
      <div class=\"row\">  
        {% block content %}
          <div class=\"col-md-2\">
            {% block sidebar %}
              {% include 'PermissionBundle:Templates:side-bar.html.twig' %}
            {% endblock %}
          </div>

          <div class=\"col-md-10\">
            <div class=\"page-header clearfix\">
              {% block page_flash_message %}

              {% endblock %}
              <h1 class=\"pull-left\">
                {% block page_title %}
                  {{ currentMenu.code|parent_permission.name|trans }}
                {% endblock %}
              </h1>
              <div class=\"pull-right\">

                {% block page_buttons %}

                  {% if currentMenu.mode|default('') == 'capsules' and capsule|default(false) %}
                    {% for m in sub_permissions(permission(capsule).code,'topBtn') %}
                      {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                    {% endfor %}
                  {% else %}
                    {% for m in sub_permissions(currentMenu.code,'topBtn') %}
                      {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                    {% endfor %}
                  {% endif %}
                {% endblock %}

              </div>
            </div>

            {% block content_header %}{% endblock %}
            
            {% block tabs %}{% include 'PermissionBundle:Templates:tabs.html.twig' %}{% endblock %}

            {% block capsule %}{% endblock %}

            {% block main %}{% endblock %}
          </div>

        {% endblock %}
      </div>
    {% endblock %}

  </div>

  {% block footer %}
    {{ setting('site.analytics')|raw }} 
  {% endblock %}

  {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app.js')} %}
  <div id=\"modal\" class=\"modal\" ></div>
  {% if setting('copyright.thirdCopyright') != 1 %}
    <div class=\"fixed-bar\">
      <a href=\"{{path('admin_feedback')}}\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>{{'产品'|trans}}<br/>{{'反馈'|trans}}</span>
      </a>
    </div>
  {% endif %}
</body>
</html>

{% macro menu_link_html(_context, menu, class) %}
  <a 
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}
  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  {% if menu.blank|default(false) %}
    target=\"blank\"
  {% endif %}
  >{{ menu.name|trans }}</a>
{% endmacro %}";
    }
}
