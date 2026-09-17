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
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu', // Must match the slug from functions.php
                'container'      => false,          // Removes the extra <div> wrapper around the <ul>
                'menu_class'     => 'nav-list',     // Adds a CSS class to the <ul> element
                'fallback_cb'    => false           // Hides the menu completely if no menu is assigned in the dashboard
            ));
            ?>
        </nav>
    </header>

    <!-- Main content wrapper starts here -->
    <main id="main" class="site-main">