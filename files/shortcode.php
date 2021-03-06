<?php

add_shortcode('custom', 'webspeed_custom');
function webspeed_custom($atts) {
  global $post;
  ob_start();

  // define attributes and their defaults
  extract(shortcode_atts(array('grid' => '3', 'gap' => '2', 'type' =>'' ), $atts));


if (!empty($type)) {

 $loop = new WP_Query( array(
  'post_type' => 'custom',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'posts_per_page' => -1,
  'tax_query' => array(
    array (
      'taxonomy' => 'custom-type',
      'field' => 'slug',
      'terms' => $type,
    )
  ),
  )
);

} else {
   $loop = new WP_Query( array(
    'post_type' => 'custom',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1,
    )
  );

}

if( $grid == 2 ) {
    $grid_class = ' g-d-2 ';
} elseif ( $grid == 3) {
    $grid_class = ' g-d-3 ';
} elseif ( $grid == 4) {
    $grid_class = ' g-d-4 ';
}else {
    $grid_class = ' g-d-1 ';
}

if( $gap == 1 ) {
  $gap_class = 'gap-1 ';
  } elseif( $gap == 2 ) {
    $gap_class = 'gap-2 ';
    } elseif ( $gap == 3) {
        $gap_class = 'gap-3 ';
    } elseif ( $gap == 4) {
        $gap_class = 'gap-4 ';
    }else {
    $gap_class = 'no-gap ';
}


if ( $loop->have_posts() ) {
  echo '<div class="custom-shortcode grid ' . $grid_class . $gap_class . '">';
  while ( $loop->have_posts() ) : $loop->the_post();
    echo '<div id="post-id-' .get_the_ID(). '" class="custom-item">';

      echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';

    echo '</div>';
  endwhile; wp_reset_query();
  echo '</div>';
}

    $myvariable = ob_get_clean();
        return $myvariable;
}