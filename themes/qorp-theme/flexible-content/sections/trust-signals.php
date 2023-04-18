<?php
/**
 * ACF: Flexible Content > Layouts > Trust Signals
 *
 * @package WordPress
 * @subpackage QORP
 */

$logos = $args['logo'];
?>

<div class="has-global-padding is-layout-constrained wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--xxl);margin-bottom:var(--wp--preset--spacing--xxl);">
	<div class="alignwide" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl);border:var(--wp--custom--border-transparent);border-radius:var(--wp--custom--border-radius--lg);">
		<h2 class="has-text-align-center fw-bold has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xl)">Trusted by leading organizations</h2>

		<?php if ( $logos ) : ?>
			<div class="is-layout-flex" style="justify-content:center;gap:var(--wp--preset--spacing--xl);">
				<?php foreach ( $logos as $logo ) : ?>
					<img style="filter: grayscale(100%);" src="<?php echo esc_url( $logo['logo']['url'] ); ?>" alt="<?php echo esc_html( $logo['logo']['alt'] ); ?>" width="<?php echo esc_html( $logo['logo']['width'] ); ?>" height="<?php echo esc_html( $logo['logo']['height'] ); ?>" />
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</div><!-- .wp-block-group -->
