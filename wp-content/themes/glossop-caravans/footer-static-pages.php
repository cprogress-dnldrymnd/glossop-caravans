<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package orca
 */


?>

<?php echo do_shortcode('[template template_id=2540]'); ?>
<footer class="main-footer">
    <?php echo do_shortcode('[template template_id=136]'); ?>
</footer>

<div class="backdrop"></div>
<div class="d-none">
    <?= do_shortcode('[template template_id=1719]') ?>
    <?= do_shortcode('[template template_id=1602]') ?>
    <?= do_shortcode('[template template_id=1618]') ?>
    <?= do_shortcode('[template template_id=3897]') ?>
    <?= do_shortcode('[template template_id=5358]') ?>
    <?= do_shortcode('[template template_id=5816]') ?>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>


</body>

</html>