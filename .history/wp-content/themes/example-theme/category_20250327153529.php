<?php
get_header();
?>
<section class="hero">
    <div class="hero-text">
        <?php
        echo '<h1>' . single_cat_title('', false) . '</h1>';
        echo '<p>'  . category_description() . '</p>';
        ?>
    </div>
    <img src="<?php echo get_random_post_image(get_queried_object_id()); ?>" alt="randomkuva">
</section>
<main>
    <section class="products">
        <h2>Featured Products</h2>
        <?php
        $args = ['tag' => 'featured', 'posts_per_page' => 3];
        $products = new WP_Query($args);
        generate_article($products);
        ?>
    </section>
</main>
<?php
get_footer();
