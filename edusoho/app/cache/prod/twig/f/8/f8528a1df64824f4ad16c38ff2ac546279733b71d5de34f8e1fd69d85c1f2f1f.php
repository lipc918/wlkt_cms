<?php

/* TopxiaWebBundle:CourseManage:learning-data.html.twig */
class __TwigTemplate_f8528a1df64824f4ad16c38ff2ac546279733b71d5de34f8e1fd69d85c1f2f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:learning-data.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "course_manage_data";
        // line 6
        $context["script_controller"] = "course-manage/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程学习数据 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col course-data\">
    <div class=\"panel-heading\">课程学习数据</div>
    <div class=\"panel-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"learning-data-table\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td>课程名</td>
            <td>课程学习人数</td>
            <td>课程完成人数</td>
            <td>课程平均学习时长(分)</td>
            <td>课程提问总数</td>
            <td>课程笔记总数</td>
            <td>----</td>
            <td style=\"width:10%\">----</td>
          </tr>
          <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" href=\"javascript:\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a></td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["isLearnedNum"]) ? $context["isLearnedNum"] : null), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_round(((isset($context["learnTime"]) ? $context["learnTime"] : null) / 60), 0, "floor"), "html", null, true);
        echo "</td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["questionCount"]) ? $context["questionCount"] : null), "html", null, true);
        echo "</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["noteCount"]) ? $context["noteCount"] : null), "html", null, true);
        echo "</td>
            <td>----</td>
            <td>----</td>
          </tr>
          <tr class=\"active\">
            <td width=\"35%\">课时名</td>
            <td>课时学习人数</td>
            <td>课时完成人数</td>
            <td>课时平均学习时长(分)</td>
            <td>音视频时长(分)</td>
            <td>音视频平均观看时长(分)</td>
            <td>测试平均得分</td>
            <td>直播同时在线人数峰值</td>
          </tr>
          ";
        // line 45
        if ((isset($context["lessons"]) ? $context["lessons"] : null)) {
            // line 46
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 47
                echo "              <tr>
                <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_detail_data", array("courseId" => $this->getAttribute($context["lesson"], "courseId", array()), "lessonId" => $this->getAttribute($context["lesson"], "id", array()))), "html", null, true);
                echo "\" href=\"javascript:\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                if (($this->getAttribute($context["lesson"], "type", array()) == "text")) {
                    echo "（图文）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "video")) {
                    echo "（视频）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "audio")) {
                    echo "（音频）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo "（试卷）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "ppt")) {
                    echo "（ppt）";
                }
                echo "</a></td></td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "LearnedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "finishedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                if ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "length", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 53
                if ((($this->getAttribute($context["lesson"], "mediaSource", array()) != "self") && ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo "无";
                } elseif ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "watchTime", array()) / 60), 0, "floor"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 54
                if (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "score", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 55
                if ((($this->getAttribute($context["lesson"], "type", array()) == "live") && ($this->getAttribute($context["lesson"], "replayStatus", array()) == "generated"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "maxOnlineNum", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          ";
        }
        // line 59
        echo "        </table>
        <p class=\"text-success\">注：网络视频的观看时长无法获取</p>
      </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:learning-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 59,  180 => 58,  167 => 55,  159 => 54,  149 => 53,  141 => 52,  137 => 51,  133 => 50,  129 => 49,  112 => 48,  109 => 47,  104 => 46,  102 => 45,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  63 => 26,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
