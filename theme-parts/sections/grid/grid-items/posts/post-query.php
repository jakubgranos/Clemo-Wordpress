<?php
/*
  Template post query
  @package Clemo
*/

$tablists_args = array(
  'order' => 'ASC',
  'taxonomy' => 'tablist',
  'hide_empty' => false,
);

$tablists = get_terms( $tablist_argss );
$display_list = get_sub_field( 'display_list' );

if( !empty( $tablists ) ):
  foreach( $tablists as $key => $tablist ):
    $tab_name = $tablist->name;
    $tab_slug = $tablist->slug;
    $query = new WP_Query( array(
      'post_type' => 'grid-post',
      'tax_query' => array(
        array(
          'taxonomy' => 'tablist',
          'field'    => 'slug',
          'terms'    => $tab_slug,
        ),
      ),
    ));?>

    <article class="tab-pane fade <?php if ( $key === array_key_first( $tablists ) ) { echo "active show"; } ?>" id="<?php echo $tab_slug; ?>" role="tabpanel" 
    aria-labelledby="<?php echo $tab_slug; ?>-tab">
      <?php require 'post-query-content.php'; ?>
    </article> <?php
    wp_reset_postdata();
  endforeach;
endif;
