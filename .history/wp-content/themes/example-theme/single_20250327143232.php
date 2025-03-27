<main class="full-width">
    <section class="single">
        <h2>Single</h2>
        <?php
        $args = ['tag' => 'featured', 'posts_per_page' => 3];
        $products = the_post();
        generate_article($products);
        ?>
    </section>
</main>