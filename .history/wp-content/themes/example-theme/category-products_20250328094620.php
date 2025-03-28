<?php
get_header();
?>
<section class="hero">
    <div class="hero-text">
        <?php
        echo '<h1>' . single_cat_title('', false) . '</h1>';
        echo '<p>'  . category_description() . '</p>';
        $header_images = get_uploaded_header_images();
        array_shift($header_images);
        ?>
    </div>
    <img src="<?php echo $header_images[1]['url'] ?>" alt="randomkuva">
</section>
<main>
    <section class="products">
        <h2>Featured Products</h2>
        <?php

        generate_article($wp_query);
        ?>
    </section>
</main>
<?php
get_footer();
