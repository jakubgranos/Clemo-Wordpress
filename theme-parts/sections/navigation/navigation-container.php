<?php
/*
  Template for navigation container
  @package Clemo
*/
$logo = get_field( 'navigation_logo', 'options' );?>

<div class="container"> <?php 
  if( !empty( $logo ) ):
    $logo_args = [
      'class' => 'page-header-logo',
      'content' => $logo[ 'title' ]
    ];
    echo wpc_get_link( $logo, $logo_args );  
  endif;
  include_once 'navigation.php';?>
  <button class="hamburger" data-toggle="hamburger">
    <span class="hamburger-box" data-toggle="hamburger-box"></span>
  </button>
</div>
