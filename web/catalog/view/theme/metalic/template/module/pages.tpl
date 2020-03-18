<div class="box">
  <div class="top"><img src="catalog/view/theme/default/image/pages.png" alt="" /><?php echo $heading_title; ?></div>
  <div id="pages" class="middle">
    <ul>
      <?php foreach ($pages as $page) { ?>
      <li><a href="<?php echo str_replace('&', '&amp;', $page['href']); ?>"><?php echo $page['title']; ?></a></li>
      <?php } ?>
    </ul>
  </div>
  <div class="bottom">&nbsp;</div>
</div>