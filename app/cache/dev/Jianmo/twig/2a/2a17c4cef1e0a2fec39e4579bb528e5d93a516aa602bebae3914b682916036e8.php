<?php

/* OrgBundle:Org/Parts:table-thead-tr.html.twig */
class __TwigTemplate_aee9f55a0ba20fa1d7ce90efb49f261bd8a73d24b377595088059d9bc1b69770 extends Twig_Template
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
        $__internal_718b5f06d6df43d24202d15372a84ba954cedbe180dfae5bbe5acca5e12fc183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718b5f06d6df43d24202d15372a84ba954cedbe180dfae5bbe5acca5e12fc183->enter($__internal_718b5f06d6df43d24202d15372a84ba954cedbe180dfae5bbe5acca5e12fc183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org/Parts:table-thead-tr.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属组织机构"), "html", null, true);
            echo "</th>
";
        }
        
        $__internal_718b5f06d6df43d24202d15372a84ba954cedbe180dfae5bbe5acca5e12fc183->leave($__internal_718b5f06d6df43d24202d15372a84ba954cedbe180dfae5bbe5acca5e12fc183_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-thead-tr.html.twig";
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
\t<th width=\"15%\">{{ '所属组织机构'|trans }}</th>
{% endif %}";
    }
}
