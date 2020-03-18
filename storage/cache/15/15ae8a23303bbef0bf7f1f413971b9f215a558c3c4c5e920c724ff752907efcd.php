<?php

/* fanes/template/common/home.twig */
class __TwigTemplate_d3e40d749dfefba6023ae2eae5de133cab8a34111a3e4ea8eaf53adc6156a736 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
  <div class=\"content-block\">
<div id=\"common-home\" class=\"content\">
  ";
        // line 4
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"content\" class=\"content-center\">";
        // line 5
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "</div>
    ";
        // line 6
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
";
        // line 8
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 10
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "fanes/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  38 => 8,  33 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/*   <div class="content-block">*/
/* <div id="common-home" class="content">*/
/*   {{column_left }}*/
/*     <div id="content" class="content-center">{{ content_top }}</div>*/
/*     {{ column_right }}*/
/* </div>*/
/* {{ content_bottom }}*/
/* </div>*/
/* {{ footer }}*/
