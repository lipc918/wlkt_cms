<?php

/* TopxiaWebBundle:EsBar:ListContent/consult.html.twig */
class __TwigTemplate_e7e378d39f79d7391a739586c118b578b3fc55a196cf8843dbdf27afa6a93b3e extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0)) {
            // line 2
            echo "  ";
            $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
            // line 3
            echo "  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\"> 
      ";
            // line 5
            $context["countQq"] = 0;
            // line 6
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if ( !twig_test_empty($this->getAttribute($context["qq"], "name", array()))) {
                    // line 7
                    echo "        ";
                    $context["countQq"] = 1;
                    // line 8
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
      ";
            // line 10
            if (((isset($context["countQq"]) ? $context["countQq"] : null) > 0)) {
                // line 11
                echo "      <div class=\"row mtm\">
        ";
                // line 12
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                    if ( !twig_test_empty($this->getAttribute($context["qq"], "name", array()))) {
                        // line 13
                        echo "          <div class=\"col-xs-6 mbm text-overflow\">
            <a class=\"link-light\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                        // line 14
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                        echo "&site=qq&menu=yes\" target=\"_blank\"><img class=\"mrs\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                        echo "\" alt=\"\" title=\"点击这里给我发消息\" alt=\"\">
              ";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                        echo "
            </a>
          </div>
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "      </div>
      <hr>
      ";
            }
            // line 22
            echo "
      <div class=\"row\">
        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if ( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array()))) {
                    // line 25
                    echo "          <div class=\"col-xs-6 mbm\">
            <p class=\"text-overflow\">
              <img class=\"mrs\" src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq_group.png"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                    echo "
            </p>
            
            ";
                    // line 31
                    if ( !(($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 32
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                        echo "
              </p>
            ";
                    }
                    // line 36
                    echo "
            ";
                    // line 37
                    if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 38
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 39
                        echo $this->getAttribute($context["qqgroup"], "url", array());
                        echo "
              </p>
            ";
                    }
                    // line 42
                    echo "            
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </div>
    </div>

    <div id=\"bar-phone-content\">
      ";
            // line 49
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()))) {
                // line 50
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>工作时间： ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()), "html", null, true);
                echo "</p>
      ";
            }
            // line 52
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                    // line 53
                    echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-phone mrm\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                    echo "</p>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "      ";
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()))) {
                // line 56
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>邮箱： <a class=\"link-light\" href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            // line 58
            echo "    </div>

    ";
            // line 60
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()))) {
                // line 61
                echo "      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
                echo "\" alt=\"\">
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 65,  193 => 62,  190 => 61,  188 => 60,  184 => 58,  176 => 56,  173 => 55,  161 => 53,  155 => 52,  149 => 50,  147 => 49,  141 => 45,  132 => 42,  126 => 39,  123 => 38,  121 => 37,  118 => 36,  112 => 33,  109 => 32,  107 => 31,  101 => 28,  97 => 27,  93 => 25,  88 => 24,  84 => 22,  79 => 19,  68 => 15,  62 => 14,  59 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  39 => 8,  36 => 7,  30 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
