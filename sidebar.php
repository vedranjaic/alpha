<?php 
// sidebar.php
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="sidebar col-md-4" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
	<!-- /.sidebar col-md-4 -->

<?php endif; ?>