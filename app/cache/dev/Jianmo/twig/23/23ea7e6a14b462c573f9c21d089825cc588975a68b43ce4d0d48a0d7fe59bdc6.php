<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_857d53ee79f086fbeb391ded22830c06761f4313b374d4f011479555ce49b6d6 extends Twig_Template
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
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65998ac2fc9e8b1c8b35b28d846e66603280beb563f0b357b2e771444a44574e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65998ac2fc9e8b1c8b35b28d846e66603280beb563f0b357b2e771444a44574e->enter($__internal_65998ac2fc9e8b1c8b35b28d846e66603280beb563f0b357b2e771444a44574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
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
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo " style=\"height: 100%;\">

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
        
        $__internal_65998ac2fc9e8b1c8b35b28d846e66603280beb563f0b357b2e771444a44574e->leave($__internal_65998ac2fc9e8b1c8b35b28d846e66603280beb563f0b357b2e771444a44574e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_a52a07fe96207ce7eeea3097d0574648139ef7ac461cf243cde190675b225832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52a07fe96207ce7eeea3097d0574648139ef7ac461cf243cde190675b225832->enter($__internal_a52a07fe96207ce7eeea3097d0574648139ef7ac461cf243cde190675b225832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
        
        $__internal_a52a07fe96207ce7eeea3097d0574648139ef7ac461cf243cde190675b225832->leave($__internal_a52a07fe96207ce7eeea3097d0574648139ef7ac461cf243cde190675b225832_prof);

    }

    // line 19
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_74421e4ed4608316c2987c1f35b088564cde250d196099fd1b17815943a89dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74421e4ed4608316c2987c1f35b088564cde250d196099fd1b17815943a89dc1->enter($__internal_74421e4ed4608316c2987c1f35b088564cde250d196099fd1b17815943a89dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_74421e4ed4608316c2987c1f35b088564cde250d196099fd1b17815943a89dc1->leave($__internal_74421e4ed4608316c2987c1f35b088564cde250d196099fd1b17815943a89dc1_prof);

    }

    // line 20
    public function block_description($context, array $blocks = array())
    {
        $__internal_222017c0352708a9b2864b28cb8ade1f17b8ba9e9252b7ccab5532932c7e2d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222017c0352708a9b2864b28cb8ade1f17b8ba9e9252b7ccab5532932c7e2d90->enter($__internal_222017c0352708a9b2864b28cb8ade1f17b8ba9e9252b7ccab5532932c7e2d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_222017c0352708a9b2864b28cb8ade1f17b8ba9e9252b7ccab5532932c7e2d90->leave($__internal_222017c0352708a9b2864b28cb8ade1f17b8ba9e9252b7ccab5532932c7e2d90_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_915d4bd3a742a2c72e89824fb2053cc74f9e5aaeaf907ceec751d8449efc9c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915d4bd3a742a2c72e89824fb2053cc74f9e5aaeaf907ceec751d8449efc9c25->enter($__internal_915d4bd3a742a2c72e89824fb2053cc74f9e5aaeaf907ceec751d8449efc9c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 32
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 32)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false)))));
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
        
        $__internal_915d4bd3a742a2c72e89824fb2053cc74f9e5aaeaf907ceec751d8449efc9c25->leave($__internal_915d4bd3a742a2c72e89824fb2053cc74f9e5aaeaf907ceec751d8449efc9c25_prof);

    }

    // line 46
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_ced62307bc9173b1d618bc57d6ceef5fb0838571dec23f93ee01915fa6f3f37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced62307bc9173b1d618bc57d6ceef5fb0838571dec23f93ee01915fa6f3f37e->enter($__internal_ced62307bc9173b1d618bc57d6ceef5fb0838571dec23f93ee01915fa6f3f37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        
        $__internal_ced62307bc9173b1d618bc57d6ceef5fb0838571dec23f93ee01915fa6f3f37e->leave($__internal_ced62307bc9173b1d618bc57d6ceef5fb0838571dec23f93ee01915fa6f3f37e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_62cc15cbef8b1defddc5636cafd7035a8c139bfa3b1ad4979cd74809ab34eaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cc15cbef8b1defddc5636cafd7035a8c139bfa3b1ad4979cd74809ab34eaa3->enter($__internal_62cc15cbef8b1defddc5636cafd7035a8c139bfa3b1ad4979cd74809ab34eaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "  <div class=\"es-wrap\" style=\"height: 100%;\">

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
        // line 70
        echo "      ";
        // line 71
        echo "    ";
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
        
        $__internal_62cc15cbef8b1defddc5636cafd7035a8c139bfa3b1ad4979cd74809ab34eaa3->leave($__internal_62cc15cbef8b1defddc5636cafd7035a8c139bfa3b1ad4979cd74809ab34eaa3_prof);

    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
        $__internal_9969cd359574ad283ca11efa56dc11e9d9fd1ea4b0d1b26bbc39b81e20feaf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9969cd359574ad283ca11efa56dc11e9d9fd1ea4b0d1b26bbc39b81e20feaf56->enter($__internal_9969cd359574ad283ca11efa56dc11e9d9fd1ea4b0d1b26bbc39b81e20feaf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 55
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 55)->display($context);
        // line 56
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "    ";
        
        $__internal_9969cd359574ad283ca11efa56dc11e9d9fd1ea4b0d1b26bbc39b81e20feaf56->leave($__internal_9969cd359574ad283ca11efa56dc11e9d9fd1ea4b0d1b26bbc39b81e20feaf56_prof);

    }

    // line 59
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_c63b74c48919b6c6af890991d81d86f7bd8764bfbfdca0436d35ac80c316bb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63b74c48919b6c6af890991d81d86f7bd8764bfbfdca0436d35ac80c316bb79->enter($__internal_c63b74c48919b6c6af890991d81d86f7bd8764bfbfdca0436d35ac80c316bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 60
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 61
        echo "
      <div id=\"content-container\" class=\"container\" style=\"height: 100%;\">
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
        
        $__internal_c63b74c48919b6c6af890991d81d86f7bd8764bfbfdca0436d35ac80c316bb79->leave($__internal_c63b74c48919b6c6af890991d81d86f7bd8764bfbfdca0436d35ac80c316bb79_prof);

    }

    // line 60
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_2322d6f4a591ebf4f681b01f87f2a7237a36abd08087b715f4a7e9bfbefe727e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2322d6f4a591ebf4f681b01f87f2a7237a36abd08087b715f4a7e9bfbefe727e->enter($__internal_2322d6f4a591ebf4f681b01f87f2a7237a36abd08087b715f4a7e9bfbefe727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_2322d6f4a591ebf4f681b01f87f2a7237a36abd08087b715f4a7e9bfbefe727e->leave($__internal_2322d6f4a591ebf4f681b01f87f2a7237a36abd08087b715f4a7e9bfbefe727e_prof);

    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        $__internal_25978c80bc35410117ceceeeae8fb86a1607c3be607ee974734692466f1fb507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25978c80bc35410117ceceeeae8fb86a1607c3be607ee974734692466f1fb507->enter($__internal_25978c80bc35410117ceceeeae8fb86a1607c3be607ee974734692466f1fb507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_25978c80bc35410117ceceeeae8fb86a1607c3be607ee974734692466f1fb507->leave($__internal_25978c80bc35410117ceceeeae8fb86a1607c3be607ee974734692466f1fb507_prof);

    }

    // line 66
    public function block_bottom_content($context, array $blocks = array())
    {
        $__internal_b8184bd757fae1b1d2b7a850d5d22457795d9e3e29afe5a386ed8bf76932cdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8184bd757fae1b1d2b7a850d5d22457795d9e3e29afe5a386ed8bf76932cdce->enter($__internal_b8184bd757fae1b1d2b7a850d5d22457795d9e3e29afe5a386ed8bf76932cdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_content"));

        
        $__internal_b8184bd757fae1b1d2b7a850d5d22457795d9e3e29afe5a386ed8bf76932cdce->leave($__internal_b8184bd757fae1b1d2b7a850d5d22457795d9e3e29afe5a386ed8bf76932cdce_prof);

    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_aa3bf42a382ff09de84f2f74618113da164e016e128062bc4d1d06c240fabd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3bf42a382ff09de84f2f74618113da164e016e128062bc4d1d06c240fabd64->enter($__internal_aa3bf42a382ff09de84f2f74618113da164e016e128062bc4d1d06c240fabd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_aa3bf42a382ff09de84f2f74618113da164e016e128062bc4d1d06c240fabd64->leave($__internal_aa3bf42a382ff09de84f2f74618113da164e016e128062bc4d1d06c240fabd64_prof);

    }

    // line 76
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_e9a8bd3416c7e8b6914021bb5e03467d0644bd55708c27f98e0440537013b34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a8bd3416c7e8b6914021bb5e03467d0644bd55708c27f98e0440537013b34b->enter($__internal_e9a8bd3416c7e8b6914021bb5e03467d0644bd55708c27f98e0440537013b34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

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
        
        $__internal_e9a8bd3416c7e8b6914021bb5e03467d0644bd55708c27f98e0440537013b34b->leave($__internal_e9a8bd3416c7e8b6914021bb5e03467d0644bd55708c27f98e0440537013b34b_prof);

    }

    // line 82
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_d84178b15df2d0c7e2e77ce8a2b82d9bbcb9da3a96d160bf5dc6289d289f1b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84178b15df2d0c7e2e77ce8a2b82d9bbcb9da3a96d160bf5dc6289d289f1b5b->enter($__internal_d84178b15df2d0c7e2e77ce8a2b82d9bbcb9da3a96d160bf5dc6289d289f1b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        // line 83
        echo "    ";
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
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
        
        $__internal_d84178b15df2d0c7e2e77ce8a2b82d9bbcb9da3a96d160bf5dc6289d289f1b5b->leave($__internal_d84178b15df2d0c7e2e77ce8a2b82d9bbcb9da3a96d160bf5dc6289d289f1b5b_prof);

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
        return array (  440 => 88,  437 => 87,  434 => 86,  431 => 85,  428 => 84,  425 => 83,  419 => 82,  412 => 80,  409 => 79,  406 => 78,  403 => 77,  397 => 76,  386 => 73,  375 => 66,  364 => 63,  353 => 60,  346 => 67,  344 => 66,  340 => 64,  338 => 63,  334 => 61,  331 => 60,  325 => 59,  318 => 57,  315 => 56,  312 => 55,  306 => 54,  295 => 90,  292 => 89,  290 => 82,  287 => 81,  285 => 76,  281 => 74,  279 => 73,  276 => 72,  274 => 71,  272 => 70,  269 => 68,  267 => 59,  264 => 58,  262 => 54,  258 => 52,  252 => 51,  241 => 46,  233 => 38,  224 => 36,  219 => 35,  216 => 33,  213 => 32,  210 => 31,  204 => 30,  192 => 20,  180 => 19,  166 => 16,  160 => 15,  151 => 101,  147 => 99,  145 => 98,  141 => 96,  139 => 95,  136 => 94,  134 => 51,  125 => 49,  121 => 47,  119 => 46,  113 => 43,  109 => 42,  105 => 40,  103 => 30,  100 => 29,  95 => 27,  90 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  66 => 20,  60 => 19,  57 => 18,  55 => 15,  45 => 8,  38 => 2,  36 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
{# returns app.request.locale if available and app.request.defaultLocale if app.request.locale is not set#}
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    {%- block title -%}
      {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if  setting('copyright.owned','0') != '1' or setting('copyright.thirdCopyright')|default(0) == 2 %} - Powered By EduSoho{% endif %}
    {%- endblock -%}
  </title>
  <meta name=\"keywords\" content=\"{% spaceless %}{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}{% endspaceless %}\" />
  <meta name=\"description\" content=\"{% spaceless %}{% block description %}{{ setting('site.seo_description') }}{% endblock %}{% endspaceless %}\" />
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\" />
  <meta content=\"{{ app.user.isLogin()|default(0) }}\" name=\"is-login\" />
  <meta content=\"{{ setting('login_bind.weixinmob_enabled')|default(0) }}\" name=\"is-open\" />
  {{ setting('login_bind.verify_code', '')|raw }}
  {% if setting('site.favicon') %}
  <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" media=\"screen\"/>
  {% endif %}

  {% block stylesheets %}
    {% set currentTheme = current_theme() %}
    {% include 'TopxiaWebBundle:Default:stylesheet.html.twig' with {config: currentTheme, isEditColor: isEditColor|default(false)} %}

    {# webpack #}
    {% for path in css() %}
      <link href=\"{{ asset('build/' ~ path) }}\" rel=\"stylesheet\" />
    {% endfor %}

  {% endblock %}

  <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/libs/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/respond.min.js') }}\"></script>
  <![endif]-->

  {% block head_scripts %}{% endblock %}

</head>
<body {% if bodyClass|default('') %}class=\"{{ bodyClass }}\"{% endif %} style=\"height: 100%;\">

{% block body %}
  <div class=\"es-wrap\" style=\"height: 100%;\">

    {% block header %}
      {% include 'TopxiaWebBundle::site-hint.html.twig' %}
      {% include 'TopxiaWebBundle:Default:header.html.twig' %}
    {% endblock %}

    {% block full_content %}
      {% block top_content %}{% endblock %}

      <div id=\"content-container\" class=\"container\" style=\"height: 100%;\">
        {% block content %}{% endblock %}
      </div>

      {% block bottom_content %}{% endblock %}
    {% endblock %}

    {#{% block footer %}#}
      {#{% include 'TopxiaWebBundle:Default:footer.html.twig' %}#}
    {#{% endblock %}#}

    {% block bottom %}{% endblock %}
  </div>

  {% block esBar %}
    {% if setting('esBar.enabled', 0) %}
        {% include 'TopxiaWebBundle:EsBar:index.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block floatConsult %}
    {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}
      {% if not setting('esBar.enabled',0) %}
        {% include 'TopxiaWebBundle::float-consult.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  <div id=\"login-modal\" class=\"modal\" data-url=\"{{ path('login_ajax') }}\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
{% endblock %}

{% if script() is empty %}
  {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}
{% else %}
  {# webpack #}
  {% include 'TopxiaWebBundle::script_boot_webpack.html.twig' %}
{% endif %}

</body>
</html>";
    }
}
