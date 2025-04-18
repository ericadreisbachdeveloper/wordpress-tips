# wordpress-tips
An evolving list of WordPress tips and tricks 


## Escape Functions 
*10 Apr 2025* 

https://www.sitepoint.com/sanitizing-escaping-validating-data-in-wordpress/

- `_e( sanitize_email(...); ` 
- `_e( sanitize_file_name(...); `
- `_e( sanitize_key(...);  // can only have lowercase alphanumeric characters, dashes and underscores` 
- `_e( sanitize_text_field(...);  //  removes invalid UTF-8 characters, converts HTML specific characters to entities, strips all tags, and removes line breaks, tabs and extra whitespace, strip octet; WordPress uses to sanitize widget titles ` 
- `_e( sanitize_title(...); // removes PHP and HTML tags from a string, as well as removing accents. Whitespace characters are converted to dashes ("permalinks")`
- `esc_html(...) // escapes HTML specific characters`
- `esc_url(...) // escape the href attribute to protext from XSS attack via URL`
- `antispambot(...) // protext email addresses from spambot scrapes`


## Pass Shortcode Att to Template Include
*20 Feb 2025*

[pass-shortcode-att-to-include.php](pass-shortcode-att-to-include.php)



## Add WordPress Default Taxonomies to Pages 
*15 Feb 2025* 

[add-taxonomy-to-pages.php](add-taxonomy-to-pages.php)



## Basic wp_query
*12 Feb 2025*

[basic-wp_query.php](basic-wp_query.php)



## Debugging
*8 Feb 2025*

[debugging.php](debugging.php)

- Output php files used to create a given page
- Output registered scripts



## Add ACF Fields to Admin Screens
*12 Feb 2025*

[add-acf-image-to-admin-screen.php](add-acf-image-to-admin-screen.php) 

This is very good, very helpful, especially for **featured images**. Can be repurposed for w/e you want to add as a custom column. 



## Images
*8 Feb 2025*

The most powerful Wordpress image function of all time: `wp_prepare_attachment_for_js($img_id);`

`$img_js = wp_prepare_attachment_for_js($img_id);`
`$img = $img_js['sizes']['large']['url'];`
`$title = $img_js['title'];`
`$alt = $img_js['alt'];`



## Basic Shortcode 
*6 Feb 2025*

The classic: a shortcode to output &copy;YYYY 

[shortcode-copyright.php](shortcode-copyright.php)



## Trim Excerpt
*16 Dec 2024* 

Lightweight, very nice 

ref: https://developer.wordpress.org/reference/functions/the_excerpt/

`<?php echo wp_trim_words(get_the_excerpt(), 15); ?>`



## Add Categories to Pages 
*Dec 2024* 

Example below used on EnviroServe - [enviroserve.com](https://enviroserve.com)

(add-categories-to-pages.php)[add-categories-to-pages.php]



## Custom Admin Post Columns 
*Dec 2024* 

Example below used on Carow Packaging - [carowpackaging.com](https://carowpackaging.com) 

(custom-admin-post-columns.php)[custom-admin-post-columns.php]



## Diagnostics 
*29 Oct 2024* 

For webhosts that allow WordPress command line interface (CLI) (*not* Pantheon):

1. Update WordPress Command Line Interface (CLI) <br>
`$ wp cli update`

2. Install `profile` command <br>
`$ wp package install wp-cli/profile-command`

3. Identify slow modules <br>
`$ wp profile stage --fields=stage,time,cache_ratio`



## Another name for localhost 
*28 October 2024* 

This was necessary for local CLI commands: <br>
`define('DB_HOST', '127.0.0.1');`



## Custom Post Types
*Sep 2024* 

[Basic Register Post Type](basic-register-post-type.php)

[Basic Register Taxonomy](basic-register-post-type.php)

[Change Default Post Object](change-default-post-object.php)



