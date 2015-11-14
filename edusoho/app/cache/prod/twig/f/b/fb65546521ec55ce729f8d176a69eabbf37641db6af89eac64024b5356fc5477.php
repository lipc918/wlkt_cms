<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_fb65546521ec55ce729f8d176a69eabbf37641db6af89eac64024b5356fc5477 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:cloud-notice.html.twig", 1);
        // line 2
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 3
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"row form-group\">
    <div class=\"help-block\">
      <p style = \"text-align: left;font-size:18px\">
        &nbsp;&nbsp;欢迎使用，试用将于 
        <span style=\"color:#fed032;\"> 
          ";
            // line 12
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "endTime", array(), "any", true, true)) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "endTime", array()), "Y年m月d日"), "html", null, true);
                echo " 
          ";
            } else {
                // line 14
                echo " 
            未知时间
          ";
            }
            // line 17
            echo "        </span> 
        到期,剩余 
        <span style=\"color:#fed032;\">
          ";
            // line 20
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "remainDays", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "remainDays", array()), "html", null, true);
                echo " ";
            } else {
                echo "未知";
            }
            // line 21
            echo "        </span> 天。
      </p>
      <p style = \"text-align: left;font-size:18px\">
        &nbsp; 您可以联系销售人员购买授权版本，或者延长试用期限。电话：0571-86819929 或 
        <span>
          <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
        </span>
      </p>
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 36
            echo "  ";
            if (((array_key_exists("notices", $context)) ? (_twig_default_filter((isset($context["notices"]) ? $context["notices"] : null), false)) : (false))) {
                // line 37
                echo "    <div class=\"col-md-12\">
      <div class=\"main-system-alert\">
        <h2> 站长公告</h2>
          <ul class=\"alert-list\">
          ";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                    // line 42
                    echo "            <li class=\"glyphicon glyphicon-bell\" style=\"color:#fed032;font-size:16px;\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                    echo "\" style=\"margin-left:22px;\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                    echo "<span>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notice"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span></a></li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "          </ul>
      </div>
    </div>
  ";
            }
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  103 => 44,  90 => 42,  86 => 41,  80 => 37,  77 => 36,  60 => 21,  52 => 20,  47 => 17,  42 => 14,  36 => 13,  34 => 12,  23 => 3,  21 => 2,  19 => 1,);
    }
}
