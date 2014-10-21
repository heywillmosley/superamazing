<?php

/**
 * @file
 * Display Suite 3 column 25/50/25 template.
 */
?>


  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

<div class="media">
	<div class="pull-left">
  	<?php print $left; ?>
  </div><!-- end pull-left -->
  <div class="media-body">
  	<?php print $middle; ?>
    <a class="product-btn" href="<?php print url('products'); ?>">See More Products</a>
  </div><!-- end media-body -->
</div><!-- end media -->

