<?php get_header(); ?>

<div class="content-area about-page">
    <header class="page-header">
        <h1>About Us</h1>
        <p>Learn more about our company.</p>
    </header>

    <div class="page-content">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum sed, odio similique praesentium suscipit non totam magni nisi fugit, iusto delectus harum dolores?</p>
    </div>

    <div class="feature-list">
        <?php
        get_template_part('template-parts/feature-card', null, array(
            'title' => 'Our Mission',
            'text'  => 'We build useful products for our customers.',
            'link'  => home_url('/mission/'),
        ));

        get_template_part('template-parts/feature-card', null, array(
            'title' => 'Our Team',
            'text'  => 'Meet the people behind our work.',
            'link'  => home_url('/team/'),
        ));

        get_template_part('template-parts/feature-card', null, array(
            'title' => 'Contact Us',
            'text'  => 'We would love to hear from you.',
        ));
        ?>
    </div>
</div>

<?php get_footer(); ?>