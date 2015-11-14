<?php

/* ClassroomBundle:ClassroomAdmin:table-tr.html.twig */
class __TwigTemplate_bcf2fe5ae992ffd96e1b96f6200bb9b3b1cb7bd03ece9a8966a793b7a128c7d9 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 9
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array())) {
            // line 10
            echo "      <span class=\"label label-default\">荐:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 12
        echo "    </td>

    <td>
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 17
        if (($this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array") > 0)) {
            // line 18
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">详情</a>
    </strong>
    ";
        }
        // line 22
        echo "    </td>

    <td>
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    <span style=\"color: #F40; \">
            ";
        // line 30
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 31
            echo "               ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
            ";
        } else {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
            echo "元
            ";
        }
        // line 35
        echo "     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      ";
        // line 40
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 41
            echo "        原价 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coinPriceAll"]) ? $context["coinPriceAll"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
      ";
        } else {
            // line 43
            echo "        原价 ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priceAll"]) ? $context["priceAll"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "html", null, true);
            echo "元
      ";
        }
        // line 45
        echo "    </span>


    </td>

    <td>
    ";
        // line 51
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 52
            echo "    <span style=\"color: #090;\">已发布</span>
    ";
        } elseif (($this->getAttribute(        // line 53
(isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 54
            echo "    
    <span style=\"color: #900;\">已关闭</span>
    ";
        } else {
            // line 57
            echo "    未发布
    ";
        }
        // line 59
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      编辑
      <span class=\"caret\"></span>
    </button>

 <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-edit\"></span> 管理班级</a></li>
        
        ";
        // line 73
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array())) {
            // line 74
            echo "          <li><a class=\"cancel-recommend-classroom\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_cancel_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "classroomList")), "html", null, true);
            echo "\" title=\"取消班级推荐\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
        ";
        } else {
            // line 76
            echo "          <li><a class=\"recommend-classroom\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_set_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "classroomList")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐班级</a></li>
        ";
        }
        // line 78
        echo "          
       ";
        // line 79
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 80
            echo "       <li><a href=\"javascript:\" class=\"close-classroom\" title=\"关闭班级(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_close", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭班级</a></li>

       <li><a href=\"javascript:\" title=\"发送发布班级(";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")通知短信\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sms_prepare", array("targetType" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><span class=\"glyphicon glyphicon-envelope\"></span> 发送发布通知短信</a></li>

       ";
        } else {
            // line 85
            echo "       <li><a href=\"javascript:\" class=\"open-classroom\" title=\"发布班级(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_open", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>发布班级</a></li>

       ";
        }
        // line 88
        echo "
       ";
        // line 89
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "draft")) {
            // line 90
            echo "      <li><a href=\"javascript:\" class=\"delete-classroom\" title=\"删除班级(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_delete", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span> 删除班级</a></li>
      ";
        }
        // line 92
        echo "  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 92,  215 => 90,  213 => 89,  210 => 88,  201 => 85,  193 => 82,  185 => 80,  183 => 79,  180 => 78,  174 => 76,  168 => 74,  166 => 73,  161 => 71,  147 => 59,  143 => 57,  138 => 54,  136 => 53,  133 => 52,  131 => 51,  123 => 45,  117 => 43,  109 => 41,  107 => 40,  100 => 35,  94 => 33,  86 => 31,  84 => 30,  76 => 25,  71 => 22,  65 => 19,  62 => 18,  60 => 17,  55 => 15,  50 => 12,  42 => 10,  40 => 9,  36 => 8,  28 => 5,  21 => 2,  19 => 1,);
    }
}
