<?php


add_action('init', 'foo_tax_init');


function foo_tax_init()
{

    register_taxonomy(
        'product-category',
        array('post', 'products'),
        array(
            'labels' => array(
                'name' => 'Product Category',
                'add_new_item' => 'Add New Product Category',
                'new_item_name' => 'New Product Category',
            ),
            //'rewrite' => array( 'slug' => '/', 'with_front' => false ),

            'show_ui' => true,
            'show_tagcloud' => false,

            // hierarchical = true   -  checkboxes (like Wordpress default Categories)
            // hierarchical = false  -  type-in input (like Wordpress default Tags)
            'hierarchical' => true,

            'has_archive' => true,

            // endpoint mask - https://stackoverflow.com/a/39343317
            'ep_mask' => EP_PERMALINK,
            'show_admin_column' => true,

            // 'show_in_rest' => '1' enables Gutenberg blocks
            'show_in_rest'       => '0',
        )
    );


    // include flush_rewrite_rules(); as needed when permalinks change
    // flush_rewrite_rules();


}
