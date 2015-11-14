<?php

/* TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig */
class __TwigTemplate_c59b8bccd369a9a2d895d40c120c90801736723ae99b34023889935687812fac extends Twig_Template
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
        if ((($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array"), null)) : (null))) {
            // line 2
            echo "  ";
            if (($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array") == "finished")) {
                // line 3
                echo "    <i class=\"es-icon es-icon-done1 color-primary status-icon\"></i>
  ";
            } else {
                // line 5
                echo "    <i class=\"es-icon es-icon-doing color-primary status-icon\"></i>
  ";
            }
        } else {
            // line 8
            echo "  <i class=\"es-icon es-icon-undone status-icon\"></i>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "free", array())) {
            // line 12
            echo "  <span class=\"label label-warning mrm\">免费</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  40 => 11,  37 => 10,  33 => 8,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
