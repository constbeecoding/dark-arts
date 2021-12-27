<?php get_header(); ?>
<div class="row">
  <div class="col-sm-8 blog-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
      get_template_part( 'content', get_post_format() ); 
      endwhile; endif;
    ?>
    <!-- Insert Pager PHP here -->
    <!-- 
    if ( have_posts() ) {
    // Load posts loop.
    while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
    }
    // Previous/next page navigation.
    dark_arts_the_posts_navigation();
    } else {
    // If no content, include the "No posts found" template.
    get_template_part( 'template-parts/content/content-none' );
    }
     -->
  </div><!-- /.blog-main -->
  <?php get_sidebar(); ?>
</div><!-- /.row -->
<?php get_footer(); ?>
    
