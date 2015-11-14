<?php

/* TopxiaWebBundle:Course\Note:course-notes-list.html.twig */
class __TwigTemplate_0327f763547cdd3da1247c3876cb168315993ba33dadb72bde0ef9a5cc4eab1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course\\Note:course-notes-list.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "note";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_course_main($context, array $blocks = array())
    {
        // line 7
        echo "
  
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Course/Note:course-note-nav.html.twig", "TopxiaWebBundle:Course\\Note:course-notes-list.html.twig", 9)->display($context);
        // line 10
        echo "
  ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course/Note:list", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "courseIds" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filters" => (isset($context["filters"]) ? $context["filters"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course\\Note:course-notes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  38 => 9,  34 => 7,  31 => 6,  27 => 1,  25 => 3,  11 => 1,);
    }
}
