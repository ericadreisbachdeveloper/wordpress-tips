# WordPress Tips
An evolving list of WordPress tips and tricks 



## Add Categories to Pages 
Example below used on EnviroServe - [enviroserve.com](https://enviroserve.com)

`/*` 
` * Add Categories to Pages`
` * powers the cards on Sub Services pages`
` * ref: https://stackoverflow.com/a/14711608`
` */`
`add_action('init', 'add_categories_to_pages');`
` `
`function add_categories_to_pages()`
`{`
` `
`    // Add category metabox to page`
`    register_taxonomy_for_object_type('category', 'page');`
` `
`}`



## Custom Admin Post Columns 
Example below used on Carow Packaging - [carowpackaging.com](https://carowpackaging.com) 

`/*`
` * Custom Post Columns`
` * ref: https://developer.wordpress.org/reference/hooks/manage_posts_columns/` 
` */`
`add_filter('manage_posts_columns', 'set_post_columns');`
` `
`function set_post_columns($columns)`
`{`
`    return [`
`        'title' => __('Title'),`
`        'date' => __('Date'),`
`        'taxonomy-category' => __('Resource Type'),`
`        'taxonomy-market' => __('Markets'),`
`        'taxonomy-product-category' => __('Product Categories'),`
`    ];`
`}`



## Diagnostics 
*29 October 2024* 
1. Update WordPress Command Line Interface (CLI) 
`$ wp cli update`

2. Install `profile` command 
`$ wp package install wp-cli/profile-command`

3. Identify slow modules
`$ wp profile stage --fields=stage,time,cache_ratio`



## Another name for localhost 
*28 October 2024* 
This was necessary for local CLI commands: 
`define('DB_HOST', '127.0.0.1');`



## Custom Post Types
