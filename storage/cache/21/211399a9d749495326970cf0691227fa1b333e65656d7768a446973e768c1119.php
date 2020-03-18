<?php

/* fanes/template/extension/module/category.twig */
class __TwigTemplate_ce79222d250d4345ebfb6a2d6ddc9013c9ac78bacb3705bd921d395ca5be9306 extends Twig_Template
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
        echo "<div class=\"module-block\">
 <div class=\"category-list\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "  ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                echo " 
  <a href=\"";
                // line 5
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a> 
  ";
                // line 6
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 7
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 8
                        echo "  ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 9
                            echo "  <a id=\"children-cats\" href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"active\"> ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a> 
  ";
                        } else {
                            // line 10
                            echo " 
  <a id=\"children-cats\" href=\"";
                            // line 11
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" > ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
  ";
                        }
                        // line 13
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "  ";
                }
                // line 15
                echo "  ";
            } else {
                echo " <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
  ";
            }
            // line 17
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "fanes/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  85 => 17,  75 => 15,  72 => 14,  66 => 13,  59 => 11,  56 => 10,  48 => 9,  45 => 8,  40 => 7,  38 => 6,  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="module-block">*/
/*  <div class="category-list">*/
/*   {% for category in categories %}*/
/*   {% if category.category_id == category_id %} */
/*   <a href="{{ category.href }}" class="active">{{ category.name }}</a> */
/*   {% if category.children %}*/
/*   {% for child in category.children %}*/
/*   {% if child.category_id == child_id %}*/
/*   <a id="children-cats" href="{{ child.href }}" class="active"> {{ child.name }}</a> */
/*   {% else %} */
/*   <a id="children-cats" href="{{ child.href }}" > {{ child.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   {% else %} <a href="{{ category.href }}">{{ category.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* </div>*/
/* */
