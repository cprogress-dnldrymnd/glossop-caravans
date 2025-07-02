<?php
if (isset($_GET['static_template']) && $_GET['static_template'] == 'true') {
    get_header();
}
the_content();

if (isset($_GET['static_template']) && $_GET['static_template'] == 'true') {
    get_footer();
}
