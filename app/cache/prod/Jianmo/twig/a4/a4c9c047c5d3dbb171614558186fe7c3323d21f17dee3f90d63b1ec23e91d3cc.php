<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_13c0c1d299ba1ad5ffc2826a5fde1b79c2910af461dec289bfc676f2f23fd601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
";
        // line 8
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 19
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 20
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 23
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 24
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 25
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")) {
            // line 26
            echo "  <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
  <!--[if lt IE 9]>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 46
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 47
        echo "
</head>
<body ";
        // line 49
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        if (twig_test_empty($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script())) {
            // line 96
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 96)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        } else {
            // line 98
            echo "  ";
            // line 99
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle::script_boot_webpack.html.twig", "TopxiaWebBundle::layout.html.twig", 99)->display($context);
        }
        // line 101
        echo "
</body>
</html>";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
    }

    // line 19
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 20
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 32
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 32)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : null), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false)))));
        // line 33
        echo "
    ";
        // line 35
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 36
            echo "      <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/" . $context["path"])), "html", null, true);
            echo "\" rel=\"stylesheet\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
  ";
    }

    // line 46
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "  <div class=\"es-wrap\">

    ";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('full_content', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('bottom', $context, $blocks);
        // line 74
        echo "  </div>

  ";
        // line 76
        $this->displayBlock('esBar', $context, $blocks);
        // line 81
        echo "
  ";
        // line 82
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 89
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
        // line 55
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 55)->display($context);
        // line 56
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "    ";
    }

    // line 59
    public function block_full_content($context, array $blocks = array())
    {
        // line 60
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 61
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "      </div>

      ";
        // line 66
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 67
        echo "    ";
    }

    // line 60
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 70)->display($context);
        // line 71
        echo "    ";
    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 76
    public function block_esBar($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 78
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 78)->display($context);
            // line 79
            echo "    ";
        }
        // line 80
        echo "  ";
    }

    // line 82
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 84
            echo "      ";
            if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 85
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 85)->display($context);
                // line 86
                echo "      ";
            }
            // line 87
            echo "    ";
        }
        // line 88
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 88,  359 => 87,  356 => 86,  353 => 85,  350 => 84,  347 => 83,  344 => 82,  340 => 80,  337 => 79,  334 => 78,  331 => 77,  328 => 76,  323 => 73,  319 => 71,  316 => 70,  313 => 69,  308 => 66,  303 => 63,  298 => 60,  294 => 67,  292 => 66,  288 => 64,  286 => 63,  282 => 61,  279 => 60,  276 => 59,  272 => 57,  269 => 56,  266 => 55,  263 => 54,  255 => 90,  252 => 89,  250 => 82,  247 => 81,  245 => 76,  241 => 74,  239 => 73,  236 => 72,  234 => 69,  231 => 68,  229 => 59,  226 => 58,  224 => 54,  220 => 52,  217 => 51,  212 => 46,  207 => 38,  198 => 36,  193 => 35,  190 => 33,  187 => 32,  184 => 31,  181 => 30,  175 => 20,  169 => 19,  158 => 16,  155 => 15,  149 => 101,  145 => 99,  143 => 98,  139 => 96,  137 => 95,  134 => 94,  132 => 51,  123 => 49,  119 => 47,  117 => 46,  111 => 43,  107 => 42,  103 => 40,  101 => 30,  98 => 29,  93 => 27,  88 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 20,  58 => 19,  55 => 18,  53 => 15,  43 => 8,  36 => 2,  34 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
