<?php

/* TopxiaWebBundle:Message/Template:conversation-text.tpl.html.twig */
class __TwigTemplate_9582e30e630544905de013986f8721b0802f50882989d6fc302cde1a506bb518 extends Twig_Template
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
        $__internal_389acbde5d4e7e934b55e46f968c9099ebd1ef5bcdda1b9eb4455d698d8ee5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389acbde5d4e7e934b55e46f968c9099ebd1ef5bcdda1b9eb4455d698d8ee5d2->enter($__internal_389acbde5d4e7e934b55e46f968c9099ebd1ef5bcdda1b9eb4455d698d8ee5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Message/Template:conversation-text.tpl.html.twig"));

        // line 1
        echo "<li class=\"media\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_conversation_show", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_avatar", array(0 => (isset($context["fromUser"]) ? $context["fromUser"] : $this->getContext($context, "fromUser")), 1 => "pull-left media-object"), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <h4 class=\"media-heading\">
      ";
        // line 5
        if (($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "latestMessageUserId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发给"), "html", null, true);
            echo "
      ";
        }
        // line 8
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => (isset($context["fromUser"]) ? $context["fromUser"] : $this->getContext($context, "fromUser"))), "method"), "html", null, true);
        echo ":
      ";
        // line 9
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "latestMessageContent", array()), 40);
        echo "

      ";
        // line 11
        if (($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "unreadNum", array()) > 0)) {
            // line 12
            echo "        <span class=\"text-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%unreadNum%条未读", array("%unreadNum%" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "unreadNum", array()))), "html", null, true);
            echo ")</span>
      ";
        }
        // line 14
        echo "    </h4>

    <div class=\"conversation-footer clearfix\">
      <span class=\"pull-left\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->smarttimeFilter($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "latestMessageTime", array())), "html", null, true);
        echo "</span>
      <span class=\"pull-right\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("共%messageNum%条", array("%messageNum%" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "messageNum", array()))), "html", null, true);
        echo "</span>
      <div class=\"actions pull-right\">
        <a class=\"delete-conversation-btn text-muted\" href=\"javascript:\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_conversation_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</a>
        <span class=\"text-muted mhm\">|</span>
      </div>
    </div>
  </div>
</li>";
        
        $__internal_389acbde5d4e7e934b55e46f968c9099ebd1ef5bcdda1b9eb4455d698d8ee5d2->leave($__internal_389acbde5d4e7e934b55e46f968c9099ebd1ef5bcdda1b9eb4455d698d8ee5d2_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message/Template:conversation-text.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  64 => 17,  59 => 14,  53 => 12,  51 => 11,  46 => 9,  41 => 8,  35 => 6,  33 => 5,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<li class=\"media\" data-url=\"{{ path('message_conversation_show', {conversationId:conversation.id })}}\">
  {{ web_macro.user_avatar(fromUser, 'pull-left media-object') }}
  <div class=\"media-body\">
    <h4 class=\"media-heading\">
      {% if conversation.latestMessageUserId == app.user.id %}
        {{'发给'|trans}}
      {% endif  %}
      {{ web_macro.user_link(fromUser) }}:
      {{conversation.latestMessageContent|plain_text(40)}}

      {% if conversation.unreadNum > 0 %}
        <span class=\"text-warning\">({{'%unreadNum%条未读'|trans({'%unreadNum%':conversation.unreadNum})}})</span>
      {% endif %}
    </h4>

    <div class=\"conversation-footer clearfix\">
      <span class=\"pull-left\">{{ conversation.latestMessageTime|smart_time }}</span>
      <span class=\"pull-right\">{{'共%messageNum%条'|trans({'%messageNum%':conversation.messageNum})}}</span>
      <div class=\"actions pull-right\">
        <a class=\"delete-conversation-btn text-muted\" href=\"javascript:\" data-url=\"{{ path('message_conversation_delete', {conversationId:conversation.id })}}\">{{'删除'|trans}}</a>
        <span class=\"text-muted mhm\">|</span>
      </div>
    </div>
  </div>
</li>";
    }
}
