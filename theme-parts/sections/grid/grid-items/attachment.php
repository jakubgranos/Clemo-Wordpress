<?php
/*
  Template attachment
  @package Clemo
*/
$gallery = get_sub_field( 'gallery' );
$i = 0;?>
<div class="gallery-row"> <?php
  if( $gallery ):
    foreach( $gallery as $post ): $i++;
      setup_postdata( $post );?>
      <div class="gallery-row-column <?php if( $i % 2 == 0  && $i !==6): echo 'gallery-row-second'; endif ?>">
        <img src="<?php echo $post->guid;?>" alt="gallery image">
      </div> <?php
    endforeach; 
    wp_reset_postdata();
  endif;?>
</div>

<a href="#showmore" class="btn_black">show more</a>

