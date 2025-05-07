<?php get_header() ?>

<div class="site-content">
    <div class="container">
        <?php while (have_posts()) { ?>
            <?php the_post() ?>
            <?php the_content() ?>
        <?php } ?>
    </div>
</div>

<?php get_footer() ?>