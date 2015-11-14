<?php

/* TopxiaWebBundle:CourseThread:show.html.twig */
class __TwigTemplate_a4f9c471a3c4994d359461dc283d5b7b7c4fbf558519402d8a8d7fa2fafba78e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:CourseThread:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/thread-show";
        // line 7
        $context["tab"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_course_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <ul class=\"breadcrumb\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">讨论区</a></li>
    <li class=\"active\">";
        // line 13
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            echo "问答";
        } else {
            echo "话题";
        }
        echo "</li>
  </ul>

  <div class=\"thread\">
    <div class=\"thread-header\">
      ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "pull-right"), "method"), "html", null, true);
        echo "
      <h2 class=\"thread-title\">
        ";
        // line 20
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            // line 21
            echo "        <span class=\"label label-info\">问</span>
        ";
        }
        // line 23
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "
      </h2>
      <div class=\"thread-metas\">
        By ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "link-muted"), "method"), "html", null, true);
        echo "
        <span class=\"bullet mhs\">•</span>
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "createdTime", array())), "html", null, true);
        echo "
        <span class=\"bullet mhs\">•</span>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "hitNum", array()), "html", null, true);
        echo " 次浏览
        ";
        // line 31
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            // line 32
            echo "          <span class=\"bullet mhs\">•</span>
          <a class=\"link-muted\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "lessonId", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
            echo "\">课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
            echo "</a>
        ";
        }
        // line 35
        echo "      </div>
    </div>
    <div class=\"thread-body\">";
        // line 37
        echo $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array());
        echo "</div>
    ";
        // line 38
        if (((isset($context["isManager"]) ? $context["isManager"] : null) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array())))) {
            // line 39
            echo "      <div class=\"thread-footer\" >
        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_edit", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑</a>
        ";
            // line 41
            if ((isset($context["isManager"]) ? $context["isManager"] : null)) {
                // line 42
                echo "          <a href=\"javascript:;\" class=\"btn btn-link\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" data-after-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"confirm-btn\" data-confirm-message=\"您真的要删除该帖吗？\"><span class=\"glyphicon glyphicon-remove-sign\"></span> 删除</a>
          ";
                // line 43
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isStick", array())) {
                    // line 44
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_unstick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\" data-role=\"confirm-btn\" data-confirm-message=\"您真的要取消置顶该帖吗？\"><span class=\"glyphicon glyphicon-minus-sign\"></span> 取消置顶</a>
          ";
                } else {
                    // line 46
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_stick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\" data-role=\"confirm-btn\" data-confirm-message=\"您真的要置顶该帖吗？\"><span class=\"glyphicon glyphicon-circle-arrow-up\"></span> 置顶</a>
          ";
                }
                // line 48
                echo "
          ";
                // line 49
                if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isElite", array())) {
                    // line 50
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_unelite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\"data-role=\"confirm-btn\" data-confirm-message=\"您真的要取消加精该帖吗？\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消加精</a>
          ";
                } else {
                    // line 52
                    echo "            <a href=\"javascript:\" class=\"btn btn-link\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_elite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                    echo "\"data-role=\"confirm-btn\" data-confirm-message=\"您真的要加精该帖吗？\"><span class=\"glyphicon glyphicon-thumbs-up\"></span>  加精</a>
          ";
                }
                // line 54
                echo "        ";
            }
            // line 55
            echo "      </div>
    ";
        }
        // line 57
        echo "  </div>

  <div class=\"thread-posts\">
    ";
        // line 60
        if ((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question") && (isset($context["elitePosts"]) ? $context["elitePosts"] : null))) {
            // line 61
            echo "      <h3 class=\"thread-posts-heading\"><span class=\"glyphicon glyphicon-share-alt\"></span> 教师的答案</h3>
      <ul class=\"thread-post-list media-list\">
        ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elitePosts"]) ? $context["elitePosts"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 64
                echo "          ";
                $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
                // line 65
                echo "          ";
                $this->loadTemplate("TopxiaWebBundle:CourseThread:post-list-item.html.twig", "TopxiaWebBundle:CourseThread:show.html.twig", 65)->display($context);
                // line 66
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "      </ul>
    ";
        }
        // line 69
        echo "
    <h3 class=\"thread-posts-heading\">
      <span class=\"glyphicon glyphicon-share-alt\"></span>
      <span id=\"thread-post-num\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "</span> ";
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            echo "所有答案";
        } else {
            echo "回复";
        }
        // line 73
        echo "    </h3>

    <ul class=\"thread-post-list media-list\">
      ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 77
            echo "        ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 78
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:CourseThread:post-list-item.html.twig", "TopxiaWebBundle:CourseThread:show.html.twig", 78)->display($context);
            // line 79
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 80
            echo "        <li class=\"empty\">还没有";
            if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
                echo "答案";
            } else {
                echo "回复";
            }
            echo "，赶快添加一个吧！</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </ul>

    ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

    ";
        // line 86
        if ((isset($context["isMemberNonExpired"]) ? $context["isMemberNonExpired"] : null)) {
            // line 87
            echo "      <h3 class=\"thread-posts-heading\"><span class=\"glyphicon glyphicon-plus\"></span> 添加";
            if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
                echo "答案";
            } else {
                echo "回复";
            }
            echo "</h3>
      ";
            // line 88
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseThread:post", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))));
            echo "
    ";
        }
        // line 90
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 90,  318 => 88,  309 => 87,  307 => 86,  302 => 84,  298 => 82,  285 => 80,  272 => 79,  269 => 78,  266 => 77,  248 => 76,  243 => 73,  235 => 72,  230 => 69,  226 => 67,  212 => 66,  209 => 65,  206 => 64,  189 => 63,  185 => 61,  183 => 60,  178 => 57,  174 => 55,  171 => 54,  165 => 52,  159 => 50,  157 => 49,  154 => 48,  148 => 46,  142 => 44,  140 => 43,  133 => 42,  131 => 41,  127 => 40,  124 => 39,  122 => 38,  118 => 37,  114 => 35,  103 => 33,  100 => 32,  98 => 31,  94 => 30,  89 => 28,  84 => 26,  77 => 23,  73 => 21,  71 => 20,  66 => 18,  54 => 13,  50 => 12,  46 => 10,  43 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
