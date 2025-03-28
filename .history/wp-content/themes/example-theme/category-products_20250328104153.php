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
    <?php
    $header_images = get_uploaded_header_images();
    array_shift($header_images);
    ?>
    <img src="<?php echo $header_images[0]['url'] ?>" alt="headerkuva" 
         width="<?php echo get_custom_header()->width; ?>" 
         height="<?php echo get_custom_header()->height; ?>">
</section>
<main>
    <section class="products">
        <?php
        $args = ['child_of' => get_queried_object_id()];
        $subcategories = get_categories($args);

        foreach ($subcategories as $subcategory) {
            echo '<h2>' . $subcategory->name . '</h2>';
        }
        ?>
        <?php
        generate_article($wp_query);
        ?>
    </section>
</main>
<?php
get_footer();
