<?php

/* fanes/template/common/footer.twig */
class __TwigTemplate_81088274d4c5df770b31b809782a02a85d24d38b87f3c40bd8fdc02dd9276e04 extends Twig_Template
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
        echo "<footer>
    <div class=\"foot-wrapp\">
      ";
        // line 3
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 4
            echo "      <div class=\"col-footer\">
        <h5>";
            // line 5
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 8
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
            // line 10
            echo "        </ul>
      </div>
      ";
        }
        // line 13
        echo "      <div class=\"col-footer\">
        <h5>";
        // line 14
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 16
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 17
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 18
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-footer\">
        <h5>";
        // line 22
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 24
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 25
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-footer\">
        <h5>";
        // line 31
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 33
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
</footer>
<div class=\"powered-block\">
     <div class=\"powered\">
         ";
        // line 43
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "
     </div>
     <div class=\"money-block\">
            <img src=\"catalog/view/theme/fanes/image/icons_money/mastercard.png\" alt=\"card-mastercard\">
            <img src=\"catalog/view/theme/fanes/image/icons_money/visa.png\" alt=\"card-visa\">
            <img src=\"catalog/view/theme/fanes/image/icons_money/webmoney.png\" alt=\"webmoney\">
            <img src=\"catalog/view/theme/fanes/image/icons_money/qiwi.png\" alt=\"qiwi\">
            <img src=\"catalog/view/theme/fanes/image/icons_money/yandex-money.png\" alt=\"yandex-money\">
     </div>
</div>
</div>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<script src=\"catalog/view/theme/fanes/javascript/common.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/fanes/javascript/click.min.js\" type=\"text/javascript\"></script>
";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 64
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</body></html>";
    }

    public function getTemplateName()
    {
        return "fanes/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 66,  176 => 64,  172 => 63,  149 => 43,  137 => 36,  131 => 35,  125 => 34,  119 => 33,  114 => 31,  105 => 27,  99 => 26,  93 => 25,  87 => 24,  82 => 22,  73 => 18,  67 => 17,  61 => 16,  56 => 14,  53 => 13,  48 => 10,  37 => 8,  33 => 7,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/*     <div class="foot-wrapp">*/
/*       {% if informations %}*/
/*       <div class="col-footer">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-footer">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-footer">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-footer">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/* </footer>*/
/* <div class="powered-block">*/
/*      <div class="powered">*/
/*          {{ powered }}*/
/*      </div>*/
/*      <div class="money-block">*/
/*             <img src="catalog/view/theme/fanes/image/icons_money/mastercard.png" alt="card-mastercard">*/
/*             <img src="catalog/view/theme/fanes/image/icons_money/visa.png" alt="card-visa">*/
/*             <img src="catalog/view/theme/fanes/image/icons_money/webmoney.png" alt="webmoney">*/
/*             <img src="catalog/view/theme/fanes/image/icons_money/qiwi.png" alt="qiwi">*/
/*             <img src="catalog/view/theme/fanes/image/icons_money/yandex-money.png" alt="yandex-money">*/
/*      </div>*/
/* </div>*/
/* </div>*/
/* */
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* */
/* <script src="catalog/view/theme/fanes/javascript/common.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/theme/fanes/javascript/click.min.js" type="text/javascript"></script>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* </body></html>*/
