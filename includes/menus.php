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
 * Registers a block style for the navigation submenu.
 */
function custom_nav_submenu_block_style() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	register_block_style(
		'core/navigation-submenu',
		array(
			'name'  => 'custom-content',
			'label' => 'Custom Content Submenu',
		)
	);
}
add_action( 'init', 'custom_nav_submenu_block_style' );

/**
 * Adds a filter to modify the block attributes.
 *
 * This filter checks if the current block is a navigation submenu and has the
 * 'custom-content' style applied. If so, it adds a class name that our
 * CSS and JavaScript will use.
 *
 * @param array  $block_attributes The block attributes.
 * @param string $block_name       The name of the block.
 *
 * @return array The modified block attributes.
 */
function custom_nav_submenu_add_attributes( $block_attributes, $block_name ) {
	if ( 'core/navigation-submenu' === $block_name ) {
		if ( isset( $block_attributes['className'] ) &&
				strpos( $block_attributes['className'], 'is-style-custom-content' ) !== false ) {
			$block_attributes['className'] .= ' has-custom-content';
		}
	}
	return $block_attributes;
}
add_filter( 'render_block_data', 'custom_nav_submenu_add_attributes', 10, 2 );


/**
 * Filters the content of the navigation submenu block.
 *
 * This function adds a custom div element to the end of the submenu's content
 * when the 'has-custom-content' class is present.  This div will contain
 * our dynamically added content.
 *
 * @param string $block_content The block's content.
 * @param array  $block         The block's data.
 *
 * @return string The modified block content.
 */
function custom_nav_submenu_filter_content( $block_content, $block ) {
	if ( isset( $block['attrs']['className'] ) &&
			strpos( $block['attrs']['className'], 'has-custom-content' ) !== false ) {
		$custom_content = '<div class="custom-submenu-content">';
		$custom_content .= '<p>This is custom content!</p>';
		$custom_content .= '<button class="custom-button">Click Me</button>';
		$custom_content .= '</div>';

		// Find the closing ul tag and insert our content before it.  This is more robust
		// than a simple append, in case the submenu structure changes slightly.
		$pos = strrpos( $block_content, '</ul>' );
		if ( false !== $pos ) {
			$block_content = substr_replace( $block_content, $custom_content, $pos, 0 );
		} else {
			//If for some reason the closing ul is not found, append.
			$block_content .= $custom_content;
		}
	}
	return $block_content;
}
add_filter( 'render_block_core/navigation-submenu', 'custom_nav_submenu_filter_content', 10, 2 );