<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_af4cb75591394f7718ef59868afc84388ecf3d7cc36afe09376f8098d11bb7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:learn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'esBar' => array($this, 'block_esBar'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["hideSetupHint"] = true;
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Homework")) {
            // line 8
            $context["script_arguments"] = array("plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material", 4 => "homework"));
        } else {
            // line 10
            $context["script_arguments"] = array("plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material"));
        }
        // line 13
        $context["script_controller"] = "course/learn";
        // line 14
        $context["bodyClass"] = "lesson-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  ";
        // line 18
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("developer.balloon_player"), 0)) {
            // line 19
            echo "    <link rel=\"stylesheet\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/balloon-video-player/1.0.0/src/skin/video-js-debug.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
  ";
        }
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 25
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 26
    public function block_full_content($context, array $blocks = array())
    {
        // line 27
        echo "
  <div class=\"lesson-dashboard\" id=\"lesson-dashboard\"
    data-course-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"
    data-course-uri=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-dashboard-uri=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-watch-limit=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit"), "html", null, true);
        echo "\"
    data-hide-media-lesson-learn-btn=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
    <div class=\"dashboard-content\">
       <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> 返回课程</a>
       <a class=\"btn btn-primary  nav-btn prev-lesson-btn\" href=\"javascript:\" data-role=\"prev-lesson\" data-placement=\"right\" title=\"上一课时\"><span class=\"glyphicon glyphicon-chevron-up\" title=\"上一课时\"></span></a>
       <a class=\"btn btn-primary nav-btn next-lesson-btn\" href=\"javascript:\" data-role=\"next-lesson\" data-placement=\"right\" title=\"下一课时\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>

      <div class=\"dashboard-header\">
        <div class=\"pull-left title-group\">
          <span class=\"chapter-label\">第<span data-role=\"chapter-number\"></span>";
        // line 41
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
        } else {
            echo "章";
        }
        echo "</span>
          <span class=\"divider\">&raquo;</span>
          <span class=\"chapter-label\">第<span data-role=\"unit-number\"></span>";
        // line 43
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
        } else {
            echo "节";
        }
        echo "</span>
          <span class=\"divider\">&raquo;</span>
          <span class=\"item-label\">课时<span data-role=\"lesson-number\">正在加载...</span></span>
          <span class=\"item-title\" data-role=\"lesson-title\"></span>
        </div>
      </div>

      <div class=\"dashboard-body\">
        <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
          ";
        // line 52
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 53
            echo "            data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
          ";
        }
        // line 55
        echo "          ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 56
            echo "            data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
            echo "\"
          ";
        }
        // line 58
        echo "            data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\"
            data-balloon-player=\"";
        // line 59
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("developer.balloon_player"), 0), "html", null, true);
        echo "\"
        ></div>
        <div class=\"watermarkEmbedded\" ></div>

        <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\" style=\"display:none;\"
        ";
        // line 67
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
            echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
        }
        echo ">
          <div class=\"lesson-content-text-body\"></div>
        </div>

        <div class=\"lesson-content lesson-content-document\" id=\"lesson-document-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 72
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.doc_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_doc_watermark");
            echo "\" ";
        }
        // line 73
        echo "          >
          <div class=\"lesson-content-document-body\"></div>
        </div>   

        <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\" style=\"display:none;\">
          <div class=\"lesson-content-text-body\"></div>
        </div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\" style=\"display:none;\">
          <div class=\"lesson-content-text-body\">当前课时正在编辑中，暂时无法观看。</div>
        </div>

        <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\" style=\"display:none;\">
          <div class=\"lesson-content-text-body\"></div>
        </div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 88
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.ppt_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_ppt_watermark");
            echo "\" ";
        }
        // line 89
        echo "          >
          <div class=\"lesson-content-text-body\"></div>
        </div>

      </div>

      <div class=\"dashboard-footer clearfix\">
        <div class=\"pull-right\">
          <button class=\"btn btn-primary finish-btn\" data-role=\"finish-lesson\" style=\"display:none;\"><span class=\"glyphicon glyphicon-unchecked\"></span> 学过了</button>
        </div>
      </div>
    </div>

    <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
      <div class=\"toolbar-nav\">

        <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
        <ul class=\"list-unstyled\">
          <li class=\"es-qrcode toolbar-qrcode\" data-url=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("common_learn_qrcode", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson-qrcode")), "html", null, true);
        echo "\">
            <i class=\"es-icon es-icon-qrcode\"></i><br>
            扫一扫
            <span class=\"qrcode-popover\">
              <img src=\"\" alt=\"\">
              扫二维码继续学习
            </span>
          </li>
        </ul>
        <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
          <li class=\"hide-pane\" style=\"display:none;\">
            <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
          </li>
        </ul>

      </div>
      <div class=\"toolbar-pane-container\">
      </div>
    </div>

  </div>

  <div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">学习进度提示</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程～～～</p>
        </div>
        <div class=\"modal-footer\">
          <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">回课程主页</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal\" id=\"mediaPlayed-control-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">媒体课时学习提示</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">此课时设置了必须完整播放完整个课时才能学完～～</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal\" id=\"homeworkDone-control-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">作业未完成提示</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">此课时设置了必须做完本课时作业并提交后才能学完～～</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 140,  243 => 107,  223 => 89,  217 => 88,  200 => 73,  194 => 72,  184 => 67,  173 => 59,  168 => 58,  162 => 56,  159 => 55,  153 => 53,  151 => 52,  135 => 43,  126 => 41,  117 => 35,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 27,  89 => 26,  84 => 25,  79 => 24,  74 => 23,  66 => 19,  64 => 18,  59 => 17,  56 => 16,  48 => 3,  44 => 1,  42 => 14,  40 => 13,  37 => 10,  34 => 8,  32 => 7,  30 => 5,  11 => 1,);
    }
}
