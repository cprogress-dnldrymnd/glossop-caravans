<?php get_header() ?>

<div class="site-content site-content--default">
    <div class="container">
        <?php while (have_posts()) { ?>
            <h1 class="fs-35 sm-margin-bottom"><?php the_title() ?></h1>
            <div class="site-content--inner background-white p-4 rounded overflow-hidden">
                <?php the_post() ?>
                <?php the_content() ?>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer() ?>