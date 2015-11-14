<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_44cffe1a4d80f1976b0e237a1e62be8f1ffe9a95e364ddf1b51d092d5bc6c44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 159
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 161
        $this->displayBlock('main', $context, $blocks);
        // line 162
        echo "  </div>
</div>
";
    }

    // line 20
    public function block_side($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 22
        echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">课程信息</li>  
          <li class=\"list-group-item ";
        // line 25
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 27
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "base")), "html", null, true);
        } else {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "\">
              <span ";
        // line 30
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>基本信息
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 33
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "detail")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 34
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "detail")), "html", null, true);
        } else {
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "\">
              <span ";
        // line 38
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>详细信息
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 41
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 43
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "picture")), "html", null, true);
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "\">
              <span ";
        // line 46
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>课程图片
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 49
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "lesson")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 50
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson")), "html", null, true);
        } else {
            // line 52
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "\">
              <span ";
        // line 54
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>课时管理
            </a>
          </li>
          ";
        // line 57
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 58
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "replay")) {
                echo "active";
            }
            echo "\" >
            <a href=\"";
            // line 59
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "replay")), "html", null, true);
            } else {
                // line 61
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "
            ";
            }
            // line 62
            echo "\"><span ";
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>录播管理</a>
          </li>
          ";
        }
        // line 65
        echo "          <li class=\"list-group-item ";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "files")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 66
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 67
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "files")), "html", null, true);
        } else {
            // line 68
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 69
        echo "\">
              <span ";
        // line 70
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>文件管理
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">课程设置</li>
          <li class=\"list-group-item ";
        // line 77
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "price")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 78
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 79
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "price")), "html", null, true);
        } else {
            // line 80
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 81
        echo "\">
              <span ";
        // line 82
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>价格设置
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 85
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 86
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 87
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "teachers")), "html", null, true);
        } else {
            // line 88
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 89
        echo "\">
              <span ";
        // line 90
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>教师设置
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 93
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 95
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        }
        echo "管理
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">题库</li>
          <li class=\"list-group-item ";
        // line 102
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 103
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 104
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question")), "html", null, true);
        } else {
            // line 105
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 106
        echo "\">
              <span ";
        // line 107
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>题目管理
            </a>
          </li>

          ";
        // line 111
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstaled("QuestionPlus") && $this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled"))) {
            // line 112
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_plumber")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 113
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 114
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question_plumber")), "html", null, true);
            } else {
                // line 115
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "import")), "html", null, true);
                echo "
              ";
            }
            // line 116
            echo "\">
              <span ";
            // line 117
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>题目导入/导出
            </a>
            </li>
          ";
        }
        // line 121
        echo "
          <!-- <li class=\"list-group-item ";
        // line 122
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_category")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">题目类别管理</a>
          </li> -->
          
          <li class=\"list-group-item ";
        // line 126
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 127
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 128
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "testpaper")), "html", null, true);
        } else {
            // line 129
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 130
        echo "\">
              <span ";
        // line 131
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>试卷管理
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 134
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testCheck")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\"><span></span>试卷批阅</a>
          </li>
          ";
        // line 137
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Homework")) {
            // line 138
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "homeworkCheck")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_check_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\"><span></span>作业批改</a>
            </li>
          ";
        }
        // line 142
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">课程运营</li>
          <li class=\"list-group-item ";
        // line 146
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "course_manage_data")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_data", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>课程学习数据</a>
          </li>

          ";
        // line 151
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_search_order") == 1))) {
            // line 152
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "course_manage_order")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_order", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span></span>课程订单查询</a>
          </li>
          ";
        }
        // line 156
        echo "        </ul>
      </div>
    ";
    }

    // line 161
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 161,  512 => 156,  506 => 153,  499 => 152,  497 => 151,  490 => 147,  484 => 146,  478 => 142,  472 => 139,  465 => 138,  463 => 137,  458 => 135,  452 => 134,  444 => 131,  441 => 130,  435 => 129,  431 => 128,  429 => 127,  423 => 126,  417 => 123,  411 => 122,  408 => 121,  399 => 117,  396 => 116,  390 => 115,  386 => 114,  384 => 113,  377 => 112,  375 => 111,  366 => 107,  363 => 106,  357 => 105,  353 => 104,  351 => 103,  345 => 102,  333 => 95,  329 => 94,  323 => 93,  315 => 90,  312 => 89,  306 => 88,  302 => 87,  300 => 86,  294 => 85,  286 => 82,  283 => 81,  277 => 80,  273 => 79,  271 => 78,  265 => 77,  253 => 70,  250 => 69,  244 => 68,  240 => 67,  238 => 66,  231 => 65,  222 => 62,  216 => 61,  212 => 60,  210 => 59,  203 => 58,  201 => 57,  193 => 54,  190 => 53,  184 => 52,  180 => 51,  178 => 50,  172 => 49,  164 => 46,  161 => 45,  155 => 44,  151 => 43,  149 => 42,  143 => 41,  135 => 38,  132 => 37,  126 => 36,  122 => 35,  120 => 34,  114 => 33,  106 => 30,  103 => 29,  97 => 28,  93 => 27,  91 => 26,  85 => 25,  80 => 22,  77 => 21,  74 => 20,  68 => 162,  66 => 161,  62 => 159,  60 => 20,  53 => 16,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }
}
