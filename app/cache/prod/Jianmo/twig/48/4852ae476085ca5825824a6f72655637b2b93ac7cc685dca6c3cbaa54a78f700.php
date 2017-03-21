<?php

/* TopxiaWebBundle::float-consult.html.twig */
class __TwigTemplate_ab2893337f789a8af26d8b2723ed5cc7893a62bd36e407057460fd2e450e6f2a extends Twig_Template
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
        // line 1
        $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
        // line 2
        echo "<div id=\"float-consult\" class=\"float-consult hidden-xs\">
  <div class=\"btn-group-vertical\">

    ";
        // line 5
        $context["break"] = 0;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if ((( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array()))) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                // line 7
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服"), "html", null, true);
                echo "\" data-content-element=\"#consult-qq-content\"><span class=\"icon icon-qq\"></span></span>
      ";
                // line 8
                $context["break"] = 1;
                // line 9
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        $context["break"] = 0;
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if ((( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array()))) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                // line 12
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群"), "html", null, true);
                echo "\" data-content-element=\"#consult-qqgroup-content\"><span class=\"icon icon-qqgroup\"></span></span>
      ";
                // line 13
                $context["break"] = 1;
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["break"] = 0;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if (( !twig_test_empty($this->getAttribute($context["phone"], "name", array())) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                // line 18
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话客服"), "html", null, true);
                echo "\" data-content-element=\"#consult-phone-content\"><span class=\"icon icon-phone\"></span></span>
      ";
                // line 19
                $context["break"] = 1;
                // line 20
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()))) {
            // line 23
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
            echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信公众号"), "html", null, true);
            echo "\" data-content-element=\"#consult-weixin-content\"><span class=\"icon icon-weixin\"></span></span>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()))) {
            // line 27
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
            echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电子邮箱"), "html", null, true);
            echo "\" data-content-element=\"#consult-email-content\"><span class=\"icon icon-email\"></span></span>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ( !twig_test_empty((($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array()))) : ("")))) {
            // line 31
            echo "      ";
            echo $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "supplier", array());
            echo "
    ";
        }
        // line 33
        echo "  </div>

  <div class=\"consult-contents\">
    <div id=\"consult-qq-content\">
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if (( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qq"], "number", array())))) {
                // line 38
                echo "        ";
                if ( !(($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                    // line 39
                    echo "        <p>

          <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo "&site=qq&menu=yes\" >
            <img class=\"mrs\" src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击这里给我发消息"), "html", null, true);
                    echo "\" alt=\"\">

            ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
          </a>
        </p>
        ";
                } else {
                    // line 48
                    echo "          <p>
            <a href=\"";
                    // line 49
                    echo $this->getAttribute($context["qq"], "url", array());
                    echo "\" target=\"_blank\">
            <img class=\"mrs\" src=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                    echo "\" alt=\"\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击这里给我发消息"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
                // line 55
                echo "      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>

    <div id=\"consult-qqgroup-content\">
      ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if (( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) &&  !twig_test_empty($this->getAttribute($context["qqgroup"], "number", array())))) {
                // line 60
                echo "        <p>
          <span class=\"icon icon-qqgroup text-muted\" style=\"font-size:14px;\"></span>
          ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                echo "
           <br> ";
                // line 64
                echo "
            ";
                // line 65
                if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : (""))) {
                    // line 66
                    echo "              <p class=\"text-overflow\">
                ";
                    // line 67
                    echo $this->getAttribute($context["qqgroup"], "url", array());
                    echo "
              </p>
            ";
                } else {
                    // line 70
                    echo "              <p class=\"text-overflow\">
                ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                    echo "
              </p>
            ";
                }
                // line 74
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </div>
    <div id=\"consult-phone-content\">
      <p>
        <strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("服务时间："), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()), "html", null, true);
        echo "
      </p>

      ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                // line 84
                echo "        <p>
          ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                echo "： ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    </div>


    <div id=\"consult-weixin-content\">
      <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
        echo "\" class=\"qrcode center-block\">
    </div>

    <div id=\"consult-email-content\">
     <a href=\"mailto:";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
        echo "</a>
    </div>

  </div>
</div>

";
        // line 102
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("topxiawebbundle/util/float-consult");
        // line 103
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::float-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 103,  309 => 102,  298 => 96,  291 => 92,  285 => 88,  273 => 85,  270 => 84,  265 => 83,  257 => 80,  252 => 77,  243 => 74,  237 => 71,  234 => 70,  228 => 67,  225 => 66,  223 => 65,  220 => 64,  216 => 62,  212 => 60,  207 => 59,  202 => 56,  195 => 55,  188 => 51,  182 => 50,  178 => 49,  175 => 48,  168 => 44,  161 => 42,  157 => 41,  153 => 39,  150 => 38,  145 => 37,  139 => 33,  133 => 31,  131 => 30,  128 => 29,  120 => 27,  118 => 26,  115 => 25,  107 => 23,  105 => 22,  102 => 21,  95 => 20,  93 => 19,  86 => 18,  80 => 17,  78 => 16,  75 => 15,  68 => 14,  66 => 13,  59 => 12,  53 => 11,  50 => 10,  43 => 9,  41 => 8,  34 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
