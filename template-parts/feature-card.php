<?php
$title = $args['title'] ?? '';
$text  = $args['text'] ?? '';
$link  = $args['link'] ?? '';
?>

<article class="feature-card">
    <h2><?php echo esc_html($title); ?></h2>

    <p><?php echo esc_html($text); ?></p>

    <?php if ($link) : ?>
        <a href="<?php echo esc_url($link); ?>">Learn more</a>
    <?php endif; ?>
</article>