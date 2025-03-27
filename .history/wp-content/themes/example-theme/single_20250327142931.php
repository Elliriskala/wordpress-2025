<main class="full-width">
    <section class="single">
        <h2>Featured Products</h2>
        <?php
        $args = ['tag' => 'featured', 'posts_per_page' => 3];
        $products = new WP_Query($args);
        generate_article($products);
        ?>
    </section>
</main>