<?php
/*
  Theme sections
  @package Clemo
*/

class PageSections {
  private static $blocks = array(
    'section_vertical_slider' => 'vertical-slider/vertical-slider-container.php',
    'section_grid' => 'grid/grid.php',
    'section_horizontal_slider' => 'horizontal-slider/horizontal-slider.php',
    'section_client_opinion' => 'client-opinion/client-opinion.php',
    'section_contact' => 'contact/contact.php'
  );
  public static function display( $field_name = 'sections', $sec_param = null) {
    while ( have_rows( $field_name, $sec_param ) ):
      the_row();
      $block_layout = get_row_layout();
      if ( isset( self::$blocks[ $block_layout ] ) ):
        require get_template_directory() . "/theme-parts/sections/" . self::$blocks[ $block_layout ];
      endif;
    endwhile;
  }
}
