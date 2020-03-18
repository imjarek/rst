<?php

/* fanes/template/common/cart.twig */
class __TwigTemplate_1dc9e2fb43d023d0e1b107fc677cec1343ce6fa5f406d177b3b331b6ea8b9bea extends Twig_Template
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
        echo "<div id=\"cart\">
    <a class=\"adds icon-link\" type=\"button\" data-placement=\"bottom\" data-toggle=\"modal\" data-loading-text=\"";
        // line 2
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\" dropdown-toggle\"><span id=\"cart-total\">
    <i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
        // line 3
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></a>
  <div id=\"myModal\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
        <h4 class=\"modal-title\">";
        // line 9
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</h4>
      </div>
    <ul>
    ";
        // line 12
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 13
            echo "    <li>
      <table class=\"table\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "        <tr>
          <td class=\"text-center\">";
                // line 17
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 18
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 19
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 20
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 23
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 24
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 25
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 26
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 30
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 32
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 34
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 35
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "      </table>
    </li>
    <li>
      <div class=\"results\">
        <table class=\"table-result\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 44
                echo "          <tr>
            <td class=\"text-left\"><strong>";
                // line 45
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 46
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        </table>
      </div>
      <div class=\"cart-btn\">
         <a type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Продолжить покупки</a>
         <a class=\"btn btn-primary\" href=\"";
            // line 53
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
         <a class=\"btn btn-primary\" href=\"";
            // line 54
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\"><i class=\"fa fa-share\"></i> ";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
      </div>
    </li>
    ";
        } else {
            // line 58
            echo "    <li>
      <p class=\"text-center\">";
            // line 59
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 62
        echo "  </ul>
    </div>
  </div>
</div> 
</div>

";
    }

    public function getTemplateName()
    {
        return "fanes/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 62,  205 => 59,  202 => 58,  193 => 54,  187 => 53,  181 => 49,  172 => 46,  168 => 45,  165 => 44,  161 => 43,  154 => 38,  143 => 35,  139 => 34,  134 => 32,  130 => 30,  125 => 29,  114 => 26,  110 => 25,  106 => 24,  98 => 23,  93 => 22,  90 => 21,  81 => 20,  74 => 19,  68 => 18,  54 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 12,  35 => 9,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="cart">*/
/*     <a class="adds icon-link" type="button" data-placement="bottom" data-toggle="modal" data-loading-text="{{ text_loading }}" class=" dropdown-toggle"><span id="cart-total">*/
/*     <i class="fa fa-shopping-bag" aria-hidden="true"></i>{{text_items}}</span></a>*/
/*   <div id="myModal" class="modal fade">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>*/
/*         <h4 class="modal-title">{{text_items}}</h4>*/
/*       </div>*/
/*     <ul>*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*       <table class="table">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div class="results">*/
/*         <table class="table-result">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-left"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*       </div>*/
/*       <div class="cart-btn">*/
/*          <a type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-home" aria-hidden="true"></i> Продолжить покупки</a>*/
/*          <a class="btn btn-primary" href="{{ cart }}"><i class="fa fa-shopping-cart"></i> {{ text_cart }}</a>*/
/*          <a class="btn btn-primary" href="{{ checkout }}"><i class="fa fa-share"></i> {{ text_checkout }}</a>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/*     </div>*/
/*   </div>*/
/* </div> */
/* </div>*/
/* */
/* */
