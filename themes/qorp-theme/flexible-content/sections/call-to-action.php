<?php
/**
 * ACF: Flexible Content > Layouts > Call to Action
 *
 * @package WordPress
 * @subpackage QORP
 */

$heading     = $args['heading'];
$eyebrow     = $args['eyebrow'];
$button_text = $args['button']['button_text'];
$button_link = $args['button']['button_link'];

$bg_img     = get_template_directory_uri() . '/assets/images/cta-bg.png';
$bg_img_css = 'background-image: url(' . esc_url( $bg_img ) . '); background-size: cover; background-repeat: no-repeat; background-position: center center;';
?>

<div class="qorp-layouts qorp-layouts--cta" style="margin-top:var(--wp--preset--spacing--xxl);margin-bottom:var(--wp--preset--spacing--xxl);">
	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="alignwide has-text-align-center" style="<?php echo esc_attr( $bg_img_css ); ?>padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl);border-radius:var(--wp--custom--border-radius--lg)">
			<?php if ( $eyebrow ) : ?>
				<div class="has-x-small-font-size fw-medium tt-u"><?php echo esc_html( $eyebrow ); ?></div>
			<?php endif; ?>
			<?php if ( $heading ) : ?>
				<h2 class="heading cta__heading fw-bold tt-u"><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>
			<?php if ( $button_text && $button_link ) : ?>
				<div class="is-content-justification-center is-layout-flex wp-block-buttons">
					<div class="wp-block-button">
						<a href="<?php echo esc_url( $button_link ); ?>" class="wp-block-button__link has-secondary-background-color has-background wp-element-button"><?php echo esc_html( $button_text ); ?></a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div><!-- .qorp-layouts .qorp-layouts-cta -->
