<?php

// **************** CPT & TAX **********************//
// *************************************************//

function tmr_register_custom_post_types() {

    // **************** CLIENT CPT ********************//
    // ************************************************//

    $labels = array(
        'name'               => _x( 'Clients', 'post type general name' ),
        'singular_name'      => _x( 'Client', 'post type singular name'),
        'menu_name'          => _x( 'Clients', 'admin menu' ),
        'name_admin_bar'     => _x( 'Client', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Client' ),
        'add_new_item'       => __( 'Add New Client' ),
        'new_item'           => __( 'New Client' ),
        'edit_item'          => __( 'Edit Client' ),
        'view_item'          => __( 'View Client' ),
        'all_items'          => __( 'All Clients' ),
        'search_items'       => __( 'Search Clients' ),
        'parent_item_colon'  => __( 'Parent Clients:' ),
        'not_found'          => __( 'No Clients found!' ),
        'not_found_in_trash' => __( 'No Clients found in Trash.' ),
        'archives'           => __( 'Client Archives'),
        'insert_into_item'   => __( 'Insert into Client'),
        'uploaded_to_this_item' => __( 'Uploaded to this Client'),
        'filter_item_list'   => __( 'Filter Clients list'),
        'items_list_navigation' => __( 'Clients list navigation'),
        'items_list'         => __( 'Clients list'),
        'featured_image'     => __( 'Client featured image'),
        'set_featured_image' => __( 'Set Client featured image'),
        'remove_featured_image' => __( 'Remove Client featured image'),
        'use_featured_image' => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        // this makes it so that its name in the URL looks pretty!
        // right here, you can see it in /works
        'rewrite'            => array( 'slug' => 'clients' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-store',
        'supports'           => array( 'title', 'thumbnail' ),

    );
    register_post_type( 'tmr-client', $args );

}
add_action( 'init', 'tmr_register_custom_post_types' );


function tmr_register_taxonomies() {

     // **************** CLIENT TAX ********************//
    // *************************************************//

    // Add Client Type Taxonomy
    $labels = array(
        'name'              => _x( 'Client Types', 'taxonomy general name' ),
        'singular_name'     => _x( 'Client Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Client Types' ),
        'all_items'         => __( 'All Client Types' ),
        'parent_item'       => __( 'Parent Client Type' ),
        'parent_item_colon' => __( 'Parent Client Type:' ),
        'edit_item'         => __( 'Edit Client Type' ),
        'view_item'         => __( 'View Client Type' ),
        'update_item'       => __( 'Update Client Type' ),
        'add_new_item'      => __( 'Add New Client Type' ),
        'new_item_name'     => __( 'New Client Type Name' ),
        'menu_name'         => __( 'Client Type' ),

    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'client-type' ),
        
    );
    register_taxonomy( 'tmr-client-type', array( 'tmr-client' ), $args );

   
}
add_action( 'init', 'tmr_register_taxonomies');

function tmr_rewrite_flush() {
    tmr_register_custom_post_types();
    tmr_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'tmr_rewrite_flush' );