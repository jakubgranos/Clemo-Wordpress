<?php
/*
  Theme for suports
  @package  Clemo
*/

function register_clemo_menus() {
  register_nav_menus( array( 'header_menu' => __( 'Page Navigation Menu' ) ) );
}

add_action( 'init', 'register_clemo_menus' );


// adding all theme supports
add_theme_support( 'post-thumbnails' );
