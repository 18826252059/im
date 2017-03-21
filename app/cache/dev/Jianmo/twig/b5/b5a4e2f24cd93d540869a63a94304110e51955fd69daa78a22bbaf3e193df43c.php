<?php

/* TopxiaAdminBundle:System:Report/status.html.twig */
class __TwigTemplate_4ff2861ad31942b6e77c750515a951e007c3c450d2cde35f50ac78ffb972deaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:Report/status.html.twig", 1);
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
        $__internal_268cd212ec47d4acee1f7a67f1b13b770d29e1948a9295306b1160d4de82cff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268cd212ec47d4acee1f7a67f1b13b770d29e1948a9295306b1160d4de82cff7->enter($__internal_268cd212ec47d4acee1f7a67f1b13b770d29e1948a9295306b1160d4de82cff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:Report/status.html.twig"));

        // line 3
        $context["menu"] = "admin_report_status_list";
        // line 4
        $context["script_controller"] = "system/report-status";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268cd212ec47d4acee1f7a67f1b13b770d29e1948a9295306b1160d4de82cff7->leave($__internal_268cd212ec47d4acee1f7a67f1b13b770d29e1948a9295306b1160d4de82cff7_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_6c6a15ff872b7c0dca05744e38a491a26641df8cb54485f48567365ee8b88f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6a15ff872b7c0dca05744e38a491a26641df8cb54485f48567365ee8b88f1d->enter($__internal_6c6a15ff872b7c0dca05744e38a491a26641df8cb54485f48567365ee8b88f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "  <table class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"40%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("环境检测"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐配置"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前状态"), "html", null, true);
        echo "</th>
      <th width=\"20%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最低要求"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>

    <tr>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作系统"), "html", null, true);
        echo "</td>
      <td>Linux</td>
      <td>
        <span class=\"text-success\">√ ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "os", array()), "html", null, true);
        echo "</span>
      </td>
      <td>--</td>
    </tr>

    <tr>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP版本"), "html", null, true);
        echo " （<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_php");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多信息"), "html", null, true);
        echo "</a>）</td>
      <td>5.5.x</td>
      <td>
        ";
        // line 31
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "phpVersionOk", array())) {
            // line 32
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "phpVersion", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 34
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "phpVersion", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 36
        echo "      </td>
      <td>5.3.3</td>
    </tr>

    <tr>
      <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP运行用户"), "html", null, true);
        echo "</td>
      <td>-</td>
      <td>
        <span class=\"text-success\">√ ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "user", array()), "html", null, true);
        echo "</span>
      </td>
      <td>-</td>
    </tr>

    <tr>
      <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("安全模式"), "html", null, true);
        echo "</td>
      <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 53
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "safemode", array()) == "Off")) {
            // line 54
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开启"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 56
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
            echo "</span>
        ";
        }
        // line 58
        echo "      </td>
      <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>PDO_MySQL</td>
      <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 66
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "pdoMysqlOk", array())) {
            // line 67
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 69
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装MySQL_PDO"), "html", null, true);
            echo "</span>
        ";
        }
        // line 71
        echo "      </td>
      <td>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文件上传大小"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该值决定可以上传视频的最大大小"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大于200M"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 82
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "uploadMaxFilesizeOk", array())) {
            // line 83
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 85
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 87
        echo "      </td>
      <td>2M</td>
    </tr>

    <tr>
      <td>
        ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("表单数据大小"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该值不能小于文件上传大小的值"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大于200M"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 98
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "postMaxsizeOk", array())) {
            // line 99
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "postMaxsize", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 101
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "postMaxsize", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 103
        echo "      </td>
      <td>8M</td>
    </tr>

    <tr>
      <td>
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP脚本最大执行时间"), "html", null, true);
        echo "
        <div class=\"text-muted\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该值决定上传视频时，最长可使用的时间"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("大于300秒"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 114
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "maxExecutionTimeOk", array())) {
            // line 115
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "maxExecutionTime", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秒"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 117
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "maxExecutionTime", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("秒"), "html", null, true);
            echo "</span>
        ";
        }
        // line 119
        echo "      </td>
      <td>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("30秒"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP扩展："), "html", null, true);
        echo "mbstring
        <div class=\"text-muted\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该扩展用于处理中文字符"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 130
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "mbstringOk", array())) {
            // line 131
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 133
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装"), "html", null, true);
            echo "</span>
        ";
        }
        // line 135
        echo "      </td>
      <td>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP扩展："), "html", null, true);
        echo "curl
        <div class=\"text-muted\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该扩展用于远程读取文件"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 146
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "curlOk", array())) {
            // line 147
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 149
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装"), "html", null, true);
            echo "</span>
        ";
        }
        // line 151
        echo "      </td>
      <td>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>

    <tr>
      <td>
        ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP扩展："), "html", null, true);
        echo "GD
        <div class=\"text-muted\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该扩展用于处理图片"), "html", null, true);
        echo "</div>
      </td>
      <td>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 162
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "gdOk", array())) {
            // line 163
            echo "          <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已安装"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 165
            echo "          <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尚未安装"), "html", null, true);
            echo "</span>
        ";
        }
        // line 167
        echo "      </td>
      <td>";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("必须"), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <table class=\"table table-hover table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"60%\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通信情况"), "html", null, true);
        echo "</th>
      <th width=\"40%\">";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("与Discuz Ucenter的连接"), "html", null, true);
        echo "</td>
      <td><span class=\"text-muted js-ucenter-check\"
                data-url=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_ucenter");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在检测....."), "html", null, true);
        echo "</span></td>
    </tr>
    ";
        // line 186
        if ((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_email.status"), "disable") == "disable")) {
            // line 187
            echo "      <tr>
        <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("邮件发送"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-info-sign text-info\" data-toggle=\"tooltip\" data-placement=\"top\"
                    title=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("每次检测，都会向当前用户发一封测试邮件，请保证当前用户的邮箱正确,邮件异常请到系统日志查看"), "html", null, true);
            echo "\"></i></td>
        <td><span class=\"text-muted js-email-send-check\" data-url=\"";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_email_send");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在检测....."), "html", null, true);
            echo "</span>
        </td>
      </tr>
    ";
        }
        // line 194
        echo "    </tbody>
  </table>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
      <tr>
        <th width=\"60%\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统文件、目录权限检查"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前状态"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所需状态"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正常扫描文件......"), "html", null, true);
        echo "</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
      <tr>
        <th width=\"30%\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("系统空间占用"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("可用"), "html", null, true);
        echo "</th>
        <th width=\"25%\">";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总共"), "html", null, true);
        echo "</th>
        <th width=\"25%\">";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("剩余"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["systemDiskUsage"]) ? $context["systemDiskUsage"] : $this->getContext($context, "systemDiskUsage")));
        foreach ($context['_seq'] as $context["_key"] => $context["diskUsage"]) {
            // line 228
            echo "          <tr>
            <td>
              ";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "name", array()), "html", null, true);
            echo "
              <a class=\"glyphicon glyphicon-question-sign text-muted pull-center\" data-toggle=\"popover\"
                 data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "title", array()), "html", null, true);
            echo "\">
              </a>
            </td>
            <td> ";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "free", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "total", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["diskUsage"], "rate", array()), "html", null, true);
            echo " </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diskUsage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "      </tbody>
    </table>
  </div>


";
        
        $__internal_6c6a15ff872b7c0dca05744e38a491a26641df8cb54485f48567365ee8b88f1d->leave($__internal_6c6a15ff872b7c0dca05744e38a491a26641df8cb54485f48567365ee8b88f1d_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:Report/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 240,  567 => 237,  563 => 236,  559 => 235,  553 => 232,  548 => 230,  544 => 228,  540 => 227,  533 => 223,  529 => 222,  525 => 221,  521 => 220,  515 => 217,  504 => 209,  496 => 204,  492 => 203,  488 => 202,  482 => 199,  475 => 194,  466 => 190,  462 => 189,  458 => 188,  455 => 187,  453 => 186,  446 => 184,  441 => 182,  433 => 177,  429 => 176,  418 => 168,  415 => 167,  409 => 165,  403 => 163,  401 => 162,  396 => 160,  391 => 158,  387 => 157,  379 => 152,  376 => 151,  370 => 149,  364 => 147,  362 => 146,  357 => 144,  352 => 142,  348 => 141,  340 => 136,  337 => 135,  331 => 133,  325 => 131,  323 => 130,  318 => 128,  313 => 126,  309 => 125,  301 => 120,  298 => 119,  291 => 117,  284 => 115,  282 => 114,  277 => 112,  272 => 110,  268 => 109,  260 => 103,  254 => 101,  248 => 99,  246 => 98,  241 => 96,  236 => 94,  232 => 93,  224 => 87,  218 => 85,  212 => 83,  210 => 82,  205 => 80,  200 => 78,  196 => 77,  188 => 72,  185 => 71,  179 => 69,  173 => 67,  171 => 66,  166 => 64,  158 => 59,  155 => 58,  149 => 56,  143 => 54,  141 => 53,  136 => 51,  132 => 50,  123 => 44,  117 => 41,  110 => 36,  104 => 34,  98 => 32,  96 => 31,  86 => 28,  77 => 22,  71 => 19,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  45 => 7,  39 => 6,  32 => 1,  30 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_report_status_list' %}
{% set script_controller = 'system/report-status' %}

{% block main %}
  <table class=\"table table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"40%\">{{ '环境检测'|trans }}</th>
      <th width=\"20%\">{{ '推荐配置'|trans }}</th>
      <th width=\"20%\">{{ '当前状态'|trans }}</th>
      <th width=\"20%\">{{ '最低要求'|trans }}</th>
    </tr>
    </thead>
    <tbody>

    <tr>
      <td>{{ '操作系统'|trans }}</td>
      <td>Linux</td>
      <td>
        <span class=\"text-success\">√ {{ env.os }}</span>
      </td>
      <td>--</td>
    </tr>

    <tr>
      <td>{{ 'PHP版本'|trans }} （<a href=\"{{ path('admin_report_status_php') }}\">{{ '更多信息'|trans }}</a>）</td>
      <td>5.5.x</td>
      <td>
        {% if env.phpVersionOk %}
          <span class=\"text-success\">√ {{ env.phpVersion }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.phpVersion }}</span>
        {% endif %}
      </td>
      <td>5.3.3</td>
    </tr>

    <tr>
      <td>{{ 'PHP运行用户'|trans }}</td>
      <td>-</td>
      <td>
        <span class=\"text-success\">√ {{ env.user }}</span>
      </td>
      <td>-</td>
    </tr>

    <tr>
      <td>{{ '安全模式'|trans }}</td>
      <td>{{ '关闭'|trans }}</td>
      <td>
        {% if env.safemode == 'Off' %}
          <span class=\"text-danger\">X {{ '开启'|trans }}</span>
        {% else %}
          <span class=\"text-success\">√ {{ '关闭'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ '关闭'|trans }}</td>
    </tr>

    <tr>
      <td>PDO_MySQL</td>
      <td>{{ '必须'|trans }}</td>
      <td>
        {% if env.pdoMysqlOk %}
          <span class=\"text-success\">√ {{ '已安装'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ '尚未安装MySQL_PDO'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ '必须'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ '文件上传大小'|trans }}
        <div class=\"text-muted\">{{ '该值决定可以上传视频的最大大小'|trans }}</div>
      </td>
      <td>{{ '大于200M'|trans }}</td>
      <td>
        {% if env.uploadMaxFilesizeOk %}
          <span class=\"text-success\">√ {{ env.uploadMaxFilesize }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.uploadMaxFilesize }}</span>
        {% endif %}
      </td>
      <td>2M</td>
    </tr>

    <tr>
      <td>
        {{ '表单数据大小'|trans }}
        <div class=\"text-muted\">{{ '该值不能小于文件上传大小的值'|trans }}</div>
      </td>
      <td>{{ '大于200M'|trans }}</td>
      <td>
        {% if env.postMaxsizeOk %}
          <span class=\"text-success\">√ {{ env.postMaxsize }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.postMaxsize }}</span>
        {% endif %}
      </td>
      <td>8M</td>
    </tr>

    <tr>
      <td>
        {{ 'PHP脚本最大执行时间'|trans }}
        <div class=\"text-muted\">{{ '该值决定上传视频时，最长可使用的时间'|trans }}</div>
      </td>
      <td>{{ '大于300秒'|trans }}</td>
      <td>
        {% if env.maxExecutionTimeOk %}
          <span class=\"text-success\">√ {{ env.maxExecutionTime }}{{ '秒'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ env.maxExecutionTime }}{{ '秒'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ '30秒'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'PHP扩展：'|trans }}mbstring
        <div class=\"text-muted\">{{ '该扩展用于处理中文字符'|trans }}</div>
      </td>
      <td>{{ '必须'|trans }}</td>
      <td>
        {% if env.mbstringOk %}
          <span class=\"text-success\">√ {{ '已安装'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ '尚未安装'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ '必须'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'PHP扩展：'|trans }}curl
        <div class=\"text-muted\">{{ '该扩展用于远程读取文件'|trans }}</div>
      </td>
      <td>{{ '必须'|trans }}</td>
      <td>
        {% if env.curlOk %}
          <span class=\"text-success\">√ {{ '已安装'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ '尚未安装'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ '必须'|trans }}</td>
    </tr>

    <tr>
      <td>
        {{ 'PHP扩展：'|trans }}GD
        <div class=\"text-muted\">{{ '该扩展用于处理图片'|trans }}</div>
      </td>
      <td>{{ '必须'|trans }}</td>
      <td>
        {% if env.gdOk %}
          <span class=\"text-success\">√ {{ '已安装'|trans }}</span>
        {% else %}
          <span class=\"text-danger\">X {{ '尚未安装'|trans }}</span>
        {% endif %}
      </td>
      <td>{{ '必须'|trans }}</td>
    </tr>
    </tbody>
  </table>

  <table class=\"table table-hover table-striped table-bordered\">
    <thead>
    <tr>
      <th width=\"60%\">{{ '通信情况'|trans }}</th>
      <th width=\"40%\">{{ '状态'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>{{ '与Discuz Ucenter的连接'|trans }}</td>
      <td><span class=\"text-muted js-ucenter-check\"
                data-url=\"{{ path('admin_report_status_ucenter') }}\">{{ '正在检测.....'|trans }}</span></td>
    </tr>
    {% if setting(\"cloud_email.status\")|default(\"disable\") == \"disable\" %}
      <tr>
        <td>{{ '邮件发送'|trans }} <i class=\"glyphicon glyphicon-info-sign text-info\" data-toggle=\"tooltip\" data-placement=\"top\"
                    title=\"{{ '每次检测，都会向当前用户发一封测试邮件，请保证当前用户的邮箱正确,邮件异常请到系统日志查看'|trans }}\"></i></td>
        <td><span class=\"text-muted js-email-send-check\" data-url=\"{{ path('admin_report_status_email_send') }}\">{{ '正在检测.....'|trans }}</span>
        </td>
      </tr>
    {% endif %}
    </tbody>
  </table>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"{{ path('admin_report_status_directory') }}\">
      <thead>
      <tr>
        <th width=\"60%\">{{ '系统文件、目录权限检查'|trans }}</th>
        <th width=\"20%\">{{ '当前状态'|trans }}</th>
        <th width=\"20%\">{{ '所需状态'|trans }}</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">{{ '正常扫描文件......'|trans }}</td>
      </tr>
      </tbody>
    </table>
  </div>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\"
           data-url=\"{{ path('admin_report_status_directory') }}\">
      <thead>
      <tr>
        <th width=\"30%\">{{ '系统空间占用'|trans }}</th>
        <th width=\"20%\">{{ '可用'|trans }}</th>
        <th width=\"25%\">{{ '总共'|trans }}</th>
        <th width=\"25%\">{{ '剩余'|trans }}</th>
      </tr>
      </thead>
      <tbody>
        {% for diskUsage in systemDiskUsage %}
          <tr>
            <td>
              {{ diskUsage.name }}
              <a class=\"glyphicon glyphicon-question-sign text-muted pull-center\" data-toggle=\"popover\"
                 data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ diskUsage.title }}\">
              </a>
            </td>
            <td> {{ diskUsage.free }} </td>
            <td> {{ diskUsage.total }} </td>
            <td> {{ diskUsage.rate }} </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>


{% endblock %}";
    }
}
