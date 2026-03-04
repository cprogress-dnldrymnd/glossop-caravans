<?php

/**
 * Generates HTML markup for form control elements.
 *
 * Merges passed arguments with defaults to prevent undefined index errors, 
 * then outputs the corresponding standard input, textarea, or select field.
 *
 * @param array $args Form control configuration parameters.
 * @return string HTML string of the configured form control.
 */
function form_control($args)
{
    // Define default values to ensure all expected keys exist
    $defaults = array(
        'label'       => false,
        'type'        => 'text',
        'name'        => '',
        'id'          => '',
        'class'       => '',
        'value'       => '',
        'placeholder' => '',
        'attribute'   => '',
        'options'     => array()
    );

    // Merge passed arguments with defaults
    $args = wp_parse_args($args, $defaults);

    $html = '<div class="form-control-holder">';

    if ($args['label'] != false) {
        $html .= '<label class="mb-2 fw-semibold" for="' . $args['id'] . '">' . $args['label'] . '</label>';
    }

    if ($args['type'] == 'select') {
        $html .= '<select ' . $args['attribute'] . '  name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '">';
        foreach ($args['options'] as $key => $value) {
            $html .= '<option value="' . $key . '">' . $value . '</option>';
        }
        $html .= '</select>';
    } elseif ($args['type'] == 'textarea') {
        $html .= '<textarea ' . $args['attribute'] . '  name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '" placeholder="' . $args['placeholder'] . '">' . $args['value'] . '</textarea>';
    } else {
        $html .= '<input ' . $args['attribute'] . ' type="' . $args['type'] . '" name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '" placeholder="' . $args['placeholder'] . '" value="' . $args['value'] . '">';
    }
    $html .= '</div>';

    return $html;
}


function get__theme_images($file_name, $image_tag = true)
{
    if ($image_tag) {
        return '<img src="' . image_dir . $file_name . '" alt="' . $file_name . '">';
    } else {
        return image_dir . $file_name;
    }
}


function get__theme_icons($file_name)
{
    $url = get_stylesheet_directory() . '/assets/images/' . $file_name;

    $content = file_get_contents($url);

    // Output the sanitized SVG
    return $content;
}

function get__media_libray_icons($id)
{
    $url = wp_get_original_image_path($id);

    $content = file_get_contents($url);

    // Output the sanitized SVG
    return $content;
}
