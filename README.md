# wordpress-tips
An evolving list of WordPress tips and tricks 



## Adding WordPress Default Taxonomies to Pages 



## Basic wp_query
*12 Feb 2025 - erica@peppergroup.com*



## Debugging
*8 Feb 2025 - erica@peppergroup.com*

[debugging.php](debugging.php)

- Output php files used to create a given page
- Output registered scripts



## Add ACF Fields to Admin Screens
*12 Feb 2025 - erica@peppergroup.com*

[add-acf-image-to-admin-scren.php](add-acf-image-to-admin-scren.php) 

This is very good, very helpful, especially for **featured images**. Can be repurposed for w/e you want to add as a custom column. 



## Images
*8 Feb 2025 - erica@peppergroup.com*

The most powerful Wordpress image function of all time: `wp_prepare_attachment_for_js($img_id);`

`$img_js = wp_prepare_attachment_for_js($img_id);`
`$img = $img_js['sizes']['large']['url'];`
`$title = $img_js['title'];`
`$alt = $img_js['alt'];`



## Basic Shortcode 
*6 Feb 2025 - erica@peppergroup.com*<br> 
The classic: a shortcode to output &copy;YYYY 

[shortcode-copyright.php](shortcode-copyright.php)



## Yoast Excerpt Shortcode
*6 Feb 2025 - erica@peppergroup.com*<br>

[shortcode-yoast-excerpt.php](shortcode-yoast-excerpt.php) 


## Trim Excerpt
*16 Dec 2024 - erica@peppergroup.com* <br>
Lightweight, very nice 

ref: https://developer.wordpress.org/reference/functions/the_excerpt/

`<?php echo wp_trim_words(get_the_excerpt(), 15); ?>`



## Add Categories to Pages 
*Dec 2024 - erica@peppergroup.com* <br>
Example below used on EnviroServe - [enviroserve.com](https://enviroserve.com)

(add-categories-to-pages.php)[add-categories-to-pages.php]


## Custom Admin Post Columns 
*Dec 2024 - erica@peppergroup.com* <br>
Example below used on Carow Packaging - [carowpackaging.com](https://carowpackaging.com) 

(custom-admin-post-columns.php)[custom-admin-post-columns.php]



## Diagnostics 
*29 Oct 2024 - erica@peppergroup.com* <br>
For webhosts that allow WordPress command line interface (CLI) (*not* Pantheon):

1. Update WordPress Command Line Interface (CLI) <br>
`$ wp cli update`

2. Install `profile` command <br>
`$ wp package install wp-cli/profile-command`

3. Identify slow modules <br>
`$ wp profile stage --fields=stage,time,cache_ratio`



## Another name for localhost 
*28 October 2024 - erica@peppergroup.com* <br>
This was necessary for local CLI commands: <br>
`define('DB_HOST', '127.0.0.1');`



## Custom Post Types
*Sep 2024 - erica@peppergroup.com* <br>
[Basic Register Post Type](basic-register-post-type.php)

[Basic Register Taxonomy](basic-register-post-type.php)

[Change Default Post Object](change-default-post-object.php)


