<?php

/* fanes/template/extension/module/featured.twig */
class __TwigTemplate_36316beab977e25ed75217dfb51b1242e5c9474cbd821fb8e467a64671476aca extends Twig_Template
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
<h3 class=\"heading-title\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"featured\">
 ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "  <div class=\"product-card\">
     <div class=\"btn-top\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 7
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 8
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
     </div>
      <div class=\"image\"><a href=\"";
            // line 10
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4 class=\"product-name\"><a href=\"";
            // line 12
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        <p class=\"product-description\">";
            // line 13
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
        ";
            // line 14
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 15
                echo "        <div class=\"rating\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 18
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 20
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 22
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        </div>
        ";
            }
            // line 25
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 26
                echo "        <p class=\"price\">
          ";
                // line 27
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 28
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 30
                    echo "          <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
          ";
                }
                // line 32
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 33
                    echo "          <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
          ";
                }
                // line 35
                echo "        </p>
        ";
            }
            // line 37
            echo "      </div>
      <div class=\"button-add\">
        <button class=\"btn btn-primary\" type=\"button\" onclick=\"cart.add('";
            // line 39
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
      </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "fanes/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 43,  140 => 39,  136 => 37,  132 => 35,  124 => 33,  121 => 32,  113 => 30,  107 => 28,  105 => 27,  102 => 26,  99 => 25,  95 => 23,  89 => 22,  85 => 20,  81 => 18,  78 => 17,  74 => 16,  71 => 15,  69 => 14,  65 => 13,  59 => 12,  48 => 10,  41 => 8,  35 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="module-block">*/
/* <h3 class="heading-title">{{ heading_title }}</h3>*/
/* <div class="featured">*/
/*  {% for product in products %}*/
/*   <div class="product-card">*/
/*      <div class="btn-top">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*      </div>*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div class="caption">*/
/*         <h4 class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <p class="product-description">{{ product.description }}</p>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="button-add">*/
/*         <button class="btn btn-primary" type="button" onclick="cart.add('{{ product.product_id }}');">{{ button_cart }}</button>*/
/*       </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* </div>*/
/* */
