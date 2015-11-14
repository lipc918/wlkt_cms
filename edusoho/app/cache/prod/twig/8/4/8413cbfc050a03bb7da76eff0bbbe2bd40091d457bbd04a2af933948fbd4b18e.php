<?php

/* TopxiaWebBundle:User:header-block.html.twig */
class __TwigTemplate_8413cbfc050a03bb7da76eff0bbbe2bd40091d457bbd04a2af933948fbd4b18e extends Twig_Template
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
        echo "<div class=\"es-section userpage-header\">
  <div class=\"media\">
    <div class=\"media-left\">
      <div class=\"avatar-bg\">
        <img class=\"avatar-lg\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
        ";
        // line 6
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
            // line 7
            echo "          <span class=\"icon-user-status icon-md\"><i class=\"es-icon es-icon-school\"></i></span
        >
        ";
        }
        // line 10
        echo "      </div>
    </div>
    <div class=\"media-body\">
      ";
        // line 13
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 14
            echo "        <div class=\"actions\">
          <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo ">关注</a>
          <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">已关注</a>
          <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">私信</button>
        </div>
      ";
        }
        // line 20
        echo "      <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
        echo "</small></h2>
      <div class=\"about\">";
        // line 21
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array());
        echo "</div>
      ";
        // line 22
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 23
            echo "        <div class=\"links\">
          ";
            // line 24
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array())) {
                // line 25
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"mrm\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/user/link-weibo.png"), "html", null, true);
                echo "\"> 微博</a>
          ";
            }
            // line 27
            echo "          ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "site", array())) {
                // line 28
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "site", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"mrm\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/user/link-site.png"), "html", null, true);
                echo "\"> 网站</a>
          ";
            }
            // line 30
            echo "        </div>
      ";
        }
        // line 32
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:header-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  105 => 30,  97 => 28,  94 => 27,  86 => 25,  84 => 24,  81 => 23,  79 => 22,  75 => 21,  68 => 20,  62 => 17,  54 => 16,  46 => 15,  43 => 14,  41 => 13,  36 => 10,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
