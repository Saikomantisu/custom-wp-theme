</main> <!-- Closes the main wrapper started in header.php -->

<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<!-- wp_footer() is mandatory. Plugins and WordPress use this to load scripts before the body closes. -->
<?php wp_footer(); ?>
</body>

</html>