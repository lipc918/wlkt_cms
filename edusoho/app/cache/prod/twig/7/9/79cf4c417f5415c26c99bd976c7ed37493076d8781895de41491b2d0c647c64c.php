<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig */
class __TwigTemplate_79cf4c417f5415c26c99bd976c7ed37493076d8781895de41491b2d0c647c64c extends Twig_Template
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
        echo "<div class=\"text-line gray small\">
  <h5><span>学习任务</span></h5>
  <div class=\"line\"></div>
</div>

";
        // line 6
        if (((isset($context["classrooms"]) ? $context["classrooms"] : null) || (isset($context["courses"]) ? $context["courses"] : null))) {
            // line 7
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 8
                echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          ";
                // line 11
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "
          <span>";
                // line 12
                echo twig_escape_filter($this->env, (($this->getAttribute($context["classroom"], "learnedLessonNum", array()) . "/") . $this->getAttribute($context["classroom"], "allLessonNum", array())), "html", null, true);
                echo "</span>
        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                // line 17
                if ($this->getAttribute($context["classroom"], "lessons", array(), "array")) {
                    // line 18
                    echo "          ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classroom"], "lessons", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                        // line 19
                        echo "            ";
                        $context["status"] = $this->getAttribute($context["lesson"], "isLearned", array());
                        // line 20
                        echo "            ";
                        if ((isset($context["status"]) ? $context["status"] : null)) {
                            // line 21
                            echo "              <li><span class=\"es-icon es-icon-doing\"></span><a class=\"link-light\" href=\"";
                            echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                            echo "\" target=\"_blank\">课时";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                            echo "</a></li>
            ";
                        } else {
                            // line 23
                            echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light\" href=\"";
                            echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                            echo "\" target=\"_blank\">课时";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                            echo "</a></li>
            ";
                        }
                        // line 25
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "      </ul>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 31
                echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          课程: ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "
          <span>";
                // line 35
                echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "learnedLessonNum", array()) . "/") . $this->getAttribute($context["course"], "allLessonNum", array())), "html", null, true);
                echo "</span>
        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                // line 40
                if ($this->getAttribute($context["course"], "lessons", array(), "array")) {
                    // line 41
                    echo "          ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["course"], "lessons", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                        // line 42
                        echo "            ";
                        $context["status"] = $this->getAttribute($context["lesson"], "isLearned", array());
                        // line 43
                        echo "            ";
                        if ((isset($context["status"]) ? $context["status"] : null)) {
                            // line 44
                            echo "              <li><span class=\"es-icon es-icon-doing\"></span><a class=\"link-light\" href=\"";
                            echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                            echo "\" target=\"_blank\">课时";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                            echo "</a></li>
            ";
                        } else {
                            // line 46
                            echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light\" href=\"";
                            echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                            echo "\" target=\"_blank\">课时";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                            echo "-";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                            echo "</a></li>
            ";
                        }
                        // line 48
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "        ";
                }
                // line 50
                echo "      </ul>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 54
            echo "  <span class=\"\"></span>暂未发现还有未学习课时。<a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">去逛逛>></a>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 54,  166 => 50,  163 => 49,  157 => 48,  147 => 46,  137 => 44,  134 => 43,  131 => 42,  126 => 41,  124 => 40,  116 => 35,  112 => 34,  107 => 31,  102 => 30,  94 => 27,  91 => 26,  85 => 25,  75 => 23,  65 => 21,  62 => 20,  59 => 19,  54 => 18,  52 => 17,  44 => 12,  38 => 11,  33 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
