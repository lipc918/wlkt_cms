<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_34fbbbd8d324b3cc46d0f68cc5ed83bcfa2f6608f768d5f8ee8b6d22ccef4202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
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
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if ($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled")) {
            // line 9
            echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"班级名称\" name=\"title\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
            echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
  ";
            // line 19
            if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null)) {
                // line 20
                echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th width=\"40%\">班级名称</th>
      <th>课程数</th>
      <th>学员数</th>
      <th>价格</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                    // line 34
                    echo "      ";
                    $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                    // line 35
                    echo "      ";
                    $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 35)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                    // line 36
                    echo "
   ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "
    </tbody>

  </table>
  ";
            } else {
                // line 43
                echo "    <div class=\"empty\">暂无班级信息!</div>
  ";
            }
            // line 45
            echo "  <div class=\"pull-right\">
 ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
</div>

";
        } else {
            // line 50
            echo "<div class=\"well\">


班级功能未开启，请先在<a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("admin_classroom_setting");
            echo "\"> 系统-课程设置-班级 </a>中设置开启

</div>
";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 57,  137 => 53,  132 => 50,  125 => 46,  122 => 45,  118 => 43,  111 => 38,  96 => 36,  93 => 35,  90 => 34,  73 => 33,  58 => 20,  56 => 19,  47 => 13,  41 => 9,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
