<?php

/* TopxiaWebBundle:CourseLesson/Part:lesson.html.twig */
class __TwigTemplate_4fb27fb18a8a451aa5d80079ee12926f9e70e332d3a40a548ddc8fad2b6415e0 extends Twig_Template
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
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 2
            echo "  ";
            $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) . "#lesson/") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        } else {
            // line 4
            echo "  ";
            $context["lessonUrl"] = (((isset($context["previewUrl"]) ? $context["previewUrl"] : null) . "?lessonId=") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        }
        // line 6
        echo "<li class=\"period lesson-item lesson-item-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" data-num=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
        echo "\">
  ";
        // line 7
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 8
            echo "    <a ";
            if ((isset($context["member"]) ? $context["member"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" ";
            } else {
                echo "href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                echo "\"";
            }
            // line 9
            echo "    title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "\">
    ";
            // line 10
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 10)->display($context);
            // line 11
            echo "    <span class=\"title\">课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "</span>
    ";
            // line 12
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 12)->display($context);
            // line 13
            echo "    </a>
  ";
        } else {
            // line 14
            echo "   
    ";
            // line 15
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 15)->display($context);
            // line 16
            echo "    <span class=\"title\">课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "</span>
    ";
            // line 17
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 17)->display($context);
            // line 18
            echo "  ";
        }
        // line 19
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  85 => 18,  83 => 17,  76 => 16,  74 => 15,  71 => 14,  67 => 13,  65 => 12,  58 => 11,  56 => 10,  51 => 9,  40 => 8,  38 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
