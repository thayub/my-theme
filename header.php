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
<!--<link href='http://fonts.googleapis.com/css?family=Podkova:400,700|Open+Sans:300italic,600italic,400' rel='stylesheet' type='text/css'>-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="global-navigation" class="" role="navigation">	  
	<!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>-->
	<?php 
	/* Top level navigation */
	wp_nav_menu( array( 
		'theme_location' 		=> 'primary',
		'container' 				=> 'div',
		'container_class' 	=> '',
		'container_id'    	=> 'global',
		'menu_class'      	=> '',
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
	 ) ); 
	
	 ?>
	
</nav><!-- #site-navigation -->
	<header id="masthead" class="site-header" role="banner">
		<div class="menu-icon" data-toggle="offcanvas" style="cursor: pointer;">
	    <a href="#footer"><i class="fa fa-bars"></i> <span>menu</span></a>
	  </div>
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
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
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
<div class="container-fluid breadcrumbs-container">
	<div class="row">
		<div class="col-sm-2">
		
		</div>
		<div class="col-sm-10" style="text-align: right;">
			<nav class="bb_breadcrumbs">
				<?php basic_bootstrap_breadcrumbs(); ?>
			</nav>
		</div>
	</div>
</div>
<div id="page" class="container">
	<div id="content" class="site-content">
