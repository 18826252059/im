<?php

/* TopxiaWebBundle:Default:footer-link.html.twig */
class __TwigTemplate_2c9360491d2b4a3af08c162d853043ee28571f693dfec9f7e2c9dd08e9346e91 extends Twig_Template
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
        $__internal_80e5fa00667d6b9ea84db761f731214dee7519aef33f211e7c269714ccc71d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e5fa00667d6b9ea84db761f731214dee7519aef33f211e7c269714ccc71d0c->enter($__internal_80e5fa00667d6b9ea84db761f731214dee7519aef33f211e7c269714ccc71d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:footer-link.html.twig"));

        // line 1
        echo "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:bottom_info");
        echo "
    </div>
  </div>
</div>";
        
        $__internal_80e5fa00667d6b9ea84db761f731214dee7519aef33f211e7c269714ccc71d0c->leave($__internal_80e5fa00667d6b9ea84db761f731214dee7519aef33f211e7c269714ccc71d0c_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      {{ block_show('jianmo:bottom_info') }}
    </div>
  </div>
</div>";
    }
}
