<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_223fb99b09b3eb69e76f48dcf53a22638cf6e8ea1bb6e700225e59f5ccabe1bf extends Twig_Template
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
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter((isset($context["tab"]) ? $context["tab"] : null), null)) : (null));
        // line 2
        $context["previewAs"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 3
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 5
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 6
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">课程概览</a></li>
      <li role=\"presentation\" ";
            // line 7
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">评价";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 9
            if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo "> 笔记";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
    ";
        } else {
            // line 11
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : null) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">课时</a></li>
      <li role=\"presentation\" ";
            // line 12
            if (((isset($context["tab"]) ? $context["tab"] : null) == "thread")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">讨论区</a></li>
      <li role=\"presentation\" ";
            // line 13
            if (((isset($context["tab"]) ? $context["tab"] : null) == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">资料区</a></li>
      <li role=\"presentation\" ";
            // line 14
            if (((isset($context["tab"]) ? $context["tab"] : null) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">评价";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a> 
      </li>
      <li role=\"presentation\" ";
            // line 16
            if (((isset($context["tab"]) ? $context["tab"] : null) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">笔记";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 18
            if (((isset($context["tab"]) ? $context["tab"] : null) == "info")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">概览</a></li>
    ";
        }
        // line 20
        echo "
  </ul>

  ";
        // line 23
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher"))) {
            // line 24
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        公告
      </a>
  </div>
  ";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 31,  214 => 25,  211 => 24,  209 => 23,  204 => 20,  187 => 18,  164 => 16,  141 => 14,  125 => 13,  109 => 12,  92 => 11,  69 => 9,  46 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
