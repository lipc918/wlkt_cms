<?php

/* TopxiaAdminBundle:Teacher:tr.html.twig */
class __TwigTemplate_a93090e01a9ada6b62d9285c437cd394b8d647da5cb8e5a328f72557fb37bcc6 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
    ";
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 6
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 8
        echo "  </td>
  <td>
    ";
        // line 10
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoted", array())) {
            // line 11
            echo "      <span class=\"text-success\">是</span>
      <br>
      <span class=\"text-muted text-sm\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promotedTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 15
            echo "      <span class=\"text-muted\">否</span>
    ";
        }
        // line 17
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 19
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
        } else {
            echo "--";
        }
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "</a>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
        // line 30
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoted", array())) {
            // line 31
            echo "        <li><a class=\"promote-user\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">推荐教师</a></li>
        ";
        }
        // line 33
        echo "        
        ";
        // line 34
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoted", array())) {
            // line 35
            echo "          <li><a class=\"promote-user\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_teacher_promote_cancel", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">取消推荐教师</a></li>
        ";
        }
        // line 37
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  99 => 35,  97 => 34,  94 => 33,  88 => 31,  86 => 30,  78 => 25,  69 => 21,  60 => 19,  56 => 17,  52 => 15,  47 => 13,  43 => 11,  41 => 10,  37 => 8,  33 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
