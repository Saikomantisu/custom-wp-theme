<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- wp_head() is mandatory. Plugins and WordPress use this to load styles and scripts. -->
    <?php wp_head(); ?>
</head>

<!-- body_class() adds dynamic CSS classes based on the current page -->

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?> <!-- Allows plugins to inject code right after the opening body tag -->

    <header class="site-header">
        <div class="site-branding">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>

        <nav class="site-navigation">
            <!-- Your WordPress menu function would go here -->
        </nav>
    </header>

    <!-- Main content wrapper starts here -->
    <main id="main" class="site-main">