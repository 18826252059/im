<?php

/* TopxiaAdminBundle:System/Pay:llpay.html.twig */
class __TwigTemplate_4a53389241c7826588624a5492fecd09754b130ded614a59c1e4cc4c3f8a832d extends Twig_Template
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
        $__internal_b3fca3c418379220869b6b999614c77884da83ae27c39662d5f7eaeb79e63b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fca3c418379220869b6b999614c77884da83ae27c39662d5f7eaeb79e63b50->enter($__internal_b3fca3c418379220869b6b999614c77884da83ae27c39662d5f7eaeb79e63b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System/Pay:llpay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>连连支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      ";
        // line 8
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("llpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_enabled", array()));
        echo "
    </div>
     <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/lianlianpay.zip\">下载接口申请说明文档</a>
      </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_key\">商户账号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_key\" name=\"llpay_key\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_key", array()), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_secret\">商户平台Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_secret\" name=\"llpay_secret\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "llpay_secret", array()), "html", null, true);
        echo "\">
    </div>
  </div>
</fieldset>";
        
        $__internal_b3fca3c418379220869b6b999614c77884da83ae27c39662d5f7eaeb79e63b50->leave($__internal_b3fca3c418379220869b6b999614c77884da83ae27c39662d5f7eaeb79e63b50_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:llpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 28,  46 => 20,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "<fieldset>
  <legend>连连支付</legend>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>接口状态</label>
    </div>
    <div class=\"controls col-md-3 radios\">
      {{ radios('llpay_enabled', {1:'开启', 0:'关闭'}, payment.llpay_enabled) }}
    </div>
     <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/lianlianpay.zip\">下载接口申请说明文档</a>
      </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_key\">商户账号</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_key\" name=\"llpay_key\" class=\"form-control\" value=\"{{payment.llpay_key}}\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"llpay_secret\">商户平台Key</label>
    </div>
    <div class=\"controls col-md-8\">
      <input type=\"text\" id=\"llpay_secret\" name=\"llpay_secret\" class=\"form-control\" value=\"{{payment.llpay_secret}}\">
    </div>
  </div>
</fieldset>";
    }
}
