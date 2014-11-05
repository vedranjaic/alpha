<?php 
// page.php
?>

<?php get_header(); ?>

	<div class="main-content col-md-8" role="main">

		<?php while( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?> <?php post_class(); ?>">
				
				<header class="entry-header">

					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<figure class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</figure>
						<!-- /.entry-thumbnail -->
					<?php endif; ?>

					<h1><?php the_title(); ?></h1>

				</header>
				<!-- /.entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

					<?php wp_link_pages(); ?>
				</div>
				<!-- /.entry-content -->

				<footer class="entry-footer">
					<?php 
						// Edit link
						if ( is_user_logged_in() ) {
							echo '<p>';
							edit_post_link( __('Edit', 'alpha'), '<span class="meta-edit">', '</span>' );
							echo '</p>';
						}
					?>
				</footer>
				<!-- /.entry-footer -->

			</article>
			<!-- /#post- -->

			<?php comments_template(); ?>
			
		<?php endwhile; ?>

	</div>
	<!-- /.main-content col-md-8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>