$args = array (
				'post_type'				 => 'post',
				'ignore_sticky_posts'    => true,
				'paged'					 => $paged,
			);

			$blog_posts = new WP_Query( $args );

			if ( $blog_posts->have_posts() ) {
				while ( $blog_posts->have_posts() ) {
					$blog_posts->the_post(); ?>

					wp_reset_postdata();