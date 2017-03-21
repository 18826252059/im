<?php

/* TopxiaWebBundle:CourseManage:index.html.twig */
class __TwigTemplate_55aa81addcf4857b863c03f6b27252ed234ccabb0d4580bb620d08e5ae89313a extends Twig_Template
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
        $__internal_2d1a53b83bbb128d3e6a7953bc2e13a5826740ae76befe06a299bc554934c684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1a53b83bbb128d3e6a7953bc2e13a5826740ae76befe06a299bc554934c684->enter($__internal_2d1a53b83bbb128d3e6a7953bc2e13a5826740ae76befe06a299bc554934c684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseManage:index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["_context"] = $context;
        // line 3
        echo "<script type=\"text/javascript\">
document.location.href='";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
        echo "';
</script>";
        
        $__internal_2d1a53b83bbb128d3e6a7953bc2e13a5826740ae76befe06a299bc554934c684->leave($__internal_2d1a53b83bbb128d3e6a7953bc2e13a5826740ae76befe06a299bc554934c684_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{% set _context = _context %}
<script type=\"text/javascript\">
document.location.href='{{permission_path(menu)}}';
</script>";
    }
}
