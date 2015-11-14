<?php

/* TopxiaWebBundle:Status:status-block.html.twig */
class __TwigTemplate_7ad0a717f0d636d7580ccadb3deeb4a6cd15a1091adc9f7d81dc0a58ec56575b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Status:status-block.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default student-dynamic\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>学员动态</h3>
  </div>

  <div class=\"panel-body\">
  ";
        // line 9
        if ((isset($context["learns"]) ? $context["learns"] : null)) {
            // line 10
            echo "    
      ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["learn"]) {
                // line 12
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 7)) {
                    // line 13
                    echo "          <div class=\"media media-number-o\">
            <div class=\"media-body\">
              ";
                    // line 15
                    echo $context["web_macro"]->getuser_link($this->getAttribute($context["learn"], "user", array()));
                    echo "
              ";
                    // line 16
                    echo $this->getAttribute($context["learn"], "message", array());
                    echo "
            </div>
          </div> 
         ";
                }
                // line 20
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
    ";
        } else {
            // line 23
            echo "     <div class=\"empty\">还没有动态</div>
    ";
        }
        // line 25
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Status:status-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  88 => 23,  84 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 13,  52 => 12,  35 => 11,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
