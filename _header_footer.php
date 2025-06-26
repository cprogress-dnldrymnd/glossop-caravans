<?php
require_once("./wp-load.php");
wp_head();
echo do_shortcode('[contact-form-7 id="373aeba" title="Static Pages Enquiry Form"]');
wp_footer();
/*
global $is_static_page;
$is_static_page = true;
get_header('static-pages');
get_footer('static-pages');
*/