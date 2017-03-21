<?php

/* TopxiaAdminBundle:User:show-modal.html.twig */
class __TwigTemplate_2be74aeba9d161bd03ece928b281a26234e16c3a5913331d3c5a7ab8a8ea3d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:show-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f50c51e078aadc687ae7b387548a2e4f5a70586c14e9091e53fcd910e1cdb22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50c51e078aadc687ae7b387548a2e4f5a70586c14e9091e53fcd910e1cdb22f->enter($__internal_f50c51e078aadc687ae7b387548a2e4f5a70586c14e9091e53fcd910e1cdb22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:User:show-modal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50c51e078aadc687ae7b387548a2e4f5a70586c14e9091e53fcd910e1cdb22f->leave($__internal_f50c51e078aadc687ae7b387548a2e4f5a70586c14e9091e53fcd910e1cdb22f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9dab0639f5cb9639620b32e5dd407265bfca9d453f4408503854cfe12d1cbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9dab0639f5cb9639620b32e5dd407265bfca9d453f4408503854cfe12d1cbad->enter($__internal_b9dab0639f5cb9639620b32e5dd407265bfca9d453f4408503854cfe12d1cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人详细信息"), "html", null, true);
        
        $__internal_b9dab0639f5cb9639620b32e5dd407265bfca9d453f4408503854cfe12d1cbad->leave($__internal_b9dab0639f5cb9639620b32e5dd407265bfca9d453f4408503854cfe12d1cbad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7669c2f19eaf6ab3b6dc34dc935db28b699e86f78f6c1de76962d9d6fe79627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7669c2f19eaf6ab3b6dc34dc935db28b699e86f78f6c1de76962d9d6fe79627->enter($__internal_f7669c2f19eaf6ab3b6dc34dc935db28b699e86f78f6c1de76962d9d6fe79627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<table class=\"table table-striped table-condenseda table-bordered\">
  <tr>
    <th width=\"25%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "</th>
    <td width=\"75%\">
      <a class=\"pull-right\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人主页"), "html", null, true);
        echo "</a>
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "
    </td>
  </tr>

  <tr>
    <th>Email</th>
    <td>
      ";
        // line 19
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "@");
        // line 20
        echo "      ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : $this->getContext($context, "emailArr")), 1, array(), "array") != "edusoho.net")) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 25
        echo "    </td>
  </tr>
  ";
        // line 27
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 28
            echo "    <tr>
      <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属组织机构"), "html", null, true);
            echo "</th>
      <td>
        ";
            // line 31
            $context["orgName"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("OrgDisplay", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "orgId", array())));
            // line 32
            echo "        ";
            if ((isset($context["orgName"]) ? $context["orgName"] : $this->getContext($context, "orgName"))) {
                // line 33
                echo "          ";
                echo twig_escape_filter($this->env, (isset($context["orgName"]) ? $context["orgName"] : $this->getContext($context, "orgName")), "html", null, true);
                echo "
        ";
            } else {
                // line 35
                echo "          暂无
        ";
            }
            // line 37
            echo "      </td>
    </tr>
  ";
        }
        // line 40
        echo "
  <tr>
    <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户组"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 45
            echo "        ";
            $context["userRole"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Role", array("code" => $context["role"]));
            // line 46
            echo "        ";
            if (((array_key_exists("userRole", $context)) ? (_twig_default_filter((isset($context["userRole"]) ? $context["userRole"] : $this->getContext($context, "userRole")), false)) : (false))) {
                // line 47
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userRole"]) ? $context["userRole"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userRole"]) ? $context["userRole"] : null), "name", array()), "")) : ("")), "html", null, true);
                echo "
        ";
            } else {
                // line 49
                echo "          ";
                echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userRole", $context["role"]);
                echo "
        ";
            }
            // line 51
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册时间"), "html", null, true);
        echo "/IP</th>
    <td>
      ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "
      /
      ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdIp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdIp", array())), "html", null, true);
        echo "
    </td>
  </tr>

  <tr>
    <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近登录时间/IP"), "html", null, true);
        echo "</th>
    <td> 
      ";
        // line 67
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginTime", array()) == 0)) {
            // line 68
            echo "          --
      ";
        } else {
            // line 70
            echo "          ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 72
        echo "      ";
        if ( !twig_test_empty((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()))) : ("")))) {
            // line 73
            echo "           / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array())), "html", null, true);
            echo "
      ";
        }
        // line 75
        echo "     </td>
  </tr>

  <tr>
    <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("姓名"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 81
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "truename", array())) {
            // line 82
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "truename", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 84
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 86
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("性别"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 92
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array())) {
            // line 93
            echo "        ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array()) == "male")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("男性"), "html", null, true);
            }
            // line 94
            echo "        ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array()) == "female")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("女性"), "html", null, true);
            }
            // line 95
            echo "        ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array()) == "secret")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秘密"), "html", null, true);
            }
            // line 96
            echo "      ";
        } else {
            // line 97
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 99
        echo "    </td>
  </tr>

";
        // line 112
        echo " 
   <tr>
    <th>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("身份证号"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 116
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idcard", array())) {
            // line 117
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idcard", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 119
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 121
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 127
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "verifiedMobile", array())) {
            // line 128
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : ("")), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
            echo ")</span> 
      ";
        } elseif ($this->getAttribute(        // line 129
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "mobile", array())) {
            // line 130
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未绑定"), "html", null, true);
            echo ")</span>
      ";
        } else {
            // line 132
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"))), "html", null, true);
            echo "
      ";
        }
        // line 134
        echo "    </td>
  </tr>

";
        // line 158
        echo "
  <tr>
    <th>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公司"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 162
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "company", array())) {
            // line 163
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "company", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 165
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 167
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("职业"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 173
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "job", array())) {
            // line 174
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "job", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 176
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 178
        echo "    </td>
  </tr>


  <tr>
    <th>";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头衔"), "html", null, true);
        echo "</th>
    <td>
    ";
        // line 185
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "title", array())) {
            // line 186
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 188
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 190
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人签名"), "html", null, true);
        echo "</th>
    <td>
    ";
        // line 196
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "signature", array())) {
            // line 197
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "signature", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 199
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 201
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("自我介绍"), "html", null, true);
        echo "</th>
    <td>
    ";
        // line 207
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array())) {
            // line 208
            echo "      <div class=\"editor-text\">
        ";
            // line 209
            echo $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array());
            echo "
      </div>
      ";
        } else {
            // line 212
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 214
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人网站"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 220
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "site", array())) {
            // line 221
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "site", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 223
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 225
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微博"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 231
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "weibo", array())) {
            // line 232
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "weibo", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 234
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 236
        echo "    </td>
  </tr>

  <tr>
    <th>";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信"), "html", null, true);
        echo "</th>
    <td>
      ";
        // line 242
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "weixin", array())) {
            // line 243
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "weixin", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 245
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 247
        echo "    </td>
  </tr>

  <tr>
    <th>QQ</th>
    <td>
      ";
        // line 253
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "qq", array())) {
            // line 254
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "qq", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 256
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
            echo "
      ";
        }
        // line 258
        echo "    </td>
  </tr>

</table>
<hr>
<table class=\"table table-striped table-condenseda table-bordered\">
    ";
        // line 264
        if ((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) {
            // line 265
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 266
                echo "    <tr>
        <th width=\"25%\">";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "</th>
        <td>
          ";
                // line 269
                if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                    // line 270
                    echo "            ";
                    if (($this->getAttribute($context["field"], "type", array()) == "date")) {
                        // line 271
                        echo "            ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "Y-m-d"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 273
                        echo "            ";
                        echo nl2br($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->spaceToNbsp($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")));
                        echo "
            ";
                    }
                    // line 275
                    echo "          ";
                } else {
                    // line 276
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无"), "html", null, true);
                    echo "
          ";
                }
                // line 278
                echo "        </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "  ";
        }
        // line 282
        echo "  </table>
";
        
        $__internal_f7669c2f19eaf6ab3b6dc34dc935db28b699e86f78f6c1de76962d9d6fe79627->leave($__internal_f7669c2f19eaf6ab3b6dc34dc935db28b699e86f78f6c1de76962d9d6fe79627_prof);

    }

    // line 285
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4bddf80247b3964b4e439e5535cb4e4cc6cdba9c224db8ec6fe776a6e81b4824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bddf80247b3964b4e439e5535cb4e4cc6cdba9c224db8ec6fe776a6e81b4824->enter($__internal_4bddf80247b3964b4e439e5535cb4e4cc6cdba9c224db8ec6fe776a6e81b4824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 286
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</button>
";
        
        $__internal_4bddf80247b3964b4e439e5535cb4e4cc6cdba9c224db8ec6fe776a6e81b4824->leave($__internal_4bddf80247b3964b4e439e5535cb4e4cc6cdba9c224db8ec6fe776a6e81b4824_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  651 => 286,  645 => 285,  637 => 282,  634 => 281,  626 => 278,  620 => 276,  617 => 275,  611 => 273,  605 => 271,  602 => 270,  600 => 269,  595 => 267,  592 => 266,  587 => 265,  585 => 264,  577 => 258,  571 => 256,  565 => 254,  563 => 253,  555 => 247,  549 => 245,  543 => 243,  541 => 242,  536 => 240,  530 => 236,  524 => 234,  518 => 232,  516 => 231,  511 => 229,  505 => 225,  499 => 223,  493 => 221,  491 => 220,  486 => 218,  480 => 214,  474 => 212,  468 => 209,  465 => 208,  463 => 207,  458 => 205,  452 => 201,  446 => 199,  440 => 197,  438 => 196,  433 => 194,  427 => 190,  421 => 188,  415 => 186,  413 => 185,  408 => 183,  401 => 178,  395 => 176,  389 => 174,  387 => 173,  382 => 171,  376 => 167,  370 => 165,  364 => 163,  362 => 162,  357 => 160,  353 => 158,  348 => 134,  342 => 132,  334 => 130,  332 => 129,  325 => 128,  323 => 127,  318 => 125,  312 => 121,  306 => 119,  300 => 117,  298 => 116,  293 => 114,  289 => 112,  284 => 99,  278 => 97,  275 => 96,  270 => 95,  265 => 94,  260 => 93,  258 => 92,  253 => 90,  247 => 86,  241 => 84,  235 => 82,  233 => 81,  228 => 79,  222 => 75,  214 => 73,  211 => 72,  205 => 70,  201 => 68,  199 => 67,  194 => 65,  184 => 60,  179 => 58,  174 => 56,  168 => 52,  162 => 51,  156 => 49,  150 => 47,  147 => 46,  144 => 45,  140 => 44,  135 => 42,  131 => 40,  126 => 37,  122 => 35,  116 => 33,  113 => 32,  111 => 31,  106 => 29,  103 => 28,  101 => 27,  97 => 25,  91 => 23,  85 => 21,  82 => 20,  80 => 19,  70 => 12,  64 => 11,  59 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}

{% block title %}{{'个人详细信息'|trans}}{% endblock %}

{% block body %}

<table class=\"table table-striped table-condenseda table-bordered\">
  <tr>
    <th width=\"25%\">{{'用户名'|trans}}</th>
    <td width=\"75%\">
      <a class=\"pull-right\" href=\"{{ path('user_show', {id:user.id}) }}\" target=\"_blank\">{{'个人主页'|trans}}</a>
      {{ user.nickname }}
    </td>
  </tr>

  <tr>
    <th>Email</th>
    <td>
      {% set emailArr = user.email|split('@') %}
      {% if emailArr[1] != 'edusoho.net' %}
        {{ user.email }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>
  {% if setting('magic.enable_org','0') %}
    <tr>
      <th>{{'所属组织机构'|trans}}</th>
      <td>
        {% set orgName = data('OrgDisplay',{id: user.orgId}) %}
        {% if orgName %}
          {{ orgName }}
        {% else %}
          暂无
        {% endif %}
      </td>
    </tr>
  {% endif  %}

  <tr>
    <th>{{'用户组'|trans}}</th>
    <td>
      {% for role in user.roles %}
        {% set userRole = data('Role', {code: role}) %}
        {% if userRole|default(false) %}
          {{userRole.name|default('')}}
        {% else %}
          {{ dict_text('userRole', role) }}
        {% endif %}
      {% endfor %}
    </td>
  </tr>

  <tr>
    <th>{{'注册时间'|trans}}/IP</th>
    <td>
      {{ user.createdTime|date('Y-n-d H:i:s') }}
      /
      {{ user.createdIp }} {{convertIP(user.createdIp)}}
    </td>
  </tr>

  <tr>
    <th>{{'最近登录时间/IP'|trans}}</th>
    <td> 
      {% if user.loginTime == 0 %}
          --
      {% else %}
          {{ user.loginTime|date('Y-n-d H:i:s') }}
      {% endif %}
      {% if user.loginIp|default is not empty %}
           / {{ user.loginIp }} {{convertIP(user.loginIp)}}
      {% endif %}
     </td>
  </tr>

  <tr>
    <th>{{'姓名'|trans}}</th>
    <td>
      {% if profile.truename %}
        {{ profile.truename }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'性别'|trans}}</th>
    <td>
      {% if profile.gender %}
        {% if profile.gender == 'male' %}{{'男性'|trans}}{% endif %}
        {% if profile.gender == 'female' %}{{'女性'|trans}}{% endif %}
        {% if profile.gender == 'secret' %}{{'秘密'|trans}}{% endif %}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

{#   <tr>
    <th>类型</th>
    <td>
      {% if profile.iam %}
        {{ profile.iam }}
      {% else %}
        暂无
      {% endif %}
    </td>
  </tr> #}
 
   <tr>
    <th>{{'身份证号'|trans}}</th>
    <td>
      {% if profile.idcard %}
        {{ profile.idcard }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'手机号码'|trans}}</th>
    <td>
      {% if user.verifiedMobile %}
        {{ user.verifiedMobile|default('')}}<span class=\"text-success\">({{'已绑定'|trans}})</span> 
      {% elseif profile.mobile %}
        {{ profile.mobile }}<span class=\"text-danger\">({{'未绑定'|trans}})</span>
      {% else %}
        {{ profile.mobile|default('暂无'|trans) }}
      {% endif %}
    </td>
  </tr>

{#   <tr>
    <th>学校</th>
    <td>
      {% if profile.school %}
        {{ profile.school }}
      {% else %}
        暂无
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>班级</th>
    <td>
      {% if profile.class %}
        {{ profile.class }}
      {% else %}
        暂无
      {% endif %}
    </td>
  </tr> #}

  <tr>
    <th>{{'公司'|trans}}</th>
    <td>
      {% if profile.company %}
        {{ profile.company }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'职业'|trans}}</th>
    <td>
      {% if profile.job %}
        {{ profile.job }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>


  <tr>
    <th>{{'头衔'|trans}}</th>
    <td>
    {% if profile.title %}
        {{ profile.title }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'个人签名'|trans}}</th>
    <td>
    {% if profile.signature %}
        {{ profile.signature }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'自我介绍'|trans}}</th>
    <td>
    {% if profile.about %}
      <div class=\"editor-text\">
        {{ profile.about | raw }}
      </div>
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'个人网站'|trans}}</th>
    <td>
      {% if profile.site %}
        {{ profile.site }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'微博'|trans}}</th>
    <td>
      {% if profile.weibo %}
        {{ profile.weibo }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>{{'微信'|trans}}</th>
    <td>
      {% if profile.weixin %}
        {{ profile.weixin }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

  <tr>
    <th>QQ</th>
    <td>
      {% if profile.qq %}
        {{ profile.qq }}
      {% else %}
        {{'暂无'|trans}}
      {% endif %}
    </td>
  </tr>

</table>
<hr>
<table class=\"table table-striped table-condenseda table-bordered\">
    {% if fields %}
  {% for field in fields %}
    <tr>
        <th width=\"25%\">{{field.title}}</th>
        <td>
          {% if profile[field.fieldName] %}
            {% if field.type==\"date\"%}
            {{ profile[field.fieldName]|date(\"Y-m-d\") }}
            {% else %}
            {{ profile[field.fieldName]|space2nbsp|raw|nl2br }}
            {% endif %}
          {% else %}
            {{'暂无'|trans}}
          {% endif %}
        </td>
    </tr>
  {% endfor %}
  {% endif %}
  </table>
{% endblock %}

{% block footer %}
  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">{{'关闭'|trans}}</button>
{% endblock %}";
    }
}
