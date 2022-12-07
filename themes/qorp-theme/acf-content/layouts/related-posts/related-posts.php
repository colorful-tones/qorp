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
//var_dump($posts);
?>

<div class="qorp-layouts qorp-layouts-related-posts related-posts">
	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="wp-block-columns alignwide">
			<?php foreach ( $related_posts as $post ) : ?>
				<?php setup_postdata( $post ); ?>
				<div class="is-layout-flow wp-block-column">
					<figure class="br">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php else : ?>
							<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/post-thumbnail-fallback.png" alt="<?php the_title(); ?>" height="374" width="567" />
						<?php endif; ?>
					</figure>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span><?php the_date(); ?></span>
				</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div><!-- .qorp-layouts .qorp-layouts-cta -->
