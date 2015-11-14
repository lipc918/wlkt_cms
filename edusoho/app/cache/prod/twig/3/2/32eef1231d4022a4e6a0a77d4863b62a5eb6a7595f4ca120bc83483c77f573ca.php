<?php

/* TopxiaWebBundle:User:layout.html.twig */
class __TwigTemplate_32eef1231d4022a4e6a0a77d4863b62a5eb6a7595f4ca120bc83483c77f573ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:User:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["bodyClass"] = "userpage";
        // line 8
        $context["pageNav"] = ((array_key_exists("pageNav", $context)) ? (_twig_default_filter((isset($context["pageNav"]) ? $context["pageNav"] : null), null)) : (null));
        // line 10
        $context["script_controller"] = "user/user";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "teach")) {
            echo "在教课程";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "learn")) {
            echo "在学课程";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "favorited")) {
            echo "收藏的课程";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "group")) {
            echo "加入的小组";
            echo " - ";
        } elseif (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "friend")) {
            echo "关注/粉丝";
            echo " - ";
        } else {
            echo "";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "的个人主页 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array()), "")) : ("")), 100);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:User:headerBlock", array("user" => (isset($context["user"]) ? $context["user"] : null))));
        echo "

<div class=\"es-section\">
  <ul class=\"nav nav-tabs clearfix\">
  \t";
        // line 18
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
            // line 19
            echo "\t    <li ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "teach")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_teach", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">在教课程</a></li>
    ";
        }
        // line 21
        echo "    <li ";
        if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "learn")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learn", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">在学课程</a></li>
    <li ";
        // line 22
        if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "favorited")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_favorited", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">收藏的课程</a></li>
    <li ";
        // line 23
        if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "group")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_group", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">加入的小组</a></li>
    <li ";
        // line 24
        if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "friend")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">关注/粉丝</a></li>

    ";
        // line 26
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled"), 0)) {
            // line 27
            echo "    ";
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                // line 28
                echo "      <li ";
                if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "teaching")) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_teaching_classrooms", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">在教";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 30
            echo "    
    <li ";
            // line 31
            if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "learning")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learning_classrooms", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">在学";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 33
        echo "  </ul>

  ";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 36
        echo "
</div>

";
    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 35,  173 => 36,  171 => 35,  167 => 33,  156 => 31,  153 => 30,  141 => 28,  138 => 27,  136 => 26,  127 => 24,  119 => 23,  111 => 22,  102 => 21,  92 => 19,  90 => 18,  83 => 14,  80 => 13,  77 => 12,  71 => 6,  65 => 5,  39 => 3,  35 => 1,  33 => 10,  31 => 8,  29 => 7,  11 => 1,);
    }
}
