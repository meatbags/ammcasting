<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="Annie MM Casting">
  <meta name="keywords" content="Casting, Casting Director, Casting Agency">
	<meta property="og:url" content="http://xavierburrow.com/" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.jpg"/>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<?php wp_head(); ?>
</head>
<body>
	<div class='nav'>
		<div class='nav__inner'>
			<div class='nav__title'>
				<a href='<?php echo get_home_url(); ?>'>
					<div class='nav__title-text'><?php bloginfo('name'); ?></div>
				</a>
			</div>
			<div class='nav__menu'>
				<div class='nav__menu-item' data-target='#section-home'>Home</div>
				<div class='nav__menu-item' data-target='#section-work'>Work</div>
				<div class='nav__menu-item' data-target='#section-credits'>Credits</div>
				<div class='nav__menu-item' data-target='#section-about'>About</div>
				<div class='nav__menu-item' data-target='#section-contact'>Contact</div>
			</div>
		</div>
	</div>
	<div class='loading-screen'>
		<div class='loading-text'>Loading</div>
	</div>
