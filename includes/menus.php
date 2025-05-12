<?php
/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
function menu_locations()
{

    register_nav_menus(
        array(

            'header-menu'    =>    __('Header Menu'),
            'footer-menu'    =>    __('Footer Menu'),
        )

    );
}

add_action('init', 'menu_locations');


/**
 * Add custom content to a specific submenu.
 *
 * @param string   $items The HTML list of submenu items.
 * @param WP_Post  $item  The current menu item object.
 * @param stdClass $args  An object of wp_nav_menu() arguments.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return string Modified HTML list of submenu items.
 */
function my_custom_submenu_content($items, $item, $args, $depth)
{
    // Check if this is the submenu of the desired parent item (e.g., by title).
    if ('Caravans' === $item->title && $depth === 0) {
        // You can add HTML directly here or render a block.
        $custom_content = '<li class="menu-item custom-submenu-item">';
        $custom_content .= '<div class="wp-block-your-custom-block">';
        $custom_content .= '<h3>Custom Submenu Block</h3>';
        $custom_content .= '<p>This is some custom content within the submenu.</p>';
        $custom_content .= '</div>';
        $custom_content .= '</li>';

        $items .= $custom_content;
    }

    return $items;
}
add_filter('nav_menu_submenu_items', 'my_custom_submenu_content', 10, 4);

/**
 * Enqueue necessary styles for your custom block (if any).
 */
function my_custom_submenu_styles()
{
    wp_enqueue_style('your-custom-block-style', get_template_directory_uri() . '/css/your-custom-block-style.css', array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'my_custom_submenu_styles');
