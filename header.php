<?php 
	$favicon_ico = IMAGES . '/icons/favicon.ico';
	$favicon_png = IMAGES . '/icons/favicon.png';
	$apple_splash = IMAGES . '/icons/apple-splash_750x1334.png';
	$touch_icon = IMAGES . '/icons/apple-touch-icon-152x152-precomposed.png';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', 'true', 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- favicons -->
	<link rel="shortcut icon" href="<?php echo $favicon_ico; ?>">
	<link rel="icon" href="<?php echo $favicon_png; ?>">
	<link rel="apple-touch-startup-image" href="<?php echo $apple_splash ?>" /> 
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<?php if ( ! is_front_page() ) { ?>
	<div class="header-image">
		<?php 
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
			$medium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
			$large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
			$full = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			echo ('<img src="' . $thumbnail[0] . '"');
			echo ('srcset="' . $medium[0] . ' 375w, ' .$large[0] . ' 480w, ' . $full[0] . ' 768w"');
			echo ('sizes="100%"');
			echo ('alt="Detailed image description');
			echo ('">');
		?>
	</div>
	<!-- /.header-image -->
	<?php } else {} ?>

	<header class="site-header" role="banner">

		<div class="container header-contents">

			<div class="row">

				<div class="site-logo col-xs-3">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>

				</div>
				<!-- /.site-logo col-xs-3 -->

				<div class="site-navigation col-xs-9">
					
					<nav class="site-navigation" role="navigation">
						<?php 
							wp_nav_menu( 
								array(
									'theme_location' => 'main-menu', 
									'menu_class' => 'site-menu'
								)
							);
						?>
					</nav>

				</div>
				<!-- /.site-navigation col-xs-9 -->

			</div>
			<!-- /.row -->

		</div>
		<!-- /.container .header-contents -->

	</header>


	<div class="container">
		<div class="row">
			