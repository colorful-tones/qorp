<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-page' );

	get_template_part( 'template-parts/team-members' );

endwhile; // End of the loop.

get_footer();
