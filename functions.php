<?php
/*-----------------------------------------------------------------------------------*/
/* Define the version so we can easily replace it throughout the theme
/*-----------------------------------------------------------------------------------*/
define('version', 1);
define('theme_dir', get_template_directory_uri() . '/');
define('assets_dir', theme_dir . 'assets/');
define('image_dir', assets_dir . 'images/');
define('vendor_dir', assets_dir . 'vendor/');


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
    if (function_exists('carbon_get_the_post_meta')) {
        return carbon_get_the_post_meta($value);
    }
}

function get__term_meta($term_id, $value)
{
    if (function_exists('get_term_meta')) {
        return get_term_meta($term_id, '_' . $value, true);
    }
}

function get___term_meta($term_id, $value)
{
    if (function_exists('carbon_get_term_meta')) {
        return carbon_get_term_meta($term_id, $value);
    }
}

function get__post_meta_by_id($id, $value)
{
    if (function_exists('carbon_get_post_meta')) {
        return carbon_get_post_meta($id, $value);
    }
}
function get__theme_option($value)
{
    return carbon_get_theme_option($value);
}


/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/
function enqueue_scripts()
{
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');

    wp_register_script('main', assets_dir . 'js/main.js', NULL, version);
    wp_localize_script(
        'main',
        'ajax_object',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
        )
    );
    wp_enqueue_script('main');


    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', theme_dir . 'style.css', NULL, version);
}


add_action('wp_enqueue_scripts', 'enqueue_scripts', 99999); // 