<?php

/* TopxiaAdminBundle:Default/Parts:course-explore-table.html.twig */
class __TwigTemplate_1be64cc4252e6fbd5c203f007f0aa0fe618bc5d4c98a59eada708853270641ca extends Twig_Template
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
        $__internal_0d76e37e616a83dca519dcca82d39813b139fc2377635870fa048b56abb910dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d76e37e616a83dca519dcca82d39813b139fc2377635870fa048b56abb910dd->enter($__internal_0d76e37e616a83dca519dcca82d39813b139fc2377635870fa048b56abb910dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default/Parts:course-explore-table.html.twig"));

        // line 1
        echo "<table class=\"table table-condensed table-noborder table-overflow\">
  <thead>
  <tr>
    <th width=\"10%\"></th>
    <th width=\"70%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名"), "html", null, true);
        echo "</th>
    <th width=\"25%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员"), "html", null, true);
        echo "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["memberCounts"]) ? $context["memberCounts"] : $this->getContext($context, "memberCounts")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["memberCount"]) {
            // line 11
            echo "    <tr>
      <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
      <td>
        <a class=\"link-primary\"
           target=\"_blank\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["memberCount"], "courseId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute($context["memberCount"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
            echo "</a>
      </td>
      <td class=\"pull-right prl\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberCount"], "count", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 20
            echo "    <tr><td><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberCount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </tbody>
</table>";
        
        $__internal_0d76e37e616a83dca519dcca82d39813b139fc2377635870fa048b56abb910dd->leave($__internal_0d76e37e616a83dca519dcca82d39813b139fc2377635870fa048b56abb910dd_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default/Parts:course-explore-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  89 => 20,  73 => 17,  66 => 15,  60 => 12,  57 => 11,  39 => 10,  32 => 6,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<table class=\"table table-condensed table-noborder table-overflow\">
  <thead>
  <tr>
    <th width=\"10%\"></th>
    <th width=\"70%\">{{ '课程名'|trans }}</th>
    <th width=\"25%\">{{ '新增学员'|trans }}</th>
  </tr>
  </thead>
  <tbody>
  {% for memberCount in memberCounts %}
    <tr>
      <td>{{ loop.index }}</td>
      <td>
        <a class=\"link-primary\"
           target=\"_blank\" href=\"{{ path('course_show',{id: memberCount.courseId}) }}\">{{ courses[ memberCount.courseId].title }}</a>
      </td>
      <td class=\"pull-right prl\">{{ memberCount.count }}</td>
    </tr>
  {% else %}
    <tr><td><div class=\"empty\">{{'暂无课程'|trans}}</div></td></tr>
  {% endfor %}
  </tbody>
</table>";
    }
}
