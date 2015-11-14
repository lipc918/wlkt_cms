<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_cf2da7650df7169290cf6d6f724f9f0a03439df89fc78a6b806e0c60e0c08766 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
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
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $context["role"]);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </span>
  </td>

  <td>
    ";
        // line 18
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) {
            // line 19
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(已绑定)</span>
    ";
        } elseif ($this->getAttribute(        // line 20
(isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 21
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(未绑定)</span>
    ";
        } else {
            // line 23
            echo "       -- 
    ";
        }
        // line 25
        echo "  </td>

  <td>
    ";
        // line 28
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 29
        echo "    ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 30
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 32
            echo "      --
    ";
        }
        // line 34
        echo "    
    <br>
    ";
        // line 36
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "emailVerified", array())) {
            // line 37
            echo "      <label class=\"label label-success\" title=\"该Email地址已验证\">已验证</label>
    ";
        }
        // line 39
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 52
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()) == 0)) {
            // line 53
            echo "       --
      ";
        } else {
            // line 55
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 57
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">编辑用户信息</a></li>

        ";
        // line 73
        if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
            // line 74
            echo "            ";
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                // line 75
                echo "                  <li></li>
             ";
            } else {
                // line 77
                echo "                   <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">设置用户组</a></li>
            ";
            }
            // line 79
            echo "       ";
        } else {
            // line 80
            echo "                   <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">设置用户组</a></li>
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 84
            echo "
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">修改用户头像</a></li>

        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">修改密码</a></li>

        ";
        }
        // line 90
        echo "
        <li><a class=\"send-passwordreset-email\" href=\"javascript:\" data-url=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_passwordreset_email", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">发送密码重置邮件</a></li>

        <li><a class=\"send-emailverify-email\" href=\"javascript:\" data-url=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_emailverify_email", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">发送Email验证邮件</a></li>
        ";
        // line 94
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 95
            echo "          <li><a class=\"unlock-user\" href=\"javascript:\" title=\"解禁用户";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">解禁用户</a></li>
        ";
        } else {
            // line 97
            echo "              ";
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 98
                echo "                    ";
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                    // line 99
                    echo "                          <li></li>
                           ";
                } else {
                    // line 101
                    echo "                            <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\">封禁用户</a></li>
                    ";
                }
                // line 103
                echo "               ";
            } else {
                // line 104
                echo "                   <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">封禁用户</a></li>
              ";
            }
            // line 106
            echo "        ";
        }
        // line 107
        echo "      </ul>
    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 107,  274 => 106,  266 => 104,  263 => 103,  255 => 101,  251 => 99,  248 => 98,  245 => 97,  237 => 95,  235 => 94,  231 => 93,  226 => 91,  223 => 90,  217 => 87,  212 => 85,  209 => 84,  207 => 83,  204 => 82,  198 => 80,  195 => 79,  189 => 77,  185 => 75,  182 => 74,  180 => 73,  175 => 71,  167 => 66,  159 => 61,  153 => 60,  148 => 57,  142 => 55,  138 => 53,  136 => 52,  127 => 46,  121 => 45,  115 => 42,  110 => 39,  106 => 37,  104 => 36,  100 => 34,  96 => 32,  90 => 30,  87 => 29,  85 => 28,  80 => 25,  76 => 23,  70 => 21,  68 => 20,  63 => 19,  61 => 18,  55 => 14,  46 => 12,  42 => 11,  37 => 8,  33 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
