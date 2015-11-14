<?php

/* TopxiaWebBundle:Common:share-dropdown.html.twig */
class __TwigTemplate_5208064221724be4c082da5303fbe1e50e288b578c06288239f3cf79b1f4df42 extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : null) == "course")) {
            // line 2
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array());
            // line 3
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array()), 50);
            // line 4
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.courseShareContent"), "我正在学习{{course}}，收获巨大哦，一起来学习吧！"), array("course" => (("《" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array())) . "》")));
            // line 5
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
            // line 6
            echo "  ";
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png");
        } elseif ((        // line 7
(isset($context["type"]) ? $context["type"] : null) == "classroom")) {
            // line 8
            echo "
  ";
            // line 9
            $context["title"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array());
            // line 10
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array()), 50);
            // line 11
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.classroomShareContent"), "我正在学习{{classroom}}，收获巨大哦，一起来学习吧！"), array("classroom" => (("「" . $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array())) . "」")));
            // line 12
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())));
            // line 13
            echo "  ";
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png");
            // line 14
            echo "
";
        } elseif ((        // line 15
(isset($context["type"]) ? $context["type"] : null) == "article")) {
            // line 16
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array());
            // line 17
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array()), 50);
            // line 18
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.articleShareContent"), "我正在看{{articletitle}}，关注{{sitename}}，分享知识，成就未来。"), array("articletitle" => (("「" . $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array())) . "」"), "sitename" => (("「" . $this->env->getExtension('topxia_web_twig')->getSetting("site.name")) . "」")));
            // line 19
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array())));
            // line 20
            echo "  ";
            $context["picture"] = "";
        } elseif ((        // line 21
(isset($context["type"]) ? $context["type"] : null) == "group_thread")) {
            // line 22
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array());
            // line 23
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), 50);
            // line 24
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.groupShareContent"), "我正在{{groupname}}小组，看到{{threadname}}，很不错哦，一起来看看吧！"), array("threadname" => (("「" . $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array())) . "」"), "groupname" => (("「" . $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array())) . "」")));
            // line 25
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("group_thread_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array())));
            // line 26
            echo "  ";
            $context["picture"] = "";
        }
        // line 28
        echo "
<div class=\"dropdown-menu ";
        // line 29
        if (((array_key_exists("right", $context)) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : null), false)) : (false))) {
            echo "pull-right";
        }
        echo " js-social-share-params\" data-title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\" data-summary=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("summary", $context)) ? (_twig_default_filter((isset($context["summary"]) ? $context["summary"] : null), "")) : ("")), "html", null, true);
        echo "\" data-message=\"";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" data-picture=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("picture", $context)) ? (_twig_default_filter((isset($context["picture"]) ? $context["picture"] : null), "")) : ("")), "html", null, true);
        echo "\">

  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"分享到微信\" data-share=\"weixin\" data-qrcode-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("common_qrcode", array("text" => (isset($context["url"]) ? $context["url"] : null))), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"分享到新浪微博\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"分享到QQ好友\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"分享到QQ空间\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>

";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("common/share-dropdown"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:share-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  113 => 31,  96 => 29,  93 => 28,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
