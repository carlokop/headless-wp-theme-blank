<?php

/**
  * @package  headless
  * Register custom posts
**/

add_action( 'init', 'init_custom_post_type');

function init_custom_post_type() {
    
    //post type Portfolio
    $labels = array(
        'name'                   => _x( 'Portfolios', 'post type general name' ),
        'singular_name'          => _x( 'Portfolio', 'post type singular name' ),
        'add_new'                => __( 'Nieuwe toevoegen', 'Portfolio' ),
        'add_new_item'           => __( 'Nieuwe toevoegen' ),
        'edit_items'             => __( 'Item bewerken' ), 
        'new_items'              => __( 'Nieuw item' ), 
        'all_items'              => __( 'Alle Portfolio' ),
        'view_items'             => __( 'Bekijk item' ), 
        'search_items'           => __( 'Zoek Portfolio' ), 
        'not_found'              => __( 'Geen Portfolio gevonden' ), 
        'not_found_in_trash'     => __( 'Geen Portfolio in de prullenbak gevonden' ), 
        'parent_item_colon'      => '', 
        'menu_name'              => 'Portfolio', 
    );
    
    $supports = array(
        'editor',
        'title',
        'thumbnail',
        'excerpt',
        //'revisions',
        'custom-fields',
    );

    $details = array(
        'labels'        => $labels,
        'description'   => 'Portfolio',
        'public'        => false, 
        'show_ui'       => true,
        'show_in_rest'  => true,
        'menu_position' => 50,
        'menu_icon'     => 'dashicons-admin-appearance',
        'hierarchical'  => false,
        'supports'      => $supports,
        'has_active'    => true,
    );

    register_post_type( 'portfolio', $details );

    //portfolioCats taxonomie
    $labels = array(
        'name'                       => _x( 'Categorieen', 'taxonomy general name', 'headless' ),
        'singular_name'              => _x( 'Categorie', 'taxonomy singular name', 'headless' ),
        'search_items'               => __( 'Zoek Categorie', 'headless' ),
        'all_items'                  => __( 'Alle Categorieen', 'headless' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Bewerk categorie', 'headless' ),
        'update_item'                => __( 'Update categorie', 'headless' ),
        'add_new_item'               => __( 'Nieuwe categorie toevoegen', 'headless' ),
        'new_item_name'              => __( 'Nieuwe categorie naam', 'headless' ),
        'separate_items_with_commas' => __( 'Items met komma scheiden', 'headless' ),
        'add_or_remove_items'        => __( 'Categorie toevoegen of verwijderen', 'headless' ),
        'not_found'                  => __( 'Geen categorieen gevonden', 'headless' ),
        'menu_name'                  => __( 'Categorieen', 'headless' ),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => false,
        //'rewrite'               => array( 'slug' => 'sliders' ),
    );

    register_taxonomy( 'portfolioCats', 'portfolio', $args );

   
}    
    