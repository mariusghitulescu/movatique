<?php
/**
 *	The template for displaying Archive.
 *
 *	@package ThemeIsle
 */
get_header();
?>
<div class="wrap cf">
	<div class="blog-title">
		<h3>
			<?php
				$category_archive = get_the_category();
				$author_archive = get_the_author();
				$search_archive = get_search_query();

				if ( is_day() ) {
					printf( __( '%s', 'ti' ), get_the_date() );
				} elseif ( is_month() ) {
					printf( __( '%s', 'ti' ), get_the_date( _x( 'F Y', '', 'ti' ) ) );
				} elseif ( is_year() ) {
					printf( __( '%s.', 'ti' ), get_the_date( _x( 'Y', '', 'ti' ) ) );
				} elseif ( is_category() ) {
					echo single_cat_title();
				} elseif ( is_author() ) {
					echo $author_archive;
				}
			?>
		</h3>
	</div><!--/.blog-title-->
	<div class="content-left">
		<?php

			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a><!--/a-->
						</h2><!--/h2-->
						<ul class="meta-post cf">
							<li class="author-icon">
								<?php the_author_posts_link(); ?>
							</li><!--/li .author-icon-->
							<li class="calendar-icon">
								<?php echo the_time( get_option( 'date_format' ) ); ?>
							</li><!--/li .calendar-icon-->
							<li class="comments-icon">
								<a href="<?php the_permalink(); ?>#comments" title="<?php the_title(); ?>">
									<?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'shape' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
								</a><!--/a-->
							</li><!--/li .comments-icon-->
							<li class="category-icon">
								<?php the_category( ', ' ); ?>
							</li><!--/li .category-icon-->
						</ul><!--/ul .meta-post-->
						<?php
						if ( $featured_image != NULL ) { ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="article-image">
								<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
							</a><!--/a-->
						<?php }
						?>
						<div class="post-entry">
							<?php the_excerpt(); ?>
						</div><!--/.post-entry-->
						<a href="<?php the_permalink(); ?>" title="<?php _e( 'Read More', 'ti' ); ?>" class="post-read-more">
							<?php _e( 'Read More', 'ti' ); ?>
						</a><!--/a .post-read-more-->
					</article><!--/article-->

				<?php }
			} else {
				echo '<p>No posts found.</p>';
			}
		?>
		<?php pagination(); ?>
	</div><!--/.content-left-->
	<?php get_sidebar(); ?>
</div><!--/.wrap .cf-->
<?php get_footer(); ?>