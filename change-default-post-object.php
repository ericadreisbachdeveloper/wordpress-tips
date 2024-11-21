<?php

// Used on Carow
add_action('init', 'car_post_object');

// Change dashboard "Posts" to "Resources"
function car_post_object()
{

    // Change default Post labels
    $get_post_type = get_post_type_object('post');

    $labels = $get_post_type->labels;
    $labels->name = 'Resources';
    $labels->singular_name = 'Resources';
    $labels->add_new = 'Add Resource';
    $labels->add_new_item = 'Add Resource';
    $labels->edit_item = 'Edit Resource';
    $labels->new_item = 'Resources';
    $labels->view_item = 'View This Resource';
    $labels->search_items = 'Search Resources';
    $labels->not_found = 'No Resources found';
    $labels->not_found_in_trash = 'No Resources found in Trash';
    $labels->all_items = 'All Resources';
    $labels->menu_name = 'Resources';
    $labels->name_admin_bar = 'Resources';

    // Disable Gutenberg and allow Advanced Layout Builder in Resources (fka Posts)
    $get_post_type->show_in_rest = '0';


    // Disable Gutenberg and allow Advanced Layout Builder in Pages
    $get_page = get_post_type_object('page');

    $get_page->show_in_rest = '0';

}
