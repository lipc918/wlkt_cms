<?php

/* TopxiaWebBundle:CourseLesson/Part:chapter.html.twig */
class __TwigTemplate_08df3a43f499d1c76b2daf31be618363987a01e381d93190b9033fcd2fbfdb77 extends Twig_Template
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
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "unit")) {
            // line 2
            echo "  <li class=\"section\">
    <span class=\"title\">
      第 ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
            echo " 
      ";
            // line 5
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
                echo "
      ";
            } else {
                // line 8
                echo "        节
      ";
            }
            // line 9
            echo "：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "
    </span>
  </li>
";
        } else {
            // line 13
            echo "  <li class=\"chapter clearfix\">
    <i class=\"es-icon es-icon-toc\"></i>
    <span class=\"title\">
      第 ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
            echo " 
      ";
            // line 17
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                // line 18
                echo "        ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
                echo "
      ";
            } else {
                // line 20
                echo "        章
      ";
            }
            // line 21
            echo "：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "
      </span>
    </span>
    <span class=\"period-show\"><i class=\"es-icon es-icon-remove\"></i></span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  66 => 20,  60 => 18,  58 => 17,  54 => 16,  49 => 13,  41 => 9,  37 => 8,  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
