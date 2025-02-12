<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Enable shortcodes in Yoast SEO Title, Meta Description
 *
 * ref: https://www.michaelsherry.com.au/tutorials/how-to-enable-wordpress-shortcodes-in-the-yoast-seo-fields/
 */
add_filter('wpseo_title', 'do_shortcode');
add_filter('wpseo_metadesc', 'do_shortcode');
add_filter('wpseo_opengraph_desc', 'do_shortcode');
add_filter('wpseo_twitter_description', 'do_shortcode');

/*
 * Enfold excerpt shortcode for Yoast
 * - yields a default 20-word text excerpt when Yoast meta description is blank
 * - AVIA framework shortcodes block normal auto-generated WordPress excerpts
 *
 * - enter under: Yoast > Settings > Pages > Meta description
 * - Yoast > Settings > Posts > Meta description
 * - Yoast > Settings > [Other Custom Post Types] > Meta description
 *
 * [yoast_excerpt]
 */
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
