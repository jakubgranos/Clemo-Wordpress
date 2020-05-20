<?php
/*
  Theme single latest posts
  @package clemo
*/

$post_date = get_the_date( 'j F Y' );
$count =  get_field( 'post_count', 'option' );
$query = new WP_query( array(
  'post_type' => 'grid-post',
  'posts_per_page' => $count,
) );

if( $query->have_posts() ):
  while( $query->have_posts() ): $query->the_post();?>
    <div class="swiper-slide slider-column-content related-posts-content">
      <a href="<?php echo $post->guid;?>" target="_blank" class="related-posts-content-link">
        <h2><?php the_title(); ?></h2>
        <p><?php echo $post_date; ?></p>
      </a>
    </div> <?php
  endwhile;
endif;

wp_reset_postdata();
