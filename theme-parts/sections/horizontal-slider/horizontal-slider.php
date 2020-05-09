<?php 
/*
  Template horizontal slider
  @package Clemo
*/
$heading = get_sub_field( 'heading' );?>

<section class="slider-column horizontal-slider"> <?php
  if( !empty( $heading ) ):?>
    <h1> <?php echo $heading;?></h1> <?php
    require 'horizontal-slider-item.php';
  endif;?>
</section> <?php

