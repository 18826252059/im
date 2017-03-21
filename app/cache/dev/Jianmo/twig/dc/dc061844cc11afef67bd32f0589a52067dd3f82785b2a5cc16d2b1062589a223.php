<?php

/* TopxiaAdminBundle:System/Pay:alipay.html.twig */
class __TwigTemplate_bae64a78a3e598bcc40b7a632c27b11966fbfb9ae8329bfb82222bf95229dc1e extends Twig_Template
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
        $__internal_cbf0f38f4b9fabcbcac68154631ce5db09a9a0d2827e36edcf5d014e40405141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf0f38f4b9fabcbcac68154631ce5db09a9a0d2827e36edcf5d014e40405141->enter($__internal_cbf0f38f4b9fabcbcac68154631ce5db09a9a0d2827e36edcf5d014e40405141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System/Pay:alipay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>支付宝</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 8
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("alipay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_enabled", array()));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_key\">接口类型</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("alipay_type", array("direct" => "立即到账接口", "escow" => "担保交易接口", "dualfun" => "标准双接口"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_type", array()));
        echo "
      <div class=\"help-block\">
        PID和Key可在申请支付宝接口后获取，
        <a href=\"https://b.alipay.com/order/productDetail.htm?productId=2015110218012942\" target=\"_blank\">如何申请？</a>
        <br>
        \"立即到账接口\"如需在移动客户端使用，请开通<a href=\"https://b.alipay.com/order/productDetail.htm?productId=2015110218008816\" target=\"blank\">手机网站支付</a>
        <br>
        “标准双接口”和“担保交易接口”分别在2014-12-29、2016-1-21停止签约，已生效合同继续有效至合同结束，使用这两个接口的用户请在合同到期前改签即时到账收款。
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_key\">PID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_key", array()), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_secret\">Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_secret", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">
        登录【支付宝商家服务】-【我的商家服务】，<a href=\"https://b.alipay.com/newIndex.htm\" target=\"_blank\">可查看PID和Key</a>。
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_account\">支付宝账户</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "alipay_account", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">如需开启移动客户端支付，需填写支付宝账户。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>启用支付宝交易关闭接口</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 60
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("close_trade_enabled", array(1 => "是", 0 => "否"), (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "close_trade_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "close_trade_enabled", array()), 0)) : (0)));
        echo "
      <div class=\"help-block\">该配置用于取消订单后，同步关闭支付宝的交易订单。如需使用该配置，需向支付宝客服申请开通“交易关闭接口”，审核通过后，方可使用。</div>
    </div>
  </div>
</fieldset>";
        
        $__internal_cbf0f38f4b9fabcbcac68154631ce5db09a9a0d2827e36edcf5d014e40405141->leave($__internal_cbf0f38f4b9fabcbcac68154631ce5db09a9a0d2827e36edcf5d014e40405141_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:alipay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 60,  86 => 51,  72 => 40,  61 => 32,  42 => 16,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "<fieldset>
  <legend>支付宝</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('alipay_enabled', {1:'开启', 0:'关闭'}, payment.alipay_enabled) }}
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_key\">接口类型</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('alipay_type', {'direct':'立即到账接口', 'escow': '担保交易接口', 'dualfun':'标准双接口' }, payment.alipay_type)}}
      <div class=\"help-block\">
        PID和Key可在申请支付宝接口后获取，
        <a href=\"https://b.alipay.com/order/productDetail.htm?productId=2015110218012942\" target=\"_blank\">如何申请？</a>
        <br>
        \"立即到账接口\"如需在移动客户端使用，请开通<a href=\"https://b.alipay.com/order/productDetail.htm?productId=2015110218008816\" target=\"blank\">手机网站支付</a>
        <br>
        “标准双接口”和“担保交易接口”分别在2014-12-29、2016-1-21停止签约，已生效合同继续有效至合同结束，使用这两个接口的用户请在合同到期前改签即时到账收款。
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_key\">PID</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"{{payment.alipay_key}}\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_secret\">Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"{{payment.alipay_secret}}\">
      <div class=\"help-block\">
        登录【支付宝商家服务】-【我的商家服务】，<a href=\"https://b.alipay.com/newIndex.htm\" target=\"_blank\">可查看PID和Key</a>。
      </div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"alipay_account\">支付宝账户</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"{{payment.alipay_account}}\">
      <div class=\"help-block\">如需开启移动客户端支付，需填写支付宝账户。</div>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>启用支付宝交易关闭接口</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      {{ radios('close_trade_enabled', {1:'是', 0:'否'}, payment.close_trade_enabled|default(0)) }}
      <div class=\"help-block\">该配置用于取消订单后，同步关闭支付宝的交易订单。如需使用该配置，需向支付宝客服申请开通“交易关闭接口”，审核通过后，方可使用。</div>
    </div>
  </div>
</fieldset>";
    }
}
