<?php

/* TopxiaAdminBundle:User:edit-modal.html.twig */
class __TwigTemplate_4668033bcc24ece04d943322b034f28c010fb5c25e19ea5389e9b80aceea1cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:edit-modal.html.twig", 1);
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
        $__internal_fddf0a3e56ebf77912118e6e9204e368d46affd0ad6eed4e2e132a32913062e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddf0a3e56ebf77912118e6e9204e368d46affd0ad6eed4e2e132a32913062e7->enter($__internal_fddf0a3e56ebf77912118e6e9204e368d46affd0ad6eed4e2e132a32913062e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:User:edit-modal.html.twig"));

        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fddf0a3e56ebf77912118e6e9204e368d46affd0ad6eed4e2e132a32913062e7->leave($__internal_fddf0a3e56ebf77912118e6e9204e368d46affd0ad6eed4e2e132a32913062e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62008772d589311eb2f434b7f53fc46dabf0d6f37852faab6bb5c65c6f351ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62008772d589311eb2f434b7f53fc46dabf0d6f37852faab6bb5c65c6f351ff4->enter($__internal_62008772d589311eb2f434b7f53fc46dabf0d6f37852faab6bb5c65c6f351ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑用户信息"), "html", null, true);
        
        $__internal_62008772d589311eb2f434b7f53fc46dabf0d6f37852faab6bb5c65c6f351ff4->leave($__internal_62008772d589311eb2f434b7f53fc46dabf0d6f37852faab6bb5c65c6f351ff4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1df5df3a25dfd44b3e49b370ba05063b83ca52ad1de7d3767527377ca6bf93c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df5df3a25dfd44b3e49b370ba05063b83ca52ad1de7d3767527377ca6bf93c3->enter($__internal_1df5df3a25dfd44b3e49b370ba05063b83ca52ad1de7d3767527377ca6bf93c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<form id=\"user-edit-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"truename\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("姓名"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "truename", array()), "html", null, true);
        echo "\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"gender\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("性别"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-7 controls radios\">
      <div id=\"gender\">
        <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
        ";
        // line 26
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array()) == "male")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_0\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("男"), "html", null, true);
        echo "</label>

        <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
        ";
        // line 30
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array()) == "female")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_1\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("女"), "html", null, true);
        echo "</label>
      </div>

    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"idcard\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("身份证号"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idcard", array()), "html", null, true);
        echo "\">
     </div>
    </div>

    ";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "verifiedMobile", array())) > 0)) {
            // line 47
            echo "      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"mobile\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
          <div class=\"control-text\"> ";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : ("")), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
            echo ")</span> </div>
       </div>
      </div>
    ";
        } else {
            // line 56
            echo "      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"mobile\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机号码"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
            echo "\">
       </div>
      </div>
    ";
        }
        // line 65
        echo "
    <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"company\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公司"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "company", array()), "html", null, true);
        echo "\">
       </div>
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"job\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("职业"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"job\" name=\"job\" class=\"form-control\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "job", array()), "html", null, true);
        echo "\">
     </div>
    </div>

    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"title\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头衔"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "title", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"signature\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人签名"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea type=\"text\" rows=\"4\" maxlength=\"80\" id=\"signature\" name=\"signature\" class=\"form-control\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "signature", array()), "html", null, true);
        echo "</textarea>
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"about\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("自我介绍"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea id=\"about\" name=\"about\" data-image-upload-url=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editor_upload", array("token" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"site\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人主页"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"site\" name=\"site\" class=\"form-control\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "site", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
  <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weibo\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微博"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weibo\" name=\"weibo\" class=\"form-control\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "weibo", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"qq\">QQ</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"qq\" name=\"qq\" class=\"form-control\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "qq", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weixin\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("微信"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weixin\" name=\"weixin\" class=\"form-control\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "weixin", array()), "html", null, true);
        echo "\">
     </div>
    </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">           

";
        // line 150
        if ((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) {
            // line 151
            echo "          <hr>
          ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 153
                echo "          ";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 154
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <textarea id=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" >";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 161
$context["field"], "type", array()) == "int")) {
                    // line 162
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最大值为9位整数"), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 169
$context["field"], "type", array()) == "float")) {
                    // line 170
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 171
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保留到2位小数"), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 177
$context["field"], "type", array()) == "date")) {
                    // line 178
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 181
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"   value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 185
$context["field"], "type", array()) == "varchar")) {
                    // line 186
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 189
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                }
                // line 194
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "          ";
        }
        // line 196
        echo "
</form>
";
        
        $__internal_1df5df3a25dfd44b3e49b370ba05063b83ca52ad1de7d3767527377ca6bf93c3->leave($__internal_1df5df3a25dfd44b3e49b370ba05063b83ca52ad1de7d3767527377ca6bf93c3_prof);

    }

    // line 200
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ad17060629029ea3fbda8f508076166618ba63c39c6a5033b7af78b915f1c9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad17060629029ea3fbda8f508076166618ba63c39c6a5033b7af78b915f1c9bd->enter($__internal_ad17060629029ea3fbda8f508076166618ba63c39c6a5033b7af78b915f1c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 201
        echo "  <button id=\"edit-user-btn\" data-submiting-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-edit-form\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("保存"), "html", null, true);
        echo "</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
        echo "</button>
  <script>app.load('user/edit-modal')</script>
";
        
        $__internal_ad17060629029ea3fbda8f508076166618ba63c39c6a5033b7af78b915f1c9bd->leave($__internal_ad17060629029ea3fbda8f508076166618ba63c39c6a5033b7af78b915f1c9bd_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 202,  477 => 201,  471 => 200,  462 => 196,  459 => 195,  453 => 194,  441 => 189,  434 => 187,  431 => 186,  429 => 185,  414 => 181,  407 => 179,  404 => 178,  402 => 177,  387 => 173,  380 => 171,  377 => 170,  375 => 169,  360 => 165,  353 => 163,  350 => 162,  348 => 161,  335 => 157,  328 => 155,  325 => 154,  322 => 153,  318 => 152,  315 => 151,  313 => 150,  308 => 148,  301 => 144,  295 => 141,  286 => 135,  274 => 126,  268 => 123,  259 => 117,  253 => 114,  242 => 108,  236 => 105,  227 => 99,  221 => 96,  212 => 90,  206 => 87,  196 => 80,  190 => 77,  181 => 71,  175 => 68,  170 => 65,  163 => 61,  157 => 58,  153 => 56,  144 => 52,  138 => 49,  134 => 47,  132 => 46,  125 => 42,  119 => 39,  108 => 31,  102 => 30,  96 => 27,  90 => 26,  82 => 21,  73 => 15,  67 => 12,  60 => 8,  57 => 7,  51 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}

{% set modalSize = 'large' %}

{% block title %}{{'编辑用户信息'|trans}}{% endblock %}
{% block body %}

<form id=\"user-edit-form\" class=\"form-horizontal\" method=\"post\" action=\"{{ url('admin_user_edit', {id:user.id}) }}\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"truename\">{{'姓名'|trans}}</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"{{profile.truename}}\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"gender\">{{'性别'|trans}}</label>
    </div>
    <div class=\"col-md-7 controls radios\">
      <div id=\"gender\">
        <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
        {% if profile.gender == 'male' %} checked=\"checked\" {% endif %}>
        <label for=\"gender_0\">{{'男'|trans}}</label>

        <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
        {% if profile.gender == 'female' %} checked=\"checked\" {% endif %}>
        <label for=\"gender_1\">{{'女'|trans}}</label>
      </div>

    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"idcard\">{{'身份证号'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"{{profile.idcard}}\">
     </div>
    </div>

    {% if (user.verifiedMobile|length) > 0 %}
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"mobile\">{{'手机号码'|trans}}</label>
        </div>
        <div class=\"col-md-7 controls\">
          <div class=\"control-text\"> {{user.verifiedMobile|default('')}}<span class=\"text-success\">({{'已绑定'|trans}})</span> </div>
       </div>
      </div>
    {% else %}
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"mobile\">{{'手机号码'|trans}}</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" value=\"{{profile.mobile|default('')}}\">
       </div>
      </div>
    {% endif %}

    <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"company\">{{'公司'|trans}}</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"{{profile.company}}\">
       </div>
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"job\">{{'职业'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"job\" name=\"job\" class=\"form-control\" value=\"{{profile.job}}\">
     </div>
    </div>

    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"title\">{{'头衔'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"{{profile.title}}\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"signature\">{{'个人签名'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea type=\"text\" rows=\"4\" maxlength=\"80\" id=\"signature\" name=\"signature\" class=\"form-control\">{{profile.signature}}</textarea>
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"about\">{{'自我介绍'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea id=\"about\" name=\"about\" data-image-upload-url=\"{{ path('editor_upload', {token:upload_token('default')}) }}\">{{profile.about}}</textarea>
      </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"site\">{{'个人主页'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"site\" name=\"site\" class=\"form-control\" value=\"{{profile.site}}\">
     </div>
    </div>
    <p></p>
  <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weibo\">{{'微博'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weibo\" name=\"weibo\" class=\"form-control\" value=\"{{profile.weibo}}\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"qq\">QQ</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"qq\" name=\"qq\" class=\"form-control\" value=\"{{profile.qq}}\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weixin\">{{'微信'|trans}}</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weixin\" name=\"weixin\" class=\"form-control\" value=\"{{profile.weixin}}\">
     </div>
    </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">           

{% if fields %}
          <hr>
          {% for field in fields %}
          {% if field.type==\"text\" %}
          <div class=\"form-group\">
            <label for=\"{{field.fieldName}}\" class=\"col-md-2 control-label\">{{field.title}}</label>
            <div class=\"col-md-7 controls\">
              <textarea id=\"{{field.fieldName}}\" name=\"{{field.fieldName}}\" class=\"{{field.type}} form-control\" >{{ profile[field.fieldName]|default('') }}</textarea>
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          {% elseif field.type==\"int\" %}
          <div class=\"form-group\">
            <label for=\"{{field.fieldName}}\" class=\"col-md-2 control-label\">{{field.title}}</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"{{field.fieldName}}\" placeholder=\"{{'最大值为9位整数'|trans}}\" name=\"{{field.fieldName}}\" class=\"{{field.type}} form-control\"  value=\"{{ profile[field.fieldName]|default('') }}\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          {% elseif field.type==\"float\" %}
          <div class=\"form-group\">
            <label for=\"{{field.fieldName}}\" class=\"col-md-2 control-label\">{{field.title}}</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"{{field.fieldName}}\" placeholder=\"{{'保留到2位小数'|trans}}\" name=\"{{field.fieldName}}\" class=\"{{field.type}} form-control\" value=\"{{ profile[field.fieldName]|default('') }}\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          {% elseif field.type==\"date\" %}
          <div class=\"form-group\">
            <label for=\"{{field.fieldName}}\" class=\"col-md-2 control-label\">{{field.title}}</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"{{field.fieldName}}\" name=\"{{field.fieldName}}\" class=\"{{field.type}} form-control\"   value=\"{% if profile[field.fieldName] %}{{profile[field.fieldName]}}{% endif %}\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          {% elseif field.type==\"varchar\" %}
          <div class=\"form-group\">
            <label for=\"{{field.fieldName}}\" class=\"col-md-2 control-label\">{{field.title}}</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"{{field.fieldName}}\" name=\"{{field.fieldName}}\" class=\"form-control\"  value=\"{{ profile[field.fieldName]|default('') }}\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          {% endif %}
          {% endfor %}
          {% endif %}

</form>
{% endblock %}

{% block footer %}
  <button id=\"edit-user-btn\" data-submiting-text=\"{{'正在提交'|trans}}\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-edit-form\">{{'保存'|trans}}</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">{{'取消'|trans}}</button>
  <script>app.load('user/edit-modal')</script>
{% endblock %}";
    }
}
