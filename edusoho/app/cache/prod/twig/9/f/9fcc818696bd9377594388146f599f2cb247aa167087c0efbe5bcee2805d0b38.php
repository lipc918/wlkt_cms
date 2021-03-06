<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyCenter/live.html.twig */
class __TwigTemplate_9fcc818696bd9377594388146f599f2cb247aa167087c0efbe5bcee2805d0b38 extends Twig_Template
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
        $context["recentLiveLessons"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveLessons", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 2));
        // line 2
        if ((isset($context["recentLiveLessons"]) ? $context["recentLiveLessons"] : null)) {
            // line 3
            echo "  <div class=\"text-line gray small\">
    <h5><span>预告板</span></h5>
    <div class=\"line\"></div>
  </div>

  <ul class=\"bar-preview\">
    ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentLiveLessons"]) ? $context["recentLiveLessons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recentLiveLesson"]) {
                // line 10
                echo "      <li>
        <p class=\"text-overflow\"><i class=\"es-icon es-icon-calendar\"></i><a target=\"_blank\" class=\"link-light\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["recentLiveLesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["recentLiveLesson"], "id", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["recentLiveLesson"], "title", array()), "html", null, true);
                echo "</a></p>
        <p class=\"date\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recentLiveLesson"], "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentLiveLesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyCenter/live.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  44 => 12,  38 => 11,  35 => 10,  31 => 9,  23 => 3,  21 => 2,  19 => 1,);
    }
}
