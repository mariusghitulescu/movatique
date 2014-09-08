<?php
	/*
    ** The template for displaying Front Page.
    **
    ** @package Movatique
    */
	get_header();
?>
<?php get_template_part( 'includes/subheader' ); ?>
<section id="features-two">
	<div class="wrap">
		<h3>
			<?php
			if ( get_theme_mod( 'ti_frontpage_subheader_title' ) != false ) {
				echo get_theme_mod( 'ti_frontpage_subheader_title' );
			} else {
				echo _e( 'Why Choose Us?', 'ti' );
			}
			?>
		</h3>
		<div class="features-two-container">
			<div class="features-box">
				<?php
				if ( get_theme_mod( 'ti_frontpage_firstlybox_image' ) != false ) {
					echo '<div class="features-box-image"><img src="'. get_theme_mod( 'ti_frontpage_firstlybox_image' ) .'" alt="'. get_theme_mod( 'ti_frontpage_firstlybox_title' ) .'" title="'. get_theme_mod( 'ti_frontpage_firstlybox_title' ) .'" /></div>';
				} else {
					echo '<div class="features-box-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="90" viewBox="0 0 32 32"><path d="M30 0l-14 4-14-4c0 0-0.141 1.616 0 4l14 4.378 14-4.378c0.141-2.384 0-4 0-4zM2.256 6.097c0.75 7.834 3.547 21.007 13.744 25.903 10.197-4.896 12.995-18.069 13.744-25.903l-13.744 5.167-13.744-5.167z" /></svg></div>';
				}
				?>
				<h4>
					<?php
					if ( get_theme_mod( 'ti_frontpage_firstlybox_title' ) != false ) {
						echo get_theme_mod( 'ti_frontpage_firstlybox_title' );
					} else {
						echo _e( 'Fast &amp; Safe', 'ti' );
					}
					?>
				</h4>
			</div><!--/.features-box-->
			<div class="features-box">
				<?php
				if ( get_theme_mod( 'ti_frontpage_secondlybox_image' ) != false ) {
					echo '<div class="features-box-image"><img src="'. get_theme_mod( 'ti_frontpage_secondlybox_image' ) .'" alt="'. get_theme_mod( 'ti_frontpage_secondlybox_title' ) .'" title="'. get_theme_mod( 'ti_frontpage_secondlybox_title' ) .'" /></div>';
				} else {
					echo '<div class="features-box-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="90" viewBox="0 0 32 32"><path d="M16 2c8.837 0 16 5.82 16 13 0 7.18-7.163 13-16 13-0.849 0-1.682-0.054-2.495-0.158-3.437 3.437-7.539 4.053-11.505 4.144v-0.841c2.142-1.049 4-2.961 4-5.145 0-0.305-0.024-0.604-0.068-0.897-3.619-2.383-5.932-6.024-5.932-10.103 0-7.18 7.163-13 16-13z" /></svg></div>';
				}
				?>
				<h4>
					<?php
					if ( get_theme_mod( 'ti_frontpage_secondlybox_title' ) != false ) {
						echo get_theme_mod( 'ti_frontpage_secondlybox_title' );
					} else {
						echo _e( '24/ 7 Support', 'ti' );
					}
					?>
				</h4>
			</div><!--/.features-box-->
			<div class="features-box">
				<?php
				if ( get_theme_mod( 'ti_frontpage_thirdlybox_image' ) != false ) {
					echo '<div class="features-box-image"><img src="'. get_theme_mod( 'ti_frontpage_thirdlybox_image' ) .'" alt="'. get_theme_mod( 'ti_frontpage_thirldybox_title' ) .'" title="'. get_theme_mod( 'ti_frontpage_thirdlybox_title' ) .'" /></div>';
				} else {
					echo '<div class="features-box-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="90" viewBox="0 0 32 32"><path d="M13.272 27.2c-0.696 0-1.355-0.325-1.778-0.885l-5.718-7.549c-0.744-0.982-0.55-2.381 0.432-3.125 0.984-0.746 2.381-0.55 3.125 0.432l3.762 4.966 9.459-15.186c0.651-1.045 2.027-1.365 3.074-0.714 1.045 0.65 1.365 2.027 0.712 3.072l-11.173 17.936c-0.389 0.626-1.059 1.018-1.794 1.050-0.034 0.002-0.067 0.002-0.101 0.002z" /></svg></div>';
				}
				?>
				<h4>
					<?php
					if ( get_theme_mod( 'ti_frontpage_thirdlybox_title' ) != false ) {
						echo get_theme_mod( 'ti_frontpage_thirdlybox_title' );
					} else {
						echo _e( '100% Satisfaction', 'ti' );
					}
					?>
				</h4>
			</div><!--/.features-box-->
		</div><!--/.features-two-container-->
	</div><!--/.wrap-->
</section><!--/#features-two-->
<div class="wrap">
	<article id="content-article">
		<div class="content-article-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/index-article-image.png" alt="Index Article Image" title="Index Article Image" />
		</div><!--/.content-article-image-->
		<h2>
			<?php
			if ( get_theme_mod( 'ti_frontpage_thecontent_title' ) != false ) {
				echo get_theme_mod( 'ti_frontpage_thecontent_title' );
			} else {
				echo _e( 'Lorem ipsum dolor sit amet et consectetuer adipiscing', 'ti' );
			}
			?>
		</h2>
		<p>
			<?php
			if ( get_theme_mod( 'ti_frontpage_thecontent_content' ) != false ) {
				echo get_theme_mod( 'ti_frontpage_thecontent_content' );
			} else {
				echo _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.', 'ti' );
			}
			?>
		</p>
	</article><!--/#content-article-->
</div><!--/.wrap-->
<div class="wrap">
	<section class="content">
		<div class="title-border">
			<h3>
				<?php
				if ( get_theme_mod( 'ti_frontpage_testimonials_title' ) != false ) {
					echo get_theme_mod( 'ti_frontpage_testimonials_title' );
				} else {
					echo _e( 'Testimonials', 'ti' );
				}
				?>
			</h3>
		</div><!--/.title-border-->
		<div class="list_carousel responsive cf">
			<div id="foo4">

				<?php
					$args = array (
					'post_type'              => 'testimonials',
					'posts_per_page'         => '10',
					'ignore_sticky_posts'    => true,
				);

				$testimonials = new WP_Query( $args );

				if ( $testimonials->have_posts() ) {
					while ( $testimonials->have_posts() ) {
						$testimonials->the_post();

						$testimonials_position = get_post_meta($post->ID, 'ti_testimonials_position', true);
						$testimonials_company_name = get_post_meta($post->ID, 'ti_testimonials_company_name', true);
						$testimonials_company_url = get_post_meta($post->ID, 'ti_testimonials_company_url', true); ?>

						<div class="testimonial-box">
							<?php the_excerpt(); ?>
							<div class="testimonials-meta">
								<h6>
									<span>
										<?php
										if ( ( $testimonials_position && $testimonials_company_name ) == NULL ) {
											$line = '';
										} else {
											$line = ', ';
										}
										the_title(); ?>
										<?php echo $line; ?>
									</span>

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

								</h6>
							</div><!---/.testimonials-meta-->
						</div><!--/.testimonial-box-->

					<?php }
				} else {
					echo '<p>No posts found.</p>';
				}

				wp_reset_postdata();
				?>

			</div><!--/#foo4-->
			<a href="" class="testimonials-navigation-prev">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 32 32">
					<path d="M16 0c8.837 0 16 7.163 16 16s-7.163 16-16 16-16-7.163-16-16 7.163-16 16-16zM16 29c7.18 0 13-5.82 13-13s-5.82-13-13-13-13 5.82-13 13 5.82 13 13 13zM6.586 14.586l8-8c0.781-0.781 2.047-0.781 2.828 0s0.781 2.047 0 2.828l-4.586 4.586h11.172c1.105 0 2 0.895 2 2s-0.895 2-2 2h-11.172l4.586 4.586c0.781 0.781 0.781 2.047 0 2.829-0.391 0.39-0.902 0.586-1.414 0.586s-1.024-0.195-1.414-0.586l-8-8c-0.781-0.781-0.781-2.047 0-2.828z"></path>
				</svg>
			</a><!--/a .testimonials-navigation-prev-->
			<a href="" class="testimonials-navigation-next">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 32 32">
					<path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13zM25.414 14.586l-8-8c-0.781-0.781-2.047-0.781-2.828 0s-0.781 2.047 0 2.828l4.586 4.586h-11.172c-1.105 0-2 0.895-2 2s0.895 2 2 2h11.172l-4.586 4.586c-0.781 0.781-0.781 2.047 0 2.829 0.391 0.39 0.902 0.586 1.414 0.586s1.024-0.195 1.414-0.586l8-8c0.781-0.781 0.781-2.047 0-2.828z"></path>
				</svg>
			</a><!--/a .testimonials-navigation-next-->
			<div class="clearfix"></div>
		</div><!--/.list_carousel responsive-->
	</section><!--/.content-->
	<section class="content">
		<div class="title-border">
			<h3>
				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_title' ) != false ) {
					echo get_theme_mod( 'ti_frontpage_ourclients_title' );
				} else {
					echo _e( 'Our Clients', 'ti' );
				}
				?>
			</h3>
		</div><!--/.title-border-->
		<div class="our-clients">
			<?php
			if ( get_theme_mod( 'ti_frontpage_ourclients_logo1' ) != false ) { ?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo1' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo1' ); ?>" alt="Sponsor 1" />
				<?php } 
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo2' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo2' ); ?>" alt="Client 2" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo3' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo3' ); ?>" alt="Client 3" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo4' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo4' ); ?>" alt="Client 4" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo5' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo5' ); ?>" alt="Client 5" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo6' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo6' ); ?>" alt="Client 6" />
				<?php }
				?>

			<?php } else { ?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo1' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo1' ); ?>" alt="Sponsor 1" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo1.png" alt="Sponsor 1" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo2' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo2' ); ?>" alt="Sponsor 2" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo2.png" alt="Sponsor 2" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo3' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo3' ); ?>" alt="Sponsor 3" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo3.png" alt="Sponsor 3" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo4' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo4' ); ?>" alt="Sponsor 4" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo4.png" alt="Sponsor 4" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo5' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo5' ); ?>" alt="Sponsor 5" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo5.png" alt="Sponsor 5" />
				<?php }
				?>

				<?php
				if ( get_theme_mod( 'ti_frontpage_ourclients_logo6' ) != false ) { ?>
					<img src="<?php echo get_theme_mod( 'ti_frontpage_ourclients_logo6' ); ?>" alt="Sponsor 6" />
				<?php } else { ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/clients-logo6.png" alt="Sponsor 6" />
				<?php }
				?>

			<?php }
			?>
		</div><!--/.our-clients-->
	</section><!--/.content-->
</div><!--/.wrap-->
<?php get_footer(); ?>