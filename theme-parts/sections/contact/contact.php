<?php
/*
  Template contact
  @package Clemo
*/
$heading = get_sub_field( 'heading' );
$form = get_sub_field( 'form' );?>

<section class="contact-form">
  <div class="container"> <?php
    if( !empty( $heading ) ):?>
      <h1><?php echo $heading; ?></h1> <?php
    endif;?>
    <div class="contact-form-wrapper"> <?php 
      require 'contact-side-informations.php';
      if( !empty( $form ) ):
        echo do_shortcode($form);
      endif;?>
    </div>  
  </div>
</section>
