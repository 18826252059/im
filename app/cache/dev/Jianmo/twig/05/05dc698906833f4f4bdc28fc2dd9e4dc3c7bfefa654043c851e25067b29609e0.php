<?php

/* expression.twig */
class __TwigTemplate_4ae4ccc9ba9427a27e67cce4f7316cbc2284ecd251340460f2aaac4134dcde65 extends Twig_Template
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
        $__internal_97517fb76d24b551cabee82d13e55df18814753353d17d08ec7c2be2d7a1c1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97517fb76d24b551cabee82d13e55df18814753353d17d08ec7c2be2d7a1c1df->enter($__internal_97517fb76d24b551cabee82d13e55df18814753353d17d08ec7c2be2d7a1c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        
        $__internal_97517fb76d24b551cabee82d13e55df18814753353d17d08ec7c2be2d7a1c1df->leave($__internal_97517fb76d24b551cabee82d13e55df18814753353d17d08ec7c2be2d7a1c1df_prof);

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
        return "{{classroom.id}}";
    }
}
