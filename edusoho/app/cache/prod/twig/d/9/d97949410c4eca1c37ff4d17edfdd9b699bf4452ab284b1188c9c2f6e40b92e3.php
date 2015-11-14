<?php

/* TopxiaWebBundle:Course:courses-block-list.html.twig */
class __TwigTemplate_d97949410c4eca1c37ff4d17edfdd9b699bf4452ab284b1188c9c2f6e40b92e3 extends Twig_Template
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
        echo "<ul class=\"course-wide-list\">
  ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 3
            echo "  <li class=\"course-item clearfix\">
    <a class=\"course-picture-link\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
      <img class=\"course-picture\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">
    </a>

    <div class=\"course-body\">
     
      <div style=\"float:right;\" class=\"text-muted mrm mls\">
        ";
            // line 11
            $this->loadTemplate("TopxiaWebBundle:Course:price-widget.html.twig", "TopxiaWebBundle:Course:courses-block-list.html.twig", 11)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
            // line 12
            echo "      </div>

      <h4 class=\"course-title\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a>
      ";
            // line 15
            if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                // line 16
                echo "        <span class=\"label label-success \">更新中</span>
      ";
            } elseif (($this->getAttribute(            // line 17
$context["course"], "serializeMode", array()) == "finished")) {
                // line 18
                echo "        <span class=\"label label-warning \">已完结</span>
      ";
            }
            // line 20
            echo "      ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 21
                echo "          ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 22
                echo "          ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                    // line 23
                    echo "            <span class=\"label label-warning series-mode-label\">正在直播中</span>
          ";
                } else {
                    // line 25
                    echo "            <span class=\"label label-success series-mode-label\">直播</span>
          ";
                }
                // line 27
                echo "      ";
            }
            // line 28
            echo "      </h4>

      ";
            // line 30
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 31
                echo "        ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                // line 32
                echo "        ";
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 33
                    echo "          <div class=\"live-course-lesson mbm\">
            <span class=\"text-success fsm mrm\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
            <span class=\"text-muted fsm mrm\">第";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                    echo "课时</span>
          </div>
        ";
                }
                // line 38
                echo "      ";
            } else {
                // line 39
                echo "        <div class=\"course-about ellipsis\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                echo "</div>
      ";
            }
            // line 41
            echo "
      <div class=\"course-footer clearfix\">
        ";
            // line 43
            $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
            // line 44
            echo "        ";
            if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                // line 45
                echo "          <div class=\"teacher\">
            <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
            <a class=\"teacher-nickname ellipsis\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                echo "</a>
            <span class=\"teacher-title ellipsis\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                echo "</span>
          </div>
        ";
            }
            // line 51
            echo "
        <div class=\"course-metas\">
          <span class=\"stars-";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
            echo "\">&nbsp;</span>
          ";
            // line 54
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 55
                echo "          <span class=\"divider\"></span>
          <span class=\"text-muted mrm mls\"><strong>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "</span>
          ";
            }
            // line 58
            echo "
        </div>
      </div>
    </div>
  </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:courses-block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 64,  186 => 58,  179 => 56,  176 => 55,  174 => 54,  170 => 53,  166 => 51,  160 => 48,  154 => 47,  148 => 46,  145 => 45,  142 => 44,  140 => 43,  136 => 41,  130 => 39,  127 => 38,  121 => 35,  115 => 34,  112 => 33,  109 => 32,  106 => 31,  104 => 30,  100 => 28,  97 => 27,  93 => 25,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  76 => 18,  74 => 17,  71 => 16,  69 => 15,  63 => 14,  59 => 12,  57 => 11,  46 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
