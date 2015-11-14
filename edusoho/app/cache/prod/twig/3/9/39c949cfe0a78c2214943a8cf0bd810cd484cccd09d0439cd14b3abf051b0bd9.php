<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_39c949cfe0a78c2214943a8cf0bd810cd484cccd09d0439cd14b3abf051b0bd9 extends Twig_Template
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
        // line 28
        echo "
";
        // line 51
        echo "
";
        // line 70
        echo "
";
    }

    // line 1
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 3
                echo "  <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo " ";
                if ((isset($context["card"]) ? $context["card"] : null)) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_card_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
                echo "\">
    <img class=\"";
                // line 4
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
  </a>
  ";
            } else {
                // line 7
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 8
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath("", "avatar.png"), "html", null, true);
                echo "\">
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 15
                echo "    <a class=\"link-light ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 17
                echo "    <a class=\"link-light ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" href=\"javascript:;\"><del>用户不存在</del></a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getflash_messages()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 23
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 24
                    echo "      <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo $context["flashMessage"];
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getbytesToSize($__bytes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            ob_start();
            // line 31
            echo "      
      ";
            // line 32
            $context["kilobyte"] = 1024;
            // line 33
            echo "      ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 34
            echo "      ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 35
            echo "      ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 36
            echo "
      ";
            // line 37
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 38
                echo "          ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 39
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 40
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 41
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 42
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 43
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 44
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 46
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 48
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getpaginator($__paginator__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()) > 1)) {
                // line 54
                echo "    <ul class=\"pagination ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\">
      ";
                // line 55
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
                    // line 56
                    echo "        <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
        <li><a  href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
      ";
                }
                // line 59
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 60
                    echo "        <li ";
                    if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "
      ";
                // line 63
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
                    // line 64
                    echo "        <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
        <li><a  href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
      ";
                }
                // line 67
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getstar($__score__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "  ";
            $context["floorScore"] = twig_round((isset($context["score"]) ? $context["score"] : null), 0, "floor");
            // line 73
            echo "  ";
            $context["emptyNum"] = (5 - (isset($context["floorScore"]) ? $context["floorScore"] : null));
            // line 74
            echo "
  ";
            // line 75
            if (((isset($context["floorScore"]) ? $context["floorScore"] : null) > 0)) {
                // line 76
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["floorScore"]) ? $context["floorScore"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 77
                    echo "      <i class=\"es-icon es-icon-star\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "  ";
            }
            // line 80
            echo "
  ";
            // line 81
            if ((((isset($context["score"]) ? $context["score"] : null) - (isset($context["floorScore"]) ? $context["floorScore"] : null)) >= 0.5)) {
                // line 82
                echo "    ";
                $context["emptyNum"] = ((isset($context["emptyNum"]) ? $context["emptyNum"] : null) - 1);
                // line 83
                echo "    <i class=\"es-icon es-icon-starhalf\"></i>
  ";
            }
            // line 85
            echo "
  ";
            // line 86
            if (((isset($context["emptyNum"]) ? $context["emptyNum"] : null) > 0)) {
                // line 87
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyNum"]) ? $context["emptyNum"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 88
                    echo "      <i class=\"es-icon es-icon-staroutline\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "  ";
            }
            // line 91
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 91,  408 => 90,  401 => 88,  396 => 87,  394 => 86,  391 => 85,  387 => 83,  384 => 82,  382 => 81,  379 => 80,  376 => 79,  369 => 77,  364 => 76,  362 => 75,  359 => 74,  356 => 73,  353 => 72,  341 => 71,  328 => 67,  323 => 65,  318 => 64,  316 => 63,  313 => 62,  298 => 60,  293 => 59,  288 => 57,  283 => 56,  281 => 55,  276 => 54,  273 => 53,  260 => 52,  247 => 48,  241 => 46,  235 => 44,  233 => 43,  228 => 42,  226 => 41,  221 => 40,  219 => 39,  214 => 38,  212 => 37,  209 => 36,  206 => 35,  203 => 34,  200 => 33,  198 => 32,  195 => 31,  192 => 30,  180 => 29,  165 => 26,  154 => 24,  149 => 23,  144 => 22,  133 => 21,  118 => 17,  108 => 15,  106 => 14,  92 => 13,  75 => 8,  70 => 7,  62 => 4,  47 => 3,  45 => 2,  30 => 1,  25 => 70,  22 => 51,  19 => 28,);
    }
}
