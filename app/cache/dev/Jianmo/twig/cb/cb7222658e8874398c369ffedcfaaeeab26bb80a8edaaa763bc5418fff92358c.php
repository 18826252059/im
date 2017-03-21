<?php

/* TopxiaAdminBundle:System/Pay:heepay.html.twig */
class __TwigTemplate_827be36cfaa725263c84d2c28aeb80c8a257326c72cfca791f53c058425d89f9 extends Twig_Template
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
        $__internal_784b33e743f49a5fd2c6c32c8b65ac201869d7edecc46e2f395bc0b276bf9ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784b33e743f49a5fd2c6c32c8b65ac201869d7edecc46e2f395bc0b276bf9ae0->enter($__internal_784b33e743f49a5fd2c6c32c8b65ac201869d7edecc46e2f395bc0b276bf9ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System/Pay:heepay.html.twig"));

        // line 1
        echo "<fieldset>
  <legend>汇付宝－网银支付</legend>
  ";
        // line 3
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.quickpay", false)) {
            // line 4
            echo "    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-3 radios\">
        ";
            // line 9
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("heepay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "heepay_enabled", array()));
            echo "
      </div>
      <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/heepay.zip\">下载接口申请说明文档</a>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"heepay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"heepay_key\" name=\"heepay_key\" class=\"form-control\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "heepay_key", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"heepay_secret\">商户平台Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"heepay_secret\" name=\"heepay_secret\" class=\"form-control\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "heepay_secret", array()), "html", null, true);
            echo "\">
      </div>
    </div>
  ";
        } else {
            // line 34
            echo "    <div class=\"alert alert-info text-center\" role=\"alert\">
      因汇付宝公司事务引起网银支付申请暂停，对此造成不便，请您谅解，如有疑问，请联系EduSoho官方
    </div>
  ";
        }
        // line 38
        echo "</fieldset>";
        
        $__internal_784b33e743f49a5fd2c6c32c8b65ac201869d7edecc46e2f395bc0b276bf9ae0->leave($__internal_784b33e743f49a5fd2c6c32c8b65ac201869d7edecc46e2f395bc0b276bf9ae0_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Pay:heepay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 38,  69 => 34,  62 => 30,  50 => 21,  35 => 9,  28 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<fieldset>
  <legend>汇付宝－网银支付</legend>
  {% if setting('magic.quickpay', false) %}
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-3 radios\">
        {{ radios('heepay_enabled', {1:'开启', 0:'关闭'}, payment.heepay_enabled) }}
      </div>
      <div class=\"controls col-md-4 radios\">
        <a href=\"http://www.edusoho.com/files/heepay.zip\">下载接口申请说明文档</a>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"heepay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"heepay_key\" name=\"heepay_key\" class=\"form-control\" value=\"{{payment.heepay_key}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"heepay_secret\">商户平台Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"heepay_secret\" name=\"heepay_secret\" class=\"form-control\" value=\"{{payment.heepay_secret}}\">
      </div>
    </div>
  {% else %}
    <div class=\"alert alert-info text-center\" role=\"alert\">
      因汇付宝公司事务引起网银支付申请暂停，对此造成不便，请您谅解，如有疑问，请联系EduSoho官方
    </div>
  {% endif %}
</fieldset>";
    }
}
