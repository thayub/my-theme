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
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono|Oxygen:700|Raleway:500' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="site-navigation" class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">  
		
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <strong><a class="navbar-brand" href="<?php echo get_site_url();?>"><?php bloginfo( 'name' ); ?></a></strong>
	  </div>
	<!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>-->
	<?php wp_nav_menu( array( 
		//'theme_location' 	=> 'primary',
		'container' 				=> 'div',
		'container_class' 	=> 'collapse navbar-collapse',
		'container_id'    	=> 'main-navbar-collapse',
		'menu_class'      	=> 'nav navbar-nav navbar-right',
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

	<?php 
	if (is_single()) {

?>

<div class="container" style="margin-bottom: 1em;">

<h1 style="text-align:center;"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

</div>
<?php

	} else {


?>
	<header id="masthead" class="site-header" role="banner">
			<?php
			if ( is_category() ) {
				?>
				<div class="site-branding">
				<h1 class="site-title">
				<?php
				single_cat_title();
				?>
				</h1>
				<p class="page-description">
					<?php
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
					?>
				</p>
				</div>
				<?php
			} else {
		?>
		<div class="site-branding">
			<h1 class="site-title">Welcome</h1>

		</div>
			<?php }
			?>

		


<?php
	/*
	if (is_category()) {
		$current_cat = get_query_var('cat');
		$args = array(
			'type'                     => 'post',
			'child_of'                 => $current_cat,
			'parent'                   => '',
			'orderby'                  => 'name',
			'order'                    => 'ASC',
			'hide_empty'               => 1,
			'hierarchical'             => 1,
			'exclude'                  => '',
			'include'                  => '',
			'number'                   => '',
			'taxonomy'                 => 'category',
			'pad_counts'               => false 

		); 

		$categories = get_categories( $args );
		echo '<ul class="sub-categories nav nav-pills nav-justified">';
		foreach ($categories as $category) {
			echo '<li> <a href="' . get_category_link( $category->id ) . $category->slug
														.'">' . $category->name . '</a></li>';
		}
		echo "</ul>";
	} else {
		echo "";
	}
	// echo "<pre>";
	// print_r($categories);
	// echo "</pre>";
	*/
	?>


	</header><!-- #masthead -->
<?php } ?>
<div id="page" class="container">
	<div id="content" class="site-content">
