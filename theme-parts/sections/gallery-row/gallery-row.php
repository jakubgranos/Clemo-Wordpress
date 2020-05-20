<?php
/*
  Themplate gallery row
  @package clemo
*/
$heading = get_sub_field( 'heading' );
$button = get_sub_field( 'button' );
$link_args = [
  'class' => 'btn_transparent'
];
?>

<section class="social-gallery"> <?php
  if( !empty( $heading ) ):?>
    <h1><?php echo $heading; ?></h1> <?php
  endif;?>
  <div class="social-gallery-wrapper"> <?php
    if( have_rows( 'row' ) ):
      while( have_rows( 'row' ) ): the_row();
        $image = get_sub_field( 'image' );?>
        <img src="<?php echo $image[ 'url' ] ?>" alt="<?php echo $image[ 'alt' ] ?>"><?php
      endwhile;
    endif;?>
  </div>
 <?php echo wpc_get_link( $button, $link_args ); ?>
</section>
