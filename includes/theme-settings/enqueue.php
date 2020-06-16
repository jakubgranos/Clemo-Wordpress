<?php
/*
  Theme for enqueue
  @package  Clemo
*/

function clemo_load_scripts() {
  add_filter( 'style_loader_tag', 'add_async_attr', 10, 2 );

  function add_async_attr($link) {
    $link = str_replace( '/>', 'async />', $link );
    return $link;
  }

  //css
    wp_enqueue_style( 'swiper.min.css', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    
  //js
    wp_enqueue_script( 'hamburger.js', get_template_directory_uri() . '/js/hamburger.js', array(), '1.0.0', true );
    wp_enqueue_script( 'swiper.js', get_template_directory_uri() . '/js/swiper/swiper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'vertical-slider.js', get_template_directory_uri() . '/js/swiper/vertical-slider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_script( 'horizontal-slider.js', get_template_directory_uri() . '/js/swiper/horizontal-slider.js', array(), '1.0.0', true );
    wp_enqueue_script( 'client-opinion.js', get_template_directory_uri() . '/js/swiper/client-opinion.js', array(), '1.0.0', true );
    wp_enqueue_script( 'related-posts.js', get_template_directory_uri() . '/js/swiper/related-posts.js', array(), '1.0.0', true );
    wp_enqueue_script( 'lazysizes.min.js', get_template_directory_uri() . '/js/lazysizes.min.js', array(), '5.2.2', true );
}

add_action( 'wp_enqueue_scripts', 'clemo_load_scripts' );
