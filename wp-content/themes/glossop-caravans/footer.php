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
<footer class="main-footer">
    <?php echo do_shortcode('[template template_id=136]'); ?>
</footer>

<div class="backdrop"></div>
<div class="d-none">
    <?= do_shortcode('[template template_id=1719]') ?>
    <?= do_shortcode('[template template_id=1602]') ?>
    <?= do_shortcode('[template template_id=1618]') ?>
    <?= do_shortcode('[template template_id=3897]') ?>
    <?= do_shortcode('[template template_id=1719]') ?>

</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="container">
<p style="font-size:16px;">Designed & Produced by <a href="https://digitallydisruptive.co.uk/">Digitally Disruptive</a></p>
</div>

<?php
get_template_part('template-parts/offcanvas/finance-calculator');
get_template_part('template-parts/offcanvas/reserve-form');
?>

</body>

</html>