<?php

/* OrgBundle:Org/Parts:table-body-checkbox.html.twig */
class __TwigTemplate_8ee35f8e91efc125ec629cd668cad7e12fd253597e8ad5128301cc772e3ed241 extends Twig_Template
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
        $__internal_244137f5d27e16da9239f542ee22f528b40770f672922cb5ae06b0a0f026de16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244137f5d27e16da9239f542ee22f528b40770f672922cb5ae06b0a0f026de16->enter($__internal_244137f5d27e16da9239f542ee22f528b40770f672922cb5ae06b0a0f026de16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org/Parts:table-body-checkbox.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
";
        }
        
        $__internal_244137f5d27e16da9239f542ee22f528b40770f672922cb5ae06b0a0f026de16->leave($__internal_244137f5d27e16da9239f542ee22f528b40770f672922cb5ae06b0a0f026de16_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('magic.enable_org','0') %}
\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
{% endif %}
";
    }
}
