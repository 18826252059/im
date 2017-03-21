<?php

/* TopxiaAdminBundle:EduCloud:key-license-info.html.twig */
class __TwigTemplate_e54c7bc7c3b4670c1fc8dda0715fee982ed816eb1b2e6338d0748800b3b966b9 extends Twig_Template
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
        $__internal_bb0a6aa17defd244cbe236962f7571ebeffb69a7f224b4060de82fe0495696af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0a6aa17defd244cbe236962f7571ebeffb69a7f224b4060de82fe0495696af->enter($__internal_bb0a6aa17defd244cbe236962f7571ebeffb69a7f224b4060de82fe0495696af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:EduCloud:key-license-info.html.twig"));

        // line 1
        if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null))) {
            // line 2
            echo "
  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权码不正确，请重新设置！如您是商业用户，请联系EduSoho官方。")), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        } else {
            // line 12
            echo "
  ";
            // line 13
            if ( !(($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), null)) : (null))) {
                // line 14
                echo "
  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权域名"), "html", null, true);
                echo "</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
                echo " <span class=\"text-warning\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未授权"), "html", null, true);
                echo ")</span></p>
      <p class=\"help-block\">";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("域名绑定后，才能在应用中心购买应用；域名一旦绑定后，就不可更改！"), "html", null, true);
                echo "</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_bind");
                echo "\" data-loading-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在绑定域名，请稍等..."), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("绑定授权域名"), "html", null, true);
                echo "</button>
    </div>
  </div>

  ";
            } else {
                // line 30
                echo "
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权信息"), "html", null, true);
                echo "</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "levelName", array()), "html", null, true);
                echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("授权域名"), "html", null, true);
                echo "</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), 1)) : (1)) == 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), "html", null, true);
                } else {
                    echo "<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), ";"));
                    foreach ($context['_seq'] as $context["_key"] => $context["doman"]) {
                        echo twig_escape_filter($this->env, $context["doman"], "html", null, true);
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doman'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomainCount", array()), "html", null, true);
                    echo "个</span>";
                }
                echo "</p>
        ";
                // line 43
                if (!twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : $this->getContext($context, "currentHost")), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), ";"))) {
                    // line 44
                    echo "          <div class=\"alert alert-danger\">
            ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前域名 %currentHost% 与授权域名不符，将会影响%EduSoho%系统功能的使用；请使用授权域名访问此系统。", array("%currentHost%" => (isset($context["currentHost"]) ? $context["currentHost"] : $this->getContext($context, "currentHost")), "%EduSoho%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->removeCopyright("EduSoho"))), "html", null, true);
                    echo "
          </div>
        ";
                }
                // line 48
                echo "      </div>
    </div>



    ";
                // line 53
                if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "copyright", array()) && ($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "thirdCopyright", array()) != 2)) && twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : $this->getContext($context, "currentHost")), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), "licenseDomains", array()), ";")))) {
                    // line 54
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("版权名称"), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.name", ""), "html", null, true);
                    echo "\">
          <p class=\"help-block\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("填写版权名称后，网站前台页面底部将会显示“Powered By 你的版权名称”，为空则不显示版权信息。"), "html", null, true);
                    echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"";
                    // line 64
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud_key_copyright");
                    echo "\" data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在保存..."), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存版权名称"), "html", null, true);
                    echo "</button>
        </div>
      </div>
    ";
                } else {
                    // line 68
                    echo "    <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("版权信息"), "html", null, true);
                    echo "</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未去除版权信息"), "html", null, true);
                    echo "</p>
        </div>
      </div>
    ";
                }
                // line 75
                echo "



  ";
            }
            // line 80
            echo "
";
        }
        // line 82
        echo "
";
        
        $__internal_bb0a6aa17defd244cbe236962f7571ebeffb69a7f224b4060de82fe0495696af->leave($__internal_bb0a6aa17defd244cbe236962f7571ebeffb69a7f224b4060de82fe0495696af_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:key-license-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 82,  198 => 80,  191 => 75,  184 => 71,  179 => 69,  176 => 68,  165 => 64,  156 => 58,  152 => 57,  147 => 55,  144 => 54,  142 => 53,  135 => 48,  129 => 45,  126 => 44,  124 => 43,  117 => 42,  102 => 41,  97 => 39,  89 => 34,  84 => 32,  80 => 30,  68 => 25,  59 => 19,  53 => 18,  48 => 16,  44 => 14,  42 => 13,  39 => 12,  30 => 6,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if info.error|default(null) %}

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        {{ '授权码不正确，请重新设置！如您是商业用户，请联系EduSoho官方。'|trans|copyright_less }}
      </div>
    </div>
  </div>

{% else %}

  {% if not info.licenseDomains|default(null) %}

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">{{'授权域名'|trans}}</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">{{ app.request.server.get('HTTP_HOST') }} <span class=\"text-warning\">({{'尚未授权'|trans}})</span></p>
      <p class=\"help-block\">{{'域名绑定后，才能在应用中心购买应用；域名一旦绑定后，就不可更改！'|trans}}</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"{{ path('admin_setting_cloud_key_bind') }}\" data-loading-text=\"{{'正在绑定域名，请稍等...'|trans}}\">{{'绑定授权域名'|trans}}</button>
    </div>
  </div>

  {% else %}

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">{{'授权信息'|trans}}</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">{{ info.levelName }}</p>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">{{'授权域名'|trans}}</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">{% if info.licenseDomainCount|default(1) == 1 %}{{ info.licenseDomains }}{% else %}<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{% for doman in info.licenseDomains|split(';') %}{{doman}}
        {% endfor %}\">{{info.licenseDomainCount}}个</span>{% endif %}</p>
        {% if currentHost not in info.licenseDomains|split(';') %}
          <div class=\"alert alert-danger\">
            {{'当前域名 %currentHost% 与授权域名不符，将会影响%EduSoho%系统功能的使用；请使用授权域名访问此系统。'|trans({'%currentHost%':currentHost,'%EduSoho%': 'EduSoho'|copyright_less})}}
          </div>
        {% endif %}
      </div>
    </div>



    {% if info.copyright and info.thirdCopyright != 2 and currentHost in info.licenseDomains|split(';')%}
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'版权名称'|trans}}</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"{{ setting('copyright.name', '') }}\">
          <p class=\"help-block\">{{'填写版权名称后，网站前台页面底部将会显示“Powered By 你的版权名称”，为空则不显示版权信息。'|trans}}</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"{{ path('admin_setting_cloud_key_copyright') }}\" data-loading-text=\"{{'正在保存...'|trans}}\">{{'保存版权名称'|trans}}</button>
        </div>
      </div>
    {% else %}
    <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">{{'版权信息'|trans}}</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">{{'未去除版权信息'|trans}}</p>
        </div>
      </div>
    {% endif %}




  {% endif %}

{% endif %}

";
    }
}
