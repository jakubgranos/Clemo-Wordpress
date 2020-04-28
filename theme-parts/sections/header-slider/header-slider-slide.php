<?php
/*
  Template header slider slide
  @package Clemo
*/
$button = get_sub_field( 'slider_button' );
$button_args = [
  'class' => 'btn_black',
  'content' => $button[ 'title' ]
];
if( have_rows( 'slider' ) ):
  while( have_rows( 'slider' ) ): the_row();
    $image = get_sub_field( 'image' );
    $heading = get_sub_field( 'heading' );
    $subheading = get_sub_field( 'subheading' );?>
    <div class="swiper-slide"> <?php 
      if( !empty( $image ) ):?>
        <img src="<?php echo $image;?>" class="header-slider-image" alt="we are clemo."> <?php
      endif; ?>  
      <div class="header-slider-text"> <?php
        if( !empty( $heading ) ):?>
          <h1><?php echo $heading;?></h1> <?php 
        endif; 
        if( !empty($subheading) ):?>
          <p><?php echo $subheading;?></p> <?php 
        endif;
        echo wpc_get_link( $button, $button_args ); ?>
      </div>
    </div> <?php
  endwhile;
endif;
