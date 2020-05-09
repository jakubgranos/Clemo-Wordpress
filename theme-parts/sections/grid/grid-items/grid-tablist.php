<?php
/*
  Template blog list
  @package Clemo
*/

$tablist_args = array(
  'order' => 'ASC',
  'taxonomy' => 'tablist',
  'hide_empty' => false,
);

$tablist = get_terms( $tablist_args );

if( !empty( $tablist ) ):?>
  <div class="nav nav-tabs tablist" id="myTab" role="tablist"> <?php
    foreach( $tablist as $tab ):
      $tab_name = $tab->name;
      $tab_slug = $tab->slug;?>
      <a class="menu_list_nav <?php if( $tab === array_values( $tablist )[ 0 ] ) { echo "active"; } ?>" id="<?php echo $tab_slug; ?>-tab"
      data-toggle="tab" href="#<?php echo $tab_slug; ?>" role="tab" aria-controls="<?php echo $tab_slug; ?>" aria-selected="false"><?php echo $tab_name; ?></a> <?php
    endforeach;?>
  </div> <?php
endif;
