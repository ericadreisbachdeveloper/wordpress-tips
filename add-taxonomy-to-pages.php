<?php

// ref: https://developer.wordpress.org/reference/functions/register_taxonomy_for_object_type/

// Add to the admin_init hook
add_action('init', 'myplugin_settings');

function myplugin_settings()
{
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page');
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');
}
