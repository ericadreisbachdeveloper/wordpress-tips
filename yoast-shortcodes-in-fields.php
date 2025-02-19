<?php

/*
 * Enable shortcodes in Yoast SEO Title, Meta Description
 *
 * ref: https://www.michaelsherry.com.au/tutorials/how-to-enable-wordpress-shortcodes-in-the-yoast-seo-fields/
 * ref: https://stackoverflow.com/a/74967190
 */
// Activate shortcode function in Post Title.
add_filter('the_title', 'do_shortcode');
add_filter('single_post_title', 'do_shortcode');
add_filter('wpseo_title', 'do_shortcode');
add_filter('wpseo_metadesc', 'do_shortcode');
add_filter('wpseo_opengraph_title', 'do_shortcode');
add_filter('wpseo_opengraph_desc', 'do_shortcode');
add_filter('wpseo_opengraph_site_name', 'do_shortcode');
add_filter('wpseo_twitter_title', 'do_shortcode');
add_filter('wpseo_twitter_description', 'do_shortcode');
add_filter('the_excerpt', 'do_shortcode');



add_shortcode('yoast_excerpt', 'yoast_excerpt_fxn');

function yoast_excerpt_fxn()
{
    global $post;

    $excerpt = get_the_content($post);

    // ref: https://forums.phpfreaks.com/topic/177367-solved-remove-square-brackets-and-contents-from-string/#findComment-935528
    $excerpt = preg_replace('#\[.*?\]#', '', $excerpt);

    $excerpt = wp_trim_words($excerpt, 20);

    return $excerpt;
}
