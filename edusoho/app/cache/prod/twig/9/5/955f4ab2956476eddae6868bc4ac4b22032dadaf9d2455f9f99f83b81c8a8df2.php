<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_955f4ab2956476eddae6868bc4ac4b22032dadaf9d2455f9f99f83b81c8a8df2 extends Twig_Template
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
        echo "<script>
  var app = {};
  app.debug = ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBasePath", array(), "method"), "html", null, true);
        echo "';
  app.theme = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 9
        echo twig_jsonencode_filter($this->env->getExtension('topxia_web_twig')->getJsPaths());
        echo ";

  app.crontab = '";
        // line 11
        echo $this->env->getExtension('routing')->getPath("common_crontab");
        echo "';
  ";
        // line 12
        $context["crontabNextExecutedTime"] = $this->env->getExtension('topxia_web_twig')->getNextExecutedTime();
        // line 13
        echo "  ";
        if (((isset($context["crontabNextExecutedTime"]) ? $context["crontabNextExecutedTime"] : null) > 0)) {
            // line 14
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["crontabNextExecutedTime"]) ? $context["crontabNextExecutedTime"] : null), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 15
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('routing')->getPath("common_crontab");
                echo "';
    ";
            }
            // line 17
            echo "  ";
        }
        // line 18
        echo "
  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';

  app.config = ";
        // line 21
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('topxia_web_twig')->getParameter("cloud.video_player_fingerprint_plugin")), "loading_img_path" => $this->env->getExtension('assets')->getAssetUrl("assets/img/default/loading.gif")));
        // line 36
        echo ";

  app.arguments = {};
  ";
        // line 39
        if (array_key_exists("script_controller", $context)) {
            // line 40
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, (isset($context["script_controller"]) ? $context["script_controller"] : null), "html", null, true);
            echo "';
  ";
        }
        // line 42
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 43
            echo "    app.arguments = ";
            echo twig_jsonencode_filter((isset($context["script_arguments"]) ? $context["script_arguments"] : null));
            echo ";
  ";
        }
        // line 45
        echo "  
  app.scripts = ";
        // line 46
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->exportScripts(), null));
        echo ";
  
  app.uploadUrl = '";
        // line 48
        echo $this->env->getExtension('routing')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 49
        echo $this->env->getExtension('routing')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';

  app.mainScript = '";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["script_main"]) ? $context["script_main"] : null), "html", null, true);
        echo "';
</script>
";
        // line 54
        if ($this->env->getExtension('topxia_web_twig')->getSetting("cdn.enabled")) {
            echo " ";
            $context["cdnUrl"] = $this->env->getExtension('topxia_web_twig')->getSetting("cdn.url");
            echo " ";
        } else {
            echo " ";
            $context["cdnUrl"] = "";
            echo " ";
        }
        // line 55
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["cdnUrl"]) ? $context["cdnUrl"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  148 => 56,  142 => 55,  132 => 54,  127 => 52,  122 => 50,  118 => 49,  114 => 48,  109 => 46,  106 => 45,  100 => 43,  97 => 42,  91 => 40,  89 => 39,  84 => 36,  82 => 21,  77 => 18,  74 => 17,  68 => 15,  65 => 14,  62 => 13,  60 => 12,  56 => 11,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  23 => 3,  19 => 1,);
    }
}
