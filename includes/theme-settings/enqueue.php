<?php
/*
  Theme for enqueue
  @package  Clemo
*/

function clemo_load_scripts() {
  //css
    wp_enqueue_style( 'swiper.min.css', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    
  //js
    wp_enqueue_script( 'hamburger.js', get_template_directory_uri() . '/js/hamburger.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper.js', get_template_directory_uri() . '/js/swiper/swiper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'vertical-slider.js', get_template_directory_uri() . '/js/swiper/vertical-slider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_script( 'jquery-3.3.1.slim.min.js', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array( 'jquery' ), '3.3.1', true );
    wp_enqueue_script( 'jquery.1.12.1.min.js', get_template_directory_uri() . '/js/jquery.1.12.1.min.js', array( 'jquery' ), '1.12.1', true );
    wp_enqueue_script( 'horizontal-slider.js', get_template_directory_uri() . '/js/swiper/horizontal-slider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'client-opinion.js', get_template_directory_uri() . '/js/swiper/client-opinion.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'clemo_load_scripts' );
