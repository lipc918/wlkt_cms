<?php

/* TopxiaWebBundle:CourseThread:post.html.twig */
class __TwigTemplate_34638266cd7c4a1429a19d82d1176d8dfac27c87d07884ef454a1c287191fa4a extends Twig_Template
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
        echo "<form id=\"thread-post-form\" class=\"form-vertical\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_post", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" data-auto-submit=\"false\" novalidate>
\t<div class=\"form-group\">
\t\t<div class=\"controls\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 8, "data-display" => "内容", "data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"controls clearfix\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">添加";
        // line 10
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            echo "答案";
        } else {
            echo "回复";
        }
        echo "</button>
\t\t</div>
\t</div>

\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  38 => 10,  34 => 9,  26 => 4,  19 => 1,);
    }
}
