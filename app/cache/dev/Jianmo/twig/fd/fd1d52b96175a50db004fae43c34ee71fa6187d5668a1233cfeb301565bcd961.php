<?php

/* TopxiaAdminBundle:App:app-detail.html.twig */
class __TwigTemplate_3cd4f34dec5c28857fe163ec56c1743793e5c2371afd2b66a0872c0262086ddb extends Twig_Template
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
        $__internal_cced8c36a3ac79a93dcf2c86868b600ec759f6ea19b62173d0aba2c7df3be497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cced8c36a3ac79a93dcf2c86868b600ec759f6ea19b62173d0aba2c7df3be497->enter($__internal_cced8c36a3ac79a93dcf2c86868b600ec759f6ea19b62173d0aba2c7df3be497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:App:app-detail.html.twig"));

        // line 1
        echo "      <tr>
        <td>
          <img src=\"http://open.edusoho.com/files/product/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "icon", array()), "html", null, true);
        echo "\" class=\"app-img pull-left mrl mtm\"/>
          <div class=\"mtm\">

              <h4>
                <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "id", array()), "html", null, true);
        echo "\">
                  <strong class=\"text-primary\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "name", array()), "html", null, true);
        echo "</strong>
                  ";
        // line 9
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "licensed", array())) {
            // line 10
            echo "                  <span class=\"label label-success mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("商业版"), "html", null, true);
            echo "</span>
                  ";
        }
        // line 12
        echo "                  </a>
              </h4>

          </div>

          <div class=\"info mtm mbm clearfix\">
            <div class=\"left-info pull-left\">

              <div class=\"text-muted\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者："), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "developerName", array()), "html", null, true);
        echo "</div>
              <div class=\"mts text-muted\">";
        // line 21
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "type", array()) == "theme")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应用"), "html", null, true);
        }
        // line 22
        echo "              </div>
            </div>

            <div class=\"middle-info pull-left short-long-text\">
              <div class=\"short-text text-muted\">";
        // line 26
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "description", array()), 80);
        echo " <span class=\"trigger\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开"), "html", null, true);
        echo ")</span></div>
              <div class=\"long-text text-muted\">";
        // line 27
        echo $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "description", array());
        echo " <span class=\"trigger\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
        echo ")</span></div>
            </div>
";
        
        $__internal_cced8c36a3ac79a93dcf2c86868b600ec759f6ea19b62173d0aba2c7df3be497->leave($__internal_cced8c36a3ac79a93dcf2c86868b600ec759f6ea19b62173d0aba2c7df3be497_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:app-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  77 => 26,  71 => 22,  65 => 21,  59 => 20,  49 => 12,  43 => 10,  41 => 9,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "      <tr>
        <td>
          <img src=\"http://open.edusoho.com/files/product/{{ app.icon }}\" class=\"app-img pull-left mrl mtm\"/>
          <div class=\"mtm\">

              <h4>
                <a target=\"_blank\" href=\"http://open.edusoho.com/app/{{ app.id }}\">
                  <strong class=\"text-primary\">{{ app.name }}</strong>
                  {% if app.licensed %}
                  <span class=\"label label-success mls\">{{'商业版'|trans}}</span>
                  {% endif %}
                  </a>
              </h4>

          </div>

          <div class=\"info mtm mbm clearfix\">
            <div class=\"left-info pull-left\">

              <div class=\"text-muted\">{{'作者：'|trans}} {{ app.developerName }}</div>
              <div class=\"mts text-muted\">{% if app.type == \"theme\" %}{{'主题'|trans}}{% else %}{{'应用'|trans}}{% endif %}
              </div>
            </div>

            <div class=\"middle-info pull-left short-long-text\">
              <div class=\"short-text text-muted\">{{ app.description|plain_text(80) }} <span class=\"trigger\">({{'展开'|trans}})</span></div>
              <div class=\"long-text text-muted\">{{ app.description|raw }} <span class=\"trigger\">({{'收起'|trans}})</span></div>
            </div>
";
    }
}
