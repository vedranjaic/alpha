<?php 
// content-link.php
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php 
			the_content( __('Continue reading &rarr;', 'alpha') );

			wp_link_pages();
		?>
	</div>
	<!-- /.entry-content -->

	<footer class="entry-footer">
		
		<p class="entry-meta">
			<?php alpha_post_meta(); ?>
		</p>

		<?php 
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>
	<!-- /.entry-footer -->

</article>