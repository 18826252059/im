<?php

/* TopxiaWebBundle:Common:data-dict-macro.html.twig */
class __TwigTemplate_a027320b9042604733f5d2d50efac9db2374b2384819d0bdca15ae5c58488ebe extends Twig_Template
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
        $__internal_4a9753db8250df443e245d9657481f52ce348e9d858a659890ddb701dca095ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9753db8250df443e245d9657481f52ce348e9d858a659890ddb701dca095ff->enter($__internal_4a9753db8250df443e245d9657481f52ce348e9d858a659890ddb701dca095ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Common:data-dict-macro.html.twig"));

        // line 10
        echo "
";
        // line 24
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 60
        echo "
";
        // line 70
        echo "
";
        // line 80
        echo "
";
        // line 90
        echo "
";
        
        $__internal_4a9753db8250df443e245d9657481f52ce348e9d858a659890ddb701dca095ff->leave($__internal_4a9753db8250df443e245d9657481f52ce348e9d858a659890ddb701dca095ff_prof);

    }

    // line 1
    public function getcourseStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d926fa3df63000dffddfe363806c176779daf2aeab4c801fe5b936cf7a9def05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d926fa3df63000dffddfe363806c176779daf2aeab4c801fe5b936cf7a9def05->enter($__internal_d926fa3df63000dffddfe363806c176779daf2aeab4c801fe5b936cf7a9def05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "courseStatus"));

            // line 2
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "draft")) {
                // line 3
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 4
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "published")) {
                // line 5
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 6
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "closed")) {
                // line 7
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_d926fa3df63000dffddfe363806c176779daf2aeab4c801fe5b936cf7a9def05->leave($__internal_d926fa3df63000dffddfe363806c176779daf2aeab4c801fe5b936cf7a9def05_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getfileType($__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bde387708dad7dc121626e8cf6462d5b6a3b3ca268497a8644c695fd16110320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bde387708dad7dc121626e8cf6462d5b6a3b3ca268497a8644c695fd16110320->enter($__internal_bde387708dad7dc121626e8cf6462d5b6a3b3ca268497a8644c695fd16110320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fileType"));

            // line 12
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "video")) {
                // line 13
                echo "        <span class=\"glyphicon glyphicon-facetime-video text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("视频"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 14
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "audio")) {
                // line 15
                echo "        <span class=\"glyphicon glyphicon-music text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("音频"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 16
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "document")) {
                // line 17
                echo "        <span class=\"glyphicon glyphicon-briefcase text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("文档"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 18
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "image")) {
                // line 19
                echo "        <span class=\"glyphicon glyphicon-picture text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图片"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 20
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "other")) {
                // line 21
                echo "        <span class=\"glyphicon glyphicon-question-sign text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("其他"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_bde387708dad7dc121626e8cf6462d5b6a3b3ca268497a8644c695fd16110320->leave($__internal_bde387708dad7dc121626e8cf6462d5b6a3b3ca268497a8644c695fd16110320_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getorderStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b5bfb5f8f34692e81f3f85443c9290fc3cab8657c188be47ca2a6f23773b5ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b5bfb5f8f34692e81f3f85443c9290fc3cab8657c188be47ca2a6f23773b5ea2->enter($__internal_b5bfb5f8f34692e81f3f85443c9290fc3cab8657c188be47ca2a6f23773b5ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "orderStatus"));

            // line 26
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "created")) {
                // line 27
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未付款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 28
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "paid")) {
                // line 29
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已付款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 30
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "refunding")) {
                // line 31
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款中"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 32
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "refunded")) {
                // line 33
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已退款"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 34
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "cancelled")) {
                // line 35
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_b5bfb5f8f34692e81f3f85443c9290fc3cab8657c188be47ca2a6f23773b5ea2->leave($__internal_b5bfb5f8f34692e81f3f85443c9290fc3cab8657c188be47ca2a6f23773b5ea2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getrefundStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a3ff2c5de96e47250928d0adb1acaae0a11ad3e1871d057c8fd9a782bd846a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a3ff2c5de96e47250928d0adb1acaae0a11ad3e1871d057c8fd9a782bd846a1a->enter($__internal_a3ff2c5de96e47250928d0adb1acaae0a11ad3e1871d057c8fd9a782bd846a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "refundStatus"));

            // line 40
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "created")) {
                // line 41
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已申请"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 42
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "success")) {
                // line 43
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款成功"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 44
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "failed")) {
                // line 45
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退款失败"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 46
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "cancelled")) {
                // line 47
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已取消"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_a3ff2c5de96e47250928d0adb1acaae0a11ad3e1871d057c8fd9a782bd846a1a->leave($__internal_a3ff2c5de96e47250928d0adb1acaae0a11ad3e1871d057c8fd9a782bd846a1a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getlogLevel($__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bf51ace65534a8b588fcdf2f62501d07b5d8f93f1abb17423eda32309ba95b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bf51ace65534a8b588fcdf2f62501d07b5d8f93f1abb17423eda32309ba95b77->enter($__internal_bf51ace65534a8b588fcdf2f62501d07b5d8f93f1abb17423eda32309ba95b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logLevel"));

            // line 52
            echo "    ";
            if (((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) == "info")) {
                // line 53
                echo "        <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提示"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 54
(isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) == "warning")) {
                // line 55
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("警告"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 56
(isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) == "error")) {
                // line 57
                echo "        <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("错误"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_bf51ace65534a8b588fcdf2f62501d07b5d8f93f1abb17423eda32309ba95b77->leave($__internal_bf51ace65534a8b588fcdf2f62501d07b5d8f93f1abb17423eda32309ba95b77_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getcontentStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_067da31bf43ff999d3e30888b6c5d4ed7cf748946a69351740312f63ba43c1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_067da31bf43ff999d3e30888b6c5d4ed7cf748946a69351740312f63ba43c1b7->enter($__internal_067da31bf43ff999d3e30888b6c5d4ed7cf748946a69351740312f63ba43c1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "contentStatus"));

            // line 62
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "published")) {
                // line 63
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 64
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "unpublished")) {
                // line 65
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 66
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "trash")) {
                // line 67
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回收站"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_067da31bf43ff999d3e30888b6c5d4ed7cf748946a69351740312f63ba43c1b7->leave($__internal_067da31bf43ff999d3e30888b6c5d4ed7cf748946a69351740312f63ba43c1b7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getarticleStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b0aaf29c3a708c79d593cf4494aa1687e073fa233edd3532188133e233c60d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b0aaf29c3a708c79d593cf4494aa1687e073fa233edd3532188133e233c60d15->enter($__internal_b0aaf29c3a708c79d593cf4494aa1687e073fa233edd3532188133e233c60d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "articleStatus"));

            // line 72
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "published")) {
                // line 73
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 74
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "unpublished")) {
                // line 75
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 76
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "trash")) {
                // line 77
                echo "        <span class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回收站"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_b0aaf29c3a708c79d593cf4494aa1687e073fa233edd3532188133e233c60d15->leave($__internal_b0aaf29c3a708c79d593cf4494aa1687e073fa233edd3532188133e233c60d15_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getdiscountStatus($__status__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $__status__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_677c2b3f3a2e535f40e38ca0af6f40ed59d77cfb9e3d989bc94bdaf46215a514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_677c2b3f3a2e535f40e38ca0af6f40ed59d77cfb9e3d989bc94bdaf46215a514->enter($__internal_677c2b3f3a2e535f40e38ca0af6f40ed59d77cfb9e3d989bc94bdaf46215a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "discountStatus"));

            // line 82
            echo "    ";
            if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "unstart")) {
                // line 83
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未开始"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 84
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "running")) {
                // line 85
                echo "        <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进行中"), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 86
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "finished")) {
                // line 87
                echo "        <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已结束"), "html", null, true);
                echo "</span>
    ";
            }
            
            $__internal_677c2b3f3a2e535f40e38ca0af6f40ed59d77cfb9e3d989bc94bdaf46215a514->leave($__internal_677c2b3f3a2e535f40e38ca0af6f40ed59d77cfb9e3d989bc94bdaf46215a514_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getvideo_quality($__option__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "option" => $__option__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0804e133d4a40bd76e500a5f428e5c11b1c5b5b01d5aec1f860ce967d2fdc0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0804e133d4a40bd76e500a5f428e5c11b1c5b5b01d5aec1f860ce967d2fdc0db->enter($__internal_0804e133d4a40bd76e500a5f428e5c11b1c5b5b01d5aec1f860ce967d2fdc0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "video_quality"));

            // line 92
            echo "     ";
            if (((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == "low")) {
                // line 93
                echo "       ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流畅"), "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合PPT讲解"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 94
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == "normal")) {
                // line 95
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标准"), "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合屏幕录制、摄像头拍摄"), "html", null, true);
                echo ")</span>
    ";
            } elseif ((            // line 96
(isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")) == "high")) {
                // line 97
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精细"), "html", null, true);
                echo " <span class=\"text-muted\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("适合动态电影"), "html", null, true);
                echo ")</span>
    ";
            }
            
            $__internal_0804e133d4a40bd76e500a5f428e5c11b1c5b5b01d5aec1f860ce967d2fdc0db->leave($__internal_0804e133d4a40bd76e500a5f428e5c11b1c5b5b01d5aec1f860ce967d2fdc0db_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:data-dict-macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 97,  552 => 96,  545 => 95,  543 => 94,  536 => 93,  533 => 92,  518 => 91,  496 => 87,  494 => 86,  489 => 85,  487 => 84,  482 => 83,  479 => 82,  464 => 81,  442 => 77,  440 => 76,  435 => 75,  433 => 74,  428 => 73,  425 => 72,  410 => 71,  388 => 67,  386 => 66,  381 => 65,  379 => 64,  374 => 63,  371 => 62,  356 => 61,  334 => 57,  332 => 56,  327 => 55,  325 => 54,  320 => 53,  317 => 52,  302 => 51,  280 => 47,  278 => 46,  273 => 45,  271 => 44,  266 => 43,  264 => 42,  259 => 41,  256 => 40,  241 => 39,  219 => 35,  217 => 34,  212 => 33,  210 => 32,  205 => 31,  203 => 30,  198 => 29,  196 => 28,  191 => 27,  188 => 26,  173 => 25,  151 => 21,  149 => 20,  144 => 19,  142 => 18,  137 => 17,  135 => 16,  130 => 15,  128 => 14,  123 => 13,  120 => 12,  105 => 11,  83 => 7,  81 => 6,  76 => 5,  74 => 4,  69 => 3,  66 => 2,  51 => 1,  43 => 90,  40 => 80,  37 => 70,  34 => 60,  31 => 50,  28 => 38,  25 => 24,  22 => 10,);
    }

    public function getSource()
    {
        return "{% macro courseStatus(status) %}
    {% if status == 'draft' %}
        <span class=\"text-muted\">{{ '未发布'|trans }}</span>
    {% elseif  status == 'published' %}
        <span class=\"text-success\">{{ '已发布'|trans }}</span>
    {% elseif status == 'closed' %}
        <span class=\"text-danger\">{{ '已关闭'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro fileType(type) %}
    {% if type == 'video' %}
        <span class=\"glyphicon glyphicon-facetime-video text-success\">{{ '视频'|trans }}</span>
    {% elseif type == 'audio' %}
        <span class=\"glyphicon glyphicon-music text-success\">{{ '音频'|trans }}</span>
    {% elseif type == 'document' %}
        <span class=\"glyphicon glyphicon-briefcase text-success\">{{ '文档'|trans }}</span>
    {% elseif type == 'image' %}
        <span class=\"glyphicon glyphicon-picture text-success\">{{ '图片'|trans }}</span>
    {% elseif type == 'other' %}
        <span class=\"glyphicon glyphicon-question-sign text-success\">{{ '其他'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro  orderStatus(status) %}
    {% if status == 'created' %}
        <span class=\"label label-danger\">{{ '未付款'|trans }}</span>
    {% elseif status == 'paid' %}
        <span class=\"label label-success\">{{ '已付款'|trans }}</span>
    {% elseif status == 'refunding' %}
        <span class=\"text-warning\">{{ '退款中'|trans }}</span>
    {% elseif status == 'refunded' %}
        <span class=\"text-danger\">{{ '已退款'|trans }}</span>
    {% elseif status == 'cancelled' %}
        <span class=\"text-muted\">{{ '已关闭'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro refundStatus(status) %}
    {% if status == 'created' %}
        <span class=\"text-warning\">{{ '已申请'|trans }}</span>
    {% elseif status == 'success' %}
        <span class=\"text-success\">{{ '退款成功'|trans }}</span>
    {% elseif status == 'failed' %}
        <span class=\"text-danger\">{{ '退款失败'|trans }}</span>
    {% elseif status == 'cancelled' %}
        <span class=\"text-muted\">{{ '已取消'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro logLevel(level) %}
    {% if level == 'info' %}
        <span>{{ '提示'|trans }}</span>
    {% elseif level == 'warning' %}
        <span class=\"text-warning\">{{ '警告'|trans }}</span>
    {% elseif level == 'error' %}
        <span class=\"text-danger\">{{ '错误'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro contentStatus(status) %}
    {% if status == 'published' %}
        <span class=\"text-success\">{{ '已发布'|trans }}</span>
    {% elseif status == 'unpublished' %}
        <span class=\"text-muted\">{{ '未发布'|trans }}</span>
    {% elseif status == 'trash' %}
        <span class=\"text-warning\">{{ '回收站'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro articleStatus(status) %}
    {% if status == 'published' %}
        <span class=\"text-success\">{{ '已发布'|trans }}</span>
    {% elseif status == 'unpublished' %}
        <span class=\"text-muted\">{{ '未发布'|trans }}</span>
    {% elseif status == 'trash' %}
        <span class=\"text-warning\">{{ '回收站'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro discountStatus(status) %}
    {% if status == 'unstart' %}
        <span class=\"text-muted\">{{ '未开始'|trans }}</span>
    {% elseif status == 'running' %}
        <span class=\"text-success\">{{ '进行中'|trans }}</span>
    {% elseif status == 'finished' %}
        <span class=\"text-muted\">{{ '已结束'|trans }}</span>
    {% endif %}
{% endmacro %}

{% macro  video_quality(option) %}
     {% if option == 'low' %}
       {{'流畅'|trans}} <span class=\"text-muted\">({{'适合PPT讲解'|trans}})</span>
    {% elseif option == 'normal' %}
      {{'标准'|trans}} <span class=\"text-muted\">({{'适合屏幕录制、摄像头拍摄'|trans}})</span>
    {% elseif option == 'high' %}
      {{'精细'|trans}} <span class=\"text-muted\">({{'适合动态电影'|trans}})</span>
    {% endif %}
{% endmacro %}";
    }
}
