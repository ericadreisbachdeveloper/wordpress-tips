<?php

if (!defined('ABSPATH')) {
    exit;
}


/*
 * Define shortcode in functions.php
 * or similar
 */

add_shortcode('recent_post', 'recent_post_shortcode');

function recent_post_shortcode($atts)
{
    // save string to output buffer
    ob_start();

    $args = shortcode_atts(
        [
            'post_type' => 'post',
            'posts_per_page' => 1,
            'category_name' => 'news',
            'offset' => '0',
        ],
        $atts,
        'recent_post'
    );

    /*
     * get_template_part( string $slug, string|null $name = null, $args );
     * ref: https://developer.wordpress.org/reference/functions/get_template_part/
     */
    get_template_part('includes/recent-post', null, $args);

    return ob_get_clean();
}




/*
 * ... and in includes/recent-post.php
 * update query
 */

if (!defined('ABSPATH')) {
    exit;
}

$wp_query = new WP_Query($args); ?>

<?php if ('news' === $args['category_name']) {
    $link_text = 'Read';
} else {
    $link_text = 'Learn';
} ?>

<?php if ($wp_query->have_posts()) {  ?>

    <?php while ($wp_query->have_posts()) {
        the_post(); ?>

        <div class="slide-entry-excerpt entry-content">

            <?php _e(wp_trim_words(get_the_content(), 9, '').'&hellip;'); ?>

            <div class="read-more-div">
                <a class="read-more-link" href="<?php _e(esc_url(get_the_permalink())); ?>"><?php _e($link_text.' More<span class="sr-only"> - click to read '.get_the_title().'</span><span class="more-link-arrow"></span>'); ?></a>
            </div>

        </div>

        </a>

    <?php } ?>

<?php } ?>

<?php wp_reset_query();
/* ref: https://developer.wordpress.org/reference/functions/wp_reset_query/          */
/* This will remove obscure bugs that occur when the previous WP_Query object is not */
/* destroyed properly before another is set up.                                      */
