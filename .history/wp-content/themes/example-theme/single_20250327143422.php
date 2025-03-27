<main class="full-width">
    <section class="single">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_title();
                the_content();
            endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        ?>
        <h2>Single</h2>

        <?php
        $products = the_post();
        generate_article($products);
        ?>
    </section>
</main>