<?php
/**
 * ACF: Flexible Content > Layouts > Related Posts
 *
 * @package WordPress
 * @subpackage QORP
 */

$related_posts = $args['posts'];

if ( ! $related_posts ) {
	return;
}
?>

<div class="qorp-layouts qorp-layouts-related-posts related-posts" style="margin-top:var(--wp--preset--spacing--lg);margin-bottom:var(--wp--preset--spacing--lg);">
	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="wp-block-columns is-layout-flex alignwide">
			<?php foreach ( $related_posts as $post ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
				<?php setup_postdata( $post ); ?>
				<div class="is-layout-flow wp-block-column">
					<div class="entry-header has-base-color has-link-color">
						<figure class="br-lg" style="--aspect-ratio: 3 / 2;margin-bottom: 0;border-radius:var(--wp--custom--border-radius--lg);">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							<?php else : ?>
								<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/post-thumbnail-fallback.png" alt="<?php the_title(); ?>" height="374" width="567" />
							<?php endif; ?>
						</figure>
						<h3 class="entry-title fw-semibold has-x-large-font-size" style="align-self:end;padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-top:var(--wp--preset--spacing--sm);"><a href="<?php the_permalink(); ?>" class="related-posts__link" style="text-decoration:none;"><?php the_title(); ?></a></h3>
					</div>
					<div class="is-nowrap is-layout-flex">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), '50', '' ); ?>
						<div class="has-small-font-size">
							<p style="margin-top:0;margin-bottom:0;"><?php the_author_link(); ?></p>
							<p style="margin-top:0;margin-bottom:0;"><?php echo get_the_date( 'F j, Y' ); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div><!-- .qorp-layouts .qorp-layouts-cta -->
