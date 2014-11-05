	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

<footer class="site-footer">
	<div class="container">

		<?php get_sidebar( 'footer' ); ?>

		<div class="copyright">
			<p>
				&copy; <?php echo date( 'Y'); ?> 
				<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> 
				<?php _e( 'All rights reserved.', 'alpha' ); ?>
			</p>
		</div>
		<!-- /.copyright -->

	</div>
	<!-- /.container -->

</footer>
<!-- /.site-footer -->

<?php wp_footer(); ?>

</body>
</html>