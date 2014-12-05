<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title(); ?></title>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<!-- <div class="container-fluid"> -->
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>

					<!-- <a class="to_nav" href="#primary_nav">&#x2261;</a> -->
				</div>
			<!-- </div> -->
		</nav>
		<nav class="group nav" id="primary_nav">

			<?php 

			$defaults = array(
				'container' => false,
				'theme_location' => 'primary-menu',
				'menu_class' => 'nav navbar-nav'
			);

			wp_nav_menu($defaults);


			?>

		</nav><!--end primary_nav-->
		