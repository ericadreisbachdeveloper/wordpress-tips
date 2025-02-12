<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Add Categories to Pages
 * powers the cards on Sub Services pages
 * ref: https://stackoverflow.com/a/14711608
 */
add_action('init', 'add_categories_to_pages');

function add_categories_to_pages()
{

    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');

}
