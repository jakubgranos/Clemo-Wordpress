<?php
/*
  Teplae for footer
  @package Clemo

*/
$text = get_field( 'text', 'option' );?>

<footer class="page-footer"> <?php 
  if( !empty( $text ) ):
    echo $text;
  endif;
  wp_footer()?>
</footer>
</body>
</html>
