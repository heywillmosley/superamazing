<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 *
 * @ingroup themeable
 */78
?>
<?php $e = new Element;
?>

<div class="pas">
<div class="item-wrapper">
    <div class="item-header">
        <div class="item-container-title">Grow Your Business</div>
    </div><!-- end item-container-header -->
        <div class="item-container">

		<?php // Setup for rendering
		$display = 'default';
		$filter_name = 'node_title';
		$view = views_get_view('collections');
		$view->set_display($display);
		
		$view_result = views_get_view_result('collections');
		foreach($view_result as $item){ 
		        $node = node_load($item->nid);
						$node_url =  url( 'node/' . $node->nid);
						//$image = file_create_url($node->field_image['und'][0]['uri']);
						$image = image_style_url('item_thumb', $node->field_image['und'][0]['uri']);
						?>
            
            <div class="item">
              <a href="<?php print $node_url; ?>" class="item-click"></a>
              <div class="item-cover">
                  <div class="item-cover-darken-on-hover"><a href="<?php print $node_url; ?>"></a></div>
                <div class="item-book-bind"></div>
                  <img class="item-cover-image item-cover-image-landscape" src="<?php echo $image; ?>" alt="">
              </div><!-- end item-cover -->
              <div class="item-details relative">
                  <div class="item-title"><a href="<?php print $node_url; ?>"><?php print $node->title; ?><span class="paragraph-end"></span></a></div>
      
                  <div class="item-rating-price-container">
                      <div class="item-rating hide">
                          <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                      </div><!-- end item-rating -->
                      <div class="item-price">
                          <div class="item-markdown"></div>
                          <a href="<?php print $node_url; ?>" class="btn btn-success btn-sm">FREE</a>
                      </div><!-- end item-price -->
                  </div><!-- end item-price-rating-container -->
                
              </div><!-- end item-details -->
          </div><!-- end item -->
		<?php }
		
		
		?>
		
		
 
            
        </div><!-- item-container -->
</div>