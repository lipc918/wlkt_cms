<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_bc760cb84a5c20ccdfd4b2545b0d69b88b3abd61b3a63941efd372a0bd0a8696 extends Twig_Template
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
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\"style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o text-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o text-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o text-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera text-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera text-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera text-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) {
            // line 27
            echo "      <i class=\"fa fa-file-audio-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 29
            echo "      <i class=\"fa fa-file-text-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "text")) {
            // line 31
            echo "      <i class=\"fa fa-file-photo-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "document")) {
            // line 33
            echo "      <i class=\"fa fa-files-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "flash")) {
            // line 35
            echo "      <i class=\"fa fa-film text-success\"></i>
    ";
        } else {
            // line 37
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 39
        echo "    课时 <span class=\"number\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        echo "</span>：";
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "free", array()) == 1)) {
            echo "<span class=\"label label-danger\">免费</span>";
        }
        // line 40
        echo "    
    ";
        // line 41
        if (((((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "text") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "live")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()) != 0)) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), false)) : (false)))) {
            // line 42
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"课时文件已删除\">无效课时</span>
    ";
        }
        // line 44
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "

    ";
        // line 46
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 47
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 51
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()) > 0)) {
            // line 55
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()) > 0)) {
            // line 59
            echo "      <small class=\"text-muted\">(需";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 63
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) ? ("视频") : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) ? ("音频") : ("文件"))));
            // line 64
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 65
                echo "        <span class=\"text-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换)</span>
      ";
            } elseif ((            // line 66
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 67
                echo "        <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式)</span>
      ";
            } elseif ((            // line 68
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 69
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换失败)</span>
      ";
            }
            // line 71
            echo "    ";
        }
        // line 72
        echo "
    ";
        // line 73
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 74
            echo "      <span class=\"unpublish-warning text-warning\">(未发布)</span>
    ";
        }
        // line 76
        echo "  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      ";
        // line 80
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 81
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute(        // line 82
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 83
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 85
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 87
        echo "      ><span class=\"es-icon es-icon-edit prs\"></span>编辑</a>
    ";
        // line 88
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 89
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>
    ";
        } else {
            // line 91
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>
    ";
        }
        // line 93
        echo "    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>更多</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">
        
        ";
        // line 98
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper"))) {
            // line 99
            echo "          ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array"), null)) : (null));
            // line 100
            echo "          ";
            $context["homeworkId"] = (($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array()), null)) : (null));
            // line 101
            echo "          ";
            if ((isset($context["homework"]) ? $context["homework"] : null)) {
                // line 102
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>编辑作业</a></li>
            <li><a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>预览作业</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>移除作业</a></li>
          ";
            } else {
                // line 106
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>布置作业</a></li>
          ";
            }
            // line 108
            echo "            <li class=\"divider\"></li>
          ";
            // line 109
            $context["lessonId"] = $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array());
            // line 110
            echo "          ";
            $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array"), null)) : (null));
            // line 111
            echo "          ";
            if ((isset($context["exercise"]) ? $context["exercise"] : null)) {
                // line 112
                echo "            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "id" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>移除练习</a></li>
          ";
            } else {
                // line 114
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>新增练习</a></li>
          ";
            }
            // line 116
            echo "          <li class=\"divider\"></li>
        ";
        }
        // line 118
        echo "
        ";
        // line 119
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 120
            echo "          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>添加资料</a></li>
          <li class=\"divider\"></li>
        ";
        }
        // line 123
        echo "        
        <li class=\"";
        // line 124
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>发布
          </a>
        </li>

        <li class=\"";
        // line 130
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>取消发布
          </a>
        </li>
        <li class=\"";
        // line 135
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>删除
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 136,  368 => 135,  361 => 131,  355 => 130,  347 => 125,  341 => 124,  338 => 123,  331 => 120,  329 => 119,  326 => 118,  322 => 116,  316 => 114,  310 => 112,  307 => 111,  304 => 110,  302 => 109,  299 => 108,  293 => 106,  288 => 104,  284 => 103,  279 => 102,  276 => 101,  273 => 100,  270 => 99,  268 => 98,  261 => 93,  253 => 91,  247 => 89,  245 => 88,  242 => 87,  236 => 85,  230 => 83,  228 => 82,  223 => 81,  221 => 80,  215 => 76,  211 => 74,  209 => 73,  206 => 72,  203 => 71,  197 => 69,  195 => 68,  190 => 67,  188 => 66,  183 => 65,  180 => 64,  177 => 63,  175 => 62,  172 => 61,  166 => 59,  164 => 58,  161 => 57,  155 => 55,  153 => 54,  150 => 53,  144 => 51,  142 => 50,  139 => 49,  133 => 47,  131 => 46,  125 => 44,  121 => 42,  119 => 41,  116 => 40,  109 => 39,  105 => 37,  101 => 35,  99 => 34,  96 => 33,  94 => 32,  91 => 31,  89 => 30,  86 => 29,  84 => 28,  81 => 27,  78 => 26,  74 => 24,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  50 => 14,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }
}
