<?php

// Custom

	add_action( 'init', 'webspeed_custom_create_posttype_custom' );

	function webspeed_custom_create_posttype_custom() {
	    register_post_type(
	    	'Custom',
	    	array(
	    		'labels' => array(
	    			'name' => __('Custom', 'websepeed-custom-domain'),
	    			'singular_name' => __('Custom', 'websepeed-custom-domain')
	    		),
	    		'public' => true,
	    		'publicly_queryable' => false,
	    		'show_in_nav_menus'          => false,
	    		'menu_icon' => 'dashicons-info-outline',
	    		'supports' => array(
	    			'title',
	    			'editor',
	    			'excerpt',
	    			'thumbnail',
	    			'page-attributes'
	    		),
	    		'show_in_rest' => true,
	    		'rewrite' => array(
	    			'slug' => 'custom'
	    		),
	    	)
	    );

	}

	function webspeed_curstom_posttype_function() {
	    webspeed_custom_create_posttype_custom();
	}

	register_activation_hook( __FILE__, 'webspeed_custom_posttype_function' );