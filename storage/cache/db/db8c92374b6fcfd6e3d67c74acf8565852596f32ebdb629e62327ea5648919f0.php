<?php

/* fanes/template/information/information.twig */
class __TwigTemplate_024673a591924d9905b9e83e558c624637a0742ae74d0c335a0c022a8eafd83b extends Twig_Template
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
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
<div id=\"information-information\" class=\"content\">
  ";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"informations\" class=\"content-center\">
     ";
        // line 11
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 13
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
    ";
        // line 14
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
";
        // line 16
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 18
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "fanes/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  44 => 9,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/*   <div class="content-block">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* <div id="information-information" class="content">*/
/*   {{ column_left }}*/
/*     <div id="informations" class="content-center">*/
/*      {{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ description }}</div>*/
/*     {{ column_right }}*/
/* </div>*/
/* {{ content_bottom }}*/
/* </div>*/
/* {{ footer }}*/
