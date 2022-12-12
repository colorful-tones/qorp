<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

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
