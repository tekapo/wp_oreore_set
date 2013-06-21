<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package s_base
 */
?>

</div><!-- #main -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<?php do_action( 's_base_credits' ); ?>
		<?php echo_copyright( 'XXXX' ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>