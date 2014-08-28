<section id="subheader" class="cf">
	<div class="wrap cf">
		<div class="subheader-content <?php if ( is_active_sidebar( 'subheader_sidebar' ) ) { } else { echo 'subheader-content-no-sidebar'; } ?>">
			<h3>
				<?php
				if ( get_theme_mod( 'ti_frontpage_header_title' ) ) {
					echo get_theme_mod( 'ti_frontpage_header_title' );
				} else {
					echo _e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'ti' );
				}
				?>
			</h3>
			<div class="subheader-content-entry">
				<?php
				if ( get_theme_mod( 'ti_frontpage_header_content' ) ) {
					echo get_theme_mod( 'ti_frontpage_header_content' );
				} else {
					echo _e( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.', 'ti' );
				}
				?>
			</div><!--/.subheader-content-entry-->
		</div><!--/.subheader-content-->
		<?php

		if ( is_active_sidebar( 'subheader_sidebar' ) ) {
			dynamic_sidebar( 'subheader_sidebar' );
		}

		?>
	</div><!--/.wrap .cf-->
</section><!--/#subheader-->