<?php if (count($currencies) > 1) { 

	/* Active currency must allway be first... */
	foreach ($currencies as $key => $currency) { 
				
		if ($currency['code'] == $currency_code) { 
			unset($currencies[$key]);
			array_unshift($currencies, $currency);
		}
					
	} 
?>

    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="currencies-form">
		<div id="currency"><span style="display: none;"><?php echo $text_currency; ?>: </span>
			<div id="currencies" name="currencies">
			<?php foreach ($currencies as $currency) { ?>
				<? if ($currency['symbol_left']) {
					$symbol = '('.$currency['symbol_left'].')';
				} elseif ($currency['symbol_right']) {
					$symbol = '('.$currency['symbol_right'].')';
				} else {
					$symbol = '';
				}
				?>
            	<?php if ($currency['code'] == $currency_code) { ?>
                    <div class="option selected" data-value="<?php echo $currency['code']; ?>"><?php echo $currency['title']; ?> <?php echo $symbol; ?></div>
					
			<div class="dropDownCurrencyList">
			
            	<?php } else {  ?>
                    <div class="option unselected" data-value="<?php echo $currency['code']; ?>"><?php echo $currency['title']; ?> <?php echo $symbol; ?></div>
				<?php } ?>
            <?php } ?>
			
			</div>
            </div>
            <input type="hidden" name="currency_code" value="" />
            <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
		</div>
	</form>
<?php } ?>
<script>
$('#currencies .option.unselected').click(function() {
	$('input[name=\'currency_code\']').val($(this).attr('data-value')); 
	$('#currencies-form').submit();
});

var windowWidth = $(document).width();

if (windowWidth > 960) {
	$('#currencies').hover(
		function() {
			$('#currencies .dropDownCurrencyList').stop(true, true).slideDown(300);
			$('.option.selected').addClass('hover');
		},
		function() {
			$('#currencies .dropDownCurrencyList').stop(true, true).slideUp(150);
			$('.option.selected').removeClass('hover');
		}
	);
} else {
	$('.dropDownCurrencyList').show();
}


$(window).resize(function() {
	var windowWidth = $(document).width();
	
	if (windowWidth > 960) {
		$('.option.selected').css('display', 'block');
		$('#currencies .dropDownCurrencyList, ').css('display', 'none');
		$('#currencies').hover(
			function() {
				$('#currencies .dropDownCurrencyList').stop(true, true).slideDown(300);
				$('.option.selected').addClass('hover');
			},
			function() {
				$('#currencies .dropDownCurrencyList').stop(true, true).slideUp(150);
				$('.option.selected').removeClass('hover');
			}
		);
	} else {
		$('.dropDownCurrencyList').show();
		$('#currencies').unbind();
		$('#currencies .dropDownCurrencyList, .option.selected').css('display', 'inline');
	}
});


</script>
