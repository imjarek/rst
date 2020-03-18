<?php

/* fanes/template/common/header.twig */
class __TwigTemplate_ab31740f650cca19cdf4f824e14b71c504f55a86fb2975ccf740ebd52e5cab08 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
";
        // line 13
        if ((isset($context["robots"]) ? $context["robots"] : null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo (isset($context["robots"]) ? $context["robots"] : null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 20
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo (isset($context["og_url"]) ? $context["og_url"] : null);
        echo "\" />
";
        // line 26
        if ((isset($context["og_image"]) ? $context["og_image"] : null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/theme/fanes/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/fanes/stylesheet/stylesheet.min.css\" rel=\"stylesheet\">
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 37
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 40
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 43
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 46
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</head>
<body>
    <div class=\"wrapper\">
     <header>
      <div class=\"header-block\">
         <div class=\"logo\">
           <div id=\"logo\">
          ";
        // line 55
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 56
            echo "            ";
            if (((isset($context["home"]) ? $context["home"] : null) == (isset($context["og_url"]) ? $context["og_url"] : null))) {
                // line 57
                echo "              <img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" />
            ";
            } else {
                // line 59
                echo "              <a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\"><img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" /></a>
            ";
            }
            // line 61
            echo "          ";
        } else {
            // line 62
            echo "            <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 64
        echo "\t\t</div>
         </div>
         <div class=\"contact-block\">
             <div class=\"contact\">
                <span class=\"email\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>";
        // line 68
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</span> 
                 <span class=\"tel\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>";
        // line 69
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span>
                 <span class=\"open\">
                     ";
        // line 71
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 72
            echo "              <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "
              ";
        }
        // line 74
        echo "                 </span>
             </div>
         </div>
    <ul class=\"right-menu\">
        <li>";
        // line 78
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</li>
        </ul>
      </div>
 </header>
 ";
        // line 82
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "


";
    }

    public function getTemplateName()
    {
        return "fanes/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 82,  246 => 78,  240 => 74,  234 => 72,  232 => 71,  227 => 69,  223 => 68,  217 => 64,  209 => 62,  206 => 61,  194 => 59,  184 => 57,  181 => 56,  179 => 55,  170 => 48,  162 => 46,  158 => 45,  147 => 43,  143 => 42,  134 => 40,  130 => 39,  117 => 37,  113 => 36,  104 => 31,  98 => 29,  92 => 27,  90 => 26,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  66 => 18,  64 => 17,  59 => 16,  53 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* {% if robots %}*/
/* <meta name="robots" content="{{ robots }}" />*/
/* {% endif %}*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta property="og:title" content="{{ title }}" />*/
/* <meta property="og:type" content="website" />*/
/* <meta property="og:url" content="{{ og_url }}" />*/
/* {% if og_image %}*/
/* <meta property="og:image" content="{{ og_image }}" />*/
/* {% else %}*/
/* <meta property="og:image" content="{{ logo }}" />*/
/* {% endif %}*/
/* <meta property="og:site_name" content="{{ name }}" />*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/theme/fanes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/fanes/stylesheet/stylesheet.min.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/*     <div class="wrapper">*/
/*      <header>*/
/*       <div class="header-block">*/
/*          <div class="logo">*/
/*            <div id="logo">*/
/*           {% if logo %}*/
/*             {% if home == og_url %}*/
/*               <img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" />*/
/*             {% else %}*/
/*               <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/* 		</div>*/
/*          </div>*/
/*          <div class="contact-block">*/
/*              <div class="contact">*/
/*                 <span class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ email }}</span> */
/*                  <span class="tel"><i class="fa fa-phone" aria-hidden="true"></i>{{telephone}}</span>*/
/*                  <span class="open">*/
/*                      {% if open %}*/
/*               <i class="fa fa-clock-o" aria-hidden="true"></i>{{ open }}*/
/*               {% endif %}*/
/*                  </span>*/
/*              </div>*/
/*          </div>*/
/*     <ul class="right-menu">*/
/*         <li>{{ cart }}</li>*/
/*         </ul>*/
/*       </div>*/
/*  </header>*/
/*  {{ menu }}*/
/* */
/* */
/* */
