<?php 
// content-video.php
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">

		<?php if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>

		<p class="entry-meta">
			<?php alpha_post_meta(); ?>
		</p>

	</header>
	<!-- /.entry-header -->

	<div class="entry-content">
		<?php 
			the_content( __('Continue reading &rarr;', 'alpha') );

			wp_link_pages();
		?>
	</div>
	<!-- /.entry-content -->

	<footer class="entry-footer">
		<?php 
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>
	<!-- /.entry-footer -->

</article>