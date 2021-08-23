<?php

function ade_register_post_type() {
    $singular = 'Product'; // Book
	$plural = 'Products';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'ade' ),
        'singular_name' 	  => __( $singular, 'ade' ),
        'add_new' 		      => _x( 'Add New', 'ade', 'ade' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'ade' ),
        'edit'		          => __( 'Edit', 'ade' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'ade' ),
        'new_item'	          => __( 'New ' . $singular, 'ade' ),
        'view' 			      => __( 'View ' . $singular, 'ade' ),
        'view_item' 		  => __( 'View ' . $singular, 'ade' ),
        'search_term'   	  => __( 'Search ' . $plural, 'ade' ),
        'parent' 		      => __( 'Parent ' . $singular, 'ade' ),
        'not_found'           => __( 'No ' . $plural .' found', 'ade' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'ade' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-chart-bar',
        // 'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'ade_register_post_type' );