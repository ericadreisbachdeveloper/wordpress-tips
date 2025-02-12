<?php


/*
 * Category-Series Dashboard - 1 of 2
 * - remove Description column
 * - add Image column
 *
 * ref: https://developer.wordpress.org/reference/hooks/manage_this-screen-taxonomy_custom_column/
 */
add_filter('manage_edit-category-series_columns', 'categoryseries_columns_function');
add_filter('manage_edit-category-series_sortable_columns', 'categoryseries_columns_function');

function categoryseries_columns_function($columns)
{
    unset($columns['description']);

    return array_merge($columns, [
        'category_series_img' => __('Image'),
    ]);

    return $columns;
}

/*
 * Category-Series Dashboard - 2 of 2
 * add Image thumb
 */
add_action('manage_category-series_custom_column', 'category_series_custom_column', 10, 3);

function category_series_custom_column($thumb, $column, $term_id): void
{
    switch ($column) {
        case 'category_series_img':
            $thumb_id = get_term_meta($term_id, 'category_series_img', true);
            $thumb = wp_get_attachment_image($thumb_id, 'thumbnail');
            _e($thumb);

            break;
    }
}
