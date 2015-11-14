<?php

/* TopxiaAdminBundle:OrderRefund:refunds.html.twig */
class __TwigTemplate_f7ad70adf12263f8a4035037c989f50fbf63df040eabec81d38d4728c8e3a21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:OrderRefund:refunds.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "order/refunds";
        // line 4
        $context["menu"] = (("admin_" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "_refunds");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 10
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("refundStatus"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "status"), "method"), "退款状态");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"nickname\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"退款人用户名\">
    </div>

";
        // line 21
        echo "
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\" 
      ";
        // line 24
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "course")) {
            // line 25
            echo "      placeholder=\"课程名\"
      ";
        } elseif ((        // line 26
(isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            // line 27
            echo "      placeholder=\"班级名\"
      ";
        }
        // line 29
        echo "      >
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"orderSn\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orderSn"), "method"), "html", null, true);
        echo "\" placeholder=\"订单号\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>

  <table class=\"table table-striped table-hover\" id=\"refunds-table\">
    <thead>
      <tr>
        <th width=\"50%\">退款订单</th>
        <th>订单成交金额</th>
        <th>退款人</th>
        <th>退款状态</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 51
        if ((isset($context["refunds"]) ? $context["refunds"] : null)) {
            // line 52
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refunds"]) ? $context["refunds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["refund"]) {
                // line 53
                echo "          ";
                $context["order"] = $this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), $this->getAttribute($context["refund"], "orderId", array()), array(), "array");
                // line 54
                echo "          ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["refund"], "userId", array()), array(), "array");
                // line 55
                echo "          <tr>
            <td>
              ";
                // line 57
                if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array()) == "course")) {
                    // line 58
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
                    echo "</a>
              ";
                } elseif (($this->getAttribute(                // line 59
(isset($context["order"]) ? $context["order"] : null), "targetType", array()) == "classroom")) {
                    // line 60
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 62
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
                    echo "
              ";
                }
                // line 64
                echo "              <div class=\"text-muted text-sm\">订单号：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array()), "html", null, true);
                echo " | 成交时间：";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</div>
              <div class=\"text-muted text-sm\">退款理由：";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["refund"], "reasonNote", array()), "html", null, true);
                echo " | 退款时间：";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["refund"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</div>
            </td>
            <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
                echo "元</td>
            <td>
              ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
                echo "
            </td>
            <td>
              ";
                // line 72
                echo $this->env->getExtension('topxia_web_twig')->getDictText("refundStatus:html", $this->getAttribute($context["refund"], "status", array()));
                echo "
              ";
                // line 73
                if (($this->getAttribute($context["refund"], "status", array()) == "success")) {
                    // line 74
                    echo "                <div class=\"text-sm text-muted\">实退";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["refund"], "actualAmount", array()), "html", null, true);
                    echo "元</div>
              ";
                }
                // line 76
                echo "            </td>
            <td>
              ";
                // line 78
                if (($this->getAttribute($context["refund"], "status", array()) == "created")) {
                    // line 79
                    echo "                <button class=\"btn btn-sm btn-primary confirm-refund\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_audit_refund", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
                    echo "\">审核</button>
                <button class=\"btn btn-sm btn-default cancel-refund\" type=\"button\" data-url=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_cancel_refund", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
                    echo "\">取消</button>
              ";
                }
                // line 82
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refund'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "      ";
        } else {
            // line 86
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无退款记录</div></td></tr>
      ";
        }
        // line 88
        echo "    </tbody>
  </table>

  <div class=\"paginator\">
    ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OrderRefund:refunds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 92,  211 => 88,  207 => 86,  204 => 85,  196 => 82,  191 => 80,  186 => 79,  184 => 78,  180 => 76,  174 => 74,  172 => 73,  168 => 72,  162 => 69,  157 => 67,  150 => 65,  143 => 64,  137 => 62,  129 => 60,  127 => 59,  120 => 58,  118 => 57,  114 => 55,  111 => 54,  108 => 53,  103 => 52,  101 => 51,  80 => 33,  74 => 29,  70 => 27,  68 => 26,  65 => 25,  63 => 24,  59 => 23,  55 => 21,  49 => 15,  41 => 10,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
