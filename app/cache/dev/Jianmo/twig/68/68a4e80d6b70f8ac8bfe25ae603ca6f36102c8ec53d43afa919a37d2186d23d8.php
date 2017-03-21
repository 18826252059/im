<?php

/* TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig */
class __TwigTemplate_1c96b9bf4dc24787591b99515a87ce77aebe72432e9757c2894db9524db4ef8b extends Twig_Template
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
        $__internal_436bb797f469e5e237ea4922bb14119bd873379ca9fbdc65d309ec3b3d848c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436bb797f469e5e237ea4922bb14119bd873379ca9fbdc65d309ec3b3d848c1a->enter($__internal_436bb797f469e5e237ea4922bb14119bd873379ca9fbdc65d309ec3b3d848c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "\">
    <a href=\"javascript:;\" data-url=\"";
            // line 3
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_notify");
            echo "\">
      ";
            // line 4
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                // line 5
                echo "        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      ";
            } else {
                // line 8
                echo "        <i class=\"es-icon es-icon-notifications\"></i>
      ";
            }
            // line 10
            echo "    </a>
  </li>
";
        } else {
            // line 13
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
";
        }
        
        $__internal_436bb797f469e5e237ea4922bb14119bd873379ca9fbdc65d309ec3b3d848c1a->leave($__internal_436bb797f469e5e237ea4922bb14119bd873379ca9fbdc65d309ec3b3d848c1a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 10,  40 => 8,  35 => 5,  33 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if app.user and app.user.isLogin() %}
  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'通知'|trans}}\">
    <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_notify') }}\">
      {% if app.user.newNotificationNum > 0 %}
        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      {% else %}
        <i class=\"es-icon es-icon-notifications\"></i>
      {% endif %}
    </a>
  </li>
{% else %}
  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'通知'|trans}}\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
{% endif %}
";
    }
}
