<?php
/*
  Theme attachment query
  @package clemo
*/

$tablists_args = array(
  'order' => 'ASC',
  'taxonomy' => 'tablist',
  'hide_empty' => false,
);

$tablists = get_terms( $tablist_argss );
$display_list = get_sub_field( 'display_list' );
$i = 0;

if( !empty( $tablists ) ):
  foreach( $tablists as $key => $tablist ):
    $tab_name = $tablist->name;
    $tab_slug = $tablist->slug;
    $query = new WP_Query( array(
      'post_type' => 'grid-attachment',
      'tax_query' => array(
        array(
          'taxonomy' => 'tablist',
          'field'    => 'slug',
          'terms'    => $tab_slug,
        ),
      ),
    ));?>

    <div class="gallery-row tab-pane fade <?php if ( $key === array_key_first( $tablists ) ) { echo "active show"; } ?>" id="<?php echo $tab_slug; ?>" role="tabpanel"
      aria-labelledby="<?php echo $tab_slug; ?>-tab"><?php
      if( $query->have_posts() ):
        while( $query->have_posts() ): $query->the_post(); $i++;?>
          <div class="gallery-row-column <?php if( $i % 2 == 0  && $i !== 6 ): echo 'gallery-row-second'; endif ?>">
            <?php the_post_thumbnail(); ?>
          </div><?php
        endwhile;
      endif;?>
    </div><?php
    wp_reset_postdata();
  endforeach;
endif;
