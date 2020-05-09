<?php
/*
  Template post query content
  @package Clemo
*/
$button_text = get_sub_field( 'button_text' );?>

<div class="row"> <?php
  if( $query->have_posts() ):
    while( $query->have_posts() ): $query->the_post();?>
      <div class="col-sm-12 col-lg-12 blog-post ">   
        <a href="<?php echo get_permalink();?>" class="blog-post-link">
          <?php the_post_thumbnail(); ?>
          <div class="blog-post-text">
            <h2><?php the_title(); ?></h2>
            <?php the_content();
            if( !empty( $button_text ) ):?>
              <a href="<?php echo get_permalink();?>" class="btn_transparent"><?php echo $button_text; ?></a> <?php 
            endif;?>
          </div>
        </a>
      </div><?php 
    endwhile;  
  endif;
  wp_reset_postdata();?>
</div>
