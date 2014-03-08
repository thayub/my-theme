<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 * 
 * @package Basic Bootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Podkova:400,700|Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

<nav id="site-navigation" class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">  
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    
	  </div>
	<!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>-->
	
	<?php wp_nav_menu( array( 
		'theme_location' 	=> 'primary',
		'container' 		=> 'div',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id'    	=> 'main-navbar-collapse',
		'menu_class'      	=> 'nav navbar-nav',
		'menu_id'         	=> '',
		'echo'            	=> true,
		'fallback_cb'     	=> 'wp_page_menu',
		'before'          	=> '',
		'after'           	=> '',
		'link_before'     	=> '',
		'link_after'      	=> '',
		'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           	=> 0,
		'walker'          	=> ''
	 ) ); ?>
	 </div>
</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
