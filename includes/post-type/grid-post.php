<?php
/*
  Template for grid columm
  @package Clemo
*/

function grid_post_type() {
  $labels = array(
    'name' => 'Grid posts',
    'singular_name' => 'Grid post',
    'add_new' => 'Add post',
    'all_items' => 'All posts',
    'add_new_item' => 'Add post',
    'edit_titem' => 'Edit post',
    'new_item' => 'New post',
    'view_item' => 'View post',
    'search_item' => 'Search posts',
    'not_found' => 'No posts found',
    'not_found_in_trash' => 'No posts found in trash',
    'parent_item_colon' => 'Parent post'
  );
  register_post_type( 'grid-post', array(
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
      'editor',
      'thumbnail',
      'revisions',
      'excerpt'
    ),
    'taxonomies' => array( 'post_tag' ),
    'menu_position' => 4,
    'exclude_from_search' => false
  ));
}
add_action( 'init','grid_post_type' );
