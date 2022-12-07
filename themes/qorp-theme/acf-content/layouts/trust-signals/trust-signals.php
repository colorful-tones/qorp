<?php
/**
 * ACF: Flexible Content > Layouts > Trust Signals
 *
 * @package WordPress
 * @subpackage QORP
 */

$logos = $args['logo'];
?>

<div class="qorp-layouts qorp-layouts-trust-signals trust-signals">
	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--md);">
			<h2 class="has-text-align-center fw-bold has-large-font-size">Trusted by leading organizations</h2>

			<?php if ( $logos ) : ?>
				<div class="is-layout-flex">
					<?php foreach ( $logos as $logo ) : ?>
						<img style="filter: grayscale(100%);" src="<?php echo esc_url( $logo['logo']['url'] ); ?>" alt="<?php echo esc_html( $logo['logo']['alt'] ); ?>" width="<?php echo esc_html( $logo['logo']['width'] ); ?>" height="<?php echo esc_html( $logo['logo']['height'] ); ?>" />
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div><!-- .qorp-layouts .qorp-layouts-cta -->
