<?php get_header() ?>

<div class="site-content site-content--default">
    <div class="container">
        <?php while (have_posts()) { ?>
            <h1><?php the_title() ?></h1>
            <div class="site-content--inner">
                <?php the_post() ?>
                <?php the_content() ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer() ?>