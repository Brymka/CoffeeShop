<!DOCTYPE HTML>
<html <?php language_attributes(); ?>

	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?> </title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/default.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styleslider.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/nivo-slider.css" type="text/css" media="screen" />
		  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 <?php wp_head(); ?>
	</head>
	
<body <?php body_class('class-name'); ?>>
		<header>
		
		<div class="nav-menu">
		<div class="container">
			
			<div id="logo" onclick="location.href='index.php';" style="cursor:pointer;">
					<a href="<?php echo home_url();?>/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/CoffeeLogo.png"/>
					</a>
			</div>
		
			<div id="search">  
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("sidebar") ) : ?>  
			<?php endif; ?>  
			</div><!-- sidebar --> 
			
			<nav id="hnav">
				<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 2') ) : ?>
					<?php endif; ?>
			</nav>
		</div>
		</div>
		</header>