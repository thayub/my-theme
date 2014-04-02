<?php
/**
 * The frontpage template file.
 *
 * @package Basic Bootstrap
 */

get_header(); ?>

<div id="primary" class="">
  <main id="main" class="row" role="main"> 
    <div class="col-xs-12 col-sm-4">
    <h3>Code</h3>
    <?php
      $args = array( 
      'category_name' => 'code',       //(string) - use category slug (NOT name).
      'posts_per_page' => 5
     );

      $the_query = new WP_Query( $args );
 
        // The Loop
        if ( $the_query->have_posts() ) :
          echo "<ul>";
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $link = get_permalink();
          $title = get_the_title();
          echo '<li><a href="' . $link . '">'  . $title . '</a></li>';
        endwhile;
          echo "</ul>";
        endif;

        // Reset Post Data
        wp_reset_postdata();

    ?>

    </div>
    <div class="col-xs-12 col-sm-4">
    <h3>Life</h3>

    <?php
      $args = array( 
      'category_name' => 'journal',       //(string) - use category slug (NOT name).
      'posts_per_page' => 5
     );

      $the_query = new WP_Query( $args );
 
        // The Loop
        if ( $the_query->have_posts() ) :
          echo "<ul>";
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $link = get_permalink();
          $title = get_the_title();
          echo '<li><a href="' . $link . '">'  . $title . '</a></li>';
        endwhile;
          echo "</ul>";
        endif;

        // Reset Post Data
        wp_reset_postdata();

    ?>
    
    </div>
    <div class="col-xs-12 col-sm-4">
    <h3>Most Recent Photo</h3>

    <?php
      $args = array( 
      'category_name' => 'photos',       //(string) - use category slug (NOT name).
      'posts_per_page' => 1
     );

      $the_query = new WP_Query( $args );
 
        // The Loop
        if ( $the_query->have_posts() ) :
          
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $link = get_permalink();
          $title = get_the_title();
          the_content();
        endwhile;
          
        endif;

        // Reset Post Data
        wp_reset_postdata();

    ?>
    
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
