<?php

/* TopxiaWebBundle:Default:groups.html.twig */
class __TwigTemplate_b6262e49337a74ce69338fa5646b8b49ecb3c18c4265aa15aa37bdb6631e8aea extends Twig_Template
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
        $__internal_f29ea2667834ba388a0e653c04de751f1cb41102dccb8d70690b16d37d431fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29ea2667834ba388a0e653c04de751f1cb41102dccb8d70690b16d37d431fe9->enter($__internal_f29ea2667834ba388a0e653c04de751f1cb41102dccb8d70690b16d37d431fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:groups.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:groups.html.twig", 1);
        // line 2
        echo "<!-- 小组动态 -->
";
        // line 3
        $context["groups"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("HotGroup", array("count" => 6));
        // line 4
        $context["reviews"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("LatestCourseReviews", array("count" => 4));
        // line 5
        echo "<section class=\"dynamic-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"dynamic-section-main row\">
      ";
        // line 12
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select1", array()) == "checked")) {
            // line 13
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门小组"), "html", null, true);
            echo "</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 22
                echo "                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                      ";
                // line 25
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeLazyImg($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "avatar-square-md", $this->getAttribute($context["group"], "title", array()), "group.png");
                echo "
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-light\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                echo "
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                echo "</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 46
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select2", array()) == "checked")) {
            // line 47
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新资讯"), "html", null, true);
            echo "
              <a class=\"more\" href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show");
            echo "\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            ";
            // line 56
            $context["featuredArticles"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("LatestArticles", array("type" => "featured", "count" => 2));
            // line 57
            echo "            ";
            if ((isset($context["featuredArticles"]) ? $context["featuredArticles"] : $this->getContext($context, "featuredArticles"))) {
                // line 58
                echo "            <ul class=\"index-recommend-aricle clearfix\">
              ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["featuredArticles"]) ? $context["featuredArticles"] : $this->getContext($context, "featuredArticles")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 60
                    echo "                <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                        echo "last";
                    }
                    echo "\">
                  <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\">
                    ";
                    // line 62
                    $context["defaultImg"] = (("../../v2/img/article/article_banner_" . $this->getAttribute($context["loop"], "index", array())) . ".jpg");
                    // line 63
                    echo "                    ";
                    echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeLazyImg($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($context["article"], "thumb", array()), (isset($context["defaultImg"]) ? $context["defaultImg"] : $this->getContext($context, "defaultImg"))), "img-responsive", $this->getAttribute($context["article"], "title", array()), (isset($context["defaultImg"]) ? $context["defaultImg"] : $this->getContext($context, "defaultImg")));
                    echo "
                    <div class=\"image-overlay\"></div>
                    <div class=\"title\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</div>
                  </a>
                </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "            </ul>
            ";
            }
            // line 71
            echo "            <ul class=\"index-new-article ";
            if ( !((array_key_exists("featuredArticles", $context)) ? (_twig_default_filter((isset($context["featuredArticles"]) ? $context["featuredArticles"] : $this->getContext($context, "featuredArticles")), false)) : (false))) {
                echo "full";
            }
            echo "\">
              ";
            // line 72
            $context["articles"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("LatestArticles", array("count" => 5));
            // line 73
            echo "              ";
            if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
                // line 74
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 75
                    echo "                  <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", array()) == 5)) {
                        echo "last";
                    }
                    echo " clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</a> <span class=\"date\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->smarttimeFilter($this->getAttribute($context["article"], "createdTime", array())), "html", null, true);
                    echo "</span></li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "              ";
            }
            // line 78
            echo "            </ul>
          </div>
        </div>
      </div>
      ";
        }
        // line 83
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select3", array()) == "checked")) {
            // line 84
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员评价"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 92
            if ((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews"))) {
                // line 93
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 94
                    echo "              ";
                    $context["author"] = (($this->getAttribute($context["review"], "User", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "User", array()), null)) : (null));
                    // line 95
                    echo "              ";
                    $context["course"] = (($this->getAttribute($context["review"], "course", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "course", array()), null)) : (null));
                    // line 96
                    echo "              ";
                    if (((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")) && (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")))) {
                        // line 97
                        echo "            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              ";
                        // line 99
                        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "", "avatar-sm", true);
                        echo "
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  ";
                        // line 103
                        echo $context["web_macro"]->getuser_link((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "link-light");
                        echo "
                  <span class=\"score\">";
                        // line 104
                        echo $context["web_macro"]->getstar($this->getAttribute($context["review"], "rating", array()));
                        echo "</span>
                  ";
                        // line 105
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布于"), "html", null, true);
                        echo " <a class=\"link-light\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                        echo "\">《";
                        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), 10);
                        echo "》</a>
                </div>
                <div class=\"content gray-darker\">
                  ";
                        // line 108
                        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 30);
                        echo "
                </div>
                <span class=\"date\">";
                        // line 110
                        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</span>
              </div>
            </div>
            ";
                    }
                    // line 114
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "            ";
            } else {
                // line 116
                echo "              <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("还没有评价"), "html", null, true);
                echo "</div>
            ";
            }
            // line 118
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 122
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "select4", array()) == "checked")) {
            // line 123
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员动态"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 131
            $context["statuses"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("LatestStatuses", array("mode" => "simple", "count" => 4, "private" => 0));
            // line 132
            echo "
            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 134
                echo "              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  ";
                // line 136
                echo $context["web_macro"]->getuser_avatar($this->getAttribute($context["status"], "user", array()), "", "avatar-sm");
                echo "
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    ";
                // line 140
                echo $context["web_macro"]->getuser_link($this->getAttribute($context["status"], "user", array()));
                echo "
                  </div>
                  <div class=\"content\">
                    ";
                // line 143
                echo $this->getAttribute($context["status"], "message", array());
                echo "
                  </div>
                  <span class=\"date\">";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->smarttimeFilter($this->getAttribute($context["status"], "createdTime", array())), "html", null, true);
                echo "</span>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 153
        echo "    </div>
  </div>
</section>
";
        
        $__internal_f29ea2667834ba388a0e653c04de751f1cb41102dccb8d70690b16d37d431fe9->leave($__internal_f29ea2667834ba388a0e653c04de751f1cb41102dccb8d70690b16d37d431fe9_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 153,  423 => 149,  413 => 145,  408 => 143,  402 => 140,  395 => 136,  391 => 134,  387 => 133,  384 => 132,  382 => 131,  375 => 127,  369 => 123,  366 => 122,  360 => 118,  354 => 116,  351 => 115,  345 => 114,  338 => 110,  333 => 108,  323 => 105,  319 => 104,  315 => 103,  308 => 99,  304 => 97,  301 => 96,  298 => 95,  295 => 94,  290 => 93,  288 => 92,  281 => 88,  275 => 84,  272 => 83,  265 => 78,  262 => 77,  235 => 75,  217 => 74,  214 => 73,  212 => 72,  205 => 71,  201 => 69,  183 => 65,  177 => 63,  175 => 62,  171 => 61,  164 => 60,  147 => 59,  144 => 58,  141 => 57,  139 => 56,  132 => 52,  128 => 51,  122 => 47,  119 => 46,  112 => 41,  101 => 36,  97 => 35,  90 => 31,  86 => 30,  78 => 25,  74 => 24,  70 => 22,  66 => 21,  59 => 17,  55 => 16,  50 => 13,  48 => 12,  42 => 9,  38 => 8,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
<!-- 小组动态 -->
{% set groups = data('HotGroup',{'count':6}) %}
{% set reviews = data('LatestCourseReviews',{'count':4}) %}
<section class=\"dynamic-section {{config.background|default(\"\")}}\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
    </div>
    <div class=\"dynamic-section-main row\">
      {% if config.select1 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"{{ path('group') }}\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>{{'热门小组'|trans}}</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              {% for group in groups %}
                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"{{ path('group_show',{id:group.id}) }}\">
                      {{ lazy_img(filepath(group.logo, 'group.png'), 'avatar-square-md', group.title, 'group.png') }}
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-light\" href=\"{{ path('group_show',{id:group.id}) }}\">
                        {{ group.title }}
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>{{ group.memberNum }}</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>{{ group.threadNum }}</span>
                    </div>
                  </div>
                </div>
              {% endfor %}
            </div>
          </div>
        </div>
      </div>
      {% endif %}
      {% if config.select2 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              {{'最新资讯'|trans}}
              <a class=\"more\" href=\"{{ path('article_show') }}\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            {% set featuredArticles = data('LatestArticles',{'type':'featured','count':2}) %}
            {% if featuredArticles %}
            <ul class=\"index-recommend-aricle clearfix\">
              {% for article in featuredArticles %}
                <li class=\"{% if loop.index == 2 %}last{% endif %}\">
                  <a href=\"{{ path('article_detail', {id:article.id}) }}\">
                    {% set defaultImg = '../../v2/img/article/article_banner_' ~ loop.index ~ '.jpg' %}
                    {{ lazy_img(filepath(article.thumb,defaultImg), 'img-responsive', article.title, defaultImg) }}
                    <div class=\"image-overlay\"></div>
                    <div class=\"title\">{{ article.title }}</div>
                  </a>
                </li>
              {% endfor %}
            </ul>
            {% endif %}
            <ul class=\"index-new-article {% if not featuredArticles|default(false) %}full{% endif %}\">
              {% set articles = data('LatestArticles',{'count':5}) %}
              {% if articles %}
                {% for article in articles %}
                  <li class=\"{% if loop.index == 5 %}last{% endif %} clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"{{ path('article_detail', {id:article.id}) }}\" title=\"{{ article.title }}\">{{ article.title }}</a> <span class=\"date\">{{ article.createdTime|smart_time }}</span></li>
                {% endfor %}
              {% endif %}
            </ul>
          </div>
        </div>
      </div>
      {% endif %}
      {% if config.select3 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              {{'学员评价'|trans}}
            </h3>
          </div>
          <div class=\"panel-body\">
            {% if reviews %}
              {% for review in reviews %}
              {% set author = review.User|default(null) %}
              {% set course = review.course|default(null) %}
              {% if author and course %}
            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              {{ web_macro.user_avatar(author,'','avatar-sm',true) }}
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  {{ web_macro.user_link(author,'link-light') }}
                  <span class=\"score\">{{web_macro.star(review.rating) }}</span>
                  {{'发布于'|trans}} <a class=\"link-light\" href=\"{{ path('course_show', {id:course.id}) }}\">《{{ course.title|plain_text(10) }}》</a>
                </div>
                <div class=\"content gray-darker\">
                  {{ review.content|plain_text(30) }}
                </div>
                <span class=\"date\">{{review.createdTime|smart_time}}</span>
              </div>
            </div>
            {% endif %}
            {% endfor %}
            {% else %}
              <div class=\"empty\">{{'还没有评价'|trans}}</div>
            {% endif %}
          </div>
        </div>
      </div>
      {% endif %}
      {% if config.select4 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              {{'学员动态'|trans}}
            </h3>
          </div>
          <div class=\"panel-body\">
            {% set statuses = data('LatestStatuses', {mode:'simple', count: 4,private:0}) %}

            {% for status in statuses %}
              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  {{ web_macro.user_avatar(status.user, '', 'avatar-sm') }}
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    {{ web_macro.user_link(status.user) }}
                  </div>
                  <div class=\"content\">
                    {{ status.message|raw }}
                  </div>
                  <span class=\"date\">{{status.createdTime | smart_time}}</span>
                </div>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
      {% endif %}
    </div>
  </div>
</section>
";
    }
}
