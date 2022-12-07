<?php
/**
 * Plugin Name: Qorp plugin
 * Description: Separate functionality from appearance. Qorp's custom stuff.
 * Version: 1.0.0
 */

// Register our block's fields into ACF.
add_action(
	'acf/include_fields',
	function() {
		$path                     = __DIR__ . '/acf-fields/layouts.json';
		$field_json               = json_decode( file_get_contents( $path ), true ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
		$field_json['location']   = array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
				),
			),
		);
		$field_json['local']      = 'json';
		$field_json['local_file'] = $path;
		acf_add_local_field_group( $field_json );
	}
);
