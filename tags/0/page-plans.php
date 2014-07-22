<?php
	/*
    ** The template for displaying Page Plans.
    **
    ** @package Movatique
    **
	** Template Name: Full Width
	*/
	get_header();
?>
<div class="wrap">
	<?php

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>

			<div class="content cf">
				<div class="title-border">
					<h3><?php the_title(); ?></h3>
				</div><!--/.title-border-->
				<div class="pricing-entry cf">
					<?php the_content(); ?>
				</div><!--/.pricing-entry .cf-->
			</div><!--/.content .cf-->

			<?php }
	} else {
		echo '<p>No posts found.</p>';
	}

	?>
</div><!--/.wrap-->
<?php get_footer(); ?>