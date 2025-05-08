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

add_shortcode('listing_grid', 'listing_grid');


function listing_grid_full_details($atts)
{
    ob_start();
    extract(
        shortcode_atts(
            array(
                'style' => 'style-1',
            ),
            $atts
        )
    );
    $args['style'] = $style;
    get_template_part('template-parts/shortcodes/listing-grid-full-details', NULL, $args);
    return ob_get_clean();
}

add_shortcode('listing_grid_full_details', 'listing_grid_full_details');