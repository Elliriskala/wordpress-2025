<?php

function generate_article($products)
{
    if ($products->have_posts()) :
        while ($products->have_posts()) :
            $products->the_post();
?>
            <article class="product">
                <?php
                the_post_thumbnail();
                the_title('<h3>', '</h3>');
                the_excerpt();
                ?>
                <a href="#">Read More</a>
            </article>
<?php
        endwhile;
    endif;
} // end generate_article()