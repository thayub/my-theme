<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Basic Bootstrap
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function basic_bootstrap_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'basic_bootstrap_jetpack_setup' );
