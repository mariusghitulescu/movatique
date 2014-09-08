<section id="subheader" class="cf">
	<div class="wrap cf">
		<div class="subheader-content <?php if ( get_theme_mod( 'ti_header_contactform7_shortcode' ) ) { } else { echo 'subheader-content-no-sidebar'; } ?>">
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
		if ( get_theme_mod( 'ti_header_contactform7_shortcode' ) ) {
			echo '<div class="subheader-widget">';

			if ( get_theme_mod( 'ti_header_contactform7_title' ) ) {
				echo '<h3>'. get_theme_mod( 'ti_header_contactform7_title' ) .'</h3>';
			}

			echo do_shortcode( get_theme_mod( 'ti_header_contactform7_shortcode' ) );
			echo '</div>';
		}
		?>
	</div><!--/.wrap .cf-->
</section><!--/#subheader-->