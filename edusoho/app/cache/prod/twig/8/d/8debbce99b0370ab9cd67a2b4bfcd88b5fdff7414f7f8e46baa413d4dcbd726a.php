<?php

/* TopxiaWebBundle:Course:price-widget.html.twig */
class __TwigTemplate_8debbce99b0370ab9cd67a2b4bfcd88b5fdff7414f7f8e46baa413d4dcbd726a extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter((isset($context["shows"]) ? $context["shows"] : null), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">
  ";
        // line 13
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array())) {
            // line 14
            echo "
    ";
            // line 15
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 16
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 17
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 19
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo " 元</span>
      ";
                }
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 24
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin")) {
                    // line 25
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originCoinPrice", array()), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 27
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 32
                echo "
      <span class=\"discount\">
        ";
                // line 34
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : null) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originCoinPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : null) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()) == 0)))) {
                    // line 35
                    echo "          限免
        ";
                } else {
                    // line 37
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), 2, "common"), "html", null, true);
                    echo " 折
        ";
                }
                // line 39
                echo "      </span>

    ";
            }
            // line 42
            echo "
  ";
        } else {
            // line 44
            echo "
    ";
            // line 45
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : null)) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : null)))) {
                // line 46
                echo "      <span class=\"price\">
        ";
                // line 47
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 48
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                        echo " ";
                    } else {
                        echo " 免费 ";
                    }
                    // line 49
                    echo "        ";
                } else {
                    // line 50
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                        echo " 元";
                    } else {
                        echo " 免费 ";
                    }
                    // line 51
                    echo "        ";
                }
                // line 52
                echo "      </span>
    ";
            }
            // line 54
            echo "
  ";
        }
        // line 56
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:price-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 56,  149 => 54,  145 => 52,  142 => 51,  134 => 50,  131 => 49,  120 => 48,  118 => 47,  115 => 46,  113 => 45,  110 => 44,  106 => 42,  101 => 39,  95 => 37,  91 => 35,  89 => 34,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  71 => 27,  65 => 25,  62 => 24,  60 => 23,  57 => 22,  54 => 21,  48 => 19,  40 => 17,  37 => 16,  35 => 15,  32 => 14,  30 => 13,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
