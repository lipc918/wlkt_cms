<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_c4f80f1494c3c38936f84f403a15c16e3fe5ddbc7ce17778a5da77ee245177db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["siteNav"] = "/";
        // line 7
        $context["bodyClass"] = "homepage";
        // line 8
        $context["script_controller"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 10
    public function block_full_content($context, array $blocks = array())
    {
        // line 11
        echo "  
  <!-- 轮播 -->
  ";
        // line 13
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:home_top_banner");
        echo "

  <!-- 课程列表 -->
  <section class=\"course-list-section\" id=\"course-list\">
    ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Default:course-grid-with-condition.html.twig", "TopxiaWebBundle:Default:index.html.twig", 17)->display($context);
        // line 18
        echo "  </section>
  ";
        // line 19
        $context["RecentLiveCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveCourses", array("count" => 4));
        // line 20
        echo "  ";
        if ((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : null)) {
            // line 21
            echo "  <section class=\"live-course-section\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>近期直播</span><div class=\"line\"></div></h5>
        <!-- <div class=\"subtitle\">实时跟踪直播课程，避免课程遗漏。</div> -->
      </div>
      <div class=\"course-list\">
        <div class=\"row\">
          ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : null));
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
                // line 30
                echo "            <div class=\"col-lg-3 col-md-4 col-sm-6\">
              ";
                // line 31
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:index.html.twig", 31)->display(array_merge($context, array("course" => $context["course"])));
                // line 32
                echo "
              ";
                // line 33
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 34
                echo "              ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                    // line 35
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    正在直播
                  </div>
                </div>
              ";
                } else {
                    // line 44
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                }
                // line 53
                echo "
            </div>
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
            // line 56
            echo "
          ";
            // line 57
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, (isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : null)));
            // line 58
            echo "          ";
            if (((isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : null) > 0)) {
                // line 59
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 60
                    echo "              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  敬请期待
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div> 
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "          ";
            }
            // line 74
            echo "        </div>
      </div>
      <div class=\"text-center mvl\">
        <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("live_course_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          更多直播1 <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
  ";
        }
        // line 84
        echo "
 


  <!-- 推荐班级 -->
  ";
        // line 89
        $context["RecommendClassrooms"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendClassrooms", array("count" => 4));
        // line 90
        echo "  ";
        if ((isset($context["RecommendClassrooms"]) ? $context["RecommendClassrooms"] : null)) {
            // line 91
            echo "    <section class=\"class-section\">
      <div class=\"container\">
        <div class=\"text-line\">
          <h5>
            <span>推荐";
            // line 95
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</span>
            <div class=\"line\"></div>
          </h5>
          <!-- <div class=\"subtitle\">班级化学习体系，给你更多的课程相关服务。</div> -->
        </div>
        <div class=\"recommend-class-list row\">
          ";
            // line 101
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecommendClassrooms"]) ? $context["RecommendClassrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 102
                echo "            <div class=\"col-md-3 col-sm-6\">
               ";
                // line 103
                $this->loadTemplate("ClassroomBundle:Classroom:class-grid.html.twig", "TopxiaWebBundle:Default:index.html.twig", 103)->display($context);
                echo " 
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "        </div>
        <div class=\"text-center mvl\">
          <a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\">
            更多";
            // line 109
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
          </a>
        </div>
      </div>
    </section>
  ";
        }
        // line 115
        echo "
  <!-- 小组动态 -->
  ";
        // line 117
        $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 6));
        // line 118
        echo "  ";
        if ((isset($context["groups"]) ? $context["groups"] : null)) {
            // line 119
            echo "    <section class=\"group-dynamic\">
      <div class=\"container\">
        <div class=\"text-line gray\">
          <h5><span>小组动态</span><div class=\"line\"></div></h5>
          <!-- <div class=\"subtitle\">参与小组，结交更多同学，关注课程动态。</div> -->
        </div>
        <div class=\"group-dynamic-body row\">
          <div class=\"col-md-6\">
            <div class=\"panel panel-default index-group\">
              <div class=\"panel-heading\">
                <a href=\"";
            // line 129
            echo $this->env->getExtension('routing')->getPath("group");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
                <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>热门小组</h3>
              </div>
              <div class=\"panel-body row\">
                ";
            // line 133
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 134
                echo "                  <div class=\"media media-group col-md-6 col-sm-4\">
                    <div class=\"media-left\">
                      <a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 137
                if ($this->getAttribute($context["group"], "logo", array())) {
                    // line 138
                    echo "                          <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 140
                    echo "                          <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                        ";
                }
                // line 142
                echo "                      </a>
                    </div>
                    <div class=\"media-body\">
                      <div class=\"title\">
                        <a class=\"link-light\" href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                          ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                echo "
                        </a>
                      </div>
                      <div class=\"metas\">
                        <span><i class=\"es-icon es-icon-people\"></i>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                echo "</span>
                        <span><i class=\"es-icon es-icon-textsms\"></i>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                echo "</span>
                      </div>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div class=\"panel panel-default index-dynamic\">
              <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                  <i class=\"es-icon es-icon-recentactors pull-left\"></i>学员动态
                </h3>
              </div>
              <div class=\"panel-body\">
                ";
            // line 168
            $context["statuses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("mode" => "simple", "count" => 4, "private" => 0));
            // line 169
            echo "
                ";
            // line 170
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 171
                echo "                  <div class=\"media media-dynamic\">
                    <div class=\"media-left\">
                      ";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute($context["status"], "user", array()), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
                    </div>
                    <div class=\"media-body\">
                      <div class=\"title\">
                        ";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute($context["status"], "user", array())), "method"), "html", null, true);
                echo "
                      </div>
                      <div class=\"content\">
                        ";
                // line 180
                echo $this->getAttribute($context["status"], "message", array());
                echo "
                      </div>
                      <span class=\"date\">";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["status"], "createdTime", array())), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 193
        echo "
  <!-- 推荐教师 -->
  ";
        // line 195
        $context["teachers"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendTeachers", array("count" => 4));
        // line 196
        echo "  ";
        if ((isset($context["teachers"]) ? $context["teachers"] : null)) {
            // line 197
            echo "  <section class=\"recommend-teacher\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5><span>推荐教师</span><div class=\"line\"></div></h5>
        <!-- <div class=\"subtitle\">名师汇集，保证教学质量与学习效果。</div> -->
      </div>
      <div class=\"row\">
        ";
            // line 204
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 205
                echo "        ";
                $context["profile"] = $this->getAttribute($context["teacher"], "profile", array());
                // line 206
                echo "        ";
                $context["isFollowed"] = $this->getAttribute($context["teacher"], "isFollowed", array());
                // line 207
                echo "          <div class=\"col-md-3 col-sm-6\">
            ";
                // line 208
                $this->loadTemplate("TopxiaWebBundle:Teacher:teacher-item.html.twig", "TopxiaWebBundle:Default:index.html.twig", 208)->display($context);
                // line 209
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "      </div>
      <div class=\"text-center mvl\">
        <a href=\"";
            // line 213
            echo $this->env->getExtension('routing')->getPath("teacher");
            echo "\" class=\"btn btn-default btn-lg\">
          更多教师 <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
  ";
        }
        // line 220
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 220,  502 => 213,  498 => 211,  483 => 209,  481 => 208,  478 => 207,  475 => 206,  472 => 205,  455 => 204,  446 => 197,  443 => 196,  441 => 195,  437 => 193,  428 => 186,  418 => 182,  413 => 180,  407 => 177,  400 => 173,  396 => 171,  392 => 170,  389 => 169,  387 => 168,  374 => 157,  363 => 152,  359 => 151,  352 => 147,  348 => 146,  342 => 142,  334 => 140,  326 => 138,  324 => 137,  320 => 136,  316 => 134,  312 => 133,  305 => 129,  293 => 119,  290 => 118,  288 => 117,  284 => 115,  275 => 109,  271 => 108,  267 => 106,  250 => 103,  247 => 102,  230 => 101,  221 => 95,  215 => 91,  212 => 90,  210 => 89,  203 => 84,  193 => 77,  188 => 74,  185 => 73,  167 => 60,  162 => 59,  159 => 58,  157 => 57,  154 => 56,  138 => 53,  131 => 49,  124 => 44,  113 => 35,  110 => 34,  108 => 33,  105 => 32,  103 => 31,  100 => 30,  83 => 29,  73 => 21,  70 => 20,  68 => 19,  65 => 18,  63 => 17,  56 => 13,  52 => 11,  49 => 10,  43 => 4,  37 => 3,  33 => 1,  31 => 8,  29 => 7,  27 => 6,  11 => 1,);
    }
}
