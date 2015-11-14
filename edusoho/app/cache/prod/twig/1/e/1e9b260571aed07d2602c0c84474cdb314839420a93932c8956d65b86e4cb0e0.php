<?php

/* TopxiaWebBundle:Course:Part/normal-header.html.twig */
class __TwigTemplate_1e9b260571aed07d2602c0c84474cdb314839420a93932c8956d65b86e4cb0e0 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 1);
        // line 2
        $context["header_macro"] = $this;
        // line 3
        echo "
";
        // line 4
        $this->env->getExtension('topxia_web_twig')->loadScript("course/common");
        // line 5
        echo "
";
        // line 6
        if (((isset($context["member"]) ? $context["member"] : null) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 7
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 7)->display($context);
        } elseif ((($this->getAttribute(        // line 8
(isset($context["course"]) ? $context["course"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()), false)) : (false))) {
            // line 9
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 9)->display(array_merge($context, array("source" => "classroom")));
        } else {
            // line 11
            echo "  
  ";
            // line 12
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 12)->display($context);
        }
        // line 14
        echo "
";
        // line 36
        echo "
";
        // line 130
        echo "
";
        // line 147
        echo "
";
        // line 163
        echo "
";
    }

    // line 15
    public function getpicture($__course__ = null, $__previewLesson__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "previewLesson" => $__previewLesson__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  <div class=\"course-img\">
    ";
            // line 17
            if ((isset($context["previewLesson"]) ? $context["previewLesson"] : null)) {
                // line 18
                echo "      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["previewLesson"]) ? $context["previewLesson"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"course-img-cover\">
        <i class=\"es-icon es-icon-playcircleoutline\"></i>
      </a>
    ";
            }
            // line 22
            echo "
    <img class=\"img-responsive\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "\">
    <div class=\"tags\">
      ";
            // line 25
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 26
                echo "        <span class=\"tag-serialing\"></span>
      ";
            } elseif (($this->getAttribute(            // line 27
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 28
                echo "        <span class=\"tag-finished\"></span>
      ";
            }
            // line 30
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
                // line 31
                echo "        <span class=\"tag-live\"></span>
      ";
            }
            // line 33
            echo "    </div>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getinfo($__course__ = null, $__member__ = null, $__userVipStatus__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "member" => $__member__,
            "userVipStatus" => $__userVipStatus__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 38);
            // line 39
            echo "  <div class=\"course-info\">
    <h2 class=\"title\">
      ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "
      <span class=\"es-qrcode top\" data-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("common_learn_qrcode", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "course-qrcode")), "html", null, true);
            echo "\">
        <i class=\"es-icon es-icon-qrcode\"></i>
        <span class=\"qrcode-popover\">
          <img src=\"\" alt=\"\">
          扫二维码继续学习
        </span>
      </span>
    </h2>
    <div class=\"subtitle\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "html", null, true);
            echo "</div>
    <div class=\"metas\">
      <div class=\"score\">
        ";
            // line 53
            echo $context["web_macro"]->getstar($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "rating", array()));
            echo "
        <span>(";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo "人)</span>
      </div>

      ";
            // line 57
            if (((isset($context["member"]) ? $context["member"] : null) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > 0))) {
                // line 58
                echo "        ";
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > twig_date_format_filter($this->env, "now", "U"))) {
                    // line 59
                    echo "          <p class=\"expiry-date hidden-sm\">
            <label for=\"\">有效期</label><span>还有";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array())), "html", null, true);
                    echo "</span>
          </p>
        ";
                } else {
                    // line 63
                    echo "         <div class=\"alert alert-danger alert-dismissable\">
            您购买的课程已到期，无法学习课时、提问等。如有疑问请联系老师，或点击
            <a class=\" \"  href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">
            ";
                    // line 66
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        // line 67
                        echo "            重新购买
            ";
                    } else {
                        // line 69
                        echo "            重新加入
            ";
                    }
                    // line 71
                    echo "            </a>。
          </div>
        ";
                }
                // line 74
                echo "      ";
            }
            // line 75
            echo "

      ";
            // line 77
            if ( !(isset($context["member"]) ? $context["member"] : null)) {
                // line 78
                echo "        ";
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array())) {
                    // line 79
                    echo "          <p class=\"expiry-date hidden-sm\">
            <label for=\"\">有效期</label><span>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "html", null, true);
                    echo "天</span>
          </p>
        ";
                }
                // line 83
                echo "        <p class=\"discount-price\">
          ";
                // line 84
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array()) == 0)) {
                    // line 85
                    echo "            <label>价格</label>
          ";
                } else {
                    // line 87
                    echo "            <label>折后价</label>
          ";
                }
                // line 89
                echo "          ";
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 89)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 90
                echo "        </p>
        ";
                // line 91
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array()) > 0)) {
                    // line 92
                    echo "          <p class=\"old-price hidden-sm\">
            <label>原价</label>
            ";
                    // line 94
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 94)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
                    // line 95
                    echo "          </p>
          ";
                    // line 96
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), null)) : (null))) {
                        // line 97
                        echo "            <p class=\"activity\">
              <label>活动</label>
              <span class=\"name\">";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "name", array()), "html", null, true);
                        echo "</span>
              <span><i class=\"es-icon es-icon-accesstime\"></i> <span id=\"discount-endtime-countdown\" class=\"text-muted\"
        data-remaintime=\"";
                        // line 101
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "endTime", array()) - twig_date_format_filter($this->env, "now", "U")), "html", null, true);
                        echo "\"
          ></span></span>
            </p>
          ";
                    }
                    // line 105
                    echo "        ";
                }
                // line 106
                echo "      ";
            }
            // line 107
            echo "    </div>

    ";
            // line 109
            if ((((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && (isset($context["member"]) ? $context["member"] : null)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "levelId", array()) > 0)) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
                // line 110
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 111
                if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "not_member")) {
                    // line 112
                    echo "          您已经不是会员，不能学习此课程！
          ";
                    // line 113
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        // line 114
                        echo "            请重新<a class=\"btn-link\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip");
                        echo "\" target=\"_blank\">开通会员</a>
          ";
                    } else {
                        // line 116
                        echo "            <a class=\"btn-link js-exit-course\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\" data-go=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\">返回课程首页</a>
          ";
                    }
                    // line 117
                    echo "！
        ";
                } elseif ((                // line 118
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "member_expired")) {
                    // line 119
                    echo "          您的会员已过期，不能学习此课程，请先<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_renew");
                    echo "\" target=\"_blank\">续费</a>。
        ";
                } elseif ((                // line 120
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "level_low")) {
                    // line 121
                    echo "          会员等级不够，不能学习此课程。请先<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                    echo "\" target=\"_blank\">升级会员</a>。
        ";
                } else {
                    // line 123
                    echo "          此课程已不支持会员免费学，<a class=\"btn-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">返回课程首页</a>
        ";
                }
                // line 125
                echo "      </div>
    ";
            }
            // line 127
            echo "
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function getstudent_num($__course__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "  <div class=\"student-num hidden-xs\">
    ";
            // line 133
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 134
                echo "      <i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
                echo "人
      ";
                // line 135
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0)) {
                    // line 136
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))) {
                        // line 137
                        echo "          <small>(名额已满)</small>
        ";
                    } else {
                        // line 139
                        echo "          <small class=\"hidden-sm\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), "html", null, true);
                        echo "名额)</small>
        ";
                    }
                    // line 141
                    echo "      ";
                }
                // line 142
                echo "    ";
            } else {
                // line 143
                echo "      <i class=\"es-icon es-icon-accesstime\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessonNum", array()), "html", null, true);
                echo "课时
    ";
            }
            // line 145
            echo "  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function getfavorite_btn($__course__ = null, $__hasFavorited__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "hasFavorited" => $__hasFavorited__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 149
            echo "  <li id=\"unfavorite-btn\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"取消收藏\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\" class=\"color-primary\">
      <p><i class=\"es-icon es-icon-bookmark\"></i></p>
      <p>已收藏</p>
    </a>
  </li>

  <li id=\"favorite-btn\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"收藏课程\" data-url=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\">
      <p><i class=\"es-icon es-icon-bookmarkoutline\"></i></p>
      <p>收藏</p>
    </a>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 164
    public function getshare_btn($__course__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 165
            echo "  <li>
    <span class=\"es-share top\">
      <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">
        <p><i class=\"es-icon es-icon-share\"></i></p>
        <p>分享</p>
      </a>
      ";
            // line 171
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 171)->display(array_merge($context, array("type" => "course")));
            // line 172
            echo "    </span>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 172,  500 => 171,  492 => 165,  480 => 164,  458 => 156,  443 => 149,  430 => 148,  418 => 145,  412 => 143,  409 => 142,  406 => 141,  400 => 139,  396 => 137,  393 => 136,  391 => 135,  386 => 134,  384 => 133,  381 => 132,  369 => 131,  356 => 127,  352 => 125,  344 => 123,  338 => 121,  336 => 120,  331 => 119,  329 => 118,  326 => 117,  318 => 116,  312 => 114,  310 => 113,  307 => 112,  305 => 111,  302 => 110,  300 => 109,  296 => 107,  293 => 106,  290 => 105,  283 => 101,  278 => 99,  274 => 97,  272 => 96,  269 => 95,  267 => 94,  263 => 92,  261 => 91,  258 => 90,  255 => 89,  251 => 87,  247 => 85,  245 => 84,  242 => 83,  236 => 80,  233 => 79,  230 => 78,  228 => 77,  224 => 75,  221 => 74,  216 => 71,  212 => 69,  208 => 67,  206 => 66,  202 => 65,  198 => 63,  192 => 60,  189 => 59,  186 => 58,  184 => 57,  178 => 54,  174 => 53,  168 => 50,  157 => 42,  153 => 41,  149 => 39,  146 => 38,  132 => 37,  119 => 33,  115 => 31,  112 => 30,  108 => 28,  106 => 27,  103 => 26,  101 => 25,  94 => 23,  91 => 22,  83 => 18,  81 => 17,  78 => 16,  65 => 15,  60 => 163,  57 => 147,  54 => 130,  51 => 36,  48 => 14,  45 => 12,  42 => 11,  38 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
