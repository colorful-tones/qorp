<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage QORP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="wp-block-group is-layout-constrained alignfull has-base-color entry-header" style="max-height: 630px;">
		<figure class="entry-thumbnail alignfull">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php else : ?>
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/hero1.png" alt="<?php the_title(); ?>" height="631" width="1920" />
			<?php endif; ?>
		</figure>
		<?php the_title( '<h1 class="entry-title has-global-padding is-vertically-aligned-center alignwide has-xx-large-font-size fw-bold" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);align-self:center;">', '</h1>' ); ?>
	</header>

	<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
		<div class="wp-block-columns is-layout-flex alignwide" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);gap:var(--wp--preset--spacing--lg);">
			<div class="is-layout-flow wp-block-column" style="flex-basis:20%">
				<div class="is-nowrap is-layout-flex">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), '50', '' ); ?>
					<div class="has-small-font-size">
						<p style="margin-top:0;margin-bottom:0;"><?php the_author_link(); ?></p>
						<p style="margin-top:0;margin-bottom:0;"><?php the_date(); ?></p>
					</div>
				</div>
			</div>

			<div class="is-layout-flow wp-block-column" style="flex-basis:80%">
				<div class="entry-content css-cols">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>
	</div>

</div>

</article><!-- #post-<?php the_ID(); ?> -->
