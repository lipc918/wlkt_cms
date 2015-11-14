<?php

/* TopxiaWebBundle:Default:footer.html.twig */
class __TwigTemplate_91f6aa2bf3d4cd0e0c7066545d107eb36decb12a16e8f004604ee569d78468a5 extends Twig_Template
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
        echo "<footer class=\"es-footer\">
  ";
        // line 9
        echo "
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle::powered-by.html.twig", "TopxiaWebBundle:Default:footer.html.twig", 12)->display($context);
        // line 13
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
      
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 13,  27 => 12,  22 => 9,  19 => 1,);
    }
}
