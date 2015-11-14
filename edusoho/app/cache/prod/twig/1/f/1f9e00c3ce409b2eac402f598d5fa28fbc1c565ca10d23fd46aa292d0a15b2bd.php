<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_1f9e00c3ce409b2eac402f598d5fa28fbc1c565ca10d23fd46aa292d0a15b2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
<!DOCTYPE html>
";
        // line 6
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 7
        $context["menu_breadcrumb"] = $this->env->getExtension('topxia_menu_twig')->getMenuBreadcrumb("admin", (isset($context["menu"]) ? $context["menu"] : null));
        // line 8
        $context["menu_current"] = twig_last($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null));
        // line 9
        $context["menu_nav"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array"), null)) : (null));
        // line 10
        $context["menu_sidebar"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array"), null)) : (null));
        // line 11
        $context["menu_main"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array"), null)) : (null));
        // line 12
        $context["menu_hiddens"] = $this->env->getExtension('topxia_web_twig')->getSetting("menu_hiddens", array());
        // line 13
        echo "<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>
    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "    ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 34
        echo "  </title>

  ";
        // line 36
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 37
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 39
        echo "  
  ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo "管理后台</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
           ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", "admin", 1));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 68
            echo "            ";
            if (($this->getAttribute($context["m"], "code", array()) == "admin_app")) {
                // line 69
                echo "               ";
                if ( !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 70
                    echo "                ";
                    $context["parameter"] = array("postStatus" => "all");
                    // line 71
                    echo "                ";
                    $context["m"] = $this->env->getExtension('topxia_web_twig')->arrayMerge($context["m"], array("router_params" => (isset($context["parameter"]) ? $context["parameter"] : null), "router_name" => "admin_app_center"));
                    // line 72
                    echo "               ";
                }
                // line 73
                echo "            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if (($this->getAttribute($context["m"], "code", array()) == "admin_system")) {
                // line 76
                echo "              ";
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 77
                    echo "              <li ";
                    if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
              ";
                    // line 78
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
              </li>
              ";
                }
                // line 81
                echo "            ";
            } else {
                echo "    
              ";
                // line 82
                if ( !(($this->getAttribute($context["m"], "code", array()) == "admin_app") && ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") == 1))) {
                    // line 83
                    echo "                <li ";
                    if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                  ";
                    // line 84
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                </li>
              ";
                }
                // line 87
                echo "            ";
            }
            // line 88
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </ul>

        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> 常用</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 96
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>

          <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                <ul class=\"dropdown-menu main-list\">
                  <li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        // line 195
        echo "    </div>
  </div>

  ";
        // line 198
        $this->displayBlock('footer', $context, $blocks);
        // line 199
        echo "
  ";
        // line 200
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 200)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 201
        echo "  <div id=\"modal\" class=\"modal\" ></div>
</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null)))) {
                // line 27
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 29
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo " -
        ";
            }
            // line 31
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    ";
    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 41
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
        // line 116
        echo "
        <div class=\"col-md-2\">
          ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 137
        echo "        </div>

        <div class=\"col-md-10\">
          <div class=\"page-header clearfix\">
            <h1 class=\"pull-left\">";
        // line 141
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
            <div class=\"pull-right\">

              ";
        // line 144
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 151
        echo "
            </div>
          </div>

          ";
        // line 155
        $context["menu_breadcrumb_length"] = twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null));
        // line 156
        echo "
          ";
        // line 157
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : null) >= 3)) {
            // line 158
            echo "            ";
            $context["tabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 159
            echo "          ";
        }
        // line 160
        echo "
          ";
        // line 161
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : null) >= 4)) {
            // line 162
            echo "            ";
            $context["subTabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 163
            echo "          ";
        }
        // line 164
        echo "
          ";
        // line 165
        $this->displayBlock('content_header', $context, $blocks);
        // line 166
        echo "          
          ";
        // line 167
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : null), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "group", array()) == 1))) {
            // line 168
            echo "            <ul class=\"nav nav-tabs mbm\">
              ";
            // line 169
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 170
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 171
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 172
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")));
                    echo "
                  ";
                }
                // line 174
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "            </ul>
          ";
        }
        // line 178
        echo "
          ";
        // line 179
        if ((((array_key_exists("subTabMenus", $context)) ? (_twig_default_filter((isset($context["subTabMenus"]) ? $context["subTabMenus"] : null), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "group", array()) == 1))) {
            // line 180
            echo "            <ul class=\"nav nav-pills mbl small\">
              ";
            // line 181
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subTabMenus"]) ? $context["subTabMenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 182
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 183
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 184
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                  ";
                }
                // line 186
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "            </ul>
          ";
        }
        // line 190
        echo "
          ";
        // line 191
        $this->displayBlock('main', $context, $blocks);
        // line 192
        echo "        </div>

      ";
    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        // line 119
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedMenus"]) {
            // line 120
            echo "
              <div class=\"list-group\">
                ";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedMenus"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 123
                echo "                ";
                $context["array"] = array("0" => "admin_my_cloud", "1" => "admin_setting_cloud_video", "2" => "admin_setting_cloud");
                // line 124
                echo "                 ";
                if ((!twig_in_filter($this->getAttribute($context["m"], "code", array()), (isset($context["array"]) ? $context["array"] : null)) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                    // line 125
                    echo "                            
                  ";
                    // line 126
                    if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                        // line 127
                        echo "                    ";
                        $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_sidebar"]) ? $context["menu_sidebar"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_sidebar"]) ? $context["menu_sidebar"] : null), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                        // line 128
                        echo "                    ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (isset($context["menuClass"]) ? $context["menuClass"] : null));
                        echo "
                  ";
                    }
                    // line 130
                    echo "                      
                  ";
                }
                // line 132
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedMenus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "          ";
    }

    // line 141
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array()), $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "name", array()))) : ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "name", array()))), "html", null, true);
    }

    // line 144
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 145
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "code", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 146
            echo "                  ";
            if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                // line 147
                echo "                    ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                  ";
            }
            // line 149
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "              ";
    }

    // line 165
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 191
    public function block_main($context, array $blocks = array())
    {
    }

    // line 198
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 205
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            echo "  <a 
  ";
            // line 207
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 208
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 210
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 211
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 215
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 217
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 218
                echo "    target=\"blank\"
  ";
            }
            // line 220
            echo "  >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array()), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 220,  649 => 218,  646 => 217,  640 => 215,  632 => 211,  629 => 210,  623 => 208,  621 => 207,  618 => 206,  604 => 205,  599 => 198,  594 => 191,  589 => 165,  585 => 150,  579 => 149,  573 => 147,  570 => 146,  565 => 145,  562 => 144,  556 => 141,  552 => 136,  545 => 134,  538 => 132,  534 => 130,  528 => 128,  525 => 127,  523 => 126,  520 => 125,  517 => 124,  514 => 123,  510 => 122,  506 => 120,  501 => 119,  498 => 118,  492 => 192,  490 => 191,  487 => 190,  483 => 188,  476 => 186,  470 => 184,  468 => 183,  461 => 182,  457 => 181,  454 => 180,  452 => 179,  449 => 178,  445 => 176,  438 => 174,  432 => 172,  430 => 171,  423 => 170,  419 => 169,  416 => 168,  414 => 167,  411 => 166,  409 => 165,  406 => 164,  403 => 163,  400 => 162,  398 => 161,  395 => 160,  392 => 159,  389 => 158,  387 => 157,  384 => 156,  382 => 155,  376 => 151,  374 => 144,  368 => 141,  362 => 137,  360 => 118,  356 => 116,  353 => 115,  348 => 48,  342 => 45,  338 => 44,  334 => 43,  330 => 42,  325 => 41,  322 => 40,  318 => 32,  304 => 31,  298 => 29,  292 => 27,  289 => 26,  271 => 25,  268 => 24,  260 => 201,  258 => 200,  255 => 199,  253 => 198,  248 => 195,  246 => 115,  232 => 104,  227 => 102,  221 => 99,  215 => 96,  209 => 93,  204 => 90,  197 => 88,  194 => 87,  188 => 84,  181 => 83,  179 => 82,  174 => 81,  168 => 78,  161 => 77,  158 => 76,  156 => 75,  153 => 74,  150 => 73,  147 => 72,  144 => 71,  141 => 70,  138 => 69,  135 => 68,  131 => 67,  120 => 63,  105 => 51,  101 => 50,  98 => 49,  96 => 48,  93 => 47,  91 => 40,  88 => 39,  82 => 37,  80 => 36,  76 => 34,  71 => 33,  69 => 24,  64 => 22,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }
}
