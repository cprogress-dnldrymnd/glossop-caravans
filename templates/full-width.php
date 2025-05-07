<?php
/*-----------------------------------------------------------------------------------*/
/* Template Name: Full Width Page 
/*-----------------------------------------------------------------------------------*/
?>
<?php get_header() ?>

<section class="full-width-section">
    <?php while (have_posts()) { ?>
        <?php the_post() ?>
        <?php the_content() ?>
    <?php } ?>
</section>

<?php get_footer() ?>