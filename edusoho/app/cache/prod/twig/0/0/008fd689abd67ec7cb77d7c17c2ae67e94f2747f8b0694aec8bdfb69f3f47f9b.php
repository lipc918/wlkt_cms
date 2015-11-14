<?php

/* TopxiaWebBundle:EsBar:index.html.twig */
class __TwigTemplate_008fd689abd67ec7cb77d7c17c2ae67e94f2747f8b0694aec8bdfb69f3f47f9b extends Twig_Template
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
        echo "<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  ";
        // line 4
        if (twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 5
            echo "    <input type=\"hidden\" id=\"notLogin\">
  ";
        }
        // line 7
        echo "
  <!-- 左侧列表 -->
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:EsBar:left-list.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 9)->display($context);
        // line 10
        echo "
  <!-- 列表内容 -->
  ";
        // line 12
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 13
            echo "    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      ";
            // line 15
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/notification.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 15)->display($context);
            // line 16
            echo "    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      ";
            // line 20
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 20)->display($context);
            // line 21
            echo "    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      ";
            // line 25
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 25)->display($context);
            // line 26
            echo "    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      ";
            // line 30
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 30)->display($context);
            // line 31
            echo "    </div>

    <!-- 学习历史 -->
    ";
            // line 43
            echo "
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/consult.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 46)->display($context);
        // line 47
        echo "
</div>

";
        // line 50
        $this->env->getExtension('topxia_web_twig')->loadScript("es-bar/index");
        // line 51
        $this->env->getExtension('topxia_web_twig')->loadScript("notification/notification");
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 52,  93 => 51,  91 => 50,  86 => 47,  84 => 46,  81 => 45,  77 => 43,  72 => 31,  70 => 30,  64 => 26,  62 => 25,  56 => 21,  54 => 20,  48 => 16,  46 => 15,  42 => 13,  40 => 12,  36 => 10,  34 => 9,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
