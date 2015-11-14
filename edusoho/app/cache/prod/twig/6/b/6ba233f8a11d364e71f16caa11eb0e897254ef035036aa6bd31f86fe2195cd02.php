<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_6ba233f8a11d364e71f16caa11eb0e897254ef035036aa6bd31f86fe2195cd02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "我的学习 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">
    <div class=\"sidenav\">
      ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method")) {
            // line 13
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">我的教学</li>
          <li class=\"list-group-item
           ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">在教课程</a>
          </li>

          ";
            // line 20
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled"), 0)) {
                // line 21
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-classroom")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 22
                echo $this->env->getExtension('routing')->getPath("my_teaching_classrooms");
                echo "\">所在";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "
              </a>
           </li>
          ";
            }
            // line 26
            echo "
          <li class=\"list-group-item ";
            // line 27
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-questions")) {
                echo "active ";
            }
            echo "\">
            <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
            </a>
          </li>
          <li class=\"list-group-item ";
            // line 31
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题</a>
          </li>
          
          <li class=\"list-group-item ";
            // line 35
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-check")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\">试卷批阅
            </a>
          </li>
          
          ";
            // line 40
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Homework")) {
                // line 41
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-teaching-homework-check")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("my_teaching_homework_list");
                echo "\">作业批改</a>
            </li>
          ";
            }
            // line 45
            echo "
          ";
            // line 46
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("MaterialLib")) {
                // line 47
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "material-lib")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 48
                echo $this->env->getExtension('routing')->getPath("material_lib_browsing");
                echo "\">教学资料库</a>
            </li>
          ";
            }
            // line 51
            echo "        </ul>
      ";
        }
        // line 53
        echo "        
      <ul class=\"list-group\">
        <li class=\"list-group-heading\">我的学习</li>
        <li class=\"list-group-item ";
        // line 56
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-learning")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">我的课程</a>
        </li>

        ";
        // line 60
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled"), 0)) {
            // line 61
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-classroom")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("my_classrooms");
            echo "\">我的";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 65
        echo "
        ";
        // line 66
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 67
            echo "        <li class=\"list-group-item
          ";
            // line 68
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
          <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("my_live_courses_learning");
            echo "\">我的直播课表</a>
        </li>
        ";
        }
        // line 72
        echo "
        <li class=\"list-group-item
        ";
        // line 74
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-questions")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("my_questions");
        echo "\">我的问答</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 78
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">我的话题</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 82
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-notes")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\">我的笔记</a>
        </li>
      
        ";
        // line 86
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("Homework")) {
            // line 87
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-homeworks")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("my_homework_list");
            echo "\">我的作业</a>
          </li>
        ";
        }
        // line 91
        echo "       
        <li class=\"list-group-item
        ";
        // line 93
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-quiz")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">我的考试</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 97
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-group")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">我的小组</a>
        </li>
        ";
        // line 100
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("ClassroomPlan")) {
            // line 101
            echo "          <li class=\"list-group-item
          ";
            // line 102
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-task")) {
                echo " active ";
            }
            echo "\" >
            <a href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("my_task_calendar");
            echo "\">我的任务</a>
          </li>
        ";
        }
        // line 106
        echo "      </ul>
    </div>
  </div>
  <div class=\"col-md-9\">";
        // line 109
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 109,  330 => 106,  324 => 103,  318 => 102,  315 => 101,  313 => 100,  308 => 98,  302 => 97,  296 => 94,  290 => 93,  286 => 91,  280 => 88,  273 => 87,  271 => 86,  265 => 83,  259 => 82,  253 => 79,  247 => 78,  241 => 75,  235 => 74,  231 => 72,  225 => 69,  219 => 68,  216 => 67,  214 => 66,  211 => 65,  203 => 62,  196 => 61,  194 => 60,  188 => 57,  182 => 56,  177 => 53,  173 => 51,  167 => 48,  160 => 47,  158 => 46,  155 => 45,  149 => 42,  142 => 41,  140 => 40,  133 => 36,  127 => 35,  115 => 32,  109 => 31,  97 => 28,  91 => 27,  88 => 26,  79 => 22,  72 => 21,  70 => 20,  64 => 17,  58 => 16,  53 => 13,  51 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
