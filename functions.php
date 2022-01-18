<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */

/**
 * Themes do not require functions.php to work. But you can use it to cover things that full site editing can not do yet.
 * Include this file if you need to: Enqueue styles, JavaScript or fonts, create block patterns, or use hooks that are not available for blocks.
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function fse_styles() {
	wp_enqueue_style( // phpcs:ignore
		'fse-style',
		get_stylesheet_uri(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'fse_styles' );

if ( ! function_exists( 'fse_setup' ) ) {
	/**
	 * The support to add block styles.
	 * Since Gutenberg 11.8, the following theme support is automatically enabled for block themes:
	 *    post-thumbnails, editor-styles, responsive-embeds, automatic-feed-links, html5 styles, and html5 scripts
	 *
	 * We have not used add_theme_support( 'title-tag' ) because the title tag is already rendered with full site editing.
	 * Similarly, you do not need to register widget areas, menus, add support for a custom logo, custom header, or colors.
	 * If you want to add specific image sizes or set the post thumbnail size, you can still do that in the setup function.
	 * Later you will add support for wide and full-width blocks and color palettes, gradients, and font sizes via the theme.json file.
	 */
	function fse_setup() {
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'fse_setup' );
