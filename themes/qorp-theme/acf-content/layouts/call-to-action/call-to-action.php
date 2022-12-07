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
?>

<div class="qorp-layouts qorp-layouts-cta cta">
	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="alignwide has-text-align-center op-br op-br--bg">
			<?php if ( $eyebrow ) : ?>
				<div class="eyebrow cta__eyebrow has-small-font-size fw-medium tt-u"><?php echo esc_html( $eyebrow ); ?></div>
			<?php endif; ?>
			<?php if ( $heading ) : ?>
				<h2 class="heading cta__heading fw-bold has-x-large-font-size tt-u"><?php echo esc_html( $heading ); ?></h2>
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
