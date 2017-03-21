<?php

/* TopxiaWebBundle:EsBar:layout.html.twig */
class __TwigTemplate_ed5822a440974f5dfd51a584adf620f749627c2a146153a0e3b6ecca156bad3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f521e0f54905aa0597d84ee2edb1b43f53a0724b9e232478d6795084c1b944f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f521e0f54905aa0597d84ee2edb1b43f53a0724b9e232478d6795084c1b944f->enter($__internal_4f521e0f54905aa0597d84ee2edb1b43f53a0724b9e232478d6795084c1b944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:layout.html.twig"));

        // line 1
        echo "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-light\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  ";
        // line 3
        $this->displayBlock('esBarTitle', $context, $blocks);
        // line 6
        echo "</div>

<div class=\"bar-main-body\">
  ";
        // line 9
        $this->displayBlock('esBarBody', $context, $blocks);
        // line 12
        echo "</div>
";
        
        $__internal_4f521e0f54905aa0597d84ee2edb1b43f53a0724b9e232478d6795084c1b944f->leave($__internal_4f521e0f54905aa0597d84ee2edb1b43f53a0724b9e232478d6795084c1b944f_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_55c9232f1aa484b81b61c8238f0a34fd16c163f784780713ea95a1d283a095c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c9232f1aa484b81b61c8238f0a34fd16c163f784780713ea95a1d283a095c0->enter($__internal_55c9232f1aa484b81b61c8238f0a34fd16c163f784780713ea95a1d283a095c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "
  ";
        
        $__internal_55c9232f1aa484b81b61c8238f0a34fd16c163f784780713ea95a1d283a095c0->leave($__internal_55c9232f1aa484b81b61c8238f0a34fd16c163f784780713ea95a1d283a095c0_prof);

    }

    // line 9
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_c12f9609dc3de84f475bf3ccfafd37e30c1081fbd1c8e9cceab1a3aa7bfef23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12f9609dc3de84f475bf3ccfafd37e30c1081fbd1c8e9cceab1a3aa7bfef23f->enter($__internal_c12f9609dc3de84f475bf3ccfafd37e30c1081fbd1c8e9cceab1a3aa7bfef23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 10
        echo "
  ";
        
        $__internal_c12f9609dc3de84f475bf3ccfafd37e30c1081fbd1c8e9cceab1a3aa7bfef23f->leave($__internal_c12f9609dc3de84f475bf3ccfafd37e30c1081fbd1c8e9cceab1a3aa7bfef23f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  51 => 4,  45 => 3,  37 => 12,  35 => 9,  30 => 6,  28 => 3,  24 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-light\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  {% block esBarTitle %}

  {% endblock %}
</div>

<div class=\"bar-main-body\">
  {% block esBarBody %}

  {% endblock %}
</div>
";
    }
}
