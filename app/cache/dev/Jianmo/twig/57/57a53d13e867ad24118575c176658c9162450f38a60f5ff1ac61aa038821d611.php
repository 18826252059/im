<?php

/* TopxiaWebBundle:Course:courses-block-list.html.twig */
class __TwigTemplate_0b190ab2d4c07772f62dc2e37e8347aa5f11e2af6d134bbb4165bfd9820dc0ae extends Twig_Template
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
        $__internal_33cfb0235178d53220563582b70cd8df31cb5f95bc896f1519fb62840034a6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cfb0235178d53220563582b70cd8df31cb5f95bc896f1519fb62840034a6e4->enter($__internal_33cfb0235178d53220563582b70cd8df31cb5f95bc896f1519fb62840034a6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Course:courses-block-list.html.twig"));

        // line 1
        echo "<div class=\"course-list\">
  <div class=\"row\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 4
            echo "      <div class=\"col-lg-3 col-md-4 col-xs-6\">
        <div class=\"course-item\">
          <div class=\"course-img\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
              ";
            // line 8
            if (($this->getAttribute($context["course"], "discountId", array()) > 0)) {
                // line 9
                echo "                ";
                if (($this->getAttribute($context["course"], "discount", array()) == 0)) {
                    // line 10
                    echo "                  <!-- 限免 -->
                  <span class=\"tag-discount free\"></span>
                ";
                } else {
                    // line 13
                    echo "                  <!-- 折扣 -->
                  <span class=\"tag-discount\"></span>
                ";
                }
                // line 16
                echo "              ";
            }
            // line 17
            echo "              ";
            if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                // line 18
                echo "                <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
              ";
            } elseif (($this->getAttribute(            // line 19
$context["course"], "serializeMode", array()) == "finished")) {
                // line 20
                echo "                <span class=\"tags\"><span class=\"tag-finished\"></span></span>
              ";
            }
            // line 22
            echo "              ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 23
                echo "                <span class=\"tags\">
                  <span class=\"tag-live\"></span>
                </span>
              ";
            }
            // line 27
            echo "              <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">
            </a>
          </div>
          <div class=\"course-info\">
            <div class=\"title\">
              <a class=\"link-dark\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas clearfix\">
              ";
            // line 37
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 38
                echo "              <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</span>
              ";
            }
            // line 40
            echo "              <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "ratingNum", array()), "html", null, true);
            echo "</span>
              ";
            // line 41
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:courses-block-list.html.twig", 41)->display(array_merge($context, array("shows" => "price")));
            // line 42
            echo "            </div>
          </div>
        </div>
      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </div>
</div>";
        
        $__internal_33cfb0235178d53220563582b70cd8df31cb5f95bc896f1519fb62840034a6e4->leave($__internal_33cfb0235178d53220563582b70cd8df31cb5f95bc896f1519fb62840034a6e4_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:courses-block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  128 => 42,  126 => 41,  121 => 40,  115 => 38,  113 => 37,  106 => 33,  102 => 32,  91 => 27,  85 => 23,  82 => 22,  78 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  62 => 13,  57 => 10,  54 => 9,  52 => 8,  48 => 7,  43 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"course-list\">
  <div class=\"row\">
    {% for course in courses %}
      <div class=\"col-lg-3 col-md-4 col-xs-6\">
        <div class=\"course-item\">
          <div class=\"course-img\">
            <a href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\">
              {% if course.discountId > 0 %}
                {% if course.discount == 0 %}
                  <!-- 限免 -->
                  <span class=\"tag-discount free\"></span>
                {% else %}
                  <!-- 折扣 -->
                  <span class=\"tag-discount\"></span>
                {% endif %}
              {% endif %}
              {% if course.serializeMode == 'serialize' %}
                <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
              {% elseif course.serializeMode == 'finished' %}
                <span class=\"tags\"><span class=\"tag-finished\"></span></span>
              {% endif %}
              {% if course.type == 'live' %}
                <span class=\"tags\">
                  <span class=\"tag-live\"></span>
                </span>
              {% endif %}
              <img class=\"img-responsive\" src=\"{{ filepath(course.middlePicture, 'course.png') }}\" alt=\"{{ course.title }}\">
            </a>
          </div>
          <div class=\"course-info\">
            <div class=\"title\">
              <a class=\"link-dark\" href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\">
                {{ course.title }}
              </a>
            </div>
            <div class=\"metas clearfix\">
              {% if setting('course.show_student_num_enabled', '1') == 1  %}
              <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>{{ course.studentNum }}</span>
              {% endif %}
              <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>{{ course.ratingNum }}</span>
              {% include 'TopxiaWebBundle:Course:Widget/course-price.html.twig' with {shows:'price'} %}
            </div>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>";
    }
}
