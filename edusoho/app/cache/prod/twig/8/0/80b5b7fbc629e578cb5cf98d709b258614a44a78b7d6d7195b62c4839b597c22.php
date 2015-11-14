<?php

/* TopxiaWebBundle::powered-by.html.twig */
class __TwigTemplate_80b5b7fbc629e578cb5cf98d709b258614a44a78b7d6d7195b62c4839b597c22 extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v";
            echo twig_escape_filter($this->env, twig_constant("\\Topxia\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2014-2015 <a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">好知网</a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
