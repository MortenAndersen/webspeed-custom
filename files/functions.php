<?php 

add_filter( 'single_template', 'override_single_template' );
function override_single_template( $single_template ){
    global $post;

    $file = dirname(__FILE__) .'/../templates/single-'. $post->post_type .'.php';

    if( file_exists( $file ) ) $single_template = $file;

    return $single_template;
}