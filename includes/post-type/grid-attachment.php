<?php
/*
  Template for grid columm
  @package Clemo
*/

function grid_attachment_type() {
  $labels = array(
    'name' => 'Grid attachments',
    'singular_name' => 'Grid attachment',
    'add_new' => 'Add attachment',
    'all_items' => 'All attachments',
    'add_new_item' => 'Add attachment',
    'edit_titem' => 'Edit attachment',
    'new_item' => 'New attchment',
    'view_item' => 'View attachment',
    'search_item' => 'Search attachments',
    'not_found' => 'No attachments found',
    'not_found_in_trash' => 'No attachments found in trash',
    'parent_item_colon' => 'Parent attachment'
  );
  register_post_type( 'grid-attachment', array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array( 'post_tag' ),
    'menu_position' => 5,
    'exclude_from_search' => false
  ));
}
add_action( 'init','grid_attachment_type' );
