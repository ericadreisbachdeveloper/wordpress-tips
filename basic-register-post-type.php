<?php

add_action('init', 'car_post_types_init');

function car_post_types_init()
{


    // Team post type
    $team_labels = array(
        'name'               => _x('Team', 'post type general name', 'car'),
        'singular_name'      => _x('Team', 'post type singular name', 'car'),
        'menu_name'          => _x('Team', 'admin menu', 'car'),
        'name_admin_bar'     => _x('Team', 'add new on admin bar', 'car'),
        'add_new'            => _x('Add Team Member', 'add new', 'car'),
        'add_new_item'       => __('Add Team Member', 'car'),
        'new_item'           => __('New Team Member', 'car'),
        'edit_item'          => __('Edit Team Member', 'car'),
        'view_item'          => __('View Team Member', 'car'),
        'all_items'          => __('All Team', 'car'),
        'search_items'       => __('Search Team', 'car'),
        'parent_item_colon'  => __('Parent Team:', 'car'),
        'not_found'          => __('No Team Members found.', 'car'),
        'not_found_in_trash' => __('No Team Members found in Trash.', 'car')
    );

    $team_args = array(
        'labels'             => $team_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        // https://developer.wordpress.org/resource/dashicons/#icons-admin-menu
        'menu_icon'      =>  'dashicons-admin-users',

        'rewrite'            => array( 'slug' => 'team', 'with_front' => false ), //
        //'taxonomies'         => array('market'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'show_in_rest'       => false, /* Gutenberg */
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' )
    );

    register_post_type('Team', $team_args);


    // include flush_rewrite_rules(); as needed when permalinks change
    // flush_rewrite_rules();


}
