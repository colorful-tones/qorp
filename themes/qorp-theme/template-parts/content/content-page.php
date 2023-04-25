<?php
/**
 * Template part for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage QORP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="wp-block-group is-layout-constrained alignfull has-base-color entry-header" style="max-height: 580px;">
		<figure class="entry-thumbnail alignfull">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php else : ?>
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/hero1.png" alt="<?php the_title(); ?>" height="631" width="1920" />
			<?php endif; ?>
		</figure>
		<?php the_title( '<h1 class="entry-title has-global-padding is-vertically-aligned-center alignwide has-xx-large-font-size fw-bold" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);align-self:center;">', '</h1>' ); ?>
	</header>

	<?php the_content(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
