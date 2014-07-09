<?php
	/*
    ** The template for displaying 404 error.
    **
    ** @package Movatique
    */
	get_header();
?>
<div class="wrap cf">
	<div class="blog-title">
		<h3><?php _e( '404 Error Page', 'ti' ); ?></h3>
	</div><!--/.blog-title-->
	<div class="error-subtitle">
		<?php _e( 'The page does not exist', 'ti' ); ?>
	</div><!--/.404-subtitle-->
	<div class="error-entry">
		<?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'ti' ); ?>
	</div><!--/.error-entry-->
	<div class="error-message">
		<?php _e( '404', 'ti' ); ?>
	</div><!--/.error-message-->
</div><!--/.wrap .cf-->
<?php get_footer(); ?>