<?php 
/*
  Template hero
  @package clemo
*/
$heading = get_sub_field( 'heading' );
$image = get_sub_field( 'image' );
$subheading = get_sub_field( 'subheading' );
$side_text = get_sub_field( 'side_text' );
$button = get_sub_field( 'button' );?>
<section class="blog blog-article">
  <div class="container"> <?php
    if( !empty( $heading ) ):?>
      <h1 class="blog-heading"><?php echo $heading; ?></h1> <?php
    endif;?>
    <article class="blog-post">
      <div class="blog-post-col"> <?php
        if( !empty( $image ) ):?>
          <img src="<?php echo $image; ?>" class="blog-post-image" alt="<?php echo $heading; ?>"> <?php
        endif;
        if( !empty( $subheading ) ):?>
          <h2 class="blog-post-subheading"><?php echo $subheading; ?></h2> <?php
        endif;?>
      </div>
      <div class="blog-post-text blog-article-text"> <?php
        if( !empty( $side_text ) ):?>
          <?php echo $side_text; ?> <?php
        endif;
        if( !empty( $button ) ):
          $button_args = [
            'class' => 'btn_transparent' 
          ];
          echo wpc_get_link( $button, $button_args );
        endif;?>
      </div>
    </article>
  </div>
</section>
