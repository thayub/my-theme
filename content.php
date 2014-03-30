<?php
/**
 * @package Basic Bootstrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <div class="entry-header-content">
      <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    </div>
  </header><!-- .entry-header -->
  
  <div class="content">
  <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php basic_bootstrap_posted_on(); 
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'basic-bootstrap' ) );
        if ( $categories_list && basic_bootstrap_categorized_blog() ) :
      ?>
    <div class="cats-and-tags">
      <div class="cat-links">
        <?php printf( __( '<i class="fa fa-folder-open"></i> %1$s', 'basic-bootstrap' ), $categories_list ); ?>
      </div>
      <?php endif; // End if categories ?>

      <?php
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', __( ', ', 'basic-bootstrap' ) );
        if ( $tags_list ) :
      ?>
      <div class="tags-links">
        <i class="fa fa-tags"></i> 
        <?php printf( __( 'Tagged %1$s', 'basic-bootstrap' ), $tags_list ); ?>
      </div>
      <?php endif; // End if $tags_list ?>
      </div> <!-- End of cats and tags -->
    </div><!-- .entry-meta -->

    <?php endif; ?>
  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'basic-bootstrap' ) ); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basic-bootstrap' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
  <?php endif; ?>
  <footer class="entry-meta">

  <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
    <div class="comments-link"><i class="fa fa-comments"></i> <?php comments_popup_link( __( 'Leave a comment', 'basic-bootstrap' ), __( '1 Comment', 'basic-bootstrap' ), __( '% Comments', 'basic-bootstrap' ), null, __( 'Comments disabled', 'basic-bootstrap' ) ); ?></div>
    <?php endif; ?>  

    <?php edit_post_link( __( 'Edit', 'basic-bootstrap' ), '<div class="edit-link"><i class="fa fa-pencil"></i> ', '</div>' ); ?>
  </footer><!-- .entry-meta -->

  </div><!-- .content -->
  </article><!-- #post-## -->
