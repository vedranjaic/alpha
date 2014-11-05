<?php 
// tag.php
?>

<?php get_header(); ?>

	<div class="main-content col-md-8" role="main">
		
		<?php if ( have_posts() ) : ?>
			<header class="page-header">

				<h3>
					<?php printf( __( 'Tag Archives for %s', 'alpha' ), single_tag_title( '', false ) ); ?>
				</h3>

				<?php 
					// Show optional tag description
					if ( tag_description() ) {
						echo '<p>' . tag_description() . '</p>';
					}
				?>

			</header>

			<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php alpha_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div>
	<!-- /.main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>