<?php
/*
  Theme shortcode post social
  @package clemo
*/

function shortcode_post_social( $atts, $content ) {
  $facebook = 'facebook';
  $twitter = 'twitter';
  $google_plus = 'google-plus';
  $pinterest = 'pinterest';

  $values = shortcode_atts( array(
    'url' => '',
    'target' => '',
    'class' => ''
  ), $atts );

  switch( $values[ 'class' ] ) {
    case 'facebook':
      $icon = "<i class='fab fa-facebook-f'></i>";
      break;
    case 'twitter':
      $icon = "<i class='fab fa-twitter'></i>";
      break;
    case 'google-plus':
      $icon = "<i class='fab fa-google-plus-g'></i>";
      break;               
    case 'pinterest':
      $icon = "<i class='fab fa-pinterest'></i>";
      break;   
  }

  $output = "<a href='{$values[ 'url' ]}' target='{$values[ 'target' ]}'>$icon</a>";
  return $output;
}

add_shortcode('icon', 'shortcode_post_social');
