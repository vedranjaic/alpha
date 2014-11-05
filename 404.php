<?php 
// 404.php
?>

<?php get_header(); ?>

	<div class="container container-404">

		<h1><?php _e( 'Error 404 - Nothing found', 'alpha' ); ?></h1>
		<p><?php _e( 'It looks like nothing was found here. Maybe try a search?', 'alpha' ); ?></p>

		<?php get_search_form(); ?>
		
	</div>
	<!-- /.container container-404 -->

<?php get_footer(); ?>