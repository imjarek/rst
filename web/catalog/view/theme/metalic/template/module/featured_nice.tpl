<div class="box" id="nice-featured<?php echo $module; ?>">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="box-content">
    <div class="box-product nice-featured" style="overflow: hidden; box-shadow: none;">
	 
      <?php foreach ($products as $product) { ?>
      <div class="nice-featured-item" style="background: url('<?php echo $product['thumb']; ?>') left top no-repeat; width: <?php echo $setting['image_width'];?>px; box-shadow: none;">
        <a class="name" href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
        <?php if ($product['price']) { ?>
        <div class="price" style="width: 50%;">
          <?php echo $product['price']; ?>
        </div>
        <?php } ?>
		<div class="fav" data-title="<?php echo $button_wishlist; ?>">
			<div class="button" onclick="addToWishList('<?php echo $product['product_id']; ?>');">&nbsp;</div>
		</div>
        <div class="cart" data-title="<?php echo $button_cart; ?>">
			<div class="button" onclick="addToCart('<?php echo $product['product_id']; ?>');">&nbsp;</div>
		</div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<style>
#nice-featured<?php echo $module; ?> .box-product.nice-featured .nice-featured-item {
	height: <?php echo $setting['image_height'];?>px; 
	padding: 0; 
	margin: <?php echo $nice_featured_item_margin; ?>; 
	border: none; 
	position: relative;
	display: <?php echo $nice_featured_item_display; ?>;
	<?php if (isset($nice_featured_item_clear)) { ?>
	clear: <?php echo $nice_featured_item_clear; ?>;
	<?php } ?>
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .name, #nice-featured<?php echo $module; ?> .box-product.nice-featured .price, #nice-featured<?php echo $module; ?> .box-product.nice-featured .cart, #nice-featured<?php echo $module; ?> .box-product.nice-featured .fav {
	background: url('<?php echo HTTP_SERVER; ?>catalog/view/theme/default/image/menu.png');
	position: absolute;
	margin: 0;
	border: 0;
	display: block;
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured a, #nice-featured<?php echo $module; ?> .box-product.nice-featured, #nice-featured<?php echo $module; ?> .box-product.nice-featured .name, #nice-featured<?php echo $module; ?> .box-product.nice-featured .price, #nice-featured<?php echo $module; ?> .box-product.nice-featured .cart, .box-product.nice-featured .fav {
	color: #FFF;
}

#nice-featured<?php echo $module; ?> .box-product.nice-featured .name {
	top: 0;
	left: 0;
	width:<?php echo round($setting['image_width'] - ($setting['image_width'] / 10)); ?>px;
	padding: <?php echo round($setting['image_width'] / 20); ?>px <?php echo round($setting['image_width'] / 20); ?>px;
	<?php if ($setting['title_fontsize'] == 'auto') { ?>
	font-size: <?php echo round($setting['image_height'] / 10); ?>px;
	<?php } else { ?>
	font-size: <?php echo $setting['title_fontsize']; ?>;
	<?php } ?>
	text-align: center;
	border: none;
	display: none;
}

#nice-featured<?php echo $module; ?> .box-product.nice-featured .price {
	left: 0;
	bottom: 0;
	text-align: center;
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .cart {
	right: 0;
	bottom: 0;
	width: 24%
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .fav {
	left: 51%;
	bottom: 0;
	width: 24%;
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .cart:hover, #nice-featured<?php echo $module; ?> .box-product.nice-featured .fav:hover, #nice-featured<?php echo $module; ?> .box-product.nice-featured .name:hover {
	background: #000;
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .cart, #nice-featured<?php echo $module; ?> .box-product.nice-featured .price, #nice-featured<?php echo $module; ?> .box-product.nice-featured .fav {
	<?php if ($setting['price_fontsize'] == 'auto') { ?>
	font-size: <?php echo round($setting['image_height'] / 10); ?>px;
	<?php } else { ?>
	font-size: <?php echo $setting['price_fontsize']; ?>;
	<?php } ?>
	line-height: <?php echo round($setting['image_height'] / 5); ?>px;
	display: none;
}

#nice-featured<?php echo $module; ?> .box-product.nice-featured div.button {
	width: 100%;
	height: <?php echo round($setting['image_height'] / 5); ?>px;
	background: transparent;
	border: none;
	padding: 0;
	margin: 0;
	cursor: pointer;
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .fav div.button {
	background: url('<?php echo HTTP_SERVER; ?>catalog/view/theme/default/image/nice-featured-fav<?php if (round($setting['image_height'] / 5) < 34) { echo '_16x16'; } ?>.png') no-repeat 50% 50%;
}
#nice-featured<?php echo $module; ?> .box-product.nice-featured .cart div.button {
	background: url('<?php echo HTTP_SERVER; ?>catalog/view/theme/default/image/nice-featured-cart<?php if (round($setting['image_height'] / 5) < 34) { echo '_16x16'; } ?>.png') no-repeat 50% 50%;
}
</style>
<?php if ($module == 0) { ?> 
<script>
var nice_featured_animation_duration = 500;
$(function() {
	$('.nice-featured-item').stop(true, true).hover(
		function() {
			$(".name", this).stop(true, true).slideDown(nice_featured_animation_duration);
			$(".fav", this).stop(true, true).slideDown(nice_featured_animation_duration);
			$(".price, .cart", this).stop(true, true).show(nice_featured_animation_duration);
		}, 
		function() {
			$(".name", this).stop(true, true).slideUp(nice_featured_animation_duration);
			$(".fav", this).stop(true, true).slideUp(nice_featured_animation_duration);
			$(".price, .cart", this).stop(true, true).hide(nice_featured_animation_duration);
		}
	);
});
</script>
<? } ?>