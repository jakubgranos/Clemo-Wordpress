<?php
/*
  Template horizontal slider
  @package Clemo
*/
?>

<div class="swiper-container horizontal-slider slider-column">
  <div class="swiper-wrapper"> <?php
    if( have_rows( 'slider' ) ):
      while( have_rows( 'slider' ) ): the_row();
        $image = get_sub_field( 'image' );
        $slider_heading = get_sub_field( 'slider_heading' );
        $job_title = get_sub_field( 'job_title' );?>

        <div class="swiper-slide slider-column-content"> <?php
          if( !empty( $image ) ):?>
            <img src="<?php echo $image; ?>" alt="<?php echo $slider_heading; ?>"> <?php
          endif;
        
          if( !empty( $slider_heading ) ):?>
            <h2><?php echo $slider_heading; ?></h2> <?php 
          endif;

          if( !empty( $job_title ) ):?>
            <p><?php echo $job_title; ?></p> <?php
          endif;?>
        </div> <?php
      endwhile;
    endif;?>
  </div>
  <div class="swiper-button-next horizontal-slider-button-next"></div>
  <div class="swiper-button-prev horizontal-slider-button-prev"></div>
  <div class="swiper-pagination horizontal-slider-pagination"></div>
</div>
