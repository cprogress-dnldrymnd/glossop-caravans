<?php

function latest_deals()
{
    ob_start();
    get_template_part('template-parts/shortcodes/latest-deals');
    return ob_get_clean();
}

add_shortcode('latest_deals', 'latest_deals');


function listing_grid() 
{
    ob_start();
    get_template_part('template-parts/shortcodes/listing-grid');
    return ob_get_clean();
}