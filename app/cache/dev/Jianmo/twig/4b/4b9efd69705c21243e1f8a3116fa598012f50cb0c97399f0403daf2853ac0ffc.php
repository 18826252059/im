<?php

/* TopxiaWebBundle:User:card-show.html.twig */
class __TwigTemplate_c2058aa35536a1e263a0a73ad96d0b0ee837f630be95cb7ef974215f8eb7652e extends Twig_Template
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
        $__internal_1e959f6e9801b22837d18f21f7a5f4f95fbc766e6fd594cea2234e1ba372fde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e959f6e9801b22837d18f21f7a5f4f95fbc766e6fd594cea2234e1ba372fde5->enter($__internal_1e959f6e9801b22837d18f21f7a5f4f95fbc766e6fd594cea2234e1ba372fde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:User:card-show.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:User:card-show.html.twig", 1);
        // line 2
        echo "
<div id=\"user-card-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" class=\"js-card-content\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  <div class=\"card-header media-middle\">
    <div class=\"media\">
      <div class=\"media-left\">
        <div class=\"user-avatar\">
          ";
        // line 8
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "", "avatar-md", false);
        echo "
          ";
        // line 9
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 10
            echo "            <span class=\"icon-user-status\"><i class=\"es-icon es-icon-school\"></i></span
          >
          ";
        } elseif ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("vip")) {
            // line 13
            echo "            ";
            $context["userVip"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getUserVipLevel($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()));
            // line 14
            echo "              ";
            if ((((isset($context["userVip"]) ? $context["userVip"] : $this->getContext($context, "userVip")) && (isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels"))) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : $this->getContext($context, "userVip")), "deadline", array()), "Y-m-d") > twig_date_format_filter($this->env, (isset($context["nowTime"]) ? $context["nowTime"] : $this->getContext($context, "nowTime")), "Y-m-d")))) {
                // line 15
                echo "                <span class=\"icon-user-status\"><img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : $this->getContext($context, "userVip")), "levelId", array()), array(), "array", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : $this->getContext($context, "userVip")), "levelId", array()), array(), "array", false, true), "icon", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))), "html", null, true);
                echo "\" alt=\"\"></span>
              ";
            }
            // line 17
            echo "            ";
        }
        // line 18
        echo "        </div>
      </div>
      <div class=\"media-body\">
        <div class=\"title\">
          ";
        // line 22
        echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "", false);
        echo "
        </div>
        <div class=\"content\">
          ";
        // line 25
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array())) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 28
        echo "        </div>
      </div>
    </div>
    ";
        // line 31
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())))) {
            // line 32
            echo "      <div class=\"metas\">
        <a class=\"btn btn-primary btn-xs follow-btn\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs unfollow-btn\" href=\"javascript:;\"  data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-xs direct-message-btn\" herf=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 38
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 40
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "signature", array())) {
            // line 41
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "signature", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 43
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有签名"), "html", null, true);
            echo "
    ";
        }
        // line 45
        echo "  </div>
  <div class=\"card-footer clearfix\">
    <span><a class=\"link-light\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_learn", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "learningNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在学"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-light\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "followingNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
        echo "</a></span>
    <span><a class=\"link-light\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follower", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "followerNum", array()), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("粉丝"), "html", null, true);
        echo "</a></span>
  </div>

</div>

";
        
        $__internal_1e959f6e9801b22837d18f21f7a5f4f95fbc766e6fd594cea2234e1ba372fde5->leave($__internal_1e959f6e9801b22837d18f21f7a5f4f95fbc766e6fd594cea2234e1ba372fde5_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:card-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 49,  157 => 48,  149 => 47,  145 => 45,  139 => 43,  133 => 41,  131 => 40,  127 => 38,  119 => 35,  109 => 34,  93 => 33,  90 => 32,  88 => 31,  83 => 28,  77 => 26,  75 => 25,  69 => 22,  63 => 18,  60 => 17,  54 => 15,  51 => 14,  48 => 13,  43 => 10,  41 => 9,  37 => 8,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}

<div id=\"user-card-{{ user.id }}\" class=\"js-card-content\" data-user-id=\"{{ user.id }}\">
  <div class=\"card-header media-middle\">
    <div class=\"media\">
      <div class=\"media-left\">
        <div class=\"user-avatar\">
          {{ web_macro.user_avatar(user, '', 'avatar-md', false) }}
          {% if 'ROLE_TEACHER' in user.roles %}
            <span class=\"icon-user-status\"><i class=\"es-icon es-icon-school\"></i></span
          >
          {% elseif is_plugin_installed('vip') %}
            {% set userVip = get_user_vip_level(user.id) %}
              {% if userVip and levels and userVip.deadline|date('Y-m-d') > nowTime|date('Y-m-d')%}
                <span class=\"icon-user-status\"><img src=\"{{levels[userVip.levelId].icon|default(asset('assets/v2/img/vip/vip_bronze.jpg'))}}\" alt=\"\"></span>
              {% endif %}
            {% endif %}
        </div>
      </div>
      <div class=\"media-body\">
        <div class=\"title\">
          {{ web_macro.user_link(user, '', false) }}
        </div>
        <div class=\"content\">
          {% if user.title %}
            {{ user.title }}
          {% endif %}
        </div>
      </div>
    </div>
    {% if not app.user or (app.user.id != user.id) %}
      <div class=\"metas\">
        <a class=\"btn btn-primary btn-xs follow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_follow', {id:user.id}) }}\" {% if isFollowed %} style=\"display:none;\"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}\"1\"{% else %}\"0\"{% endif %}>{{'关注'|trans}}</a>
        <a class=\"btn btn-default btn-xs unfollow-btn\" href=\"javascript:;\"  data-url=\"{{ path('user_unfollow', {id:user.id}) }}\" {% if not isFollowed %}style=\"display:none;\"{% endif %}>{{'已关注'|trans}}</a>
        <a class=\"btn btn-default btn-xs direct-message-btn\" herf=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"{{path('message_create', {toId:user.id})}}\">{{'私信'|trans}}</a>
      </div>
    {% endif %}
  </div>
  <div class=\"card-body\">
    {% if profile.signature %}
      {{ profile.signature }}
    {% else %}
      {{'还没有签名'|trans}}
    {% endif %}
  </div>
  <div class=\"card-footer clearfix\">
    <span><a class=\"link-light\" href=\"{{ path('user_learn',{id:user.id}) }}\">{{ user.learningNum }}<br>{{'在学'|trans}}</a></span>
    <span><a class=\"link-light\" href=\"{{ path('user_following',{id:user.id}) }}\">{{ user.followingNum }}<br>{{'关注'|trans}}</a></span>
    <span><a class=\"link-light\" href=\"{{ path('user_follower',{id:user.id}) }}\">{{ user.followerNum }}<br>{{'粉丝'|trans}}</a></span>
  </div>

</div>

";
    }
}
