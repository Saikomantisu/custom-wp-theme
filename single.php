<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- Get the Post Title -->
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()): ?>
                <!-- Get the Post Thumbnail -->
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endif; ?>


            <!-- Get the Post Metadata (Date and Author) -->
            <p class="post-meta">
                Published on <?php the_date(); ?> by <?php the_author(); ?>
            </p>

            <!-- Get the Post Content -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <!-- Get the Post Categories -->
            <p class="post-categories">
                Categories: <?php the_category(', '); ?>
            </p>
        </article>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>