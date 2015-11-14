<?php

/* TopxiaWebBundle:Course:normal-show.html.twig */
class __TwigTemplate_4f466905c1014aa8cdd9666a5f8065b7f47c3aa62cee45baa150c91cee1d9c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:normal-show.html.twig", 1);
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
        $context["tab"] = "overview";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("course/show");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"course-detail-content\">

    ";
        // line 11
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 12
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          课程介绍
        </div>
        <div class=\"piece-body p-lg clearfix\">
          ";
            // line 17
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
                // line 18
                echo "            ";
                echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
                echo "
          ";
            } else {
                // line 20
                echo "            <div class=\"text-muted\">暂无课程简介</div>
          ";
            }
            // line 22
            echo "        </div>
      </div>

      ";
            // line 25
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array())) {
                // line 26
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            课程目标
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                    // line 33
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array())) {
                // line 43
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            适合人群
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 49
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                    // line 50
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 51
                    echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    <div class=\"es-piece\">
      <div class=\"piece-header\">课时列表</div>
      <div class=\"piece-body\">
        ";
        // line 63
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "member" => (isset($context["member"]) ? $context["member"] : null), "previewUrl" => $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))))));
        echo "
        
      </div>
    </div>
    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  137 => 59,  134 => 58,  128 => 54,  119 => 51,  116 => 50,  112 => 49,  104 => 43,  102 => 42,  99 => 41,  93 => 37,  84 => 34,  81 => 33,  77 => 32,  69 => 26,  67 => 25,  62 => 22,  58 => 20,  52 => 18,  50 => 17,  43 => 12,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
