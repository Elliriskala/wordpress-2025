<?php

function generate_article($products)
{
    if ($products->have_posts()) :
        while ($products->have_posts()) :
            $products->the_post();
?>
            <article class="product">
                <img src="//place-hold.it/200x200?text=Product" alt="Product">
                <?php
                the_title('<h3>', '</h3>');
                the_post();
                ?>
                <a href="#">Read More</a>
            </article>
<?php
        endwhile;
    endif;
} // end generate_article()