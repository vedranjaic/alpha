<?php 
// content-quote.php
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
	</footer>
	<!-- /.entry-footer -->

</article>