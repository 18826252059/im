<?php

/* TopxiaWebBundle:User:header-block.html.twig */
class __TwigTemplate_c084298caa918b324eb732df1b97879f5bcb31a9ebc5ab737acde8003763725c extends Twig_Template
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
        $__internal_e512f2f789b364e2b758090e61f1c118d4bca93ebe6fe8e063408b43c11890ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e512f2f789b364e2b758090e61f1c118d4bca93ebe6fe8e063408b43c11890ac->enter($__internal_e512f2f789b364e2b758090e61f1c118d4bca93ebe6fe8e063408b43c11890ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:User:header-block.html.twig"));

        // line 1
        echo "<div class=\"user-center-header\" data-href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" data-sharpness=\"40\">
  <div class=\"container clearfix\">
    <div class=\"user-avatar\">
      <div class=\"avatar-wrap\">
        <img class=\"avatar-lg\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
        ";
        // line 6
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()))) {
            // line 7
            echo "          <span class=\"icon-user-status icon-md\"><i class=\"es-icon es-icon-school\"></i></span>
        ";
        }
        // line 9
        echo "      </div>
      <div class=\"name\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "
      </div>
      <div class=\"position\">
        <span class=\"mrm\">";
        // line 14
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无头衔"), "html", null, true);
        }
        echo "</span>
        ";
        // line 15
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "weibo", array()) && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isWeiboPublic", array()))) {
            // line 16
            echo "          <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "weibo", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-weibo\"></i></a>
        ";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "site", array())) {
            // line 19
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "site", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-link\"></i></a>
        ";
        }
        // line 21
        echo "        ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "qq", array()) && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isQQPublic", array()))) {
            // line 22
            echo "          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "qq", array()), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-qq\"></i></a>
        ";
        }
        // line 24
        echo "        ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "weixin", array()) && $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isWeixinPublic", array()))) {
            // line 25
            echo "          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "weixin", array()), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
        ";
        }
        // line 27
        echo "      </div>
      <div class=\"mates\">
        <span class=\"mrm\">";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("follower", $context)) ? (_twig_default_filter((isset($context["follower"]) ? $context["follower"] : $this->getContext($context, "follower")), 0)) : (0)), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("粉丝"), "html", null, true);
        echo "<span class=\"mlm mrm\">｜</span><span class=\"mrm\">";
        echo twig_escape_filter($this->env, ((array_key_exists("following", $context)) ? (_twig_default_filter((isset($context["following"]) ? $context["following"] : $this->getContext($context, "following")), 0)) : (0)), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
        echo "
      </div>
      ";
        // line 31
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())))) {
            // line 32
            echo "        <div class=\"actions\">
          <a class=\"btn btn-primary follow-btn mrl\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
            echo "</a>
          <a class=\"btn btn-default unfollow-btn mrl\" href=\"javascript:;\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关注"), "html", null, true);
            echo "</a>
          <button class=\"btn btn-ghost-white\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</button>
        </div>
      ";
        }
        // line 38
        echo "    </div>
    <div class=\"user-about hidden-sm hidden-xs\">
      <div class=\"user-about-content\">
        ";
        // line 41
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "signature", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "signature", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无签名"), "html", null, true);
        }
        // line 42
        echo "      </div>
    </div>
  </div>
  <div class=\"mask\"></div>
</div>";
        
        $__internal_e512f2f789b364e2b758090e61f1c118d4bca93ebe6fe8e063408b43c11890ac->leave($__internal_e512f2f789b364e2b758090e61f1c118d4bca93ebe6fe8e063408b43c11890ac_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:header-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 42,  146 => 41,  141 => 38,  133 => 35,  123 => 34,  113 => 33,  110 => 32,  108 => 31,  97 => 29,  93 => 27,  87 => 25,  84 => 24,  78 => 22,  75 => 21,  69 => 19,  66 => 18,  60 => 16,  58 => 15,  50 => 14,  44 => 11,  40 => 9,  36 => 7,  34 => 6,  30 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"user-center-header\" data-href=\"{{ filepath(user.largeAvatar, 'avatar.png') }}\" data-sharpness=\"40\">
  <div class=\"container clearfix\">
    <div class=\"user-avatar\">
      <div class=\"avatar-wrap\">
        <img class=\"avatar-lg\" src=\"{{ filepath(user.largeAvatar, 'avatar.png') }}\">
        {% if 'ROLE_TEACHER' in user.roles %}
          <span class=\"icon-user-status icon-md\"><i class=\"es-icon es-icon-school\"></i></span>
        {% endif %}
      </div>
      <div class=\"name\">
        {{user.nickname}}
      </div>
      <div class=\"position\">
        <span class=\"mrm\">{% if user.title %}{{ user.title }}{% else %}{{'暂无头衔'|trans}}{% endif %}</span>
        {% if user.weibo and user.isWeiboPublic %}
          <a  href=\"{{ user.weibo }}\" target=\"_blank\"><i class=\"es-icon es-icon-weibo\"></i></a>
        {% endif %}
        {% if user.site %}
          <a href=\"{{ user.site }}\" target=\"_blank\"><i class=\"es-icon es-icon-link\"></i></a>
        {% endif %}
        {% if user.qq and user.isQQPublic %}
          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ user.qq }}\"><i class=\"es-icon es-icon-qq\"></i></a>
        {% endif %}
        {% if user.weixin and user.isWeixinPublic %}
          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ user.weixin }}\"><i class=\"es-icon es-icon-weixin\"></i></a>
        {% endif %}
      </div>
      <div class=\"mates\">
        <span class=\"mrm\">{{follower|default(0)}}</span>{{'粉丝'|trans}}<span class=\"mlm mrm\">｜</span><span class=\"mrm\">{{following|default(0)}}</span>{{'关注'|trans}}
      </div>
      {% if (not app.user) or (app.user.id != user.id) %}
        <div class=\"actions\">
          <a class=\"btn btn-primary follow-btn mrl\" href=\"javascript:;\" data-url=\"{{ path('user_follow', {id:user.id}) }}\" {% if isFollowed %} style=\"display:none;\"{% endif %}>{{'关注'|trans}}</a>
          <a class=\"btn btn-default unfollow-btn mrl\" href=\"javascript:;\" data-url=\"{{ path('user_unfollow', {id:user.id}) }}\" {% if not isFollowed %} style=\"display:none;\" {% endif %}>{{'已关注'|trans}}</a>
          <button class=\"btn btn-ghost-white\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"{{path('message_create', {toId:user.id})}}\">{{'私信'|trans}}</button>
        </div>
      {% endif %}
    </div>
    <div class=\"user-about hidden-sm hidden-xs\">
      <div class=\"user-about-content\">
        {% if user.signature %}{{ user.signature}}{% else %}{{'暂无签名'|trans}}{% endif %}
      </div>
    </div>
  </div>
  <div class=\"mask\"></div>
</div>";
    }
}
