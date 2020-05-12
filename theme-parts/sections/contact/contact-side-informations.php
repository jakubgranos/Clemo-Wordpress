<?php
/*
  Template contact
  @package Clemo
*/
?>
<div class="contact-form-column"> <?php
  if( have_rows( 'side_informations' ) ):
    while( have_rows( 'side_informations' ) ): the_row();
      $icon = get_sub_field( 'icon' );
      $text = get_sub_field( 'text' );
      if( !empty( $text ) ):?>
        <p> <i class="fas fa-<?php echo $icon; ?>"></i> <?php echo $text; ?></p> <?php
      endif;
    endwhile;  
  endif;?>

  <div class="contact-form-column-social"> <?php
    if( have_rows( 'side_icons' ) ):
      while( have_rows( 'side_icons' ) ): the_row();
        $icon = get_sub_field( 'icon' ); 
        $link = get_sub_field( 'link' );
        $link_args = [
          'content' => "<i class='fab fa-$icon'></i>"
        ];
        echo wpc_get_link( $link, $link_args );
      endwhile;  
    endif;?> 
  </div>
</div>
