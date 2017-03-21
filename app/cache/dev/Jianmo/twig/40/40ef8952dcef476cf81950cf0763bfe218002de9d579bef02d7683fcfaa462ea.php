<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_07dc3bda479f41cfa89ea306b11a8864f0526fc278cdfc68b86aa33870830261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07fc52005214b5a0359ea0e734dbe5b89121436620b1e88242c43d31d5e9cb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fc52005214b5a0359ea0e734dbe5b89121436620b1e88242c43d31d5e9cb7c->enter($__internal_07fc52005214b5a0359ea0e734dbe5b89121436620b1e88242c43d31d5e9cb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::bootstrap-modal-layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 2);
        // line 3
        echo "
<div class=\"modal-dialog ";
        // line 4
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter((isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 11
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter((isset($context["hide_footer"]) ? $context["hide_footer"] : $this->getContext($context, "hide_footer")), false)) : (false))) {
            // line 12
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 14
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 15
        echo "  </div>
</div>
";
        
        $__internal_07fc52005214b5a0359ea0e734dbe5b89121436620b1e88242c43d31d5e9cb7c->leave($__internal_07fc52005214b5a0359ea0e734dbe5b89121436620b1e88242c43d31d5e9cb7c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c82b61958d89ca9e4c111ece8bf4d7f34fdf5bfb082aa97d82f31a1f55eecece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82b61958d89ca9e4c111ece8bf4d7f34fdf5bfb082aa97d82f31a1f55eecece->enter($__internal_c82b61958d89ca9e4c111ece8bf4d7f34fdf5bfb082aa97d82f31a1f55eecece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c82b61958d89ca9e4c111ece8bf4d7f34fdf5bfb082aa97d82f31a1f55eecece->leave($__internal_c82b61958d89ca9e4c111ece8bf4d7f34fdf5bfb082aa97d82f31a1f55eecece_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e510c91a13b153e63f57aff77179687860f3c9a7e5dd232b9b91fcb90fdaf549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e510c91a13b153e63f57aff77179687860f3c9a7e5dd232b9b91fcb90fdaf549->enter($__internal_e510c91a13b153e63f57aff77179687860f3c9a7e5dd232b9b91fcb90fdaf549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e510c91a13b153e63f57aff77179687860f3c9a7e5dd232b9b91fcb90fdaf549->leave($__internal_e510c91a13b153e63f57aff77179687860f3c9a7e5dd232b9b91fcb90fdaf549_prof);

    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c3b994cec71493a179968501c67bc4cb095ab932c837688bcf5c7366c682bc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b994cec71493a179968501c67bc4cb095ab932c837688bcf5c7366c682bc74->enter($__internal_c3b994cec71493a179968501c67bc4cb095ab932c837688bcf5c7366c682bc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c3b994cec71493a179968501c67bc4cb095ab932c837688bcf5c7366c682bc74->leave($__internal_c3b994cec71493a179968501c67bc4cb095ab932c837688bcf5c7366c682bc74_prof);

    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
        $__internal_2c91f20e35aba15d2fc47171edebb86b68767aebc5d2e83d8a21a9fd51f78eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c91f20e35aba15d2fc47171edebb86b68767aebc5d2e83d8a21a9fd51f78eee->enter($__internal_2c91f20e35aba15d2fc47171edebb86b68767aebc5d2e83d8a21a9fd51f78eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_2c91f20e35aba15d2fc47171edebb86b68767aebc5d2e83d8a21a9fd51f78eee->leave($__internal_2c91f20e35aba15d2fc47171edebb86b68767aebc5d2e83d8a21a9fd51f78eee_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 14,  94 => 12,  83 => 10,  72 => 8,  63 => 15,  60 => 14,  54 => 12,  52 => 11,  48 => 10,  43 => 8,  33 => 4,  30 => 3,  28 => 2,  26 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
{% import \"TopxiaAdminBundle::macro.html.twig\" as admin_macro %}

<div class=\"modal-dialog {% if modal_class|default('') %} {{ modal_class }}{% endif %}\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">{% block title %}{% endblock %}</h4>
    </div>
    <div class=\"modal-body\">{% block body %}{% endblock %}</div>
    {% if not hide_footer|default(false) %}
      <div class=\"modal-footer\">{% block footer %}{% endblock %}</div>
    {% endif %}
    {% block script %}{% endblock %}
  </div>
</div>
";
    }
}
