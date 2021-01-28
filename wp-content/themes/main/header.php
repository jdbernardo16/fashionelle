<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Fashionelle</title>
	<link rel="stylesheet" href="">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon" />
	 <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<?php wp_head();?>
</head>
<body>

<div id="header">
	<div class="header-wrapper">
		<div class="inlineBlock-parent">
			<div class="left-side inlineBlock-parent">
				<div class="social-wrapper">
					<div class="inlineBlock-parent">
						<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" class="social-img">
							<img src="<?php echo get_template_directory_uri(); ?>/image/fb.svg" alt="">	
						</a
						><a href="<?php the_field('instagram_link', 'option'); ?>" class="social-img">
							<img src="<?php echo get_template_directory_uri(); ?>/image/ig.svg" alt="">	
						</a>
					</div>
				</div
				><?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-left',
						)
					);
				?>
			</div
			><div class="logo-hldr">
				<a href="" class="menu-logo">
					<img src="<?php the_field('logo', 'option'); ?>" alt="">
				</a>
			</div
			><div class="right-side inlineBlock-parent">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-right',
						)
					);
				?><!-- <div class="search">
					<input type="text" placeholder="Search">
				</div> -->
			</div>
		</div>
	</div>
	<div class="mobile-menu">
		<div class="m-menu">
			<div class="vertical-parent">
				<div class="vertical-align">
					<div id="nav-icon1">
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div
><div class="m-menu-hldr">
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'mobile-menu',
			)
		);
	?>
</div
><div id="main">


	
