<?php

/* fanes/template/common/search.twig */
class __TwigTemplate_fbe64da9cd076a318c7784f160a5865b6c3437c2d30088aa9cddb26ba064619e extends Twig_Template
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
        echo "<div class=\"s-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" />
    <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "fanes/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="s-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" />*/
/*     <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>*/
/*     </div>*/
/* */
