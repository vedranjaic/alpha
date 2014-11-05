<?php 
// archive.php
?>

<?php get_header(); ?>

	<div class="main-content col-md-8" role="main">
		
		<?php if ( have_posts() ) : ?>
			<header class="page-header">

				<h3>
					<?php 
						if ( is_day() ) {
							printf( __( 'Daily Archives for %s', 'alpha' ), get_the_date() );
						} elseif ( is_month() ) {
							printf( __( 'Monthly Archives for %s', 'alpha'), get_the_date( _x( 'F Y', 'Monthly archives date formats', 'alpha' ) ) );
						} elseif ( is_year() ) {
							printf( __( 'Yearly Archives for %s', 'alpha'), get_the_date( _x( 'Y', 'Yearly archives date formats', 'alpha' ) ) );
						} else {
							_e( 'Archives', 'alpha' );
						}
					?>
				</h3>

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