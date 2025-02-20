<?php


/* in functions.php */
add_shortcode('output_posts', 'output_posts_shortcode');

function output_posts_shortcode($atts)
{
    // save string to output buffer
    ob_start();

    if (get_query_var('paged')) {
        $paged = get_query_var('paged');
    } else {
        $paged = 1;
    }

    $atts = shortcode_atts(
        [
    'cat' => 98,],
        $atts,
        'output_posts'
    );

    $args = shortcode_atts(
        [
            'post_type' => 'post',
            'posts_per_page' => 9,
            'paged' => $paged,
            'cat' => $atts['cat'],
        ],
        $atts,
        'output_posts'
    );

    /*
     * get_template_part( string $slug, string|null $name = null, $args );
     * ref: https://developer.wordpress.org/reference/functions/get_template_part/
     */
    get_template_part('includes/output-posts', null, $args);

    return ob_get_clean();
}





/* and at the top of the include - includes/output-posts.php in this case ... */
$wp_query = new WP_Query($args);


/* and at the end ... */
wp_reset_postdata();
