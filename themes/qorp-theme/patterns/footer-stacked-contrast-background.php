<?php
/**
 * Title: Footer with heading, text, button.
 * Slug: frost/footer-stacked-contrast-background
 * Categories: frost-footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"100px","bottom":"40px"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:100px;padding-bottom:40px">
<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"max-48"} -->
<h2 class="has-text-align-center has-max-48-font-size" id="let-s-connect" style="font-style:normal;font-weight:400;margin-bottom:20px"><?php echo esc_html__( 'Let’s Connect', 'frost' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-base"} -->
<div class="wp-block-button is-style-outline-base"><a class="wp-block-button__link no-border-radius" href="#"><?php echo esc_html__( 'Get in Touch', 'frost' ); ?> →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:spacer {"height":100} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC · <a href="#"><?php echo esc_html__( 'Contact Us', 'frost' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
