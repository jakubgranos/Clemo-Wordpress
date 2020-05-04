<?php
/*
  Template post content
  @package Clemo
*/

if( $query->have_posts() ):
  while( $query->have_posts() ): $query->the_post();?>
    <article class="blog-post tab-pane <?php if( $tab === array_values( $tablist )[ 0 ] && $display_list === 'enable' ) { echo "active show fade"; } ?>" id="<?php echo $tab_slug; ?>" role="tabpanel" 
    aria-labelledby="<?php echo $tab_slug; ?>-tab">
      <a href="<?php echo get_permalink();?>" class="blog-post-link">
        <?php the_post_thumbnail(); ?>
        <div class="blog-post-text">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <a href="<?php echo get_permalink();?>" class="btn_transparent">learn more</a>
        </div>
      </a>
    </article> <?php 
  endwhile;  
endif;