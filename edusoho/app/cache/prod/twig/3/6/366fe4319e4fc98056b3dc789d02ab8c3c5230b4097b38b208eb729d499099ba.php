<?php

/* TopxiaWebBundle:Default:course-grid-with-condition.html.twig */
class __TwigTemplate_366fe4319e4fc98056b3dc789d02ab8c3c5230b4097b38b208eb729d499099ba extends Twig_Template
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
        $context["categoriesFirst"] = $this->env->getExtension('topxia_data_twig')->getData("Categories", array("group" => "course"));
        // line 2
        echo "<div class=\"container\">
  <div class=\"text-line\">
    <h5><span>网校课程</span><div class=\"line\"></div></h5>
    <!-- <div class=\"subtitle\">精选网校课程，满足你的学习兴趣。</div> -->
  </div>
  <div class=\"course-filter\" id=\"course-filter\">
    <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
      <li role=\"presentation\" class=\"";
        // line 9
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")) == "all")) {
            echo "active ";
        }
        echo " js-course-filter\"data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => "all", "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest")))), "html", null, true);
        echo "\"><a href=\"javascript:;\">全部课程</a></li>
      ";
        // line 10
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null)) {
            // line 11
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 12
                    echo "          ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < 4)) {
                        // line 13
                        echo "            <li role=\"presentation\" class=\"";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo " js-course-filter\"data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest")))), "html", null, true);
                        echo "\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
          ";
                    }
                    // line 15
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "      ";
        }
        // line 17
        echo "    </ul>
    <div class=\"btn-group visible-xs\">
      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">全部课程 <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li role=\"presentation\" class=\"js-course-filter ";
        // line 21
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")) == "all")) {
            echo "active ";
        }
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => "all", "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest")))), "html", null, true);
        echo "\"><a href=\"javascript:;\">全部课程</a></li>
        ";
        // line 22
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null)) {
            // line 23
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 24
                    echo "            ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < 4)) {
                        // line 25
                        echo "              <li role=\"presentation\" class = \"js-course-filter ";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest")))), "html", null, true);
                        echo "\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
            ";
                    }
                    // line 27
                    echo "          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </ul>
    </div>
    <div class=\"course-sort btn-group\">
      <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 32
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")), "orderBy" => "latest")), "html", null, true);
        echo "\">
        最新
      </a>
      <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 35
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")), "orderBy" => "studentNum")), "html", null, true);
        echo "\">
        最热
      </a>
      <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 38
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : null), "all")) : ("all")), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\">
        推荐
      </a>
    </div>
  </div>
  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 45
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
            // line 46
            echo "        <div class=\"col-lg-3 col-md-4 col-sm-6\">
          ";
            // line 47
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition.html.twig", 47)->display($context);
            // line 48
            echo "        </div>
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
        // line 50
        echo "    </div>
  </div>
  <div class=\"text-center mvl\">
    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
      更多课程 <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
    </a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:course-grid-with-condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 53,  212 => 50,  197 => 48,  195 => 47,  192 => 46,  175 => 45,  161 => 38,  151 => 35,  141 => 32,  136 => 29,  133 => 28,  123 => 27,  111 => 25,  108 => 24,  96 => 23,  94 => 22,  86 => 21,  80 => 17,  77 => 16,  67 => 15,  55 => 13,  52 => 12,  40 => 11,  38 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
