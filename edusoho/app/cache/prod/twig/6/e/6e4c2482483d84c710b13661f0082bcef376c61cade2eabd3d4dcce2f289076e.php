<?php

/* TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig */
class __TwigTemplate_6e4c2482483d84c710b13661f0082bcef376c61cade2eabd3d4dcce2f289076e extends Twig_Template
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
        echo "<a class=\"btn btn-primary btn-lg\" 
  ";
        // line 2
        if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved"))) || $this->env->getExtension('topxia_web_twig')->getSetting("user_partner.avatar_alert"))) {
            // line 3
            echo "    href=\"#modal\" 
    data-toggle=\"modal\" 
    data-url=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\"
  ";
        } elseif ((        // line 6
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
            // line 7
            echo "    id=\"vip-join-course\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_become_use_member", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 9
            echo "    href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\"
  ";
        }
        // line 11
        echo "  ";
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
            // line 12
            echo "    disabled=\"disabled\"
  ";
        }
        // line 14
        echo ">
  ";
        // line 15
        if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
            // line 16
            echo "    加入学习
  ";
        } else {
            // line 18
            echo "    ";
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 19
                echo "      ";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()) > 0)) {
                    echo "购买课程";
                } else {
                    echo "加入学习";
                }
                echo "</a>                
    ";
            } else {
                // line 21
                echo "      ";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                    echo "购买课程";
                } else {
                    echo "加入学习";
                }
                echo "</a>
    ";
            }
            // line 23
            echo "  ";
        }
        // line 24
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  85 => 23,  75 => 21,  65 => 19,  62 => 18,  58 => 16,  56 => 15,  53 => 14,  49 => 12,  46 => 11,  40 => 9,  34 => 7,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
