<?php

if (!defined('ABSPATH')) {
    exit;
}

/*
 * Shortcode output (c)YEAR
 * [copyright]
 */
add_shortcode('copyright', 'copyright_sign');

function copyright_sign()
{
    $current_year = date('Y');

    return '&copy;'.$current_year;

}
