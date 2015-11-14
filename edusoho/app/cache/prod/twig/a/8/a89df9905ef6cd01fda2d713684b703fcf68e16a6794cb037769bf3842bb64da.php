<?php

/* TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig */
class __TwigTemplate_a89df9905ef6cd01fda2d713684b703fcf68e16a6794cb037769bf3842bb64da extends Twig_Template
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
        echo "<!-- 紧跟标题 -->
";
        // line 2
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "materialNum", array()) > 0)) {
            // line 3
            echo "  <i class=\"es-icon es-icon-filedownload mls\" title=\"资料\"></i>
";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("homeworkLessonIds", $context)) ? (_twig_default_filter((isset($context["homeworkLessonIds"]) ? $context["homeworkLessonIds"] : null), null)) : (null))) || twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("exercisesLessonIds", $context)) ? (_twig_default_filter((isset($context["exercisesLessonIds"]) ? $context["exercisesLessonIds"] : null), null)) : (null))))) {
            // line 7
            echo "  <i class=\"es-icon es-icon-mylibrarybooks mls\" title=\"作业、练习\"></i>
";
        }
        // line 9
        echo "
";
        // line 10
        if ((((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) > 0)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) &&  !((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : null), false)) : (false)))) {
            // line 11
            echo "  ";
            $context["remainTime"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())) - (($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array()), 0)) : (0)));
            // line 12
            echo "  ";
            if (((isset($context["remainTime"]) ? $context["remainTime"] : null) > 0)) {
                // line 13
                echo "    <small class=\"text text-info\">还剩 ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationTextFilter((isset($context["remainTime"]) ? $context["remainTime"] : null)), "html", null, true);
                echo "</small>
  ";
            } else {
                // line 15
                echo "    <small class=\"text text-info\">已达最大可看时长</small>
  ";
            }
        }
        // line 18
        echo "

<!-- 右边图标 -->
";
        // line 21
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 22
            echo "  ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) {
                // line 23
                echo "    <span class=\"date\" title=\"视频时长";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videoclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"视频课程\"></i>
    </span>
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "audio")) {
                // line 30
                echo "    <span class=\"date\" title=\"音频时长";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-audioclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"音频课程\"></i>
    </span>
  ";
            }
            // line 35
            echo "
  ";
            // line 36
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "text")) {
                // line 37
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-graphicclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"图文课程\" data-original-title=\"图文\"></i>
    </span>
  ";
            }
            // line 41
            echo "  
  ";
            // line 42
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "testpaper")) {
                // line 43
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"试卷\" data-original-title=\"试卷\"></i>
    </span>
  ";
            }
            // line 47
            echo "
  ";
            // line 48
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "ppt")) {
                // line 49
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-pptclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"PPT课程\"></i>
    </span>
  ";
            }
            // line 53
            echo "
  ";
            // line 54
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "document")) {
                // line 55
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-description\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"文档课程\" data-original-title=\"文档\"></i>
    </span>
  ";
            }
            // line 59
            echo "
  ";
            // line 60
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "flash")) {
                // line 61
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-flashclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"flash课程\"></i>
    </span>
  ";
            }
            // line 65
            echo "
  ";
            // line 66
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "live")) {
                // line 67
                echo "    
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videocam\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"直播课程\"></i>
      ";
                // line 70
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 71
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "m月d日"), "html", null, true);
                    echo " 
          ";
                    // line 77
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "H：i"), "html", null, true);
                    echo "
        </small>
      ";
                } elseif ((($this->getAttribute(                // line 79
(isset($context["item"]) ? $context["item"] : null), "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : null)))) {
                    // line 80
                    echo "        <small class=\"type\">正在直播中</small>
      ";
                } elseif (($this->getAttribute(                // line 81
(isset($context["item"]) ? $context["item"] : null), "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 82
                    echo "
        <small class=\"type\">
          ";
                    // line 84
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "replayStatus", array()) == "generated")) {
                        // line 85
                        echo "            回放
          ";
                    } else {
                        // line 87
                        echo "            直播结束
          ";
                    }
                    // line 89
                    echo "        </small>
        
      ";
                }
                // line 92
                echo "    </span>
  ";
            }
            // line 94
            echo "
";
        } else {
            // line 96
            echo "  <span class=\"period-state\">未发布</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 96,  204 => 94,  200 => 92,  195 => 89,  191 => 87,  187 => 85,  185 => 84,  181 => 82,  179 => 81,  176 => 80,  174 => 79,  168 => 77,  163 => 71,  161 => 70,  156 => 67,  154 => 66,  151 => 65,  145 => 61,  143 => 60,  140 => 59,  134 => 55,  132 => 54,  129 => 53,  123 => 49,  121 => 48,  118 => 47,  112 => 43,  110 => 42,  107 => 41,  101 => 37,  99 => 36,  96 => 35,  85 => 30,  83 => 29,  80 => 28,  69 => 23,  66 => 22,  64 => 21,  59 => 18,  54 => 15,  48 => 13,  45 => 12,  42 => 11,  40 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
