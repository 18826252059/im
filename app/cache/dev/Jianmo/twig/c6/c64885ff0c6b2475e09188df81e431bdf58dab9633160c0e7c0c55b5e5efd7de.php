<?php

/* TopxiaAdminBundle:EduCloud:key.html.twig */
class __TwigTemplate_215ccf5e7b1e45c84b84e61cf36da3f9da8f0c224eb2f7e3fedf46ba5412fdd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:EduCloud:layout.html.twig", "TopxiaAdminBundle:EduCloud:key.html.twig", 1);
        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:EduCloud:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_254d759fc92168ede53f29b72444e95c28c39c7a53a020dc093104ee25c52829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254d759fc92168ede53f29b72444e95c28c39c7a53a020dc093104ee25c52829->enter($__internal_254d759fc92168ede53f29b72444e95c28c39c7a53a020dc093104ee25c52829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:EduCloud:key.html.twig"));

        // line 3
        $context["submenu"] = "key";
        // line 5
        $context["script_controller"] = "setting/cloud-key";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254d759fc92168ede53f29b72444e95c28c39c7a53a020dc093104ee25c52829->leave($__internal_254d759fc92168ede53f29b72444e95c28c39c7a53a020dc093104ee25c52829_prof);

    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_53d483312493f5d29c4a8442b5d1b19da69a42fff4e541741d68ebe96916089c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d483312493f5d29c4a8442b5d1b19da69a42fff4e541741d68ebe96916089c->enter($__internal_53d483312493f5d29c4a8442b5d1b19da69a42fff4e541741d68ebe96916089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 8
        echo "  ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial()) {
            // line 9
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <p style = \"text-align:center;font-size:16px\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前版本为试用版,不能进行更多操作。如需购买授权版,请联系销售人员。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或 "), "html", null, true);
            echo "
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("套餐信息"), "html", null, true);
            echo "</h1>
    </div>
    ";
            // line 32
            if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array()), null)) : (null))) {
                // line 33
                echo "    <form class=\"form-horizontal\" id=\"cloud-edition-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("套餐名称："), "html", null, true);
                echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array()), null)) : (null)), "html", null, true);
                echo "
          </p>
        </div>
      </div>
      ";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "startDate", array()), null)) : (null)) && (($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "endDate", array()), null)) : (null)))) {
                    // line 42
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务期限："), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "startDate", array()), "Y.m.d"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "endDate", array()), "Y.m.d"), "html", null, true);
                    echo "
          </p>
        </div>
      </div>
      ";
                }
                // line 51
                echo "      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
                echo "\">
    </form>
    ";
            } elseif (((($this->getAttribute(            // line 53
(isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null)) == "error")) {
                // line 54
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网络问题，无法连接到EduSoho开放云平台，暂时无法获取信息"), "html", null, true);
                echo "
    ";
            } else {
                // line 56
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未购买套餐，点击"), "html", null, true);
                echo "<a href=\"http://www.edusoho.com/services/price?type=price\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("这里"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("了解详情"), "html", null, true);
                echo "
    ";
            }
            // line 58
            echo "
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权码"), "html", null, true);
            echo "</h1>
    </div>
    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">AccessKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.cloud_access_key"), "html", null, true);
            echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">SecretKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.cloud_secret_key"), "html", null, true);
            echo "
          </p>
        </div>
      </div>
      ";
            // line 78
            if ((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("developer.debug"), 0) || ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "level", array()))) : ("")) == "none"))) {
                // line 79
                echo "      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <a href=\"";
                // line 81
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_update");
                echo "\" class=\"btn btn-sm btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置新的授权码"), "html", null, true);
                echo "</a>
          </div>
      </div>
      ";
            }
            // line 85
            echo "
      <div class=\"form-group\" id=\"loading-text\">
        <div class=\"col-md-6 col-md-offset-3\">
          <p class=\"text-warning\"><strong>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在读取授权信息，请稍等..."), "html", null, true);
            echo "</strong></p>
        </div>
      </div>

      <div id=\"key-license-info\" data-url=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_info");
            echo "\">
        
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
        
        $__internal_53d483312493f5d29c4a8442b5d1b19da69a42fff4e541741d68ebe96916089c->leave($__internal_53d483312493f5d29c4a8442b5d1b19da69a42fff4e541741d68ebe96916089c_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:key.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 96,  207 => 92,  200 => 88,  195 => 85,  186 => 81,  182 => 79,  180 => 78,  173 => 74,  162 => 66,  153 => 60,  149 => 58,  139 => 56,  133 => 54,  131 => 53,  125 => 51,  115 => 46,  109 => 43,  106 => 42,  104 => 41,  97 => 37,  92 => 35,  88 => 33,  86 => 32,  81 => 30,  75 => 28,  58 => 17,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle:EduCloud:layout.html.twig' %}

{% set submenu = 'key' %}

{% set script_controller = 'setting/cloud-key' %}

{% block maincontent %}
  {% if is_trial() %}
    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <p style = \"text-align:center;font-size:16px\">{{'当前版本为试用版,不能进行更多操作。如需购买授权版,请联系销售人员。'|trans}}{{'电话：'|trans}}4008041114 {{'或 '|trans}}
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  {% else %}
    {{ web_macro.flash_messages() }}
    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">{{'套餐信息'|trans}}</h1>
    </div>
    {% if info.level|default(null) %}
    <form class=\"form-horizontal\" id=\"cloud-edition-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'套餐名称：'|trans}}</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">{{ info.levelName|default(null) }}
          </p>
        </div>
      </div>
      {% if info.startDate|default(null) and info.endDate|default(null) %}
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'服务期限：'|trans}}</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            {{ info.startDate|date('Y.m.d') }} - {{ info.endDate|date('Y.m.d') }}
          </p>
        </div>
      </div>
      {% endif %}
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
    {% elseif info.error|default(null) == 'error' %}
      {{'网络问题，无法连接到EduSoho开放云平台，暂时无法获取信息'|trans}}
    {% else %}
      {{'尚未购买套餐，点击'|trans}}<a href=\"http://www.edusoho.com/services/price?type=price\" target=\"_blank\">{{'这里'|trans}}</a>{{'了解详情'|trans}}
    {% endif %}

    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">{{'授权码'|trans}}</h1>
    </div>
    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">AccessKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">{{ setting('storage.cloud_access_key') }}</p>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">SecretKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            {{ setting('storage.cloud_secret_key') }}
          </p>
        </div>
      </div>
      {% if setting(\"developer.debug\")|default(0) or info.level|default() == 'none' %}
      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <a href=\"{{ path('admin_setting_cloud_key_update') }}\" class=\"btn btn-sm btn-default\">{{'设置新的授权码'|trans}}</a>
          </div>
      </div>
      {% endif %}

      <div class=\"form-group\" id=\"loading-text\">
        <div class=\"col-md-6 col-md-offset-3\">
          <p class=\"text-warning\"><strong>{{'正在读取授权信息，请稍等...'|trans}}</strong></p>
        </div>
      </div>

      <div id=\"key-license-info\" data-url=\"{{ path('admin_setting_cloud_key_info') }}\">
        
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
    </form>
  {% endif %}
{% endblock %}";
    }
}
