<?php
/*
  Template tablist 
  @package Clemo
*/

function tablist_taxonomy() {
  $labels = array(
    'name' => 'Tablists',
    'singular_name' => 'Tablist',
    'search_items' => 'Search tablist',
    'all_items' => 'All tablists',
    'parent_item' => 'Parent tablist',
    'parent_item_colon' => 'Parent tablist:',
    'edit_item' => 'Edit tablist',
    'update_item' => 'Update tablist',
    'add_new_item' => 'Add New tablist', 
    'new_item_name' => 'New tablist Name',
    'menu_name' => 'Tablists',
  );
  register_taxonomy( 'tablist', array( 'grid_post' ), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tablist' )
  ));
}

add_action( 'init', 'tablist_taxonomy' );
