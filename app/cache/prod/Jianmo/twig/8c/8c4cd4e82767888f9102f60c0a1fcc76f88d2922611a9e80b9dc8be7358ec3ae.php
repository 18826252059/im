<?php

/* TopxiaAdminBundle:Widget:tooltip-widget.html.twig */
class __TwigTemplate_b3800af6c74c28774e79721db53219ffc6796926f3d3a2cab1c19d32bd8ad906 extends Twig_Template
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
        // line 1
        echo "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "glyphicon-question-sign")) : ("glyphicon-question-sign")), "html", null, true);
        echo " text-muted js-twig-widget-tips\" data-placement=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("placement", $context)) ? (_twig_default_filter((isset($context["placement"]) ? $context["placement"] : null), "bottom")) : ("bottom")), "html", null, true);
        echo "\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  </div>
</div>

";
        // line 9
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("widget/tooltip-widget");
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
        return array (  37 => 9,  30 => 5,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
