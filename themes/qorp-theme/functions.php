<?php
/**
 * This file adds functions to the Qorp WordPress theme.
 *
 * @package WordPress
 * @subpackage QORP
 */

if ( ! function_exists( 'qorp_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @return void
	 */
	function qorp_theme_setup() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		remove_theme_support( 'block-templates' );

	}
}
add_action( 'after_setup_theme', 'qorp_theme_setup' );

// Enqueue style sheet.
function qorp_enqueue_style_sheet() {
	wp_enqueue_style( 'qorp-theme', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'qorp-theme', get_template_directory_uri() . '/dist/frontend.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'qorp_enqueue_style_sheet' );

/**
 * Register block styles.
 */
function qorp_register_block_styles() {

	$block_styles = array(
		'core/list' => array(
			'no-disc' => __( 'No Disc', 'qorp' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'qorp_register_block_styles' );
