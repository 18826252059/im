<?php

/* TopxiaAdminBundle:App:center.html.twig */
class __TwigTemplate_9bf6c4b4beb9595550dc003fe5a9b507bed5c22bc2f2ca1ec342482b1a366443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:center.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f31c884b4704b59bf9dc9f7b7686b48af90040d5845dbd4be219064ffca2fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f31c884b4704b59bf9dc9f7b7686b48af90040d5845dbd4be219064ffca2fad->enter($__internal_5f31c884b4704b59bf9dc9f7b7686b48af90040d5845dbd4be219064ffca2fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:App:center.html.twig"));

        // line 3
        $context["menu"] = "admin_app_center";
        // line 5
        $context["script_controller"] = "app/center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f31c884b4704b59bf9dc9f7b7686b48af90040d5845dbd4be219064ffca2fad->leave($__internal_5f31c884b4704b59bf9dc9f7b7686b48af90040d5845dbd4be219064ffca2fad_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_d6dc68a885466b4afad3a90d7675ad5ac78b21ca3e64368920320e931a2836da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dc68a885466b4afad3a90d7675ad5ac78b21ca3e64368920320e931a2836da->enter($__internal_d6dc68a885466b4afad3a90d7675ad5ac78b21ca3e64368920320e931a2836da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <div class=\"mbl btn-group\">

      <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部"), "html", null, true);
        echo "</a>

      <a href=\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("主题"), "html", null, true);
        echo "</a>

      <a href=\" ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_app_center", array("postStatus" => "app"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "app")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("应用"), "html", null, true);
        echo "</a>
  </div>


  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\" style=\"float:right;margin-top:-45px;\">
      <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\" 
         value=\"installedApps\"  ";
        // line 22
        if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : $this->getContext($context, "appTypeChoices")), null)) : (null)) == "installedApps")) {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "showType" => "unhidden")), "html", null, true);
            echo "\"  checked  ";
        } else {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "showType" => "hidden")), "html", null, true);
            echo "\" ";
        }
        echo ">
         ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("隐藏已购应用"), "html", null, true);
        echo "
      <input type=\"hidden\" name=\"type\" value= '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "' id=\"type\">
      </div>
  </div>


  ";
        // line 29
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), null)) : (null)) == "error")) {
            // line 30
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，"), "html", null, true);
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_cloud");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请修改设置。"), "html", null, true);
            echo "</a></div>
  ";
        } elseif ((((        // line 31
array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), null)) : (null)) == "unlink")) {
            // line 32
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您的服务器无法连接到更新服务器，请检查网络连接状况。"), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 34
            echo "  <table class=\"table table-striped table-hover\" id=\"app-table-container\">
    <thead>

    </thead>
    <tbody>

      ";
            // line 40
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
                // line 41
                echo "      ";
                $context["apps"] = (isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps"));
                // line 42
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "theme")) {
                // line 43
                echo "      ";
                $context["apps"] = (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme"));
                // line 44
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "app")) {
                // line 45
                echo "      ";
                $context["apps"] = (isset($context["allApp"]) ? $context["allApp"] : $this->getContext($context, "allApp"));
                // line 46
                echo "      ";
            }
            // line 47
            echo "
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 49
                echo "        ";
                $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array"), null)) : (null));
                // line 50
                echo "
           ";
                // line 51
                if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : $this->getContext($context, "appTypeChoices")), null)) : (null)) == "installedApps")) {
                    // line 52
                    echo "
                         ";
                    // line 53
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp")))) {
                        // line 54
                        echo "                            
                            ";
                        // line 55
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp"))) {
                            // line 56
                            echo "                            ";
                        } else {
                            // line 57
                            echo "                            ";
                            $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 57)->display($context);
                            // line 58
                            echo "                            <div class=\"right-info pull-right\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            // line 59
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                            echo "</a>
                            </div>
                              </td>
                            </tr>
                            ";
                        }
                        // line 64
                        echo "                         ";
                    } else {
                        // line 65
                        echo "
                          ";
                        // line 66
                        $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 66)->display($context);
                        // line 67
                        echo "                            <div class=\"right-info pull-right\">
                              ";
                        // line 68
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 69
                            echo "                                <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("商业专属"), "html", null, true);
                            echo "</a>
                              ";
                        } else {
                            // line 71
                            echo "                                  ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 72
                                echo "                                   <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                                echo "</a>
                                  ";
                            } else {
                                // line 74
                                echo "                                     <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
                                echo "</a>
                                  ";
                            }
                            // line 76
                            echo "                                    <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                            echo "</span><span class=\"price\"> ¥ ";
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                            }
                            echo "</span></p>
                                ";
                        }
                        // line 78
                        echo "                            </div>
                              </td>
                            </tr>
                         ";
                    }
                    // line 81
                    echo "                

            ";
                } else {
                    // line 84
                    echo "              ";
                    $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 84)->display($context);
                    // line 85
                    echo "              <div class=\"right-info pull-right\">

                 ";
                    // line 87
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp")))) {
                        // line 88
                        echo "            
                    ";
                        // line 89
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : $this->getContext($context, "installedApp"))) {
                            // line 90
                            echo "                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已购买"), "html", null, true);
                            echo "</a>
                    ";
                        } else {
                            // line 92
                            echo "                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 94
                        echo "                    
                    <p class=\"mtm\"><span class=\"text-muted\">";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                        echo "</span><span class=\"price\"> ¥ ";
                        if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        }
                        echo "</span></p>
                 ";
                    } else {
                        // line 97
                        echo "                    ";
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 98
                            echo "                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\" target=_blank>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("商业专属"), "html", null, true);
                            echo "</a>
                    ";
                        } else {
                            // line 100
                            echo "                      ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 101
                                echo "                       <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安装"), "html", null, true);
                                echo "</a>
                      ";
                            } else {
                                // line 103
                                echo "                         <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买"), "html", null, true);
                                echo "</a>
                      ";
                            }
                            // line 105
                            echo "                        <p class=\"mtm\"><span class=\"text-muted\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格："), "html", null, true);
                            echo "</span><span class=\"price\"> ¥ ";
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                            }
                            echo "</span></p>
                    ";
                        }
                        // line 107
                        echo "                 ";
                    }
                    echo " 
               
              </div> 
                </td>
              </tr>
                ";
                }
                // line 113
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    </tbody>
  </table>
  ";
        }
        
        $__internal_d6dc68a885466b4afad3a90d7675ad5ac78b21ca3e64368920320e931a2836da->leave($__internal_d6dc68a885466b4afad3a90d7675ad5ac78b21ca3e64368920320e931a2836da_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 115,  369 => 113,  359 => 107,  347 => 105,  339 => 103,  331 => 101,  328 => 100,  322 => 98,  319 => 97,  308 => 95,  305 => 94,  297 => 92,  291 => 90,  289 => 89,  286 => 88,  284 => 87,  280 => 85,  277 => 84,  272 => 81,  266 => 78,  254 => 76,  246 => 74,  238 => 72,  235 => 71,  229 => 69,  227 => 68,  224 => 67,  222 => 66,  219 => 65,  216 => 64,  206 => 59,  203 => 58,  200 => 57,  197 => 56,  195 => 55,  192 => 54,  190 => 53,  187 => 52,  185 => 51,  182 => 50,  179 => 49,  162 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  139 => 40,  131 => 34,  125 => 32,  123 => 31,  114 => 30,  112 => 29,  104 => 24,  100 => 23,  88 => 22,  72 => 15,  61 => 13,  50 => 11,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::cloud-app-layout.html.twig' %}

{% set menu = 'admin_app_center' %}

{% set script_controller = 'app/center' %}

{% block main %}

  <div class=\"mbl btn-group\">

      <a href=\"{{ url('admin_app_center', {postStatus: 'all' }) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'all'%} btn-primary{% endif %}\">{{'全部'|trans}}</a>

      <a href=\" {{ url('admin_app_center', {postStatus: 'theme' }) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'theme'%}btn-primary{% endif %}\">{{'主题'|trans}}</a>

      <a href=\" {{ url('admin_app_center', {postStatus: 'app' }) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'app'%}btn-primary{% endif %}\">{{'应用'|trans}}</a>
  </div>


  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\" style=\"float:right;margin-top:-45px;\">
      <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\" 
         value=\"installedApps\"  {% if appTypeChoices|default(null)  == 'installedApps' %} data-url=\"{{path('admin_app_center',{postStatus: type,showType:'unhidden'})}}\"  checked  {% else %} data-url=\"{{path('admin_app_center',{postStatus: type,showType:'hidden'}) }}\" {% endif %}>
         {{'隐藏已购应用'|trans}}
      <input type=\"hidden\" name=\"type\" value= '{{type}}' id=\"type\">
      </div>
  </div>


  {% if status|default(null) == 'error' %}
    <div class=\"alert alert-danger\">{{'AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，'|trans}}<a href=\"{{path('admin_setting_cloud')}}\">{{'请修改设置。'|trans}}</a></div>
  {% elseif  status|default(null) == 'unlink' %}
    <div class=\"alert alert-danger\">{{'您的服务器无法连接到更新服务器，请检查网络连接状况。'|trans}}</div>
  {% else %}
  <table class=\"table table-striped table-hover\" id=\"app-table-container\">
    <thead>

    </thead>
    <tbody>

      {% if type == 'all' %}
      {% set apps = apps %}
      {% elseif type == 'theme'%}
      {% set apps = theme %}
      {% elseif type == 'app' %}
      {% set apps = allApp %}
      {% endif  %}

      {% for app in apps %}
        {% set installedApp = installedApps[app.code]|default(null) %}

           {% if appTypeChoices|default(null)  == 'installedApps' %}

                         {% if app.purchased|default(false) == true or installedApp %}
                            
                            {% if installedApp %}
                            {% else %}
                            {% include 'TopxiaAdminBundle:App:app-detail.html.twig'  %}
                            <div class=\"right-info pull-right\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">{{'安装'|trans}}</a>
                            </div>
                              </td>
                            </tr>
                            {% endif %}
                         {% else %}

                          {% include 'TopxiaAdminBundle:App:app-detail.html.twig'  %}
                            <div class=\"right-info pull-right\">
                              {% if app.userAccess|default(null) == \"impossible\" %}
                                <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>{{'商业专属'|trans}}</a>
                              {% else %}
                                  {% if app.price == 0 %}
                                   <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">{{'安装'|trans}}</a>
                                  {% else %}
                                     <a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\" target=\"_blank\">{{'购买'|trans}}</a>
                                  {% endif %}
                                    <p class=\"mtm\"><span class=\"text-muted\">{{'价格：'|trans}}</span><span class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price}}{% else %}{{'免费'|trans}}{% endif %}</span></p>
                                {% endif %}
                            </div>
                              </td>
                            </tr>
                         {% endif %}                

            {% else %}
              {% include 'TopxiaAdminBundle:App:app-detail.html.twig'  %}
              <div class=\"right-info pull-right\">

                 {% if app.purchased|default(false) == true or installedApp %}
            
                    {% if installedApp %}
                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">{{'已购买'|trans}}</a>
                    {% else %}
                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">{{'安装'|trans}}</a>
                    {% endif %}
                    
                    <p class=\"mtm\"><span class=\"text-muted\">{{'价格：'|trans}}</span><span class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price}}{% else %}{{'免费'|trans}}{% endif %}</span></p>
                 {% else %}
                    {% if app.userAccess|default(null) == \"impossible\" %}
                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\" target=_blank>{{'商业专属'|trans}}</a>
                    {% else %}
                      {% if app.price == 0 %}
                       <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">{{'安装'|trans}}</a>
                      {% else %}
                         <a href=\"http://open.edusoho.com/app/{{ app.code }}\" class=\"btn btn-warning app-btn\" target=\"_blank\">{{'购买'|trans}}</a>
                      {% endif %}
                        <p class=\"mtm\"><span class=\"text-muted\">{{'价格：'|trans}}</span><span class=\"price\"> ¥ {% if app.price > 0 %}{{ app.price}}{% else %}{{'免费'|trans}}{% endif %}</span></p>
                    {% endif %}
                 {% endif %} 
               
              </div> 
                </td>
              </tr>
                {% endif %}

      {% endfor %}
    </tbody>
  </table>
  {% endif %}
{% endblock %}";
    }
}
