<?php

/* TopxiaWebBundle:Login:ajax.html.twig */
class __TwigTemplate_5768fcdc5eeaaeee7f3c7ff59fa6b578824e1a9b7b379c457d0ae4ce9070c955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Login:ajax.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"login-ajax-form\" class=\"form-vertical form-vertical-small\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

  <div class=\"alert alert-danger\" style=\"display:none;\"></div>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label hidden\" for=\"ajax-username\">邮箱/手机/用户名</label>
    <div class=\"controls\">
      <input class=\"form-control\" type=\"text\" id=\"ajax-username\" name=\"_username\" placeholder=\"邮箱/手机/用户名\" />
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label hidden\" for=\"ajax-password\">密码</label>
    <div class=\"controls\">
      <input class=\"form-control\" type=\"password\" id=\"ajax-password\" name=\"_password\" placeholder=\"密码\" />
    </div>
  </div>

  <div class=\"pemember-password-wrap\">
    <button type=\"submit\" class=\"btn btn-primary\">登录</button>
    <span class=\"pemember-password text-muted\">
      <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码
    </span>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
<script>
\tapp.load('auth/login-ajax');
</script>

";
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "<div class=\"tal fsn\">
  <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
  <span class=\"text-muted mhs\">|</span>
  <span class=\"text-muted\">还没有注册帐号？</span>
  <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">立即注册</a>
</div>

";
        // line 49
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 50
            echo "  <div class=\"social-logins\">
    ";
            // line 51
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
  </div>
";
        }
        // line 54
        echo "
 
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 54,  106 => 51,  103 => 50,  101 => 49,  95 => 46,  89 => 43,  86 => 42,  83 => 41,  71 => 32,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
