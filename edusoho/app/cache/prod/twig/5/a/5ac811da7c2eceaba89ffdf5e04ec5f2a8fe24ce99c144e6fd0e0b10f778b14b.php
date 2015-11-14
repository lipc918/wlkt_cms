<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig */
class __TwigTemplate_5ac811da7c2eceaba89ffdf5e04ec5f2a8fe24ce99c144e6fd0e0b10f778b14b extends Twig_Template
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
        echo "<li data-id=\"#bar-course-list\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"我的课程/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "\"><a href=\"javascript:;\" ><i class=\"es-icon es-icon-book\"></i></a></li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
