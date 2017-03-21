<?php

/* TopxiaAdminBundle:Widget:tooltip-widget.html.twig */
class __TwigTemplate_cf7989f27485e7b696f8d369955bf5ce8f5a9cb18370e960efa8691dbf2884a9 extends Twig_Template
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
        $__internal_fd3bdde3f8c9c1d40b1861b558a0cf3ddac27aaf814b9e64edd24d9e71a4c9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3bdde3f8c9c1d40b1861b558a0cf3ddac27aaf814b9e64edd24d9e71a4c9df->enter($__internal_fd3bdde3f8c9c1d40b1861b558a0cf3ddac27aaf814b9e64edd24d9e71a4c9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Widget:tooltip-widget.html.twig"));

        // line 1
        echo "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "glyphicon-question-sign")) : ("glyphicon-question-sign")), "html", null, true);
        echo " text-muted js-twig-widget-tips\" data-placement=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("placement", $context)) ? (_twig_default_filter((isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "bottom")) : ("bottom")), "html", null, true);
        echo "\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
  </div>
</div>

";
        // line 9
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("widget/tooltip-widget");
        
        $__internal_fd3bdde3f8c9c1d40b1861b558a0cf3ddac27aaf814b9e64edd24d9e71a4c9df->leave($__internal_fd3bdde3f8c9c1d40b1861b558a0cf3ddac27aaf814b9e64edd24d9e71a4c9df_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Widget:tooltip-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon {{ icon|default('glyphicon-question-sign') }} text-muted js-twig-widget-tips\" data-placement=\"{{ placement|default('bottom') }}\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    {{ content|raw }}
  </div>
</div>

{% do load_script('widget/tooltip-widget') %}";
    }
}
