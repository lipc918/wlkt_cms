<?php

/* ClassroomBundle:Classroom:class-grid.html.twig */
class __TwigTemplate_0dd195ddc709edc905ba6aca4db5220e4668b642813c9d0e15d2378cb40ac49b extends Twig_Template
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
        echo "<div class=\"class-item\">
  <div class=\"class-bg-layer\"></div>
  <div class=\"class-item-bg\">
    <a class=\"class-img\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 5
        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "lazyload_class.png");
        echo "
    </a>
    <h3><a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a></h3>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:class-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
