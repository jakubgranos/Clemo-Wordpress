<?php
/*
  Template blog latest
  @package Clemo
*/

$heading = get_sub_field( 'heading' );?>

<section class="container grid"> 
  <h1 class="grid-heading grid-page-heading"> <?php
    if( !empty( $heading ) ):
      echo $heading;
    endif;?>
  </h1>
  <?php require 'grid-items/display-post.php';?>
</section>
