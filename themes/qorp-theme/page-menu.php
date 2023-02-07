<?php
/**
 * Page: menu
 *
 * @package WordPress
 * @subpackage QORP
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );
	?>

	<div class="qorp-menu" style="margin-top:var(--wp--preset--spacing--lg);margin-bottom:var(--wp--preset--spacing--lg);">
		<div class="has-global-padding is-layout-constrained wp-block-group alignfull">
			<div class="alignwide css-cols">
				<?php
				// ACF - parent repeater fields.
				$menu_categories = get_field( 'qorp_menu_category' );

				if ( $menu_categories ) :
					// Grab each menu section, e.g. Appetizers.
					foreach ( $menu_categories as $menu_category ) :
						?>
						<div class="menu-category" style="margin-bottom: var(--wp--preset--spacing--lg);">
							<?php
							// Each section's menu category name, e.g. Appetizers.
							$menu_category_name = $menu_category['qorp_menu_category_name'];
							// An array of menu items for each menu category.
							$menu_category_items = $menu_category['qorp_menu_item'];

							if ( $menu_category_name && $menu_category_items ) :
								?>
								<h2 style="margin-top: 0;"><?php echo esc_html( $menu_category_name ); ?></h2>

								<?php
								foreach ( $menu_category_items as $menu_item ) :
									$menu_item_title          = $menu_item['qorp_title'];
									$menu_item_price          = $menu_item['qorp_price'];
									$menu_item_description    = $menu_item['qorp_description'];
									$menu_item_diet_allergens = $menu_item['qorp_diet_allergens'];
									?>

									<p class="menu-title" style="margin-bottom: 0;"><strong><?php echo esc_html( $menu_item_title ); ?></strong> <span>– <?php echo esc_html( $menu_item_price ); ?></span></p>
									<p class="menu-description" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--xs);"><?php echo esc_html( $menu_item_description ); ?></p>

									<?php
									if ( $menu_item_diet_allergens ) :
										?>
										<p class="has-small-font-size has-primary-color menu-allergens" style="margin-top: 0;">
											<?php
											foreach ( $menu_item_diet_allergens as $diet_allergen ) :
												?>
												<span><?php echo esc_html( $diet_allergen ); ?></span>
												<?php
										endforeach;
											?>
										</p>
										<?php
									endif;
								endforeach;
							endif;
							?>
							</div><!-- .menu-category -->
							<?php
					endforeach;
				endif;
				?>
			</div><!-- .alignwide -->
		</div><!-- .alignfull -->
	</div><!-- .qorp-menu -->

	<?php
endwhile; // End of the loop.

get_footer();
