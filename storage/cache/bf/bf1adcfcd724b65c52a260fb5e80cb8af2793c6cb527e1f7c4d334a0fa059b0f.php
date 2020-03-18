<?php

/* fanes/template/error/not_found.twig */
class __TwigTemplate_3a11d4d0c0a232f561b80f751b74ae20450514ef7d1dd31e3c27e88109e621d7 extends Twig_Template
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
<div id=\"error-not-found\" class=\"content\">
   ";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"content\" class=\"content-center\">";
        // line 10
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 12
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 14
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      </div>
    ";
        // line 17
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
";
        // line 19
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 21
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "fanes/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  74 => 19,  69 => 17,  61 => 14,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/*    <div class="content-block">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* <div id="error-not-found" class="content">*/
/*    {{ column_left }}*/
/*     <div id="content" class="content-center">{{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       <p>{{ text_error }}</p>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       </div>*/
/*     {{ column_right }}*/
/* </div>*/
/* {{ content_bottom }}*/
/* </div>*/
/* {{ footer }}*/
/* */
