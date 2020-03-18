<?php if (isset($_SERVER['HTTP_USER_AGENT']) && !strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6')) echo '<?xml version="1.0" encoding="UTF-8"?>'. "\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" xml:lang="<?php echo $lang; ?>">
<head>
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<!-- Default CSS stylesheet -->
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/stylesheet.css" />
<!-- Stylesheet for users with width in the range between 781px and 951px -->
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/stylesheet_width_781-951.css" />
<!-- Stylesheet for users with width under 781px  -->
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/stylesheet_width_max781.css" />
<!-- Stylesheet for the social icons: https://github.com/Grawl/Grands  -->
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/grands_icon_font/style.css" />

<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/colorbox/colorbox.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,300,700' rel='stylesheet' type='text/css'>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>

<!--flexslider -->
<script type="text/javascript" src="catalog/view/javascript/jquery/flexslider/jquery.flexslider-min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/flexslider.css" />

<!-- tipsy -->
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.tipsy.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/tipsy.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/ie8.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/metalic/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->

<script type="text/javascript"><!--
$(document).ready(function() {

	$('.tipsy_class').tipsy({gravity: 's'});
	/* Menu slideDown effect */
	$('#menu > ul > li').hover(
		function() {
			$(this).find('div').slideDown(300);
		},
		function() {
			$(this).find('div').slideUp(300);
		}
	);
	
});
--></script>
<?php echo $google_analytics; ?>
</head>
<body>
<div id="container">
<div id="header">
  <?php if ($logo) { ?>
  <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
  <?php } ?>
  
  <?php echo $cart; ?>

  <div class="right-top-block">
  
  <div id="links"><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></div><!-- /links -->
  
  <div id="welcome">
    <?php if (!$logged) { ?>
    <?php 
		/*
		* Login & registration buttons
		* The default string is converting to to strings
		*/
		$pattern 		= '/<a(.*?)href=[\"\']([a-z0-9]+)\:\/\/(.*?)\/?[\"\'](.*?)>(.*?)<\/a>/i';
		$text_welcome 	= preg_match_all( $pattern, $text_welcome, $text_welcome_array );
		$login_btn 		= '<a class="login_btn" href="'. $text_welcome_array['2'][0] .'://'. $text_welcome_array['3'][0] .'">'. ucfirst ( $text_welcome_array['5'][0] ) .'</a>';
		$reg_btn 		= '<a class="reg_btn" href="'. $text_welcome_array['2'][1] .'://'. $text_welcome_array['3'][1] .'">'. ucfirst  ( $text_welcome_array['5'][1] ) .'</a>';
		echo $reg_btn;
		echo $login_btn;
	?>
    <?php } else { ?>
    <?php echo $text_logged; ?>
    <?php } ?>
  </div><!-- / welcome -->
  
  <div id="search">
    <div class="button-search"></div>
    <?php if ($filter_name) { ?>
    <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" />
    <?php } else { ?>
    <input type="text" name="filter_name" value="<?php echo $text_search; ?>" onclick="this.value = '';" onkeydown="this.style.color = '#000000';" />
    <?php } ?>
  </div><!-- / search -->
  
  <?php echo $language; ?>
  
  <?php echo $currency; ?>
  </div><!-- / right-top-block -->
</div><!-- / header -->
<?php if ($categories) { ?>
<div id="menu">
  <ul class="menu-main-ul">
    <?php 
	$count_categories = count($categories);
	$z = 0;
	foreach ($categories as $category) { 
	$z++;
	?>
    <li>
	
	<?php 
	/*
	* Nice separater for menu
	*/
	if ($z != $count_categories) :
		echo '<span class="menu-sep"></span>';
	endif; 
	?>
		
	<a class="menu-main-a" href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
      <?php if ($category['children']) { ?>
      <div>
        <?php for ($i = 0; $i < count($category['children']);) { ?>
        <ul>
          <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
          <?php for (; $i < $j; $i++) { ?>
          <?php if (isset($category['children'][$i])) { ?>
          <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
          <?php } ?>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div><!-- /menu -->
<?php } ?>
<div class="clear"></div>
<div id="notification"></div>
<div class="clear"></div>
