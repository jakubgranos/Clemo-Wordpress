<?php
/*
  Template cliet opinion
  @package Clemo
*/
$heading = get_sub_field( 'heading' );?>

<section class="client-comment"> <?php
  if( !empty( $heading ) ):?>
    <h1><?php echo $heading; ?></h1> <?php
  endif;?>
  <div class="container">
    <div class="swiper-container client-comment">
      <div class="swiper-wrapper">
        <?php require 'client-opinion-item.php';?> 
      </div>
      <div class="swiper-pagination client-comment-pagination-thumbnail"></div>
    </div>
  </div>
</section>
