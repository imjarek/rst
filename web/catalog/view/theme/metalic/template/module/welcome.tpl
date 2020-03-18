<div class="welcome"><?php echo $heading_title; ?></div>
<?php if (strpos($message, '<p>') === false) { ?>
	<p><?php echo $message; ?></p>
<?php } else { ?>
	<?php echo $message; ?>
<?php } ?>
