<?php

/* TopxiaWebBundle:EsBar:ListContent/notification.html.twig */
class __TwigTemplate_9d0efdc5f9831b10b7556ed1ccd79f78abfc3a03a15914bee518195af0c8a4f0 extends Twig_Template
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
        echo "
<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink pull-left link-light\" id=\"bar-message-btn\" data-url=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("esbar_my_notify");
        echo "\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  通知
</div>
<div class=\"bar-main-wrap\">
  <div class=\"bar-main-body\">
    <ul class=\"bar-message\">

    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
