<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Custom Post Columns
 * ref: https://developer.wordpress.org/reference/hooks/manage_posts_columns/
 */
add_filter('manage_posts_columns', 'set_post_columns');

function set_post_columns($columns)
{
    return [
        'title' => __('Title'),
        'date' => __('Date'),
        'taxonomy-category' => __('Resource Type'),
        'taxonomy-market' => __('Markets'),
        'taxonomy-product-category' => __('Product Categories'),
    ];
}
