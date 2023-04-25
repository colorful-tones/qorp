<?php
/**
 * Plugin Name:       Qorp plugin
 * Description:       An example plugin for a fictitous client site using ACF.
 * Requires at least: 6.0
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Damon Cook
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       qorp-acf
 *
 * @package           qorp-acf
 */

/**
 * Set custom ACF JSON save point.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/#saving-explained
 *
 * @param string  $path Existing, incoming path.
 *
 * @return string $path New, outgoing path.
 */
function qorp_acf_json_save_point( $path ) {
	// Update ACF JSON save path.
	$path = __DIR__ . '/acf-json';

	return $path;
}
add_filter( 'acf/settings/save_json', 'qorp_acf_json_save_point' );

/**
 * Set a custom ACF JSON load path.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/#loading-explained
 *
 * @param array  $paths Existing, incoming path.
 *
 * @return array $paths New, outgoing path.
 */
function qorp_acf_json_load_point( $paths ) {
	// Append our new path.
	$paths[] = __DIR__ . '/acf-json';

	return $paths;
}
add_filter( 'acf/settings/load_json', 'qorp_acf_json_load_point' );

function qorp_acf_load_assets() {
	$dir = plugin_dir_url( __FILE__ );

	wp_enqueue_script( 'qorp-acf', $dir . '/assets/js/acf.js', array( 'acf-input' ), '0.1.0', false );
}
add_action( 'enqueue_block_editor_assets', 'qorp_acf_load_assets' );
