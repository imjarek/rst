<?php

/* fanes/template/extension/module/slideshow.twig */
class __TwigTemplate_850251288ff9cd46027b055eff1c8a16736982662ff7dbc15c4cbb4cba2a1ef4 extends Twig_Template
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
  <div id=\"slideshow";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\"> ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">";
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
        echo " </div>
  </div>
  <div class=\"swiper-pagination slideshow";
        // line 8
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 16
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 19
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
--></script>";
    }

    public function getTemplateName()
    {
        return "fanes/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  69 => 16,  58 => 8,  54 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="module-block">*/
/*  <div class="swiper-viewport">*/
/*   <div id="slideshow{{ module }}" class="swiper-container">*/
/*     <div class="swiper-wrapper"> {% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*       {% endfor %} </div>*/
/*   </div>*/
/*   <div class="swiper-pagination slideshow{{ module }}"></div>*/
/*   <div class="swiper-pager">*/
/*     <div class="swiper-button-next"></div>*/
/*     <div class="swiper-button-prev"></div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#slideshow{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 1,*/
/* 	pagination: '.slideshow{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '.swiper-button-next',*/
/*     prevButton: '.swiper-button-prev',*/
/*     spaceBetween: 30,*/
/* 	autoplay: 2500,*/
/*     autoplayDisableOnInteraction: true,*/
/* 	loop: true*/
/* });*/
/* --></script>*/
