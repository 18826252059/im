<?php

/* TopxiaAdminBundle::cloud-app-layout.html.twig */
class __TwigTemplate_520f1630502691bf8b60bdfb3c3aa0302bde85309ee207cd1e66624f6c96ad04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle::cloud-app-layout.html.twig", 1);
        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e586598410f45788c72916e682a7cd1531c00374faed65bce95f64112b5efc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e586598410f45788c72916e682a7cd1531c00374faed65bce95f64112b5efc5c->enter($__internal_e586598410f45788c72916e682a7cd1531c00374faed65bce95f64112b5efc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle::cloud-app-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e586598410f45788c72916e682a7cd1531c00374faed65bce95f64112b5efc5c->leave($__internal_e586598410f45788c72916e682a7cd1531c00374faed65bce95f64112b5efc5c_prof);

    }

    // line 2
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_550d1bf54d1b49af14adb00262533757842e36c436214e6817342fd490dac13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550d1bf54d1b49af14adb00262533757842e36c436214e6817342fd490dac13b->enter($__internal_550d1bf54d1b49af14adb00262533757842e36c436214e6817342fd490dac13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 3
        echo "  ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial()) {
            // line 4
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <p style = \"text-align:center;font-size:16px\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ES应用由EduSoho官方提供,授权版⽤户可以通过"), "html", null, true);
            echo "<a href=\"http://open.edusoho.com\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EduSoho开放云平台"), "html", null, true);
            echo "</a>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
            echo "</p>
        <p style = \"text-align:center;font-size:16px\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如需购买授权版，请联系销售人员。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或"), "html", null, true);
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
        }
        
        $__internal_550d1bf54d1b49af14adb00262533757842e36c436214e6817342fd490dac13b->leave($__internal_550d1bf54d1b49af14adb00262533757842e36c436214e6817342fd490dac13b_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  53 => 12,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}
{% block content_header %}
  {% if is_trial() %}
    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <p style = \"text-align:center;font-size:16px\">
        {{'ES应用由EduSoho官方提供,授权版⽤户可以通过'|trans}}<a href=\"http://open.edusoho.com\" target=\"_blank\">{{'EduSoho开放云平台'|trans}}</a>{{'购买'|trans}}</p>
        <p style = \"text-align:center;font-size:16px\">{{'如需购买授权版，请联系销售人员。'|trans}}{{'电话：'|trans}}4008041114 {{'或'|trans}}
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  {% endif %}
{% endblock %}";
    }
}
