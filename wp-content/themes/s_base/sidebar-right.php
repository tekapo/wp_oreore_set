<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package s_base
 */
?>
<div id="tertiary" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php related_by_post_tag(); ?>
</div><!-- #secondary -->
