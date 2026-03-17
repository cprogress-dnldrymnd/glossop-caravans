<?php
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});


add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

function action_wp_enqueue_scripts_admin()
{
    wp_enqueue_style('style---admin', theme_dir . 'admin/admin.css');
}
add_action('admin_enqueue_scripts', 'action_wp_enqueue_scripts_admin', 20);


/**
 * Enqueue Editor assets.
 */
function example_enqueue_editor_assets()
{
    wp_enqueue_style('child-style', theme_dir . '/style.css');
}
add_action('enqueue_block_editor_assets', 'example_enqueue_editor_assets');


/**
 * Updates the canonical URL for 'caravan' post type if a custom listing URL exists.
 *
 * @author Digitally Disruptive - Donald Raymundo
 * @link https://digitallydisruptive.co.uk/
 * * @param string  $canonical_url The post's canonical URL.
 * @param WP_Post $post          The post object.
 * @return string The updated canonical URL.
 */
function dd_update_caravan_canonical_url($canonical_url, $post)
{
    // Only target the 'caravan' custom post type
    if ('caravan' === $post->post_type) {
        $custom_listing_url = get_post_meta($post->ID, 'listing_url', true);

        // If the meta field is populated and is a valid URL, override the canonical
        if (! empty($custom_listing_url) && filter_var($custom_listing_url, FILTER_VALIDATE_URL)) {
            return $custom_listing_url;
        }
    }

    return $canonical_url;
}
add_filter('get_canonical_url', 'dd_update_caravan_canonical_url', 10, 2);

/**
 * Exclude parameterized URLs from Yoast XML sitemap.
 * * Intercepts the sitemap generation array and evaluates the 'loc' string.
 * If the URL contains forbidden query parameters (stock, slug), it returns 
 * false to drop the node from the final XML output.
 *
 * @param array  $url  Array containing the URL data (loc, lastmod, chf, pri).
 * @param string $type The sitemap type being generated (e.g., 'post', 'page').
 * @param object $user The user object (if applicable for author sitemaps).
 * @return array|bool  Returns the unmodified $url array, or boolean false to exclude.
 */
add_filter( 'wpseo_sitemap_entry', 'dd_exclude_parameterized_urls_sitemap', 10, 3 );

function dd_exclude_parameterized_urls_sitemap( $url, $type, $user ) {
    // Validate that the location key exists within the current node
    if ( isset( $url['loc'] ) ) {
        
        // Define the parameters causing the non-canonical flag
        $forbidden_params = [ '?stock=', '?slug=' ];
        
        // Iterate through forbidden parameters and drop the node if a match is found
        foreach ( $forbidden_params as $param ) {
            if ( strpos( $url['loc'], $param ) !== false ) {
                return false; 
            }
        }
    }
    
    // Return the sanitized URL node
    return $url;
}