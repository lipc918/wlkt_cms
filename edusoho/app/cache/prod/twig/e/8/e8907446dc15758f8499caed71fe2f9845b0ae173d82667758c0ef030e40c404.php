<?php

/* TopxiaAdminBundle:LiveCourse:index.html.twig */
class __TwigTemplate_e8907446dc15758f8499caed71fe2f9845b0ae173d82667758c0ef030e40c404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 1);
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
        $context["menu"] = "admin_live_course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 1)) {
            // line 8
            echo "
  
  ";
            // line 10
            $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tab.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 10)->display($context);
            // line 11
            echo "  <br>

  <table class=\"table table-striped table-hover mtl\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"50%\">课时</th>
      <th>直播时间</th>
      <th>最大参与人数</th>
      <th><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_live_course", array("status" => (isset($context["status"]) ? $context["status"] : null))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-refresh\"></span></a></th>
    </tr>
    </thead>
    <tbody>
      ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 24
                echo "        ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["lesson"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["lesson"], "courseId", array()), array(), "array"), null)) : (null));
                // line 25
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tr.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 25)->display($context);
                // line 26
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 27
                echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无进行中的直播</div></td></tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </tbody>
  </table>

  ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
";
        } else {
            // line 34
            echo "<div class=\"well\" style=\"text-align:center;\">


直播功能未开启，请先在<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_course_setting");
            echo "\"> 系统-课程设置-直播 </a>中设置开启

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  116 => 34,  111 => 32,  106 => 29,  99 => 27,  86 => 26,  83 => 25,  80 => 24,  62 => 23,  55 => 19,  45 => 11,  43 => 10,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
