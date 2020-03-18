<?php

/* fanes/template/checkout/checkout.twig */
class __TwigTemplate_1eb5d1d9ff25e8acfebf255204b3adc8389ca239d51727859c2b4d51afe70e70 extends Twig_Template
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
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "<div id=\"checkout-checkout\" class=\"content\">
  ";
        // line 14
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    <div id=\"checkouts\" class=\"content-center\">
     ";
        // line 16
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 21
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 27
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 28
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 30
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        } else {
            // line 37
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 39
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 46
        echo "        ";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 47
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 49
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 57
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 64
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 66
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 74
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 82
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
</div>
";
        // line 84
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 90
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 92
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 96
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 98
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t}
\t}
});

";
        // line 103
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 104
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 111
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        } else {
            // line 121
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 128
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 138
        echo "
// Checkout
\$(document).delegate('#button-account', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
        \t\$('#button-account').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-account').button('reset');
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 157
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 159
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-login').button('loading');
\t\t},
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t   }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-register').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 239
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 240
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 254
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 263
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

   \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 267
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 268
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 269
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 282
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 286
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 287
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 288
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 296
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 302
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 306
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 313
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 323
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-payment-address').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                ";
        // line 374
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 375
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 381
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 385
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 386
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 387
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
                ";
        } else {
            // line 405
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 411
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 415
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t
\t\t\t\t});
                ";
        }
        // line 433
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 486
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 490
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 491
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 563
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 564
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 581
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 590
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 594
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 595
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 611
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 615
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 616
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 617
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 625
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 634
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 638
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 645
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 698
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 702
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 703
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 747
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 751
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 795
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 811
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "fanes/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1063 => 811,  1044 => 795,  997 => 751,  990 => 747,  943 => 703,  939 => 702,  932 => 698,  877 => 645,  867 => 638,  860 => 634,  849 => 625,  838 => 617,  834 => 616,  830 => 615,  823 => 611,  804 => 595,  800 => 594,  793 => 590,  781 => 581,  762 => 564,  760 => 563,  685 => 491,  681 => 490,  674 => 486,  619 => 433,  598 => 415,  591 => 411,  583 => 405,  562 => 387,  558 => 386,  554 => 385,  547 => 381,  539 => 375,  537 => 374,  483 => 323,  471 => 313,  461 => 306,  454 => 302,  446 => 296,  435 => 288,  431 => 287,  427 => 286,  420 => 282,  404 => 269,  400 => 268,  396 => 267,  389 => 263,  377 => 254,  361 => 240,  359 => 239,  276 => 159,  271 => 157,  250 => 138,  237 => 128,  228 => 121,  215 => 111,  206 => 104,  204 => 103,  196 => 98,  191 => 96,  184 => 92,  179 => 90,  170 => 84,  165 => 82,  154 => 74,  143 => 66,  139 => 64,  129 => 57,  118 => 49,  114 => 47,  111 => 46,  101 => 39,  97 => 37,  87 => 30,  83 => 28,  81 => 27,  72 => 21,  65 => 17,  61 => 16,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/*   <div class="content-block">*/
/* <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/* <div id="checkout-checkout" class="content">*/
/*   {{ column_left }}*/
/*     <div id="checkouts" class="content-center">*/
/*      {{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       <div class="panel-group" id="accordion">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_option }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-option">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% if not logged and account != 'guest' %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_account }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_payment_address }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if shipping_required %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_shipping_address }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_shipping_method }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_payment_method }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_confirm }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {{ column_right }}*/
/* </div>*/
/* {{ content_bottom }}*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $(document).on('change', 'input[name=\'account\']', function() {*/
/* 	if ($('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {*/
/* 		if (this.value == 'register') {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/* 		} else {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 		}*/
/* 	} else {*/
/* 		if (this.value == 'register') {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_account }}');*/
/* 		} else {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_address }}');*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* {% if not logged %}*/
/* $(document).ready(function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/login',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*            $('#collapse-checkout-option .panel-body').html(html);*/
/* */
/* 			$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 			$('a[href=\'#collapse-checkout-option\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* {% else %}*/
/* $(document).ready(function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*             $('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 			$('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* {% endif %}*/
/* */
/* // Checkout*/
/* $(document).delegate('#button-account', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*         	$('#button-account').button('loading');*/
/* 		},*/
/*         complete: function() {*/
/* 			$('#button-account').button('reset');*/
/*         },*/
/*         success: function(html) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             $('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 			if ($('input[name=\'account\']:checked').val() == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 			}*/
/* */
/* 			$('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Login*/
/* $(document).delegate('#button-login', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/login/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-checkout-option :input'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-login').button('loading');*/
/* 		},*/
/*         complete: function() {*/
/*             $('#button-login').button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#collapse-checkout-option .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'email\']').parent().addClass('has-error');*/
/* 				$('input[name=\'password\']').parent().addClass('has-error');*/
/* 		   }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Register*/
/* $(document).delegate('#button-register', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/register/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/* 			$('#button-register').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-register').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/* 							// Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/* */
/* 							$('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*    							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*                 {% endif %}*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_address',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-register').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Payment Address*/
/* $(document).delegate('#button-payment-address', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-payment-address').button('loading');*/
/* 		},*/
/*         complete: function() {*/
/* 			$('#button-payment-address').button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_address',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});				*/
/* 				});*/
/*                 {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Shipping Address*/
/* $(document).delegate('#button-shipping-address', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/* 			$('#button-shipping-address').button('loading');*/
/* 	    },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-address').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-address').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 						*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function(html) {*/
/*                                 $('#collapse-shipping-address .panel-body').html(html);*/
/*                             },*/
/*                             error: function(xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Guest*/
/* $(document).delegate('#button-guest', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*        		$('#button-guest').button('loading');*/
/* 	    },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/* 							// Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/guest_shipping',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/* */
/* 						    $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/guest_shipping',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*                 {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Guest Shipping*/
/* $(document).delegate('#button-guest-shipping', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest_shipping/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-guest-shipping').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest-shipping').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest-shipping').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $(document).delegate('#button-shipping-method', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-shipping-method').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-method').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $(document).delegate('#button-payment-method', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*          	$('#button-payment-method').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-payment-method').button('reset');*/
/*                 */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/confirm',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-payment-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-checkout-confirm .panel-body').html(html);*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/* 					},*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
