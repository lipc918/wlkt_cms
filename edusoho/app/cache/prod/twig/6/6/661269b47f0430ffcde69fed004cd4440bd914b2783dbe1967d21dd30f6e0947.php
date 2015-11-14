<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig */
class __TwigTemplate_661269b47f0430ffcde69fed004cd4440bd914b2783dbe1967d21dd30f6e0947 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig", 1);
        // line 2
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : null)) >= 15)) {
            // line 6
            echo "      <a href=\"javascript:;\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
    ";
        }
        // line 8
        echo "    <h3 class=\"panel-title\">
      <i class=\"es-icon es-icon-personadd\"></i>
      最新学员
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 14
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 15
            echo "      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 17
                echo "        ";
                $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array");
                // line 18
                echo "          <li>
            ";
                // line 19
                echo $context["web_macro"]->getuser_avatar((isset($context["student"]) ? $context["student"] : null), "", "avatar-sm");
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">暂无学员</div>
    ";
        }
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  68 => 24,  64 => 22,  55 => 19,  52 => 18,  49 => 17,  45 => 16,  42 => 15,  40 => 14,  32 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
