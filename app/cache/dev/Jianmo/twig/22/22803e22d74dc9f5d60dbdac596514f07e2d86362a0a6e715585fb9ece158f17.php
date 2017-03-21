<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_526b20466effce2f05b25b33a3675d27ab8764193095ac3a486356c2da43e607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5213234b30760362af5aa740eec37056d8e2b6ac1ed883dc6eedd55c276225d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5213234b30760362af5aa740eec37056d8e2b6ac1ed883dc6eedd55c276225d->enter($__internal_a5213234b30760362af5aa740eec37056d8e2b6ac1ed883dc6eedd55c276225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:index.html.twig"));

        // line 6
        $context["bodyClass"] = "homepage";
        // line 7
        $context["siteNav"] = "/";
        // line 8
        $context["script_controller"] = "index";
        // line 9
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 11
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 12
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 13
        $context["allConfig"] = $this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "allConfig", array());
        // line 15
        $context["isIndex"] = true;
        // line 16
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5213234b30760362af5aa740eec37056d8e2b6ac1ed883dc6eedd55c276225d->leave($__internal_a5213234b30760362af5aa740eec37056d8e2b6ac1ed883dc6eedd55c276225d_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_d8864ede6b0db71132f4fabc26da069f16f4afc8842f79b01e0f109c5f741eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8864ede6b0db71132f4fabc26da069f16f4afc8842f79b01e0f109c5f741eca->enter($__internal_d8864ede6b0db71132f4fabc26da069f16f4afc8842f79b01e0f109c5f741eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_d8864ede6b0db71132f4fabc26da069f16f4afc8842f79b01e0f109c5f741eca->leave($__internal_d8864ede6b0db71132f4fabc26da069f16f4afc8842f79b01e0f109c5f741eca_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_851ffb3054b1e715e446eee59dc008fcc7fa2c8b3c178483a701e9efb787ebf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851ffb3054b1e715e446eee59dc008fcc7fa2c8b3c178483a701e9efb787ebf0->enter($__internal_851ffb3054b1e715e446eee59dc008fcc7fa2c8b3c178483a701e9efb787ebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_851ffb3054b1e715e446eee59dc008fcc7fa2c8b3c178483a701e9efb787ebf0->leave($__internal_851ffb3054b1e715e446eee59dc008fcc7fa2c8b3c178483a701e9efb787ebf0_prof);

    }

    // line 18
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_e77af1d042cbc8c4693aaeb048ba735eaef5bb695073dad3ff02d53234740a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77af1d042cbc8c4693aaeb048ba735eaef5bb695073dad3ff02d53234740a29->enter($__internal_e77af1d042cbc8c4693aaeb048ba735eaef5bb695073dad3ff02d53234740a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 19
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 20
                echo "      ";
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 23
            echo "
      ";
            // line 24
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 25
            echo "      ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && ((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == "category-course"))) {
                // line 26
                echo "        ";
                $context["code"] = "recommend-course";
                // line 27
                echo "      ";
            }
            // line 28
            echo "
      ";
            // line 29
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 30
            echo "      ";
            if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == "friend-link")) {
                // line 31
                echo "         ";
                $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 31)->display(array_merge($context, array("friendlyLinks" => (isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : $this->getContext($context, "friendlyLinks")))));
                // line 32
                echo "      ";
            } elseif (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) != "footer-link")) {
                // line 33
                echo "        ";
                if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) != "course-grid-with-condition-index")) {
                    // line 34
                    echo "          ";
                    $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
                    $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))), 600                    );
                    $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                    if ($asm89CacheBody2 === false) {
                        ob_start();
                            // line 35
                            echo "            ";
                            $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 35)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                            // line 36
                            echo "          ";
                        
                        $asm89CacheBody2 = ob_get_clean();
                        $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                    }
                    echo $asm89CacheBody2;
                    // line 37
                    echo "        ";
                } else {
                    // line 38
                    echo "          ";
                    $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 38)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "      ";
            }
            // line 41
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        
        $__internal_e77af1d042cbc8c4693aaeb048ba735eaef5bb695073dad3ff02d53234740a29->leave($__internal_e77af1d042cbc8c4693aaeb048ba735eaef5bb695073dad3ff02d53234740a29_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 42,  180 => 41,  177 => 40,  174 => 39,  171 => 38,  168 => 37,  161 => 36,  158 => 35,  151 => 34,  148 => 33,  145 => 32,  142 => 31,  139 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 26,  125 => 25,  123 => 24,  120 => 23,  102 => 22,  92 => 20,  85 => 19,  79 => 18,  67 => 4,  55 => 3,  48 => 1,  46 => 16,  44 => 15,  42 => 13,  40 => 12,  38 => 11,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}
{% block description %}{{ setting('site.seo_description') }}{% endblock %}

{% set bodyClass = 'homepage' %}
{% set siteNav = '/' %}
{% set script_controller = 'index' %}
{% set _target_path = path('homepage') %}

{% set currentTheme = current_theme() %}
{% set themeConfig = isEditColor|default(false) ? currentTheme.config : currentTheme.confirmConfig %}
{% set allConfig = currentTheme.allConfig %}

{% set isIndex = true %}
{% set consultDisplay = true %}

{% block full_content %}
    {% cache 'jianmo/home/top/banner' 600 %}
      {{ block_show('jianmo:home_top_banner') }}
    {% endcache %}
    {% for config in themeConfig.blocks.left|default([]) %}

      {% set code = config.code %}
      {% if config.sortName|default('') == 'recommended' and code == 'category-course' %}
        {% set code = 'recommend-course' %}
      {% endif %}

      {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}
      {% if code == 'friend-link' %}
         {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {friendlyLinks:friendlyLinks} %}
      {% elseif code != 'footer-link'%}
        {% if code != 'course-grid-with-condition-index'%}
          {% cache 'jianmo/default/' ~ code 600 %}
            {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {config:config, category: category} %}
          {% endcache %}
        {% else %}
          {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {config:config, category: category} %}
        {% endif %}
      {% endif %}
    {% endfor %}

{% endblock %}";
    }
}
