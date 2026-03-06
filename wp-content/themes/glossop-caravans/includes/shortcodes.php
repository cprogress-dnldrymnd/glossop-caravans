<?php

function latest_deals()
{
    ob_start();
    get_template_part('template-parts/shortcodes/latest-deals');
    return ob_get_clean();
}

add_shortcode('latest_deals', 'latest_deals');


function listing_grid($atts)
{
    ob_start();
    extract(
        shortcode_atts(
            array(
                'style' => 'style-1',
                'image_id' => 47
            ),
            $atts
        )
    );
    $args['style'] = $style;
    $args['image_id'] = $image_id;
    get_template_part('template-parts/shortcodes/listing-grid', NULL, $args);
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
                'id'    => 'id'
            ),
            $atts
        )
    );
    $args['style'] = $style;
    $args['id'] = $id;
    get_template_part('template-parts/shortcodes/listing-grid-full-details', NULL, $args);
    return ob_get_clean();
}

add_shortcode('listing_grid_full_details', 'listing_grid_full_details');


function search_stock()
{
    ob_start();
    get_template_part('template-parts/header/search-stock');
    return ob_get_clean();
}
add_shortcode('search_stock', 'search_stock');



function testing()
{
    ob_start();
    // API URL — adjust if external API
    $api_url = ('https://manage.compare.group/api/caravans_listing');

    $response = wp_remote_post($api_url, array(
        'headers' => array(
            'X-API-KEY' => 'AlZeDqrRAn1fcaS8clOJD7WDDPRpTrkBsGguoeZv',
            'Content-Type' => 'application/json',
        ),
        'timeout' => 15,
    ));

    if (is_wp_error($response)) {
        echo '<p>Error fetching data.</p>';
    }

    $data = json_decode(wp_remote_retrieve_body($response), true);

    if (empty($data)) {
        echo '<p>No caravans found for this tag.</p>';
    }

    return ob_get_clean();
}

add_shortcode('test', 'testing');
