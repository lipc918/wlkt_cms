<?php

/* TopxiaWebBundle:My:avatar-alert.html.twig */
class __TwigTemplate_8f8d104ab1bb78ab38e4596531cc9a8cd850d70e18f9a83683bd1775afc245ee extends Twig_Template
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
        if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : null)) {
            // line 2
            echo "
 <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>您还没有头像</strong>。拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a>
 </div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:avatar-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  21 => 2,  19 => 1,);
    }
}
