<?php

/* TopxiaWebBundle:Announcement:announcement.html.twig */
class __TwigTemplate_77d34e20535c11fec46ebeda291d31c60cd575132c4a4493557d73428ff240d0 extends Twig_Template
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
        $__internal_10ce016a22a21e2807e69ab86967f3817c9ef14267ff1550ef132659ce536b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ce016a22a21e2807e69ab86967f3817c9ef14267ff1550ef132659ce536b73->enter($__internal_10ce016a22a21e2807e69ab86967f3817c9ef14267ff1550ef132659ce536b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Announcement:announcement.html.twig"));

        // line 1
        $context["announcements"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Announcement", array("count" => 3));
        // line 2
        if (((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "close_announcements_alert"), "method"))) {
            // line 3
            echo "<div class=\"alert alert-warning alert-notice announcements-alert hidden-xs\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 7
                echo "        ";
                if ($this->getAttribute($context["announcement"], "url", array())) {
                    // line 8
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
            ";
                    // line 11
                    echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50);
                    echo "
          </a>
        </div>
        ";
                } else {
                    // line 15
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          ";
                    // line 17
                    echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 50);
                    echo "
        </div>
        ";
                }
                // line 20
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
";
        }
        
        $__internal_10ce016a22a21e2807e69ab86967f3817c9ef14267ff1550ef132659ce536b73->leave($__internal_10ce016a22a21e2807e69ab86967f3817c9ef14267ff1550ef132659ce536b73_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  63 => 20,  57 => 17,  53 => 15,  46 => 11,  42 => 10,  38 => 8,  35 => 7,  31 => 6,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set announcements = data('Announcement',{ count:3 }) %}
{% if announcements and not app.request.cookies.get('close_announcements_alert') %}
<div class=\"alert alert-warning alert-notice announcements-alert hidden-xs\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      {% for announcement in announcements %}
        {% if announcement.url %}
        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"{{announcement.url}}\" target=\"_blank\">
            {{announcement.content|sub_text(50)}}
          </a>
        </div>
        {% else %}
        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          {{announcement.content|sub_text(50)}}
        </div>
        {% endif %}
      {% endfor %}

    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
{% endif %}
";
    }
}
