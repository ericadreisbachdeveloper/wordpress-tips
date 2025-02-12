<?php 

/* 
 * Output all php files used to build a page 
 * ref: https://wordpress.stackexchange.com/a/145124
 */ 
add_action( 'muplugins_loaded', function()
{
    $files = get_included_files();
    foreach ( $files as $f )
        echo $f.'<br>';

    
}



/*
 * For debugging
 * output all script handles
 */
add_action( 'wp_print_scripts', 'inspect_scripts', 99 );

function inspect_scripts()
{
    if (!is_admin()) {
        global $wp_scripts;
        foreach($wp_scripts->queue as $handle) :
            echo $handle . ' | ';
        endforeach;
    }
} 