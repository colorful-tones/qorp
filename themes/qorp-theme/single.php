<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	$layouts = get_field( 'layouts' );

	if ( $layouts ) :
		foreach ( $layouts as $layout ) :
			$template = str_replace( '_', '-', $layout['acf_fc_layout'] );
			get_template_part( 'acf-content/layouts/' . $template . '/' . $template, '', $layout );
		endforeach;
	endif;

endwhile; // End of the loop.

get_footer();
