<main class="full-width">
    <section class="single">
        <h2>Single</h2>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_title();
                the_content();
            endwhile;
        else :
            _e('Sorry, no post to display', 'textdomain');
        endif;
        ?>
    </section>
</main>