<?php

/* TopxiaAdminBundle:Course:tab.html.twig */
class __TwigTemplate_debf532b8cd8bb7d6e10f94ed1a7189d95528ed9c56072d2a55421ad7ce744f6 extends Twig_Template
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
        echo "<div class=\"btn-group\">

\t<a href=\" ";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">普通课程</a>


\t<a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "课程</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  23 => 3,  19 => 1,);
    }
}
