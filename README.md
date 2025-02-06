# WordPress Tips
An evolving list of WordPress tips and tricks 


## Trim Excerpt
*16 Dec 2024* <br>
Lightweight, very nice 

ref: https://developer.wordpress.org/reference/functions/the_excerpt/

`<?php echo wp_trim_words(get_the_excerpt(), 15); ?>`



## Add Categories to Pages 
Example below used on EnviroServe - [enviroserve.com](https://enviroserve.com)

`/*` <br>
` * Add Categories to Pages`<br>
` * powers the cards on Sub Services pages`<br>
` * ref: https://stackoverflow.com/a/14711608`<br>
` */`<br>
`add_action('init', 'add_categories_to_pages');`<br>
` `<br>
`function add_categories_to_pages()`<br>
`{`<br>
` `<br>
`    // Add category metabox to page`<br>
`    register_taxonomy_for_object_type('category', 'page');`<br>
` `<br>
`}`



## Custom Admin Post Columns 
Example below used on Carow Packaging - [carowpackaging.com](https://carowpackaging.com) 

`/*`<br>
` * Custom Post Columns`<br>
` * ref: https://developer.wordpress.org/reference/hooks/manage_posts_columns/` <br>
` */`<br>
`add_filter('manage_posts_columns', 'set_post_columns');`<br>
` `<br>
`function set_post_columns($columns)`<br>
`{`<br>
`    return [`<br>
`        'title' => __('Title'),`<br>
`        'date' => __('Date'),`<br>
`        'taxonomy-category' => __('Resource Type'),`<br>
`        'taxonomy-market' => __('Markets'),`<br>
`        'taxonomy-product-category' => __('Product Categories'),`<br>
`    ];`<br>
`}`



## Diagnostics 
*as of 29 October 2024* 

For webhosts that allow WordPress command line interface (CLI) (*not* Pantheon):

1. Update WordPress Command Line Interface (CLI) <br>
`$ wp cli update`

2. Install `profile` command <br>
`$ wp package install wp-cli/profile-command`

3. Identify slow modules <br>
`$ wp profile stage --fields=stage,time,cache_ratio`



## Another name for localhost 
*28 October 2024* <br>
This was necessary for local CLI commands: <br>
`define('DB_HOST', '127.0.0.1');`



## Custom Post Types
[Basic Register Post Type](basic-register-post-type.php)

[Basic Register Taxonomy](basic-register-post-type.php)

[Change Default Post Object](change-default-post-object.php)


