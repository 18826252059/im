<?php

/* TopxiaAdminBundle:System/Pay:wxpay.html.twig */
class __TwigTemplate_c5ebbe2107cea53beeb4e590a364838f642c9fb42e4612fe446059ab4fa8e8f8 extends Twig_Template
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
        $__internal_2af31f6865ab1ac28f1791530abf40be28205e492ba35a785f11dc5748787416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af31f6865ab1ac28f1791530abf40be28205e492ba35a785f11dc5748787416->enter($__internal_2af31f6865ab1ac28f1791530abf40be28205e492ba35a785f11dc5748787416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System/Pay:wxpay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>微信支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("wxpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_enabled", array()));
        echo "
    </div>
    <div class=\"controls col-md-4 radios\">
      <a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">简单申请介绍</a>
    </div>
  </div>

  <div class=\"form-group\" style=\"margin-top: -15px;\">
     <div class=\"col-md-3 help-block\">      
    </div>
    <div class=\"col-md-9 help-block\">
      仅支持配置微信<a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">公众号支付</a>，配置后，可在PC端和微信APP内选择微信支付。
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_key\">公众号APPID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_key", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">公众号APPID来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【开发】-【基本配置】-【开发者ID】。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_account\">商户号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_account", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">商户号来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【微信支付】-【商户信息】。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_secret\">微信商户平台API密钥</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "wxpay_secret", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        请先到<a target=\"_blank\" href=\"https://pay.weixin.qq.com\">微信商户平台</a>【账户设置】-【API安全】中设置API密钥，密钥由32个数字和英文字符组合。
      </div>
    </div>
  </div> 
</fieldset>
";
        
        $__internal_2af31f6865ab1ac28f1791530abf40be28205e492ba35a785f11dc5748787416->leave($__internal_2af31f6865ab1ac28f1791530abf40be28205e492ba35a785f11dc5748787416_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:wxpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 46,  66 => 37,  54 => 28,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "<fieldset>
  <legend>微信支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      {{ radios('wxpay_enabled', {1:'开启', 0:'关闭'}, payment.wxpay_enabled) }}
    </div>
    <div class=\"controls col-md-4 radios\">
      <a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">简单申请介绍</a>
    </div>
  </div>

  <div class=\"form-group\" style=\"margin-top: -15px;\">
     <div class=\"col-md-3 help-block\">      
    </div>
    <div class=\"col-md-9 help-block\">
      仅支持配置微信<a target=\"_blank\" href=\"http://kf.qq.com/faq/120911VrYVrA150905zeYjMZ.html\">公众号支付</a>，配置后，可在PC端和微信APP内选择微信支付。
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_key\">公众号APPID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"{{payment.wxpay_key}}\">
      <div class=\"help-block\">公众号APPID来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【开发】-【基本配置】-【开发者ID】。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_account\">商户号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"{{payment.wxpay_account}}\">
      <div class=\"help-block\">商户号来自<a target=\"_blank\" href=\"https://mp.weixin.qq.com/\">微信公众平台</a>内左侧栏【微信支付】-【商户信息】。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"wxpay_secret\">微信商户平台API密钥</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"{{payment.wxpay_secret}}\">
      <div class=\"help-block\">
        请先到<a target=\"_blank\" href=\"https://pay.weixin.qq.com\">微信商户平台</a>【账户设置】-【API安全】中设置API密钥，密钥由32个数字和英文字符组合。
      </div>
    </div>
  </div> 
</fieldset>
";
    }
}
