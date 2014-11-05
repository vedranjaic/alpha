<?php 
// single.php
?>

<?php get_header(); ?>

	<div class="main-content col-md-8" role="main">

		<?php while( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content', get_post_format() ); ?>
			
			<?php comments_template(); ?>
			
		<?php endwhile; ?>

	</div>
	<!-- /.main-content col-md-8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>