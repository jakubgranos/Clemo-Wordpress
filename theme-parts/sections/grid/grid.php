<?php
/*
  Template blog latest
  @package Clemo
*/

$heading = get_sub_field( 'heading' );
$display_list = get_sub_field( 'display_list' );
$display_post = get_sub_field( 'display_post' );?>

<section class="container grid"> 
  <h1 class="grid-heading grid-page-heading"> <?php
    if( !empty( $heading ) ):
      echo $heading;
    endif;?>
  </h1> <?php 

  if( $display_list === 'enable' ):
    require 'grid-tablist.php';
  endif;

  switch ( $display_post ) {
    case 'post':
      require 'grid-items/post.php';
    break;
    case 'attachment':
      require 'grid-items/attachment.php';
    break;
  }?>
</section>
