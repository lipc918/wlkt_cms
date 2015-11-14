<?php

/* TopxiaWebBundle:Player:stylesheet.html.twig */
class __TwigTemplate_919b41bcb0f1c7d6738b1a7541a2e2ccdd1a1366382cab868e459e6044d95d43 extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
        echo "\" />

";
        // line 5
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("developer.balloon_player"), 0)) {
            // line 6
            echo "  <link rel=\"stylesheet\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/balloon-video-player/1.0.0/src/skin/video-js-debug.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        }
        // line 8
        echo "<style type=\"text/css\">
  .lesson-content-audio {
    padding-top: 10%;
    text-align: center;
  }
</style>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Player:stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
