<?php
/*
  Template single
  @package clemo
*/
$post_date = get_the_date( 'j F Y' );
get_header(); 

if( have_posts() ):
  while( have_posts() ): the_post();?>
    <main class="page-content">
      <seciton class="single-post container">
        <h1 class="single-post-heading"><?php the_title(); ?></h1>
        <p class="single-post-date"><?php echo $post_date; ?></p>
        <?php the_post_thumbnail();?>
        <article class="single-post-article">
          <div class="single-post-article-text"><?php the_content(); ?></div>
        </article>
      </section>
    </main> <?php
  endwhile;
endif;

get_footer();
