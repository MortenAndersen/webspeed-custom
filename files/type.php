<?php
// Custom Taxonomy = 'custom-type'

    function custom_taxonomy_custom() {

    $labels = array(
        'name'                       => _x( 'Typer', 'Taxonomy General Name', 'webspeed-custom-domain' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'webspeed-custom-domain' ),
        'menu_name'                  => __( 'Type', 'webspeed-custom-domain' ),
        'all_items'                  => __( 'All Items', 'webspeed-custom-domain' ),
        'parent_item'                => __( 'Parent type', 'webspeed-custom-domain' ),
        'parent_item_colon'          => __( 'Parent type:', 'webspeed-custom-domain' ),
        'new_item_name'              => __( 'New Item Name', 'webspeed-custom-domain' ),
        'add_new_item'               => __( 'Add New type', 'webspeed-custom-domain' ),
        'edit_item'                  => __( 'Edit Item', 'webspeed-custom-domain' ),
        'update_item'                => __( 'Update Item', 'webspeed-custom-domain' ),
        'view_item'                  => __( 'View Item', 'webspeed-custom-domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'webspeed-custom-domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'webspeed-custom-domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'webspeed-custom-domain' ),
        'popular_items'              => __( 'Popular Items', 'webspeed-custom-domain' ),
        'search_items'               => __( 'Search Items', 'webspeed-custom-domain' ),
        'not_found'                  => __( 'Not Found', 'webspeed-custom-domain' ),
        'no_terms'                   => __( 'No items', 'webspeed-custom-domain' ),
        'items_list'                 => __( 'Items list', 'webspeed-custom-domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'webspeed-custom-domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'                          => true,

    );
    register_taxonomy( 'custom-type', array( 'custom' ), $args );
}

add_action( 'init', 'custom_taxonomy_custom', 2 );