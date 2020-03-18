<?php

/* fanes/template/common/menu.twig */
class __TwigTemplate_4cf9965667960aacda867e878ad9a9ad94a299489fff330dfcf990af752d685b extends Twig_Template
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
        echo "<div class=\"nav-menu\">
       <div class=\"toggler-block\">
             <button class=\"toggler\">
             <span class=\"icon\"></span>
             </button>
             <span class=\"text-category\">";
        // line 6
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</span>
         </div>
       <div class=\"menu-block\">
        ";
        // line 9
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 10
            echo "    <ul class=\"menu\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 13
                    echo "              <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
              <div id=\"m\" class=\"dropdown-menu\" >
            <div class=\"dropdown-inner\">
                 ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 17
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 19
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 21
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "              <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
              </div>
           </div>
              </li>
             ";
                } else {
                    // line 28
                    echo "        <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  </ul>
";
        }
        // line 33
        echo "</div>
<ul class=\"right-l\" >
     <li id=\"manufacturrer\"><a  href=\"";
        // line 35
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i><span class=\"link-text\">
         ";
        // line 36
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "
     </span></a></li>
       <li id=\"special\"><a href=\"";
        // line 38
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\"><i class=\"fa fa-percent\" aria-hidden=\"true\"></i><span class=\"link-text\">
           ";
        // line 39
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "
       </span></a></li>
     <li id=\"blog-drop\">";
        // line 41
        echo (isset($context["blog_menu"]) ? $context["blog_menu"] : null);
        echo "</li>
        <li id=\"infodrop\">
           <a href=\"";
        // line 43
        echo (isset($context["information"]) ? $context["information"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i><span class=\"link-text\">
               ";
        // line 44
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "
           </span></a>
        <ul class=\"dropdown-menu\" id=\"info-menu\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 48
            echo "          <li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </ul>
        </li>
        <li><a href=\"";
        // line 52
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i><span class=\"link-text\">
            ";
        // line 53
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "
        </span></a></li>
        <li id=\"search-block\">
       <a class=\"icon-link\" href=\"\" data-toggle=\"dropdown\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a>
        <div id=\"search\" class=\"dropdown-menu\">
                 ";
        // line 58
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
             </div>
        </li>
        <li id=\"acc\" class=\"account-dropdown\" >
             <a class=\"icon-link\" id=\"account-menu\" data-placement=\"bottom\" data-toggle=\"dropdown\" title=\"";
        // line 62
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" onclick=\"return false\">
                  <i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>
             </a>
          <div id=\"account-link\" class=\"dropdown-menu\">
            <ul class=\"accounts-link\">
            ";
        // line 67
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 68
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 69
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\"><i class=\"fa fa-history\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 70
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 71
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 73
            echo "            <li><a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 74
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
           ";
        }
        // line 76
        echo "           <li><a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> ";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
           <li><a href=\"";
        // line 77
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" id=\"compare-total\" class=\"btn btn-link\"><i class=\"fa fa-bar-chart\" aria-hidden=\"true\"></i> ";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></li>
              </ul>
           <div class=\"settings\">
               ";
        // line 80
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
               ";
        // line 81
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
          </div>
          </div>
        </li>
</ul>
</div>

         ";
    }

    public function getTemplateName()
    {
        return "fanes/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 81,  255 => 80,  247 => 77,  238 => 76,  231 => 74,  224 => 73,  217 => 71,  211 => 70,  205 => 69,  198 => 68,  196 => 67,  188 => 62,  181 => 58,  173 => 53,  169 => 52,  165 => 50,  154 => 48,  150 => 47,  144 => 44,  140 => 43,  135 => 41,  130 => 39,  126 => 38,  121 => 36,  117 => 35,  113 => 33,  109 => 31,  103 => 30,  95 => 28,  82 => 23,  75 => 21,  64 => 19,  60 => 18,  57 => 17,  53 => 16,  44 => 13,  41 => 12,  37 => 11,  34 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* <div class="nav-menu">*/
/*        <div class="toggler-block">*/
/*              <button class="toggler">*/
/*              <span class="icon"></span>*/
/*              </button>*/
/*              <span class="text-category">{{ text_category }}</span>*/
/*          </div>*/
/*        <div class="menu-block">*/
/*         {% if categories %}*/
/*     <ul class="menu">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*               <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*               <div id="m" class="dropdown-menu" >*/
/*             <div class="dropdown-inner">*/
/*                  {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}*/
/*               <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a>*/
/*               </div>*/
/*            </div>*/
/*               </li>*/
/*              {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* </div>*/
/* <ul class="right-l" >*/
/*      <li id="manufacturrer"><a  href="{{ manufacturer }}"><i class="fa fa-cogs" aria-hidden="true"></i><span class="link-text">*/
/*          {{ text_manufacturer }}*/
/*      </span></a></li>*/
/*        <li id="special"><a href="{{ special }}"><i class="fa fa-percent" aria-hidden="true"></i><span class="link-text">*/
/*            {{ text_special }}*/
/*        </span></a></li>*/
/*      <li id="blog-drop">{{ blog_menu }}</li>*/
/*         <li id="infodrop">*/
/*            <a href="{{information }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="link-text">*/
/*                {{ text_information }}*/
/*            </span></a>*/
/*         <ul class="dropdown-menu" id="info-menu">*/
/*         {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*             </ul>*/
/*         </li>*/
/*         <li><a href="{{ contact }}"><i class="fa fa-phone" aria-hidden="true"></i><span class="link-text">*/
/*             {{ text_contact }}*/
/*         </span></a></li>*/
/*         <li id="search-block">*/
/*        <a class="icon-link" href="" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></a>*/
/*         <div id="search" class="dropdown-menu">*/
/*                  {{search}}*/
/*              </div>*/
/*         </li>*/
/*         <li id="acc" class="account-dropdown" >*/
/*              <a class="icon-link" id="account-menu" data-placement="bottom" data-toggle="dropdown" title="{{text_account}}" onclick="return false">*/
/*                   <i class="fa fa-user-circle-o" aria-hidden="true"></i>*/
/*              </a>*/
/*           <div id="account-link" class="dropdown-menu">*/
/*             <ul class="accounts-link">*/
/*             {% if logged %}*/
/*             <li><a href="{{account}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{text_account}}</a></li>*/
/*             <li><a href="{{order}}"><i class="fa fa-history" aria-hidden="true"></i> {{text_order}}</a></li>*/
/*             <li><a href="{{transaction}}"><i class="fa fa-money" aria-hidden="true"></i> {{text_transaction}}</a></li>*/
/*             <li><a href="{{logout}}"><i class="fa fa-sign-out" aria-hidden="true"></i> {{text_logout}}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{login}}"><i class="fa fa-sign-in" aria-hidden="true"></i> {{text_login}}</a></li>*/
/*             <li><a href="{{register}}"><i class="fa fa-user-plus" aria-hidden="true"></i> {{text_register}}</a></li>*/
/*            {% endif %}*/
/*            <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> {{ text_wishlist }}</a></li>*/
/*            <li><a href="{{ compare }}" id="compare-total" class="btn btn-link"><i class="fa fa-bar-chart" aria-hidden="true"></i> {{ text_compare }}</a></li>*/
/*               </ul>*/
/*            <div class="settings">*/
/*                {{currency}}*/
/*                {{language}}*/
/*           </div>*/
/*           </div>*/
/*         </li>*/
/* </ul>*/
/* </div>*/
/* */
/*          */
