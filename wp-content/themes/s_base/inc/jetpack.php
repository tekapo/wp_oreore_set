<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package s_base
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function s_base_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 's_base_jetpack_setup' );
