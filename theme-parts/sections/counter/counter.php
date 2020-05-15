<?php 
/*
  Template counter
  @package clemo
*/
?>
<section class="counter">
  <div class="container">
    <div class="counter-wrapper"> <?php
      if( have_rows( 'count' ) ):
        while( have_rows( 'count' ) ): the_row();
          $number = get_sub_field( 'number' );
          $subheading = get_sub_field( 'subheading' );?>
          <div class="counter-wrapper-box"> <?php 
            if( !empty( $number ) ): ?>
              <h2><?php echo $number; ?></h2> <?php
            endif;
            if( !empty( $subheading ) ): ?>
              <p><?php echo $subheading; ?></p> <?php
            endif;?>
          </div> <?php     
        endwhile;
      endif;?>
    </div>
  </div>  
</section>
