<?php

/* TopxiaAdminBundle:OperationAnalysis:register.html.twig */
class __TwigTemplate_00df4428c2f8851ab39141ca294c032a839e54cb93e457c2cc2ea18e0d9ce49f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig", "TopxiaAdminBundle:OperationAnalysis:register.html.twig", 1);
        $this->blocks = array(
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baea37db25c61f54d4df621913b4beb1558fcaa962ea932607a7827035d1215e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baea37db25c61f54d4df621913b4beb1558fcaa962ea932607a7827035d1215e->enter($__internal_baea37db25c61f54d4df621913b4beb1558fcaa962ea932607a7827035d1215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:OperationAnalysis:register.html.twig"));

        // line 2
        $context["script_controller"] = "analysis/register";
        // line 3
        $context["href"] = "admin_operation_analysis_register";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baea37db25c61f54d4df621913b4beb1558fcaa962ea932607a7827035d1215e->leave($__internal_baea37db25c61f54d4df621913b4beb1558fcaa962ea932607a7827035d1215e_prof);

    }

    // line 4
    public function block_analysisBody($context, array $blocks = array())
    {
        $__internal_8f72c9cc66795e6ce5fdafcea11e91388e36b4f61ec2540a481a252306f338b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f72c9cc66795e6ce5fdafcea11e91388e36b4f61ec2540a481a252306f338b5->enter($__internal_8f72c9cc66795e6ce5fdafcea11e91388e36b4f61ec2540a481a252306f338b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "analysisBody"));

        // line 5
        echo "  <div class=\"col-md-12\">  
              ";
        // line 6
        if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "trend")) {
            // line 7
            echo "\t <div id=\"line-data\"></div>
\t           <input id=\"data\"  type=\"hidden\" value='";
            // line 8
            if ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) {
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
            }
            echo "'>  
\t          </input>
\t          <input id=\"registerStartDate\"  type=\"hidden\" value='";
            // line 10
            if ((isset($context["registerStartDate"]) ? $context["registerStartDate"] : $this->getContext($context, "registerStartDate"))) {
                echo twig_escape_filter($this->env, (isset($context["registerStartDate"]) ? $context["registerStartDate"] : $this->getContext($context, "registerStartDate")), "html", null, true);
            }
            echo "'>  
\t          </input>
              ";
        } elseif ((        // line 12
(isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "detail")) {
            // line 13
            echo "                    ";
            $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:register.table.html.twig", "TopxiaAdminBundle:OperationAnalysis:register.html.twig", 13)->display($context);
            // line 14
            echo "              ";
        }
        // line 15
        echo "  </div>

";
        
        $__internal_8f72c9cc66795e6ce5fdafcea11e91388e36b4f61ec2540a481a252306f338b5->leave($__internal_8f72c9cc66795e6ce5fdafcea11e91388e36b4f61ec2540a481a252306f338b5_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  72 => 14,  69 => 13,  67 => 12,  60 => 10,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  39 => 4,  32 => 1,  30 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig' %}
{% set script_controller = 'analysis/register' %}
{% set href=\"admin_operation_analysis_register\" %}
{% block analysisBody %}
  <div class=\"col-md-12\">  
              {% if tab==\"trend\" %}
\t <div id=\"line-data\"></div>
\t           <input id=\"data\"  type=\"hidden\" value='{% if data %}{{data}}{% endif %}'>  
\t          </input>
\t          <input id=\"registerStartDate\"  type=\"hidden\" value='{% if registerStartDate %}{{registerStartDate}}{% endif %}'>  
\t          </input>
              {% elseif tab==\"detail\" %}
                    {% include 'TopxiaAdminBundle:OperationAnalysis:register.table.html.twig' %}
              {% endif %}
  </div>

{% endblock %}
   ";
    }
}
