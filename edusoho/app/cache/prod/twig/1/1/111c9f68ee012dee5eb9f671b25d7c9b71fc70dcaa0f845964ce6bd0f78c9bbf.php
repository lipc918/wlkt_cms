<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_111c9f68ee012dee5eb9f671b25d7c9b71fc70dcaa0f845964ce6bd0f78c9bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "course-list-page bg-blank";
        // line 4
        $context["siteNav"] = "course/explore";
        // line 5
        $context["script_controller"] = "course/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "全部")) : ("全部")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
        // line 10
        echo "    ";
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        课程列表
      </div>
      ";
        // line 19
        if ($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled")) {
            // line 20
            echo "      <a class=\"btn btn-primary btn-lg more\" href=\"";
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">
        查看";
            // line 21
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
      </a>
      ";
        }
        // line 24
        echo "    </div>
  </div>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "  ";
        $context["type"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "type", array()), "all")) : ("all"));
        // line 30
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "price", array()), "all")) : ("all"));
        // line 31
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest"));
        // line 32
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 33
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => ((array_key_exists("category", $context)) ? (_twig_default_filter((isset($context["category"]) ? $context["category"] : null), "")) : ("")), "path" => "course_explore", "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort\">
      <li>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "latest")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            echo " active ";
        }
        echo "\">
          最新
        </a>
      </li>
      <li>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo " active ";
        }
        echo "\">
          最热
        </a>
      </li>
      <li>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo " active ";
        }
        echo "\">
          推荐
        </a>
      </li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 53
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstaled("vip")) {
            // line 54
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 56
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "会员课程";
            }
            // line 57
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 60
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>
          ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 62
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "          </ul>
        </div>
      ";
        }
        // line 67
        echo "      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 68
        if (((isset($context["type"]) ? $context["type"] : null) == "live")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"live\" value=\"
        ";
        // line 69
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 70
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => "live", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo " 
        ";
        } else {
            // line 71
            echo " 
          ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => "all", "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo " 
        ";
        }
        // line 73
        echo "\"> 直播课程
      </label>
      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 76
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 77
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 78
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 79
            echo " 
          ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 82
        echo "        \"> 免费课程
      </label>
    </div>
  </div>

  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 89
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 90
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 91
                echo "          <div class=\"col-lg-3 col-md-4 col-sm-6\">
            ";
                // line 92
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 92)->display($context);
                // line 93
                echo "          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "      ";
        } else {
            // line 96
            echo "        <div class=\"empty\">该分类下无课程</div>
      ";
        }
        // line 98
        echo "    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 101,  332 => 98,  328 => 96,  325 => 95,  310 => 93,  308 => 92,  305 => 91,  287 => 90,  285 => 89,  276 => 82,  271 => 80,  268 => 79,  262 => 78,  260 => 77,  254 => 76,  249 => 73,  244 => 72,  241 => 71,  235 => 70,  233 => 69,  227 => 68,  224 => 67,  219 => 64,  204 => 62,  200 => 61,  192 => 60,  188 => 58,  176 => 57,  172 => 56,  168 => 54,  166 => 53,  153 => 47,  141 => 42,  129 => 37,  121 => 33,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  106 => 28,  100 => 24,  94 => 21,  89 => 20,  87 => 19,  79 => 13,  76 => 12,  72 => 10,  59 => 9,  53 => 8,  39 => 7,  35 => 1,  33 => 5,  31 => 4,  29 => 3,  11 => 1,);
    }
}
