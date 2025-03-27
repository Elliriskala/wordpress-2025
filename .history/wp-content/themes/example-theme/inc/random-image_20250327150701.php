<?php

function get_random_post_image($category_id)
{
    $args = array(
        'post_type'      => 'post',
        'cat'            => $category_id,
        'posts_per_page' => 1,
        'orderby'        => 'rand',
    );
    $random_post = new WP_Query($args);
    $random_post->the_post();
}
