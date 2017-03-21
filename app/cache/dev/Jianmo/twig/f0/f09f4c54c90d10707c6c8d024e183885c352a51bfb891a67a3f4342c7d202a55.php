<?php

/* expression.twig */
class __TwigTemplate_150eda508529af610ccc6615c284bd4a4833e9082c1dde654f289056407b68ca extends Twig_Template
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
        $__internal_52ee0e8536779ae9b18b5388fffbefb832455bff9ab32b188c16f541024603d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ee0e8536779ae9b18b5388fffbefb832455bff9ab32b188c16f541024603d3->enter($__internal_52ee0e8536779ae9b18b5388fffbefb832455bff9ab32b188c16f541024603d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_mobile_iap", "0"), "html", null, true);
        
        $__internal_52ee0e8536779ae9b18b5388fffbefb832455bff9ab32b188c16f541024603d3->leave($__internal_52ee0e8536779ae9b18b5388fffbefb832455bff9ab32b188c16f541024603d3_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{setting('magic.enable_mobile_iap', '0')}}";
    }
}
