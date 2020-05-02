<?php
/*
  Template attachment
  @package Clemo
*/
$gallery = get_sub_field( 'attachment' );
global $post;
$i = 0;?>

<div class="gallery-row"> <?php
  if( $gallery ):
    foreach( $gallery as $post ): $i++;
      setup_postdata( $post );?>
      <div class="gallery-row-column <?php if( $i % 2 == 0  && $i !==6 ): echo 'gallery-row-second'; endif ?>">
        <?php the_post_thumbnail(); ?>
      </div> <?php
    endforeach; 
    wp_reset_postdata();
  endif;?>
</div>
