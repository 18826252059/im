<?php

/* TopxiaWebBundle::site-hint.html.twig */
class __TwigTemplate_24f54c5bc71247fae116f4a5298779afc4e4823e2be8a9b73ffecf3ee26749f1 extends Twig_Template
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
        $__internal_cf300a0ae9b5e227900bb5e8f23fc3a2299f317c0215bc356013ebf723ede0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf300a0ae9b5e227900bb5e8f23fc3a2299f317c0215bc356013ebf723ede0f6->enter($__internal_cf300a0ae9b5e227900bb5e8f23fc3a2299f317c0215bc356013ebf723ede0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::site-hint.html.twig"));

        // line 1
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || ((isset($context["hideSetupHint"]) ? $context["hideSetupHint"] : $this->getContext($context, "hideSetupHint")) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle::email-setting.html.twig", "TopxiaWebBundle::site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $asm89CacheStrategy3 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key3 = $asm89CacheStrategy3->generateKey("layout/announcement", 600            );
            $asm89CacheBody3 = $asm89CacheStrategy3->fetchBlock($asm89Key3);
            if ($asm89CacheBody3 === false) {
                ob_start();
                    // line 5
                    echo "\t\t";
                    $this->loadTemplate("TopxiaWebBundle:Announcement:announcement.html.twig", "TopxiaWebBundle::site-hint.html.twig", 5)->display($context);
                    // line 6
                    echo "\t";
                
                $asm89CacheBody3 = ob_get_clean();
                $asm89CacheStrategy3->saveBlock($asm89Key3, $asm89CacheBody3);
            }
            echo $asm89CacheBody3;
        }
        
        $__internal_cf300a0ae9b5e227900bb5e8f23fc3a2299f317c0215bc356013ebf723ede0f6->leave($__internal_cf300a0ae9b5e227900bb5e8f23fc3a2299f317c0215bc356013ebf723ede0f6_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if app.user and app.user.setup == 0 and (hideSetupHint is not defined or hideSetupHint != true) and not app.request.cookies.get('close_set_email_alert') %}
\t{% include 'TopxiaWebBundle::email-setting.html.twig' %}
{% else %}
\t{% cache 'layout/announcement' 600 %}
\t\t{% include 'TopxiaWebBundle:Announcement:announcement.html.twig' %}
\t{% endcache %}
{% endif %}";
    }
}
