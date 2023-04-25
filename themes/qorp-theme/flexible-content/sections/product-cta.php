<?php
/**
 * ACF: Flexible Content > Layouts > Product callout
 *
 * @package WordPress
 * @subpackage QORP
 */

$heading = $args['heading'];
$content = $args['content'];
$buttons = $args['buttons'];
$image   = $args['image'];

if ( ! $image ) {
	$image['url']    = get_template_directory_uri() . '/assets/images/product-cta.jpg';
	$image['alt']    = '';
	$image['height'] = 374;
	$image['width']  = 610;
}
?>

<div class="has-global-padding is-layout-constrained wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--xxl);margin-bottom:var(--wp--preset--spacing--xxl);">
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-layout-flex">
		<div class="wp-block-column is-vertically-aligned-center is-layout-flow" style="flex-basis:40%;padding:var(--wp--preset--spacing--lg);">
			<?php if ( $heading ) : ?>
				<h2 class="wp-block-heading"><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php if ( $content ) : ?>
				<?php echo wp_kses_post( $content ); ?>
			<?php endif; ?>

			<?php qorp_render_buttons( $buttons ); ?>
		</div><!-- .wp-block-column -->

		<div class="wp-block-column is-vertically-aligned-center is-layout-flow" style="flex-basis:60%">
			<figure class="wp-block-image alignright size-full">
				<img decoding="async" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" width="<?php echo esc_html( $image['width'] ); ?>" height="<?php echo esc_html( $image['height'] ); ?>" style="border-radius:var(--wp--custom--border-radius--lg);" />
			</figure>
		</div><!-- .wp-block-column -->
	</div><!-- .wp-block-columns -->
</div><!-- .wp-block-group -->
