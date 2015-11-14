<?php

/* TopxiaWebBundle::weixin-alert.html.twig */
class __TwigTemplate_1d362aa684577a9b1478701044d45c98c2af0f1c2cf3def0d6866fd5fab38fa1 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "setup", array()) == 0)) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "close_weixin_alert"), "method"))) {
            // line 2
            echo "  <div class=\"alert alert-warning alert-xs alert-dismissible weixin-alert hide visible-xs\" role=\"alert\">
    您是微信账号登录，如果已有账号，请<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("login_bind_weixin");
            echo "\"><font class=\"color-success\">绑定</font></a>，以免丢失学习记录
    <span style=\"right:0;top:-5px\" class=\"close\" data-dismiss=\"alert\">x</span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::weixin-alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
