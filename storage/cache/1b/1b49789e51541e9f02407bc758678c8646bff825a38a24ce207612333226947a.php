<?php

/* fanes/template/extension/module/banner.twig */
class __TwigTemplate_847ed5195bf77c910e65587680a41f682bb886a6e479325d95dc399e76da10c6 extends Twig_Template
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
 <div class=\"swiper-viewport\">
  <div id=\"banner";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 11
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\teffect: 'fade',
\tautoplay: 2500,
    autoplayDisableOnInteraction: false
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "fanes/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  54 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="module-block">*/
/*  <div class="swiper-viewport">*/
/*   <div id="banner{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper">{% for banner in banners %}*/
/*       <div class="swiper-slide">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %}</div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#banner{{ module }}').swiper({*/
/* 	effect: 'fade',*/
/* 	autoplay: 2500,*/
/*     autoplayDisableOnInteraction: false*/
/* });*/
/* --></script> */
