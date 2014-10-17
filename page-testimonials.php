<?php
/**
 *	The template for displaying Page Testimonials.
 *
 *	@package ThemeIsle
 *
 *	Template Name: Testimonials
 */
get_header();
?>
<div class="wrap">
	<div id="testimonials">
		<div class="title-border">
			<h3>Testimonials</h3>
		</div><!--/.title-border-->

		<div class="testimonials-boxes">

			<?php

				$args = array (
					'post_type'              => 'testimonials',
					'posts_per_page'         => '3',
					'ignore_sticky_posts'    => true,
				);

				$testimonials = new WP_Query( $args );

				if ( $testimonials->have_posts() ) {
					while ( $testimonials->have_posts() ) {
						$testimonials->the_post();

						$testimonials_position = get_post_meta($post->ID, 'ti_testimonials_position', true);
						$testimonials_company_name = get_post_meta($post->ID, 'ti_testimonials_company_name', true);
						$testimonials_company_url = get_post_meta($post->ID, 'ti_testimonials_company_url', true);

						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

						<div class="testimonials-box">
							<div class="testimonial-box-entry">
								<?php the_excerpt(); ?>
							</div><!--/.testimonials-boxes-->
							<span></span>
							<div class="testimonial-box-detail">
								<?php
									if ( $featured_image != NULL ) {
										echo '<img src="' . $featured_image[0] . '" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />';
									}
								?>
								<b>
									<?php
									if ( $testimonials_company_url != NULL ) { ?>
										<a href="<?php echo $testimonials_company_url; ?>" title="<?php the_title(); ?>">
											<?php
											if ( ( $testimonials_position && $testimonials_company_name ) == NULL ) {
												$line = '';
											} else {
												$line = ', ';
											}
											the_title();
											echo $line;
											?>
										</a>
									<?php } else {
										the_title();
									}
									?>
								</b><br />
								<?php
								if ( ( $testimonials_position && $testimonials_company_name ) == NULL ) {
									$at = '';
								} else {
									$at = ' at ';
								}

								echo $testimonials_position;
								echo $at;

								if ( $testimonials_company_url != false ) {
									echo '<a href="'. $testimonials_company_url .'" title="'. $testimonials_company_name .'">'. $testimonials_company_name .'</a>';
								} else {
									echo $testimonials_company_name;
								}
								?>
							</div><!--/.testimonial-box-detail-->
						</div><!--/.testimonials-box-->

					<?php }
				} else {
					echo '<p>No posts found.</p>';
				}

				wp_reset_postdata();

			?>

		</div><!--/.testimonials-boxes-->

		<div class="testimonials-boxes">

			<?php

				$args = array (
					'post_type'              => 'testimonials',
					'posts_per_page'         => '3',
					'ignore_sticky_posts'    => true,
					'offset'				 => '3',
				);

				$testimonials = new WP_Query( $args );

				if ( $testimonials->have_posts() ) {
					while ( $testimonials->have_posts() ) {
						$testimonials->the_post();

						$testimonials_position = get_post_meta($post->ID, 'ti_testimonials_position', true);
						$testimonials_company_name = get_post_meta($post->ID, 'ti_testimonials_company_name', true);
						$testimonials_company_url = get_post_meta($post->ID, 'ti_testimonials_company_url', true);

						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

						<div class="testimonials-box">
							<div class="testimonial-box-entry">
								<?php the_excerpt(); ?>
							</div><!--/.testimonials-boxes-->
							<span></span>
							<div class="testimonial-box-detail">
								<?php
									if ( $featured_image != NULL ) {
										echo '<img src="' . $featured_image[0] . '" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />';
									}
								?>
								<b><a href="<?php echo $testimonials_company_url; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></b>,<br />
								<?php echo $testimonials_position; ?> <?php _e( 'at', 'ti' ); ?> <a href="<?php echo $testimonials_company_url; ?>" title="<?php echo $testimonials_company_name; ?>"><?php echo $testimonials_company_name; ?></a>
							</div><!--/.testimonial-box-detail-->
						</div><!--/.testimonials-box-->

					<?php }
				} else {
					echo '<p>No posts found.</p>';
				}

				wp_reset_postdata();

			?>

		</div><!--/.testimonials-boxes-->
	</div><!--/#testimonials-->
</div><!--/.wrap-->
<?php get_footer(); ?>