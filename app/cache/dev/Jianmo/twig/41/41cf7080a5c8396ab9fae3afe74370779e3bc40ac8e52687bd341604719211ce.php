<?php

/* TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig */
class __TwigTemplate_eb4db13c2b8b17a1a92f998e2c4cc1ac81c0f1e5ffb36dae4f04960b2191eb68 extends Twig_Template
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
        $__internal_e481cd1b4cb2e0ab861b63f5bb2f7284eb5b2e1825bf27b8e4427adc3683187f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e481cd1b4cb2e0ab861b63f5bb2f7284eb5b2e1825bf27b8e4427adc3683187f->enter($__internal_e481cd1b4cb2e0ab861b63f5bb2f7284eb5b2e1825bf27b8e4427adc3683187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig"));

        // line 1
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.upload_mode", "local") == "cloud")) {
            // line 2
            echo "<div class=\"video-quality-switcher\">
  <div>
    <label>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频转码类型："), "html", null, true);
            echo "</label>
    <span class=\"quality-switcher-bar\">
      <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
    </span>
  </div>

  <div class=\"quality-switcher-control\" style='display:none'>
    <div class=\"video-quality radios\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("画质："), "html", null, true);
            echo "
        ";
            // line 13
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("video_quality", array("low" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流畅 <span class=\"text-muted\">(适合PPT讲解)</span>"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>"), "high" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精细 <span class=\"text-muted\">(适合动态电影)</span>")), $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.video_quality", "normal"));
            echo "
    </div>

    <div class=\"audio-quality radios\">
      ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音质："), "html", null, true);
            echo "
        ";
            // line 18
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("video_audio_quality", array("low" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流畅"), "normal" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标准"), "high" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("高品")), $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.video_audio_quality", "normal"));
            echo "
    </div>
    <input type=\"hidden\" name=\"support_mobile\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.support_mobile", 0), "html", null, true);
            echo "\" />
    <div class=\"quality-actions\">
      <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("确定"), "html", null, true);
            echo "</a>
      <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消"), "html", null, true);
            echo "</a>
    </div>
  </div>
</div>
<script>app.load('topxiawebbundle/controller/cloud-file/cloud-video-quality-switcher')</script>
";
        }
        
        $__internal_e481cd1b4cb2e0ab861b63f5bb2f7284eb5b2e1825bf27b8e4427adc3683187f->leave($__internal_e481cd1b4cb2e0ab861b63f5bb2f7284eb5b2e1825bf27b8e4427adc3683187f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  64 => 22,  59 => 20,  54 => 18,  50 => 17,  43 => 13,  39 => 12,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('storage.upload_mode', 'local') == 'cloud'  %}
<div class=\"video-quality-switcher\">
  <div>
    <label>{{'视频转码类型：'|trans}}</label>
    <span class=\"quality-switcher-bar\">
      <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
    </span>
  </div>

  <div class=\"quality-switcher-control\" style='display:none'>
    <div class=\"video-quality radios\">
      {{'画质：'|trans}}
        {{ radios('video_quality', {'low':'流畅 <span class=\"text-muted\">(适合PPT讲解)</span>'|trans, 'normal':'标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>'|trans, 'high': '精细 <span class=\"text-muted\">(适合动态电影)</span>'|trans}, setting('storage.video_quality', 'normal')) }}
    </div>

    <div class=\"audio-quality radios\">
      {{'音质：'|trans}}
        {{ radios('video_audio_quality', {'low':'流畅'|trans, 'normal':'标准'|trans, 'high': '高品'|trans}, setting('storage.video_audio_quality', 'normal')) }}
    </div>
    <input type=\"hidden\" name=\"support_mobile\" value=\"{{ setting('storage.support_mobile', 0) }}\" />
    <div class=\"quality-actions\">
      <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">{{'确定'|trans}}</a>
      <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">{{'取消'|trans}}</a>
    </div>
  </div>
</div>
<script>app.load('topxiawebbundle/controller/cloud-file/cloud-video-quality-switcher')</script>
{% endif %}";
    }
}
