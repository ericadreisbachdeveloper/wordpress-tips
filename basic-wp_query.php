
<?php

declare(strict_types=1);

/* unpacked this ternary to avoid the wretched undoings of PHP CS Fixer */
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} else {
    $paged = 1;
}

$args = [
    'post_type' => 'parts',
    'posts_per_page' => 12,
    'paged' => $paged,
    'tax_query' => [
        [
            'taxonomy' => 'category-series',
            'field' => 'term_id',
            'terms' => $term_obj->term_taxonomy_id,
        ],
    ],
];

$wp_query = new WP_Query($args);


if ($wp_query->have_posts()) { ?>

    <?php while ($wp_query->have_posts()) { ?>

        <?php $wp_query->the_post(); ?>

     
<?php } /* endwhile */ ?>
<?php } /* endif */ ?>



<?php /*
       * Basic paginate links function
       * ref: https://developer.wordpress.org/reference/functions/paginate_links/
       */ ?>

<div class="xxx-pagination">

<?php /* http://localhost/robertshaw/parts/gas-valves/page/3/?view=grid */ 

<?php $big = 999999999;
_e(paginate_links([
    'format' => '?page=%#%',  /* <<< this argument used to accommodate URL rewrites on robertshaw.com */
    'current' => max(1, get_query_var('paged')),
    'prev_text' => __('&laquo; Previous'),
    'next_text' => __('Next &raquo;'),
    'total' => $wp_query->max_num_pages]));
?>

</div>
<div class="rsh-pagination">
<?php $big = 999999999;
_e(paginate_links([
    'format' => '?page=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages]));
?>
</div>


<?php wp_reset_postdata();
?>




