<?php
/*
  Theme for enqueue
  @package  Clemo
*/

function clemo_load_scripts() {
  //css
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    
  //js
}

add_action('wp_enqueue_scripts', 'clemo_load_scripts');
