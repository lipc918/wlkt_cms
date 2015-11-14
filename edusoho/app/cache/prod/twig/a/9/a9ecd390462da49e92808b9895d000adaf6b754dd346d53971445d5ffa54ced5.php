<?php

/* TopxiaWebBundle:Teacher:teacher-item.html.twig */
class __TwigTemplate_a9ecd390462da49e92808b9895d000adaf6b754dd346d53971445d5ffa54ced5 extends Twig_Template
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
        // line 1
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array())) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 13
            echo "        暂无头衔
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array())) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        暂无简介
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
            // line 27
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">关注</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">已关注</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\">私信</a>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  100 => 29,  92 => 28,  77 => 27,  75 => 26,  71 => 24,  67 => 22,  61 => 20,  59 => 19,  53 => 15,  49 => 13,  43 => 11,  41 => 10,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
