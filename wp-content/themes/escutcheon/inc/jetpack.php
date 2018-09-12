<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Escutcheon
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @since escutcheon 1.0
 */
function escutcheon_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'escutcheon_infinite_scroll_render',
		'footer'    => 'page',
	) );

	add_theme_support( 'jetpack-social-menu' );

	add_theme_support( 'jetpack-responsive-videos' );

} // end function escutcheon_jetpack_setup
add_action( 'after_setup_theme', 'escutcheon_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 *
 * @since escutcheon 1.0
 */
function escutcheon_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'components/content', get_post_format() );
	}
} // end function escutcheon_infinite_scroll_render

/**
 * Add support for the Site Logo
 *
 * @since escutcheon 1.0
 */
function escutcheon_site_logo_init() {
	add_image_size( 'escutcheon-logo', 200, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'escutcheon-logo' ) );
}
add_action( 'after_setup_theme', 'escutcheon_site_logo_init' );

/**
 * Return early if Site Logo is not available.
 *
 * @since escutcheon 1.0
 */
function escutcheon_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
 * Return early if Social Menu is not available.
 */
function escutcheon_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
} // end function escutcheon_social_menu