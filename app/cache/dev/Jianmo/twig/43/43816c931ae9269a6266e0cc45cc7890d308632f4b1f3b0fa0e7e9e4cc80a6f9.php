<?php

/* ClassroomBundle:ClassroomManage:index.html.twig */
class __TwigTemplate_76dd5b10fe7ab19c20aac460def7bde061da48aecbf3f41b5e21a55a2520dfe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dac0d31583370df78b601c1aaa5f120dd577c6ad9a6ff0dac6260ce22faa552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dac0d31583370df78b601c1aaa5f120dd577c6ad9a6ff0dac6260ce22faa552->enter($__internal_4dac0d31583370df78b601c1aaa5f120dd577c6ad9a6ff0dac6260ce22faa552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomManage:index.html.twig"));

        // line 5
        $context["side_nav"] = "main";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dac0d31583370df78b601c1aaa5f120dd577c6ad9a6ff0dac6260ce22faa552->leave($__internal_4dac0d31583370df78b601c1aaa5f120dd577c6ad9a6ff0dac6260ce22faa552_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6efca11f449a4f19dccb7a0797f9628e1cde696a8974d9da030ce19aab72e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6efca11f449a4f19dccb7a0797f9628e1cde696a8974d9da030ce19aab72e30->enter($__internal_a6efca11f449a4f19dccb7a0797f9628e1cde696a8974d9da030ce19aab72e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a6efca11f449a4f19dccb7a0797f9628e1cde696a8974d9da030ce19aab72e30->leave($__internal_a6efca11f449a4f19dccb7a0797f9628e1cde696a8974d9da030ce19aab72e30_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_1959a735f98013596da1c077c0cf58c643207cde15eb39bde66bf4dcdec6266c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1959a735f98013596da1c077c0cf58c643207cde15eb39bde66bf4dcdec6266c->enter($__internal_1959a735f98013596da1c077c0cf58c643207cde15eb39bde66bf4dcdec6266c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "
";
        // line 10
        $context["unsetted"] = "";
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-body\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("简介"), "html", null, true);
        echo "</td>
              ";
        // line 22
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array())) {
            // line 23
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未设置"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 28
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",简介"));
            // line 29
            echo "              ";
        } else {
            // line 30
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 34
        echo "            </tr>
            <tr>
              <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("图片"), "html", null, true);
        echo "</td>
              ";
        // line 37
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array())) {
            // line 38
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未设置"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 43
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",图片"));
            // line 44
            echo "              ";
        } else {
            // line 45
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 49
        echo "            </tr>
            <tr>
              <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 54
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 55
            echo "                    ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "
                    ";
            // line 56
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")) == 0)) {
                // line 57
                echo "                      ";
                $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",价格"));
                // line 58
                echo "                    ";
            }
            // line 59
            echo "                  ";
        } else {
            // line 60
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
            echo "
                    ";
            // line 61
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) == 0)) {
                // line 62
                echo "                      ";
                $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",价格"));
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                  ";
        }
        // line 65
        echo "                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程数"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn btn-";
        // line 79
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) > 0)) {
            echo "info";
        } else {
            echo "danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              ";
        // line 83
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) == 0)) {
            // line 84
            echo "                ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(",课程"));
            // line 85
            echo "              ";
        }
        // line 86
        echo "            </tr>
            <tr>
              <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时数"), "html", null, true);
        echo "</td>
              <td><span class=\"label label-default pull-right\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "lessonNum", array()), "html", null, true);
        echo "</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员数"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn ";
        // line 101
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("旁听生数"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn ";
        // line 109
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "auditorNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "auditorNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    ";
        // line 118
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 119
            echo "      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%学习情况", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("昨日"), "html", null, true);
            echo "</th>
              <th>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日"), "html", null, true);
            echo "</th>
            </thead>
            <tr>
              <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部学员数"), "html", null, true);
            echo "</td>
              <td>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["yestodayAllCount"]) ? $context["yestodayAllCount"] : $this->getContext($context, "yestodayAllCount")), "html", null, true);
            echo "</td>
              <td>";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : $this->getContext($context, "allCount")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正式学员数"), "html", null, true);
            echo "</td>
              <td>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["yestodayStudentCount"]) ? $context["yestodayStudentCount"] : $this->getContext($context, "yestodayStudentCount")), "html", null, true);
            echo "</td>
              <td>";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["studentCount"]) ? $context["studentCount"] : $this->getContext($context, "studentCount")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时完成学习数"), "html", null, true);
            echo "</td>
              <td>";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : $this->getContext($context, "yesterdayFinishedLessonNum")), "html", null, true);
            echo "</td>
              <td>";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : $this->getContext($context, "todayFinishedLessonNum")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增话题数"), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["yesterdayThreadCount"]) ? $context["yesterdayThreadCount"] : $this->getContext($context, "yesterdayThreadCount")), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["todayThreadCount"]) ? $context["todayThreadCount"] : $this->getContext($context, "todayThreadCount")), "html", null, true);
            echo "</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新评价"), "html", null, true);
            echo "</h4>
          <br>
          ";
            // line 155
            if ((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews"))) {
                // line 156
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 157
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index", array()) <= 4)) {
                        // line 158
                        echo "                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">";
                        // line 160
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : $this->getContext($context, "reviewUsers")), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                        echo "</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-";
                        // line 163
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["review"], "rating", array())), "html", null, true);
                        echo "\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>";
                        // line 164
                        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</time>                                                    
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : $this->getContext($context, "reviewUsers")), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "id", array()))), "html", null, true);
                        echo "\" style=\"float:right;\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
                        echo "</button>
                  </div>
                  <p>";
                        // line 167
                        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 40);
                        echo "</p>
                </div>
              ";
                    }
                    // line 170
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "          ";
            } else {
                // line 172
                echo "            <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该%name%尚无评价", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
                echo "</div>
          ";
            }
            // line 174
            echo "        </div>
      </div>
      <hr>
    ";
        }
        // line 178
        echo "  </div>
</div>

";
        
        $__internal_1959a735f98013596da1c077c0cf58c643207cde15eb39bde66bf4dcdec6266c->leave($__internal_1959a735f98013596da1c077c0cf58c643207cde15eb39bde66bf4dcdec6266c_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 178,  482 => 174,  476 => 172,  473 => 171,  459 => 170,  453 => 167,  446 => 165,  442 => 164,  438 => 163,  432 => 160,  428 => 158,  425 => 157,  407 => 156,  405 => 155,  400 => 153,  391 => 147,  387 => 146,  383 => 145,  377 => 142,  373 => 141,  369 => 140,  363 => 137,  359 => 136,  355 => 135,  349 => 132,  345 => 131,  341 => 130,  335 => 127,  331 => 126,  324 => 122,  319 => 119,  317 => 118,  306 => 110,  296 => 109,  291 => 107,  283 => 102,  273 => 101,  268 => 99,  262 => 96,  252 => 89,  248 => 88,  244 => 86,  241 => 85,  238 => 84,  236 => 83,  230 => 80,  220 => 79,  215 => 77,  209 => 74,  198 => 65,  195 => 64,  192 => 63,  189 => 62,  187 => 61,  181 => 60,  178 => 59,  175 => 58,  172 => 57,  170 => 56,  163 => 55,  161 => 54,  157 => 53,  152 => 51,  148 => 49,  142 => 45,  139 => 44,  137 => 43,  131 => 40,  127 => 39,  124 => 38,  122 => 37,  118 => 36,  114 => 34,  108 => 30,  105 => 29,  103 => 28,  97 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  78 => 18,  71 => 14,  66 => 11,  64 => 10,  61 => 9,  55 => 8,  40 => 3,  33 => 1,  31 => 6,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}

{% block title %}{{ setting('classroom.name')|default(\"班级\"|trans) }}{{'管理'|trans}} - {{ parent() }}{% endblock %}

{% set side_nav = 'main' %}
{% set script_controller = 'classroombundle/controller/classroom/index' %}

{% block main %}

{% set unsetted = \"\" %}

<div class=\"panel panel-default panel-col\">
  <div class=\"panel-body\">
    {{ web_macro.flash_messages() }}
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>{{'设置'|trans}}</h4>
          <table class=\"table\">
            <tr>
              <td>{{'简介'|trans}}</td>
              {% if not classroom.about %}
                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"{{path('classroom_manage_set_info',{id:classroom.id})}}\">
                    {{'未设置'|trans}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                {% set unsetted = unsetted ~ ',简介'|trans %}
              {% else %}
                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              {% endif %}
            </tr>
            <tr>
              <td>{{'图片'|trans}}</td>
              {% if not classroom.smallPicture %}
                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"{{path('classroom_manage_set_picture',{id:classroom.id})}}\">
                    {{'未设置'|trans}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                {% set unsetted = unsetted ~ ',图片'|trans %}
              {% else %}
                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              {% endif %}
            </tr>
            <tr>
              <td>{{'价格'|trans}}</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"{{path('classroom_manage_set_price',{id:classroom.id})}}\">
                  {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
                    {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}
                    {% if classroom.price * setting('coin.cash_rate')  == 0 %}
                      {% set unsetted = unsetted ~ ',价格'|trans %}
                    {% endif %}
                  {% else %}
                    {{ classroom.price }}{{'元'|trans}}
                    {% if classroom.price == 0 %}
                      {% set unsetted = unsetted ~ ',价格'|trans %}
                    {% endif %}
                  {% endif %}
                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>{{'课程'|trans}}</h4>
          <table class=\"table\">
            <tr>
              <td>{{'课程数'|trans}}</td>
              <td>
                <a class=\"btn btn-{% if classroom.courseNum > 0 %}info{% else %}danger{% endif %} btn-xs pull-right\" href=\"{{ path('classroom_manage_courses', {id:classroom.id}) }}\">
                  {{classroom.courseNum|default(0)}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              {% if classroom.courseNum == 0 %}
                {% set unsetted = unsetted ~ ',课程'|trans %}
              {% endif %}
            </tr>
            <tr>
              <td>{{'课时数'|trans}}</td>
              <td><span class=\"label label-default pull-right\">{{classroom.lessonNum}}</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>{{'学员'|trans}}</h4>
          <table class=\"table\">
            <tr>
              <td>{{'学员数'|trans}}</td>
              <td>
                <a class=\"btn {% if (classroom.studentNum) > 0 %}btn-info{% else %}btn-danger{% endif %} btn-xs pull-right\" href=\"{{ path('classroom_manage_students', {id:classroom.id}) }}\">
                  {{classroom.studentNum}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>{{'旁听生数'|trans}}</td>
              <td>
                <a class=\"btn {% if (classroom.auditorNum) > 0 %}btn-info{% else %}btn-danger{% endif %} btn-xs pull-right\" href=\"{{ path('classroom_manage_aduitor', {id:classroom.id}) }}\">
                  {{classroom.auditorNum}} <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    {% if classroom.status == \"published\" %}
      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>{{'%name%学习情况'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>{{'昨日'|trans}}</th>
              <th>{{'今日'|trans}}</th>
            </thead>
            <tr>
              <td>{{'全部学员数'|trans}}</td>
              <td>{{yestodayAllCount}}</td>
              <td>{{allCount}}</td>
            </tr>
            <tr>
              <td>{{'正式学员数'|trans}}</td>
              <td>{{yestodayStudentCount}}</td>
              <td>{{studentCount}}</td>
            </tr>
            <tr>
              <td>{{'课时完成学习数'|trans}}</td>
              <td>{{yesterdayFinishedLessonNum}}</td>
              <td>{{todayFinishedLessonNum}}</td>
            </tr>
            <tr>
                <td>{{'新增话题数'|trans}}</td>
                <td>{{yesterdayThreadCount}}</td>
                <td>{{todayThreadCount}}</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>{{'最新评价'|trans}}</h4>
          <br>
          {% if reviews%}
            {% for review in reviews %}
              {% if loop.index <= 4 %}
                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">{{reviewUsers[review.userId].nickname}}</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-{{ (review.rating)|number_format }}\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>{{review.createdTime|smart_time}}</time>                                                    
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{path('message_create', {toId:reviewUsers[review.userId].id})}}\" style=\"float:right;\">{{'私信'|trans}}</button>
                  </div>
                  <p>{{ review.content|plain_text(40) }}</p>
                </div>
              {% endif %}
            {% endfor %}
          {% else %}
            <div class=\"empty\">{{'该%name%尚无评价'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</div>
          {% endif %}
        </div>
      </div>
      <hr>
    {% endif %}
  </div>
</div>

{% endblock %}";
    }
}
