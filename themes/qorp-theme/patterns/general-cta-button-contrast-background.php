<?php
/**
 * Title: Call-to-action with text, button.
 * Slug: frost/general-cta-button-contrast-background
 * Categories: frost-general
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"100px","bottom":"100px","right":"30px","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.5">Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"25px","right":"25px"}},"border":{"radius":"0px"}},"className":"is-style-fill-base"} -->
<div class="wp-block-button is-style-fill-base"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px"><?php echo esc_html__( 'Let’s Get Started', 'frost' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
