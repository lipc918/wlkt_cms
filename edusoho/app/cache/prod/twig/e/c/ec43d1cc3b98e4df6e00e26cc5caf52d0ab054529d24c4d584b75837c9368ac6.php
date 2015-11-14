<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_ec43d1cc3b98e4df6e00e26cc5caf52d0ab054529d24c4d584b75837c9368ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 17
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 18
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 22
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 23
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 24
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "  
  <!--[if lt IE 9]>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 36
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 37
        echo "
</head>
<body ";
        // line 39
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 87)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 88
        echo "
</body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By EduSoho";
        }
    }

    // line 17
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 18
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 28)->display($context);
        // line 29
        echo "  ";
    }

    // line 36
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "
  <div class=\"es-wrap\">

    ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "    
    ";
        // line 51
        $this->displayBlock('full_content', $context, $blocks);
        // line 60
        echo "    
    ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('bottom', $context, $blocks);
        // line 66
        echo "  </div>

  ";
        // line 68
        $this->displayBlock('esBar', $context, $blocks);
        // line 73
        echo "
  ";
        // line 74
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 81
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  
";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::weixin-alert.html.twig", "TopxiaWebBundle::layout.html.twig", 46)->display($context);
        // line 47
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 47)->display($context);
        // line 48
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 48)->display($context);
        // line 49
        echo "    ";
    }

    // line 51
    public function block_full_content($context, array $blocks = array())
    {
        // line 52
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 53
        echo "      
      <div id=\"content-container\" class=\"container\">
        ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "      </div>
      
      ";
        // line 58
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 59
        echo "    ";
    }

    // line 52
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 62)->display($context);
        // line 63
        echo "    ";
    }

    // line 65
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 68
    public function block_esBar($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            // line 70
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 70)->display($context);
            // line 71
            echo "    ";
        }
        // line 72
        echo "  ";
    }

    // line 74
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 75
        echo "    ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 76
            echo "      ";
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 77
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 77)->display($context);
                // line 78
                echo "      ";
            }
            // line 79
            echo "    ";
        }
        // line 80
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 80,  319 => 79,  316 => 78,  313 => 77,  310 => 76,  307 => 75,  304 => 74,  300 => 72,  297 => 71,  294 => 70,  291 => 69,  288 => 68,  283 => 65,  279 => 63,  276 => 62,  273 => 61,  268 => 58,  263 => 55,  258 => 52,  254 => 59,  252 => 58,  248 => 56,  246 => 55,  242 => 53,  239 => 52,  236 => 51,  232 => 49,  229 => 48,  226 => 47,  223 => 46,  220 => 45,  212 => 82,  209 => 81,  207 => 74,  204 => 73,  202 => 68,  198 => 66,  196 => 65,  193 => 64,  191 => 61,  188 => 60,  186 => 51,  183 => 50,  181 => 45,  176 => 42,  173 => 41,  168 => 36,  164 => 29,  161 => 28,  158 => 27,  152 => 18,  146 => 17,  135 => 14,  132 => 13,  126 => 88,  124 => 87,  121 => 86,  119 => 41,  110 => 39,  106 => 37,  104 => 36,  98 => 33,  94 => 32,  90 => 30,  88 => 27,  85 => 26,  79 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  48 => 13,  36 => 2,  34 => 1,);
    }
}
