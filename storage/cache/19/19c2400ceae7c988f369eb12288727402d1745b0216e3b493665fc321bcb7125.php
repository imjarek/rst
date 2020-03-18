<?php

/* fanes/template/product/category.twig */
class __TwigTemplate_c2a1e71cb96f3b33f8a3be2d97a7883bacb7258ab31a819376dc419c9021a037 extends Twig_Template
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
<div class=\"content\">
  ";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "    ";
            $context["class"] = "product-card product-card-s";
            // line 12
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "product-card product-card-l";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "product-card";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"product-category\" class=\"content-center\">
     ";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 19
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 20
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 21
            echo "      <div class=\"thumb-description-block\"> ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 22
                echo "        <div class=\"thumbs\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 24
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 25
                echo "        <div class=\"description\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 26
            echo "</div>
      ";
        }
        // line 28
        echo "      ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 29
            echo "       <h3 class=\"cat-title\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
      <div class=\"category-block\">
          <ul>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "          </ul>
      </div>
      ";
        }
        // line 38
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 39
            echo "      <div class=\"sort-block\">
        <div class=\"sort\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 42
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 48
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 49
                    echo "              
              
              
              <option value=\"";
                    // line 52
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 57
                    echo "              
              
              
              <option value=\"";
                    // line 60
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 65
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            
            
            
            </select>
          </div>
        </div>
        <div class=\"sort\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 74
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 80
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 81
                    echo "              
              
              
              <option value=\"";
                    // line 84
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 89
                    echo "              
              
              
              <option value=\"";
                    // line 92
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 97
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            
            
            
            </select>
          </div>
        </div>
      </div>
      
<div class=\"product-wrapp\">
 ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "  <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
     <div class=\"btn-top\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 110
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 111
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
     </div>
      <div class=\"image\"><a href=\"";
                // line 113
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
                // line 115
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
        <p class=\"product-description\">";
                // line 116
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
        ";
                // line 117
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 118
                    echo "        <div class=\"rating\">
          ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(5);
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 120
                        echo "          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 121
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 123
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        }
                        // line 125
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "        </div>
        ";
                }
                // line 128
                echo "        ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 129
                    echo "        <p class=\"price\">
          ";
                    // line 130
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 131
                        echo "          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
          ";
                    } else {
                        // line 133
                        echo "          <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
          ";
                    }
                    // line 135
                    echo "          ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 136
                        echo "          <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span>
          ";
                    }
                    // line 138
                    echo "        </p>
        ";
                }
                // line 140
                echo "      </div>
      <div class=\"button-add\">
        <button class=\"btn btn-primary\" type=\"button\" onclick=\"cart.add('";
                // line 142
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
            // line 146
            echo "</div>
      <div class=\"pagination-block\">
        <div class=\"paginations\">";
            // line 148
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"results-text\">";
            // line 149
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 152
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 153
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 155
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 158
        echo "      </div>
    ";
        // line 159
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
";
        // line 161
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 163
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "fanes/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 163,  434 => 161,  429 => 159,  426 => 158,  418 => 155,  412 => 153,  409 => 152,  403 => 149,  399 => 148,  395 => 146,  383 => 142,  379 => 140,  375 => 138,  367 => 136,  364 => 135,  356 => 133,  350 => 131,  348 => 130,  345 => 129,  342 => 128,  338 => 126,  332 => 125,  328 => 123,  324 => 121,  321 => 120,  317 => 119,  314 => 118,  312 => 117,  308 => 116,  302 => 115,  291 => 113,  284 => 111,  278 => 110,  272 => 108,  268 => 107,  257 => 98,  251 => 97,  241 => 92,  236 => 89,  226 => 84,  221 => 81,  218 => 80,  214 => 79,  206 => 74,  196 => 66,  190 => 65,  180 => 60,  175 => 57,  165 => 52,  160 => 49,  157 => 48,  153 => 47,  145 => 42,  140 => 39,  137 => 38,  132 => 35,  121 => 33,  117 => 32,  110 => 29,  107 => 28,  103 => 26,  97 => 25,  94 => 24,  84 => 22,  81 => 21,  79 => 20,  75 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/*   <div class="content-block">*/
/* <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* <div class="content">*/
/*   {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'product-card product-card-s' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'product-card product-card-l' %}*/
/*     {% else %}*/
/*     {% set class = 'product-card' %}*/
/*     {% endif %}*/
/*     <div id="product-category" class="content-center">*/
/*      {{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {% if thumb or description %}*/
/*       <div class="thumb-description-block"> {% if thumb %}*/
/*         <div class="thumbs"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="description">{{ description }}</div>*/
/*         {% endif %}</div>*/
/*       {% endif %}*/
/*       {% if categories %}*/
/*        <h3 class="cat-title">{{ text_refine }}</h3>*/
/*       <div class="category-block">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <div class="sort-block">*/
/*         <div class="sort">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="sort">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       */
/* <div class="product-wrapp">*/
/*  {% for product in products %}*/
/*   <div class="{{class}}">*/
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
/*       <div class="pagination-block">*/
/*         <div class="paginations">{{ pagination }}</div>*/
/*         <div class="results-text">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       </div>*/
/*     {{ column_right }}*/
/* </div>*/
/* {{ content_bottom }}*/
/* </div>*/
/* {{ footer }} */
/* */
