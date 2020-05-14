<?php
/*
  Template client opinion item
  @package Clemo
*/?>
<script async>
  let logo
  let menu = [];
</script> <?php

if( have_rows( 'slider' ) ):
  while( have_rows( 'slider' ) ): the_row();
    $company_name = get_sub_field( 'company_name' );
    $company_profession = get_sub_field( 'company_profession' );
    $company_opinion = get_sub_field( 'company_opinion' );
    $company_logo = get_sub_field( 'company_logo' );?>

    <div class="swiper-slide client-comment-wrapper">
      <div class="client-comment-col client-comment-company"> <?php
        if( !empty( $company_name ) ):?>
          <h2><?php echo $company_name ?></h2> <?php
        endif;
        if( !empty( $company_profession ) ):?>
          <p><?php echo $company_profession ?></p> <?php
        endif;?>
      </div>
      <div class="client-comment-col"> <?php
        if( !empty( $company_opinion ) ):?>
          <p><? echo $company_opinion ?><p> <?php
        endif;?>
      </div>      
    </div>
    
    <script async>
      logo = '<?php echo $company_logo ?>';
      menu.push(logo);               
    </script> <?php
  endwhile;
endif;
