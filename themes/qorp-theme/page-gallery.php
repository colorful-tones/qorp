<?php
/**
 * Page: Gallery
 *
 * @package WordPress
 * @subpackage QORP
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-page' );
	?>

	<style>
		.acf-gallery {
			display:grid;
			grid-gap:1.5rem;
			grid-template-columns:repeat(auto-fill, minmax(8ch, 1fr));
			margin:var(--wp--preset--spacing--xl) auto;
			max-width:var(--wp--style--global--content-size);
		}
		.acf-gallery a img {
			display: block;
			filter: sepia(12%) grayscale(80%);
			height: auto;
			transition: filter 0.7s ease;
			width: 100%;
		}
		.acf-gallery a:hover img {
			filter: sepia(0) grayscale(0);
		}
	</style>

	<div class="acf-gallery">
		<?php
		// ACF - Gallery fields.
		$images = get_field( 'gallery' );

		if ( $images ) :
			// Grab each image.
			foreach ( $images as $image ) :
				$image_id      = $image['ID'];
				$image_src     = $image['url'];
				$image_caption = $image['caption'];
				?>
					<a href="<?php echo esc_url( $image_src ); ?>" title="<?php echo esc_html( $image_caption ); ?>" class="thickbox">
						<?php echo wp_get_attachment_image( $image_id, 'thumbnail' ); ?>
					</a>
					<?php
			endforeach;
		endif;
		?>
	</div><!-- .acf-gallery -->

	<?php
	// ACF - Flexible Content fields.
	$sections = get_field( 'qorp_post_sections' );

	if ( $sections ) :
		foreach ( $sections as $section ) :
			$template = str_replace( '_', '-', $section['acf_fc_layout'] );
			get_template_part( 'flexible-content/sections/' . $template, '', $section );
		endforeach;
	endif;

endwhile; // End of the loop.

get_footer();
