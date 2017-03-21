<?php

/* TopxiaAdminBundle:System:consult-setting.html.twig */
class __TwigTemplate_b2fdef2c17fb19d9593e79baa467ec8ac0a148998367fdf3022fbb2701a59dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:consult-setting.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11e911baedaf308b3b05112806b8579bb38283ecf89822f865be4ef37b3ea8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e911baedaf308b3b05112806b8579bb38283ecf89822f865be4ef37b3ea8a5->enter($__internal_11e911baedaf308b3b05112806b8579bb38283ecf89822f865be4ef37b3ea8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:consult-setting.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_consult_setting";
        // line 5
        $context["script_controller"] = "setting/consult-setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11e911baedaf308b3b05112806b8579bb38283ecf89822f865be4ef37b3ea8a5->leave($__internal_11e911baedaf308b3b05112806b8579bb38283ecf89822f865be4ef37b3ea8a5_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_4c70b076169896b50bebd149e677122f6b01ab2c5cf084ad0f3ffac8a4e3614b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c70b076169896b50bebd149e677122f6b01ab2c5cf084ad0f3ffac8a4e3614b->enter($__internal_4c70b076169896b50bebd149e677122f6b01ab2c5cf084ad0f3ffac8a4e3614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("客服功能"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("enabled", array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), 0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "enabled", array()));
        echo "
    </div>
  </div>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浮动条颜色"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 25
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("color", array("default" => "<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>", "warning" => "<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>", "danger" => "<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>"), $this->getAttribute(        // line 30
(isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "color", array()));
        // line 31
        echo "
    </div>
  </div>
  <div data-role=\"template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"phone-template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"qqGroupTemplate\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "\">×</button></input>
      </div>
    </div>
  </div>

  <fieldset>
    <legend>QQ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("客服设置"), "html", null, true);
        echo "
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如何获取在线咨询链接？"), "html", null, true);
        echo "</span><br>
          1，";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
        echo " <a target=\"_blank\" href=\"https://id.b.qq.com/login/index\">https://id.b.qq.com/login/index</a>。 <br>
          2，";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录后，找到【营销QQ】-【在线代码生成】，选择【在论坛/微博发布在线咨询链接】。（包含“%http%://”）", array("%http%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getScheme", array(), "method"))), "html", null, true);
        echo "<br>
        </div>
      </div>
    </legend>
    <div id=\"consult-qq\">
      ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            // line 89
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qq[";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服名称"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qq[";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ号"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qq[";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("若使用营销QQ，请填入在线咨询链接"), "html", null, true);
            echo "\">
          ";
            // line 98
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 99
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "\">×</button>
          ";
            }
            // line 101
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span  class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq' data-length='";
        // line 107
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </fieldset>


  <fieldset>
    <legend>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群设置"), "html", null, true);
        echo "
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("如何获取在线咨询链接？"), "html", null, true);
        echo "</span><br>
          ";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("访问"), "html", null, true);
        echo "<a target=\"_blank\" href=\"http://qun.qq.com/join.html\">http://qun.qq.com/join.html</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("获取QQ群直接加入网页代码。"), "html", null, true);
        echo "
        </div>
      </div>
    </legend>
    <div id=\"consult-qqgroup\">
      ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            // line 125
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qqgroup[";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群名称"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qqgroup[";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群号"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qqgroup[";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ群直接加入网页代码(选填)"), "html", null, true);
            echo "\">
          ";
            // line 134
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 135
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "\">×</button>
          ";
            }
            // line 137
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\" data-parentId='consult-qqgroup' data-length='";
        // line 143
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("联系电话设置"), "html", null, true);
        echo "</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"worktime\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作时间"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div id=\"consult-phone\">
      ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 162
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"phone[";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("联系人"), "html", null, true);
            echo "\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"phone[";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("联系电话"), "html", null, true);
            echo "\">
          ";
            // line 168
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 169
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
                echo "\">×</button>
          ";
            }
            // line 171
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\"  data-role=\"phone-item-add\" data-parentId='consult-phone' data-length='";
        // line 177
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array())), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    <legend>";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("其他设置"), "html", null, true);
        echo "</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信二维码"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"consult-container\">";
        // line 189
        if ($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" id=\"consult-upload\" data-upload-token=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"type=\"button\" data-goto-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\" data-url=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_consult_webchat_delete");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>        
        <p class=\"help-block\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"webchatURI\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"email\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("工作邮箱"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>

  ";
        // line 209
        echo "    ";
        // line 210
        echo "    ";
        // line 211
        echo "      ";
        // line 212
        echo "        ";
        // line 213
        echo "      ";
        // line 214
        echo "      ";
        // line 215
        echo "        ";
        // line 216
        echo "          ";
        // line 217
        echo "        ";
        // line 218
        echo "        ";
        // line 219
        echo "      ";
        // line 220
        echo "    ";
        // line 221
        echo "  ";
        // line 222
        echo "
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
        
        $__internal_4c70b076169896b50bebd149e677122f6b01ab2c5cf084ad0f3ffac8a4e3614b->leave($__internal_4c70b076169896b50bebd149e677122f6b01ab2c5cf084ad0f3ffac8a4e3614b_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:consult-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 230,  557 => 226,  551 => 222,  549 => 221,  547 => 220,  545 => 219,  543 => 218,  541 => 217,  539 => 216,  537 => 215,  535 => 214,  533 => 213,  531 => 212,  529 => 211,  527 => 210,  525 => 209,  517 => 203,  511 => 200,  501 => 193,  497 => 192,  487 => 191,  479 => 190,  471 => 189,  465 => 186,  459 => 183,  448 => 177,  443 => 174,  427 => 171,  421 => 169,  419 => 168,  411 => 167,  401 => 164,  397 => 162,  380 => 161,  371 => 155,  365 => 152,  359 => 149,  348 => 143,  343 => 140,  327 => 137,  321 => 135,  319 => 134,  311 => 133,  301 => 130,  291 => 127,  287 => 125,  270 => 124,  260 => 119,  256 => 118,  249 => 114,  237 => 107,  232 => 104,  216 => 101,  210 => 99,  208 => 98,  200 => 97,  190 => 94,  180 => 91,  176 => 89,  159 => 88,  151 => 83,  147 => 82,  143 => 81,  136 => 77,  127 => 71,  109 => 56,  94 => 44,  79 => 31,  77 => 30,  76 => 25,  70 => 22,  62 => 17,  56 => 14,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_consult_setting' %}

{% set script_controller = 'setting/consult-setting' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >{{'客服功能'|trans}}</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('enabled', {1:'开启'|trans, 0:'关闭'|trans}, consult.enabled) }}
    </div>
  </div>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >{{'浮动条颜色'|trans}}</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ 
        radios('color', 
        {'default':'<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>', 
         'warning':'<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>',
          'danger':'<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>'},
        consult.color) 
      }}
    </div>
  </div>
  <div data-role=\"template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"{{'删除'|trans}}\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"phone-template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"{{'删除'|trans}}\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"qqGroupTemplate\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"{{'删除'|trans}}\">×</button></input>
      </div>
    </div>
  </div>

  <fieldset>
    <legend>QQ{{'客服设置'|trans}}
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">{{'如何获取在线咨询链接？'|trans}}</span><br>
          1，{{'登录'|trans}} <a target=\"_blank\" href=\"https://id.b.qq.com/login/index\">https://id.b.qq.com/login/index</a>。 <br>
          2，{{'登录后，找到【营销QQ】-【在线代码生成】，选择【在论坛/微博发布在线咨询链接】。（包含“%http%://”）'|trans({'%http%':app.request.getScheme()})}}<br>
        </div>
      </div>
    </legend>
    <div id=\"consult-qq\">
      {% for qq in consult.qq %}
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qq[{{loop.index0}}][name]\" class=\"form-control\" value=\"{{qq.name}}\" placeholder=\"{{'QQ客服名称'|trans}}\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qq[{{loop.index0}}][number]\" class=\"form-control\" value=\"{{qq.number}}\" placeholder=\"{{'QQ号'|trans}}\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qq[{{loop.index0}}][url]\" class=\"form-control\" value=\"{{qq.url|default('')}}\" placeholder=\"{{'若使用营销QQ，请填入在线咨询链接'|trans}}\">
          {% if loop.index0 > 0 %}
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"{{'删除'|trans}}\">×</button>
          {% endif %}
        </div>
      </div>
      {% endfor %}
    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span  class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq' data-length='{{consult.qq | length}}'>{{'新增'|trans}}</span>
      </div>
    </div>
  </fieldset>


  <fieldset>
    <legend>{{'QQ群设置'|trans}}
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">{{'如何获取在线咨询链接？'|trans}}</span><br>
          {{'访问'|trans}}<a target=\"_blank\" href=\"http://qun.qq.com/join.html\">http://qun.qq.com/join.html</a>{{'获取QQ群直接加入网页代码。'|trans}}
        </div>
      </div>
    </legend>
    <div id=\"consult-qqgroup\">
      {% for qqgroup in consult.qqgroup %}
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qqgroup[{{loop.index0}}][name]\" class=\"form-control\" value=\"{{qqgroup.name }}\" placeholder=\"{{'QQ群名称'|trans}}\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qqgroup[{{loop.index0}}][number]\" class=\"form-control\" value=\"{{qqgroup.number}}\" placeholder=\"{{'QQ群号'|trans}}\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qqgroup[{{loop.index0}}][url]\" class=\"form-control\" value=\"{{qqgroup.url|default('')}}\" placeholder=\"{{'QQ群直接加入网页代码(选填)'|trans}}\">
          {% if loop.index0 > 0 %}
          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"{{'删除'|trans}}\">×</button>
          {% endif %}
        </div>
      </div>
      {% endfor %}
    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\" data-parentId='consult-qqgroup' data-length='{{consult.qqgroup | length}}'>{{'新增'|trans}}</span>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>{{'联系电话设置'|trans}}</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"worktime\">{{'工作时间'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"{{consult.worktime}}\">
      </div>
    </div>
    

    <div id=\"consult-phone\">
      {% for phone in consult.phone %}
      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"phone[{{loop.index0}}][name]\" class=\"form-control\" value=\"{{phone.name}}\" placeholder=\"{{'联系人'|trans}}\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"phone[{{loop.index0}}][number]\" class=\"form-control\" value=\"{{phone.number}}\" placeholder=\"{{'联系电话'|trans}}\">
          {% if loop.index0 > 0 %}
          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"{{'删除'|trans}}\">×</button>
          {% endif %}
        </div>
      </div>
      {% endfor %}
    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\"  data-role=\"phone-item-add\" data-parentId='consult-phone' data-length='{{consult.phone | length}}'>{{'新增'|trans}}</span>
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    <legend>{{'其他设置'|trans}}</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label>{{'微信二维码'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"consult-container\">{% if consult.webchatURI %}<img src=\"{{ asset(consult.webchatURI) }}\">{% endif %}</div>
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" id=\"consult-upload\" data-upload-token=\"{{ upload_token('system', 'image') }}\"type=\"button\" data-goto-url=\"{{ path('admin_setting_consult_upload') }}\">{{'上传'|trans}}</a>
        <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\" data-url=\"{{ path('admin_setting_consult_webchat_delete') }}\" {% if not consult.webchatURI %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>        
        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。'|trans}}</p>
        <input type=\"hidden\" name=\"webchatURI\" value=\"{{ consult.webchatURI }}\">
      </div>
    </div>
    

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"email\">{{'工作邮箱'|trans}}</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"{{consult.email}}\">
      </div>
    </div>
  </fieldset>

  {#<fieldset>#}
    {#<legend>{{'第三方客服设置'|trans}}</legend>#}
    {#<div class=\"row form-group\">#}
      {#<div class=\"col-md-2 control-label\">#}
        {#<label>{{'客服系统代码'|trans}}</label>#}
      {#</div>#}
      {#<div class=\"controls col-md-8\">#}
        {#<textarea name=\"supplier\" rows=\"8\" class=\"form-control\">#}
          {#{{ consult.supplier }}#}
        {#</textarea>#}
        {#<div class=\"help-block\">{{'客服系统代码由第三方客服系统提供, 支持乐语、百度商桥、53客服等客服系统,客服会出现在首页、班级详情、会员展示、课程详情页面。'|trans}}</div>#}
      {#</div>#}
    {#</div>#}
  {#</fieldset>#}

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
</form>

{% endblock %}";
    }
}
