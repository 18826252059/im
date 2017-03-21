<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_35ed086b693c802b30e82ecc3f33ff83a9fbcf3522bea4f845aecc59feca1652 extends Twig_Template
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
        $__internal_cbd52019cd568047d81174f5619a7a55d2a520eb72ab442b4b9665868642d2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd52019cd568047d81174f5619a7a55d2a520eb72ab442b4b9665868642d2b5->enter($__internal_cbd52019cd568047d81174f5619a7a55d2a520eb72ab442b4b9665868642d2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:header.html.twig"));

        // line 1
        echo "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          ";
        // line 17
        $context["navigations"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("NavigationsTree", array());
        // line 18
        echo "          ";
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 18)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => true)));
        // line 19
        echo "        </ul>
      </div>
    </div>
    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 23
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.logo")) {
            // line 24
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath(("../" . $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
      ";
        } else {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
      ";
        }
        // line 28
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 32
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 32)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => false)));
        // line 33
        echo "    </ul>
    <div class=\"navbar-user ";
        // line 34
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "        <li class=\"user-avatar-li nav-hover\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li role=\"presentation\" class=\"dropdown-header\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
            <li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人主页"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\">
              <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
                <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 47
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
            }
            // line 48
            echo "              </a>
            </li>
            <li><a href=\"";
            // line 50
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("账户中心"), "html", null, true);
            echo "</a></li>

            ";
            // line 52
            if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 54
            echo "
            <li class=\"hidden-lg\"><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "</a></li>
            <li class=\"hidden-lg\"><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出登录"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        <li class=\"visible-lg\">
          <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
            ";
            // line 62
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 63
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
                echo "
            ";
            } else {
                // line 65
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
                echo "
            ";
            }
            // line 67
            echo "          </a>
        </li>
        <li class=\"visible-lg nav-hover\">

          ";
            // line 71
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0))) {
                // line 72
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } elseif (( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 73
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 74
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } else {
                // line 76
                echo "            <a><i class=\"es-icon es-icon-mail\"></i></a>
          ";
            }
            // line 78
            echo "
          <ul class=\"dropdown-menu\" role=\"menu\">
            ";
            // line 80
            if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 81
                echo "              <li>
                <a href=\"";
                // line 82
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
                echo "\">
                  <span class=\"pull-right num\">";
                // line 83
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
                echo "
                </a>
              </li>
            ";
            }
            // line 88
            echo "            <li>
              <a href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\">
                <span class=\"pull-right num\">";
            // line 90
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                <i class=\"es-icon es-icon-mail\"></i>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "
              </a>
            </li>
          </ul>
        </li>
        ";
        } else {
            // line 97
            echo "        <li class=\"user-avatar-li nav-hover visible-xs\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
          </ul>
        </li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 109
        echo "        ";
        // line 110
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>";
        
        $__internal_cbd52019cd568047d81174f5619a7a55d2a520eb72ab442b4b9665868642d2b5->leave($__internal_cbd52019cd568047d81174f5619a7a55d2a520eb72ab442b4b9665868642d2b5_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 113,  316 => 111,  313 => 110,  311 => 109,  304 => 107,  298 => 106,  290 => 103,  284 => 102,  278 => 99,  274 => 97,  265 => 91,  259 => 90,  255 => 89,  252 => 88,  245 => 84,  239 => 83,  235 => 82,  232 => 81,  230 => 80,  226 => 78,  222 => 76,  218 => 74,  216 => 73,  213 => 72,  211 => 71,  205 => 67,  199 => 65,  193 => 63,  191 => 62,  187 => 61,  178 => 57,  168 => 56,  158 => 55,  155 => 54,  146 => 52,  135 => 50,  131 => 48,  125 => 47,  121 => 46,  114 => 44,  108 => 43,  104 => 42,  98 => 39,  94 => 37,  92 => 36,  85 => 34,  82 => 33,  80 => 32,  74 => 28,  68 => 26,  62 => 24,  60 => 23,  56 => 22,  51 => 19,  48 => 18,  46 => 17,  37 => 11,  32 => 9,  22 => 1,);
    }

    public function getSource()
    {
        return "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"{{ path('search') }}\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"{{'搜索'|trans}}\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          {% set navigations = data('NavigationsTree', {}) %}
          {% include 'TopxiaWebBundle:Default:top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: true} %}
        </ul>
      </div>
    </div>
    <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">
      {% if setting('site.logo') %}
        <img src=\"{{ filepath('../' ~ setting('site.logo'),'') }}\">
      {% else %}
        {{ setting('site.name', 'EDUSOHO') }}
      {% endif %}
    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      {% include 'TopxiaWebBundle:Default:top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: false} %}
    </ul>
    <div class=\"navbar-user {% if setting('esBar.enabled', 0) %} left {% endif %}\">
      <ul class=\"nav user-nav\">
        {% if app.user %}
        <li class=\"user-avatar-li nav-hover\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"{{ filepath(app.user.smallAvatar, 'avatar.png') }}\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li role=\"presentation\" class=\"dropdown-header\">{{ app.user.nickname }}</li>
            <li><a href=\"{{ path('user_show', {id:app.user.id}) }}\"><i class=\"es-icon es-icon-person\"></i>{{'个人主页'|trans}}</a></li>
            <li><a href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{'个人设置'|trans}}</a></li>
            <li class=\"hidden-lg\">
              <a href=\"{{ path('my') }}\">
                <i class=\"es-icon es-icon-eventnote\"></i>{% if 'ROLE_TEACHER' in app.user.roles %}{{'我的教学'|trans}}{% else %}{{'我的学习'|trans}}{% endif %}
              </a>
            </li>
            <li><a href=\"{% if setting('coin.coin_enabled') %}{{path('my_coin')}}{% else %}{{path('my_bill')}}{% endif %}\"><i class=\"es-icon es-icon-accountwallet\"></i>{{'账户中心'|trans}}</a></li>

            {% if has_permission('admin') %}<li><a href=\"{{ path('admin') }}\"><i class=\"es-icon es-icon-dashboard\"></i>{{'管理后台'|trans}}</a></li>
            {% endif %}

            <li class=\"hidden-lg\"><a href=\"{{ path('notification') }}\"><span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span><i class=\"es-icon es-icon-notificationson\"></i>{{'通知'|trans}}</a></li>
            <li class=\"hidden-lg\"><a href=\"{{ path('message') }}\"><span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span><i class=\"es-icon es-icon-mail\"></i>{{'私信'|trans}}</a></li>
            <li><a href=\"{{ path('logout') }}\"><i class=\"es-icon es-icon-power\"></i>{{'退出登录'|trans}}</a></li>
          </ul>
        </li>
        <li class=\"visible-lg\">
          <a href=\"{{ path('my') }}\">
            {% if 'ROLE_TEACHER' in app.user.roles %}
              {{'我的教学'|trans}}
            {% else %}
              {{'我的学习'|trans}}
            {% endif %}
          </a>
        </li>
        <li class=\"visible-lg nav-hover\">

          {% if setting('esBar.enabled', 0) and app.user.newMessageNum > 0 %}
            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          {% elseif ( not setting('esBar.enabled', 0)) and ( app.user.newNotificationNum > 0 or app.user.newMessageNum > 0) %}
            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          {% else %}
            <a><i class=\"es-icon es-icon-mail\"></i></a>
          {% endif %}

          <ul class=\"dropdown-menu\" role=\"menu\">
            {% if not setting('esBar.enabled', 0) %}
              <li>
                <a href=\"{{ path('notification') }}\">
                  <span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>{{'通知'|trans}}
                </a>
              </li>
            {% endif %}
            <li>
              <a href=\"{{ path('message') }}\">
                <span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span>
                <i class=\"es-icon es-icon-mail\"></i>{{'私信'|trans}}
              </a>
            </li>
          </ul>
        </li>
        {% else %}
        <li class=\"user-avatar-li nav-hover visible-xs\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"{{ asset('assets/img/default/avatar.png') }}\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'登录'|trans}}</a></li>
            <li><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'注册'|trans}}</a></li>
          </ul>
        </li>
        <li class=\"hidden-xs\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'登录'|trans}}</a></li>
        <li class=\"hidden-xs\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'注册'|trans}}</a></li>
        {% endif %}
        {# {% include 'TopxiaWebBundle:Default:switch-language.html.twig' %} #}
      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"{{ path('search') }}\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"{{'搜索'|trans}}\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>";
    }
}
