<?php
/**
 * This file adds functions to the Qorp WordPress theme.
 *
 * @package WordPress
 * @subpackage QORP
 */

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

/**
 * Enqueue Thickbox dependencies for lightbox.
 *
 * @link https://developer.wordpress.org/reference/functions/add_thickbox/
 *
 * @return void
 */
function qorp_enqueue_thickbox() {
	// Only on the 'gallery' page.
	if ( is_page( 'gallery' ) ) {
		wp_enqueue_script( 'thickbox' );
		wp_enqueue_style( 'thickbox' );
	}
}
add_action( 'wp_enqueue_scripts', 'qorp_enqueue_thickbox' );