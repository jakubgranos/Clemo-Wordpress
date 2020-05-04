<?php
/*
  Template post
  @package Clemo
*/

global $post;
$posts = get_sub_field( 'posts' );

$tablist_args = array(
  'order' => 'ASC',
  'taxonomy' => 'tablist',
  'hide_empty' => false,
);

$tablist = get_terms( $tablist_args );
$display_list = get_sub_field( 'display_list' );

if( !empty( $tablist ) ):
  foreach( $tablist as $tab ):
    setup_postdata( $post );
    $tab_name = $tab->name;
    $tab_slug = $tab->slug;
    $query = new WP_Query(array(
      'post_type' => 'grid-post',
      'tax_query' => array(
        array(
          'taxonomy' => 'tablist',
          'field'    => 'slug',
          'terms'    => $tab_slug,
        ),
      ),
    ));
        
    require 'post-content.php';
    wp_reset_postdata();
  endforeach;
endif;