<?php
/*
  Template post
  @package Clemo
*/
global $post;
$posts = get_sub_field( 'posts' );
$attachments = get_sub_field( 'attachments' );
$display_post = get_sub_field( 'display_post' );
$display_list = get_sub_field( 'display_list' );

if( !empty( $display_post) ):
  switch ( $display_post ) {
    case 'post':
      if( $display_list === 'disable' ):
        if( !empty( $posts ) ):
          require 'posts/post.php';
        endif;
      endif;
      if( $display_list === 'enable' ):
        require 'grid-tablist.php';
        require 'posts/post-query.php';
      endif;
    break;
    case 'attachment':
      if( $display_list === 'disable' ):
        if( !empty( $attachments ) ):
          require 'attachments/attachment.php';
          wp_reset_postdata();
        endif;
      endif;
      if( $display_list === 'enable' ):
        require 'grid-tablist.php';
        require 'attachments/attachment-query.php';
      endif;
    break;
  }  
endif;
