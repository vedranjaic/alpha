<?php 
if ( ! function_exists( 'alpha_paging_nav' ) ) {
	function alpha_paging_nav() { ?>
		<ul>
			<?php if ( get_previous_posts_link() ) : ?>
			<li class="next">
				<?php previous_posts_link( __( 'Newer posts &rarr;', 'alpha' ) ); ?>
			</li>
			<?php endif; ?>

			<?php if ( get_next_posts_link() ) : ?>
			<li class="previous">
				<?php next_posts_link( __( '&larr; Older posts', 'alpha' ) ); ?>
			</li>
			<?php endif; ?>
		</ul> <?php
	}
}
?>