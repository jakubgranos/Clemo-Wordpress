<?php
/*
  Theme for enqueue
  @package  Clemo
*/

function clemo_load_scripts() {
  //css
    wp_enqueue_style( 'swiper.min.css', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    
  //js
    wp_enqueue_script( 'hamburger.js', get_template_directory_uri() . '/js/hamburger.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper.js', get_template_directory_uri() . '/js/swiper/swiper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper-header-slider.js', get_template_directory_uri() . '/js/swiper/swiper-header-slider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery1.12.1.min.js', get_template_directory_uri() . '/js/jquery.1.12.1.js', array(), '1.12.1', true );
}

add_action( 'wp_enqueue_scripts', 'clemo_load_scripts' );
