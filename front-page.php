<?php get_header(); ?>

<section class="hero">
    <h1>Welcome to <?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</section>

<section class="homepage-content">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</section>

<?php get_footer(); ?>