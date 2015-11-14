<?php

/* TopxiaWebBundle:Player:show.html.twig */
class __TwigTemplate_0cc1bf2fa34ff233cbae08cb6ab9e8935c0f54a818c3a62e50707c0c1e0c3d1c extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Player:show.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
    
    ";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:Player:stylesheet.html.twig", "TopxiaWebBundle:Player:show.html.twig", 10)->display($context);
        // line 11
        echo "  </head>
  <body style=\"overflow:hidden;border:0px;\">
    ";
        // line 13
        if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
            // line 14
            echo "      <div style=\"position:absolute;top:0;bottom:0;left:0;right:0;\">
        <div id=\"lesson-video-content\" 
        data-user-id=\"";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)), "html", null, true);
            echo "\" 
        data-file-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()), "html", null, true);
            echo "\" 
        data-file-type=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), "html", null, true);
            echo "\" 
        data-url=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-player=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["player"]) ? $context["player"] : null), "html", null, true);
            echo "\"
        data-balloon-video-player=\"";
            // line 21
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("developer.balloon_player"), 0), "html", null, true);
            echo "\"
        data-agent-in-white-list=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["agentInWhiteList"]) ? $context["agentInWhiteList"] : null), "html", null, true);
            echo "\"
        ";
            // line 23
            if ((( !(($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "videoWatermarkEmbedded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "videoWatermarkEmbedded", array()), 0)) : (0)) && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0)) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
                // line 24
                echo "          data-watermark=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
                echo "\"
        ";
            }
            // line 26
            echo "        ";
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 27
                echo "          data-fingerprint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
                echo "\"
          data-fingerprint-src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                echo "\"
        ";
            }
            // line 30
            echo "        ";
            if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()) == "video")) {
                // line 31
                echo "          ";
                if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()) == "local")) {
                    // line 32
                    echo "          class=\"local-video-player \"
          ";
                } elseif (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("developer.balloon_player"), 0)) {
                    // line 34
                    echo "          class=\"ballon-video-player\"
          ";
                }
                // line 36
                echo "        ";
            } elseif (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()) == "audio")) {
                // line 37
                echo "          class=\"lesson-content-audio\"
        ";
            }
            // line 39
            echo "        style=\"height:100%\"
        ></div>
      </div>

      ";
            // line 43
            $context["script_controller"] = "player/show";
            // line 44
            echo "
      ";
            // line 45
            $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle:Player:show.html.twig", 45)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "      <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;该浏览器不支持云视频播放，请前往<a href=\"";
            echo $this->env->getExtension('routing')->getPath("mobile");
            echo "\" target=\"parent\">下载App</a>。</div>
    ";
        }
        // line 49
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Player:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  129 => 47,  126 => 46,  124 => 45,  121 => 44,  119 => 43,  113 => 39,  109 => 37,  106 => 36,  102 => 34,  98 => 32,  95 => 31,  92 => 30,  87 => 28,  82 => 27,  79 => 26,  73 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  39 => 14,  37 => 13,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
