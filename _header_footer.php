<?php
require_once("./wp-load.php");
global $is_static_page;
$is_static_page = true;
get_header('static-pages');
get_footer('static-pages');