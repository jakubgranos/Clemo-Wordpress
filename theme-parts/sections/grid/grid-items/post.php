<?php
/*
  Template post
  @package Clemo
*/
$posts = get_sub_field( 'posts' );
global $post;

if( $posts ):
  foreach( $posts as $post ):
    setup_postdata( $post );?>
    <article class="blog-post">
    <a href="<?php echo get_permalink();?>" class="blog-post-link">
      <?php the_post_thumbnail(); ?>
      <div class="blog-post-text">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <a href="<?php echo get_permalink();?>" class="btn_transparent">learn more</a>
      </div>
    </a>
  </article> <?php
  endforeach; 
  wp_reset_postdata();
endif;