<!DOCTYPE html>

<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
		<title><?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
		
		<?php wp_head(); ?>
		
	</head>
	
	<body>
	
		<div id="wrapper">
		
			<header id="heading">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/alternateHeading.png" alt="The Melbourne Mixtape Exchange" /></a>
			</header>
			
			<nav id="menu">
				<ul>
					<li><a href="about/">About</a></li>
					<li><a href="events/">Events</a></li>
					<li><a href="http://themelbournemixtapeexchange.bigcartel.com/">Shop</a></li>
					<li><a href="contact/">Contact</a></li>
				</ul>
			</nav>