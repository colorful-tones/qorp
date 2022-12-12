<?php
/**
 * ACF: Flexible Content > Layouts > Trust Signals
 *
 * @package WordPress
 * @subpackage QORP
 */

$logos = $args['logo'];
?>

<div class="qorp-layouts qorp-layouts-trust-signals trust-signals" style="margin-top:var(--wp--preset--spacing--lg);margin-bottom:var(--wp--preset--spacing--lg);">
	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);border:var(--wp--custom--border-transparent);border-radius:var(--wp--custom--border-radius--lg);">
			<h2 class="has-text-align-center fw-bold has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--md)">Trusted by leading organizations</h2>

			<?php if ( $logos ) : ?>
				<div class="is-layout-flex" style="justify-content:center;gap:var(--wp--preset--spacing--md);">
					<?php foreach ( $logos as $logo ) : ?>
						<img style="filter: grayscale(100%);" src="<?php echo esc_url( $logo['logo']['url'] ); ?>" alt="<?php echo esc_html( $logo['logo']['alt'] ); ?>" width="<?php echo esc_html( $logo['logo']['width'] ); ?>" height="<?php echo esc_html( $logo['logo']['height'] ); ?>" />
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div><!-- .qorp-layouts .qorp-layouts-cta -->
