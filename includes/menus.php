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
 * Plugin Name: Custom Menu Item Fields
 * Description: Adds a custom field to navigation menu items for inserting custom content.
 * Version: 1.0.0
 * Author: Your Name
 */

// 1. Add Custom Meta Box and Field to Menu Item
add_action( 'admin_init', 'custom_menu_item_fields_init' );
function custom_menu_item_fields_init() {
    add_meta_box(
        'custom-menu-item-fields',
        'Custom Menu Item Options', // Title of the meta box
        'custom_menu_item_fields_render', // Callback to render the form fields
        'nav-menu-item', // Apply to nav menu items
        'side',
        'low'
    );
    add_action( 'wp_update_nav_menu_item', 'custom_menu_item_fields_update', 10, 3 );
}

// 2. Render the Custom Field
function custom_menu_item_fields_render( $item ) {
    // Get the existing value
    $custom_content = get_post_meta( $item->ID, '_menu_item_custom_content', true );
    ?>
    <div class="field-wrap">
        <label for="edit-menu-item-custom-content-<?php echo $item->ID; ?>">
            <?php _e( 'Custom Content (Text, Shortcode, Reusable Block ID):', 'your-text-domain' ); ?>
        </label>
        <textarea
            id="edit-menu-item-custom-content-<?php echo $item->ID; ?>"
            class="widefat edit-menu-item-custom-content"
            name="menu-item-custom-content[<?php echo $item->ID; ?>]"
            rows="3"
        ><?php echo esc_textarea( $custom_content ); ?></textarea>
        <p class="description"><?php _e( 'Enter text, a shortcode, or the ID of a reusable block to display in/near the submenu.', 'your-text-domain' ); ?></p>
    </div>
    <?php
}

// 3. Save the Custom Field Value
function custom_menu_item_fields_update( $menu_id, $menu_item_db_id, $args ) {
    if ( isset( $_POST['menu-item-custom-content'] ) && isset( $_POST['menu-item-custom-content'][$menu_item_db_id] ) ) {
        $custom_content = sanitize_textarea_field( $_POST['menu-item-custom-content'][$menu_item_db_id] );
        update_post_meta( $menu_item_db_id, '_menu_item_custom_content', $custom_content );
    } else {
        // Delete the meta if the field is empty
        delete_post_meta( $menu_item_db_id, '_menu_item_custom_content' );
    }
}

// 4. Display the Custom Content (using wp_nav_menu_objects filter)
add_filter( 'wp_nav_menu_objects', 'custom_menu_item_fields_display', 10, 2 );
function custom_menu_item_fields_display( $items, $args ) {
    foreach ( $items as $item ) {
        $custom_content = get_post_meta( $item->ID, '_menu_item_custom_content', true );
        if ( $custom_content ) {
            //  Important Considerations:
            //  -  This is a *basic* example.  You'll likely need to adjust the HTML
            //     insertion to fit your theme's menu structure.  Inspect your
            //     theme's HTML output to find the best place to insert the content.
            //  -  CSS is crucial for positioning and styling.  This code adds a class
            //     `custom-menu-content` to the inserted div, which you should use
            //     in your theme's stylesheet.
            //  -  For more complex layouts, you might need to use JavaScript to
            //     dynamically position the content.

            if ( $item->has_children ) {
                //  Example 1:  Prepend to the submenu.  This is *very* theme-dependent.
                $item->title .= '<div class="custom-menu-content before-submenu">' . do_shortcode( $custom_content ) . '</div>';

            } else {
                 // Example 2: Append content after the link, if no submenu.
                 $item->title .= '<div class="custom-menu-content after-link">' . do_shortcode($custom_content) . '</div>';
            }
        }
    }
    return $items;
}