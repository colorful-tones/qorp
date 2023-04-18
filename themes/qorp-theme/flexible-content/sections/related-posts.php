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

<div class="has-global-padding is-layout-constrained wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--xxl);margin-bottom:var(--wp--preset--spacing--xxl);">
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
					<h3 class="entry-title fw-semibold" style="align-self:end;padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-top:var(--wp--preset--spacing--sm);"><a href="<?php the_permalink(); ?>" class="related-posts__link" style="text-decoration:none;"><?php the_title(); ?></a></h3>
				</div>
				<div class="is-nowrap is-layout-flex" style="gap:var(--wp--preset--spacing--xxs);">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), '50', '' ); ?>
					<div class="has-x-small-font-size">
						<p class="fw-semibold" style="margin-top:0;margin-bottom:0;"><?php the_author_link(); ?></p>
						<p style="margin-top:0;margin-bottom:0;"><?php echo get_the_date( 'F j, Y' ); ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div><!-- .wp-block-group -->
