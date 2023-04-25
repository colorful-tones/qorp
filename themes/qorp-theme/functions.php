<?php
/**
 * This file adds functions to the Qorp WordPress theme.
 *
 * @package WordPress
 * @subpackage QORP
 */

require_once __DIR__ . '/inc/disable-emojis.php';

// Enqueue style sheet.
function qorp_enqueue_style_sheet() {
	wp_enqueue_style( 'qorp-theme', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'qorp-theme', get_template_directory_uri() . '/dist/frontend.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'qorp_enqueue_style_sheet' );

add_filter( 'should_load_separate_core_block_assets', '__return_false' );

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

/**
 * Use ACF Component: Button field to
 * create FSE Buttons blocks.
 *
 * @param array $buttons ACF fields.
 * @return void
 */
function qorp_render_buttons( $buttons = array() ) {
	// Make sure we have $args and array.
	if ( empty( $buttons ) ) {
		return;
	}

	?>

	<div class="wp-block-buttons is-layout-flex">
		<?php
		foreach ( $buttons as $button ) {
			qorp_render_button( $button );
		}
		?>
	</div><!-- .wp-block-buttons .is-layout-flex -->
	<?php
}

/**
 * Use ACF Component: Button field to
 * create FSE Button blocks.
 *
 * @param array $button ACF fields.
 * @return void
 */
function qorp_render_button( $button = array() ) {
	if ( empty( $button ) ) {
		return;
	}

	$button        = $button['button'];
	$button_text   = $button['text'];
	$button_url    = $button['link'];
	$button_class  = $button['style'] ? 'is-style-' . $button['style'] : 'is-style-fill';
	$button_color  = $button['color'];
	$button_styles = '';

	if ( 'is-style-fill' === $button_class ) {
		$button_styles .= 'style="background-color:' . $button_color . '"';
	} else {
		$button_styles .= 'style="color:' . $button_color . '"';
	}
	?>

	<div class="wp-block-button <?php echo esc_attr( $button_class ); ?>">
		<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( $button_url ); ?>" <?php echo $button_styles; // phpcs:ignore ?>><?php echo esc_html( $button_text ); ?></a>
	</div>

	<?php
}
