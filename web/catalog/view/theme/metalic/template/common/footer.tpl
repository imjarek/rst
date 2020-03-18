<?php
	/*
	* Loading Theme Settings
	*/
	$metallic_theme = $this->config->get('metallic_theme');
	$language_id = (int)$this->config->get('config_language_id');
?>

<div id="footer">
  <?php if ($informations) { ?>
  <div class="column">
    <h3><?php echo $text_information; ?></h3>
    <ul>
      <?php foreach ($informations as $information) { ?>
      <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
      <?php } ?>
	  <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
      <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
    </ul>
  </div>
  <?php } ?>
  <div class="column">
    <h3><?php echo $text_extra; ?></h3>
    <ul>
      <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
	  <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
      <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
      <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
      <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
    </ul>
  </div>
  <div class="column">
	 <?php if (isset($metallic_theme['about_title'][$language_id]) and !empty($metallic_theme['about_title'][$language_id])) { ?>
		<h3><?php echo $metallic_theme['about_title'][$language_id]; ?></h3>
	 <?php } ?>
	<div class="text">
	 <?php if (isset($metallic_theme['about_text'][$language_id]) and !empty($metallic_theme['about_text'][$language_id])) { ?>
		<?php echo htmlspecialchars_decode($metallic_theme['about_text'][$language_id]); ?>
	 <?php } ?>
	</div>
  </div>
  <div class="column">
  <?php if (false) { // switch to true to show "Account" block ?>
    <h3><?php echo $text_account; ?></h3>
    <ul>
      <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
      <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
      <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
      <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
    </ul>
  <?php } elseif (isset($metallic_theme['social_buttons_title']) and !empty($metallic_theme['social_buttons_title'])) { ?> 
	 <?php if (isset($metallic_theme['social_buttons_title'][$language_id]) and !empty($metallic_theme['social_buttons_title'][$language_id])) { ?>
		<h3><?php echo $metallic_theme['social_buttons_title'][$language_id]; ?></h3>
	 <?php } ?>
	 <div class="social-icons">
		<!-- View http://grawl.github.com/Grands/ for more icons -->
		<?php 
		if (isset($metallic_theme['icons']) and !empty($metallic_theme['icons'])) {
			foreach ($metallic_theme['icons'] as $icon) {
				if (isset($icon['href']) and !empty($icon['href']) and $icon['href'] != 'http://') {
					echo '<a style="font-size: 50px; line-height: 50px;" href="'.htmlspecialchars_decode($icon['href']).'" class="tipsy_class '.htmlspecialchars_decode($icon['class']).'" title="'.htmlspecialchars_decode($icon['title']).'"></a>';
				} else {
					echo '<span style="font-size: 50px; line-height: 50px;" class="tipsy_class '.htmlspecialchars_decode($icon['class']).'" title="'.htmlspecialchars_decode($icon['title']).'"></span>';
				}
			}
		}
		?>
	 </div>
	 <?php if (isset($metallic_theme['contacts_title'][$language_id]) and !empty($metallic_theme['contacts_title'][$language_id])) { ?>
	 <h3><?php echo $metallic_theme['contacts_title'][$language_id]; ?></h3>
	 <?php } ?>
	 <?php if (isset($metallic_theme['contacts_skype']) and !empty($metallic_theme['contacts_skype'])) { ?>
		 <div class="contact-row">
			<span href="#" data="data-icon" data-icon="&#xe00a;" class="icon" title="rss"></span> <?php echo $metallic_theme['contacts_skype']; ?><br />
		 </div>
	 <?php } ?>
	 <?php if (isset($metallic_theme['contacts_address']) and !empty($metallic_theme['contacts_address'])) { ?>
		 <div class="contact-row">
			<span href="#" data="data-icon" data-icon="&#xe023;" class="icon" title="rss"></span> <?php echo htmlspecialchars_decode($metallic_theme['contacts_address']); ?>
		 </div>
	 <?php } ?>
	 <div class="payments"><img src="catalog/view/theme/metalic/image/payments.png" /></div>
  <?php } ?>
  </div>

  	<div id="powered">
		<?php if (isset($metallic_theme['contacts_copyright']) and !empty($metallic_theme['contacts_copyright'])) { ?>
			<?php echo htmlspecialchars_decode($metallic_theme['contacts_copyright']); ?>
		<?php } ?>
	</div>
	
</div>
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>