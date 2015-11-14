<?php

/* TopxiaAdminBundle:System:payment.html.twig */
class __TwigTemplate_d8e76fd6ac014a520fedb67daa27d61f0d94025cb8519698da322dff1669cae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:payment.html.twig", 1);
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
        $context["script_controller"] = "system/payment";
        // line 5
        $context["menu"] = "admin_payment";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"payment-form\" novalidate >
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >支付功能</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 18
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "enabled", array()));
        echo "
    </div>
  </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"disabled_message\">支付关闭时的提示信息</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"disabled_message\" name=\"disabled_message\" class=\"form-control\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "disabled_message", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>


  <fieldset>
    <legend>支付宝</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 39
        echo $this->env->getExtension('topxia_html_twig')->radios("alipay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_enabled", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">接口类型</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 48
        echo $this->env->getExtension('topxia_html_twig')->radios("alipay_type", array("direct" => "立即到账接口", "escow" => "担保交易接口", "dualfun" => "标准双接口"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_type", array()));
        echo "
        <div class=\"help-block\">
          支付宝规定，“立即到账接口”只能以企业名义申请，个人用户只能申请“担保交易接口”。
          <a href=\"http://www.edusoho.com/intro/96#payment\" target=\"_blank\">如何申请？</a>
          <br>
          \"立即到账接口\"如需在移动客户端使用，还需开通<a href=\"https://b.alipay.com/order/productDetail.htm?productId=2014110308142133\" target=\"blank\">手机网站支付</a>
          <br>
          “标准双接口”在2014-12-29日已被支付宝下线，此时间前申请成功的用户还可以在签约期内使用，建议签约担保交易以免过期后影响正常支付。
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_key\" name=\"alipay_key\" class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_key", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_secret\" name=\"alipay_secret\" class=\"form-control\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_secret", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"alipay_key\">支付宝账户</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"alipay_account\" name=\"alipay_account\" class=\"form-control\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "alipay_account", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">如需开启移动客户端支付，需填写支付宝账户。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>启用支付宝交易关闭接口</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 93
        echo $this->env->getExtension('topxia_html_twig')->radios("close_trade_enabled", array(1 => "是", 0 => "否"), (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "close_trade_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "close_trade_enabled", array()), 0)) : (0)));
        echo "
        <div class=\"help-block\">该配置用于取消订单后，同步关闭支付宝的交易订单。如需使用该配置，需向支付宝客服申请开通“交易关闭接口”，审核通过后，方可使用。</div>
      </div>
    </div>

  </fieldset>

    <fieldset>
    <legend>微信支付</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>接口状态</label>
      </div>
      <div class=\"controls col-md-3 radios\">
        ";
        // line 107
        echo $this->env->getExtension('topxia_html_twig')->radios("wxpay_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_enabled", array()));
        echo "
      </div>
      <div class=\"controls col-md-4 radios\">
        <a href=\"http://kf.qq.com/faq/120911VrYVrA140228V7JbEj.html\">简单申请介绍</a>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_key\">PID</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_key\" name=\"wxpay_key\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_key", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">PID即为公众号APPID。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_key\">商户平台Key</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_secret\" name=\"wxpay_secret\" class=\"form-control\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_secret", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"wxpay_key\">商户号</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"wxpay_account\" name=\"wxpay_account\" class=\"form-control\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "wxpay_account", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">商户号即为微信支付商户号。</div>
      </div>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>


  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 153,  204 => 138,  192 => 129,  179 => 119,  164 => 107,  147 => 93,  134 => 83,  122 => 74,  110 => 65,  90 => 48,  78 => 39,  63 => 27,  51 => 18,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
