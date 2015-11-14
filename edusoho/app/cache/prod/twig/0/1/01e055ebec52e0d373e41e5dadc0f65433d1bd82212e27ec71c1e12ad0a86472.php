<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_01e055ebec52e0d373e41e5dadc0f65433d1bd82212e27ec71c1e12ad0a86472 extends Twig_Template
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
        echo "
<table class=\"table table-condensed table-bordered table-striped table-hover\">
        <thead>
          <tr>
            <th width=\"35%\"></th>
            <th width=\"20%\">今日</th>
            <th width=\"20%\" >昨日</th>
\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 9
            echo "            <th width=\"40%\">历史</th>
\t\t";
        }
        // line 11
        echo "          </tr>
        </thead>
        <tbody>
\t\t\t<tr>
\t\t\t\t<td>新注册用户数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["yesterdayRegisterNum"]) ? $context["yesterdayRegisterNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "detail", "analysisDateType" => "register")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户登录数<small>（不含重复登录）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["todayLoginNum"]) ? $context["todayLoginNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["yesterdayLoginNum"]) ? $context["yesterdayLoginNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "trend", "analysisDateType" => "login")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "detail", "analysisDateType" => "login")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 29
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["todayCourseNum"]) ? $context["todayCourseNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseNum"]) ? $context["yesterdayCourseNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 37
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "trend", "analysisDateType" => "course")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "detail", "analysisDateType" => "course")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 38
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课时数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["todayLessonNum"]) ? $context["todayLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["yesterdayLessonNum"]) ? $context["yesterdayLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 46
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "trend", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "detail", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 47
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>加入学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["todayJoinLessonNum"]) ? $context["todayJoinLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["yesterdayJoinLessonNum"]) ? $context["yesterdayJoinLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 55
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "trend", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "detail", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 56
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>购买课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["todayBuyLessonNum"]) ? $context["todayBuyLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["yesterdayBuyLessonNum"]) ? $context["yesterdayBuyLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 64
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "trend", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "detail", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 65
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>购买班级数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["todayBuyClassroomNum"]) ? $context["todayBuyClassroomNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["yesterdayBuyClassroomNum"]) ? $context["yesterdayBuyClassroomNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 72
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 73
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_classroom_paid", array("tab" => "trend", "analysisDateType" => "paidClassroom")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_classroom_paid", array("tab" => "detail", "analysisDateType" => "paidClassroom")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 74
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>完成课时学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 81
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 82
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "trend", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "detail", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 83
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>视频观看数<small>（含重复打开）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["todayAllVideoViewedNum"]) ? $context["todayAllVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["yesterdayAllVideoViewedNum"]) ? $context["yesterdayAllVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 91
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "trend", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "detail", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 92
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 云视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["todayCloudVideoViewedNum"]) ? $context["todayCloudVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["yesterdayCloudVideoViewedNum"]) ? $context["yesterdayCloudVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t";
        // line 99
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 100
            echo "\t\t\t\t<td>
\t\t\t\t";
            // line 101
            if (((($this->getAttribute((isset($context["keyCheckResult"]) ? $context["keyCheckResult"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["keyCheckResult"]) ? $context["keyCheckResult"] : null), "error", array()), null)) : (null)) == "error")) {
                // line 102
                echo "\t\t\t\t\t\t未开通或未开启云视频!
\t\t\t\t\t";
            } else {
                // line 104
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "trend", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "detail", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">详情</a>
\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t</td>
\t\t";
        }
        // line 107
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 本地视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["todayLocalVideoViewedNum"]) ? $context["todayLocalVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["yesterdayLocalVideoViewedNum"]) ? $context["yesterdayLocalVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t";
        // line 114
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 115
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "trend", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "detail", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 116
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 网络视频观看数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["todayNetVideoViewedNum"]) ? $context["todayNetVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["yesterdayNetVideoViewedNum"]) ? $context["yesterdayNetVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 123
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 124
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "trend", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "detail", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 125
        echo "\t
\t\t\t</tr>
\t\t\t";
        // line 127
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 128
            echo "\t\t\t<tr>
\t\t\t\t<td>营收额</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["todayIncome"]) ? $context["todayIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["yesterdayIncome"]) ? $context["yesterdayIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "trend", "analysisDateType" => "income")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "detail", "analysisDateType" => "income")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ 课程营收额</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["todayCourseIncome"]) ? $context["todayCourseIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["yesterdayCourseIncome"]) ? $context["yesterdayCourseIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "trend", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "detail", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t</tr>
\t\t\t";
        }
        // line 142
        echo "\t\t\t<tr>
\t\t\t\t<td>课程总数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["todayCourseSum"]) ? $context["todayCourseSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseSum"]) ? $context["yesterdayCourseSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 146
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 147
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "trend", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "detail", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 149
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户总数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["todayUserSum"]) ? $context["todayUserSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["yesterdayUserSum"]) ? $context["yesterdayUserSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 155
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 156
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "trend", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "detail", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 158
        echo "\t\t\t</tr>
";
        // line 165
        echo "

        </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 165,  436 => 158,  428 => 156,  426 => 155,  422 => 154,  418 => 153,  412 => 149,  404 => 147,  402 => 146,  398 => 145,  394 => 144,  390 => 142,  382 => 139,  378 => 138,  374 => 137,  364 => 132,  360 => 131,  356 => 130,  352 => 128,  350 => 127,  346 => 125,  338 => 124,  336 => 123,  332 => 122,  328 => 121,  321 => 116,  313 => 115,  311 => 114,  307 => 113,  303 => 112,  296 => 107,  292 => 106,  284 => 104,  280 => 102,  278 => 101,  275 => 100,  273 => 99,  269 => 98,  265 => 97,  258 => 92,  250 => 91,  248 => 90,  244 => 89,  240 => 88,  233 => 83,  225 => 82,  223 => 81,  219 => 80,  215 => 79,  208 => 74,  200 => 73,  198 => 72,  194 => 71,  190 => 70,  183 => 65,  175 => 64,  173 => 63,  169 => 62,  165 => 61,  158 => 56,  150 => 55,  148 => 54,  144 => 53,  140 => 52,  133 => 47,  125 => 46,  123 => 45,  119 => 44,  115 => 43,  108 => 38,  100 => 37,  98 => 36,  94 => 35,  90 => 34,  83 => 29,  75 => 28,  73 => 27,  69 => 26,  65 => 25,  59 => 21,  51 => 19,  49 => 18,  45 => 17,  41 => 16,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
