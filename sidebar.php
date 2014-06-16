<?php
/*
** The template for displaying Single.
**
** @package Movatique
*/
?>
<div class="sidebar">
	<?php
		if ( is_active_sidebar( 'general_sidebar' ) ) {
			dynamic_sidebar( 'general_sidebar' );
		} else {
			echo 'The sidebar is not active.';
		}
	?>
</div><!--/.sidebar-->