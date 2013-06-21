<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package s_base
 */
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php echo_child_pages_titles(); ?>
	<?php do_action( 'before_sidebar' ); ?>
</div><!-- #secondary -->
