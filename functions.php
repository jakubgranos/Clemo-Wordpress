<?php
/*
  Template for Funcions
  @package Clemo
*/

function require_all_files( $dir ) {
  foreach( glob( "$dir/*" ) as $path ):
    if( preg_match( '/\.php$/', $path ) ):
      require_once $path;
    elseif( is_dir( $path ) ):
      require_all_files( $path );
    endif;
  endforeach;
}
require_all_files( get_template_directory() . "/includes" );?>
