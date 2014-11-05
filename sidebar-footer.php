<?php 
// sidebar-footer.php
if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

	<aside class="sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside>
	<!-- /.sidebar -->

<?php endif; ?>