<?php
/**
 * Template part for displaying ACF PRO Team Member meta.
 *
 * @package WordPress
 * @subpackage QORP
 */

if ( have_rows( 'qorp_team_category' ) ) :
	echo '<div class="wp-block-group has-global-padding is-layout-constrained alignwide" style="margin-bottom:var(--wp--preset--spacing--lg);">';

	while ( have_rows( 'qorp_team_category' ) ) :
		the_row();

		$team_category = get_sub_field( 'team_category' );

		echo '<h2>' . esc_html( $team_category ) . '</h2>';

		if ( have_rows( 'qorp_team_member' ) ) :
			echo '<div class="wp-block-columns is-layout-flex" style="margin-bottom:var(--wp--preset--spacing--md);">';

			while ( have_rows( 'qorp_team_member' ) ) :
				the_row();

				$details = get_sub_field( 'details' );
				$image   = get_sub_field( 'photo' );

				echo '<div class="wp-block-column is-layout-flow" style="flex-basis:33.33%;">';
				echo '<figure class="wp-block-image size-full">';
				echo wp_get_attachment_image( $image, 'full' );
				echo '</figure>';
				echo '<p class="has-medium-font-size" style="margin-top:var(--wp--preset--spacing--xxs);margin-bottom:0">' . esc_html( $details['first_name'] ) . ' ' . esc_html( $details['last_name'] ) . '</p>';
				echo '<p class="has-small-font-size has-primary-color has-text-color" style="margin-top:0;margin-bottom:0">' . esc_html( $details['position'] ) . '</p>';
				echo '</div>';
			endwhile;

			echo '</div>';
		endif;

	endwhile;

	echo '</div>';
endif;
