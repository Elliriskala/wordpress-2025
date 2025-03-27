<?php
get_header();
?>
    <section class="hero">
        <div class="hero-text">
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
            <?php the_custom_header_markup() ?>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/map.svg" alt="Hero">
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
get_sidebar();
get_footer();
