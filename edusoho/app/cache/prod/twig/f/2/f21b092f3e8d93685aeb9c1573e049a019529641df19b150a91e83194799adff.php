<?php

/* TopxiaAdminBundle:CommonAdmin:main.html.twig */
class __TwigTemplate_f21b092f3e8d93685aeb9c1573e049a019529641df19b150a91e83194799adff extends Twig_Template
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
        if (((isset($context["isCollect"]) ? $context["isCollect"] : null) == 0)) {
            // line 2
            echo "  <li class=\"shortcut-add\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_common_add");
            echo "\"><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> 添加当前页面为常用功能</a></li>
";
        } else {
            // line 4
            echo "  <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-ok text-muted\"></i> <span class=\"text-muted\">当前页面已添加</span></a></li>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["admins"]) ? $context["admins"] : null)) {
            // line 8
            echo "  <li role=\"presentation\" class=\"divider\"></li>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 12
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:CommonAdmin:li.html.twig", "TopxiaAdminBundle:CommonAdmin:main.html.twig", 12)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CommonAdmin:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  43 => 11,  40 => 10,  36 => 8,  34 => 7,  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
