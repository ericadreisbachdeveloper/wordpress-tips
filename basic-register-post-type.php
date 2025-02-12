<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'foo_post_types_init');

function foo_post_types_init()
{


    // Team post type
    $team_labels = array(
        'name'               => _x('Team', 'post type general name', 'foo'),
        'singular_name'      => _x('Team', 'post type singular name', 'foo'),
        'menu_name'          => _x('Team', 'admin menu', 'foo'),
        'name_admin_bar'     => _x('Team', 'add new on admin bar', 'foo'),
        'add_new'            => _x('Add Team Member', 'add new', 'foo'),
        'add_new_item'       => __('Add Team Member', 'foo'),
        'new_item'           => __('New Team Member', 'foo'),
        'edit_item'          => __('Edit Team Member', 'foo'),
        'view_item'          => __('View Team Member', 'foo'),
        'all_items'          => __('All Team', 'foo'),
        'search_items'       => __('Search Team', 'foo'),
        'parent_item_colon'  => __('Parent Team:', 'foo'),
        'not_found'          => __('No Team Members found.', 'foo'),
        'not_found_in_trash' => __('No Team Members found in Trash.', 'foo')
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
