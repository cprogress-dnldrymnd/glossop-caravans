<?php
function form_control($args)
{
    $html = '<div class="form-control-holder">';
    $html .= '<label class="mb-1" for="' . $args['id'] . '">' . $args['label'] . '</label>';

    if ($args['type'] == 'text') {
        $html .= '<input type="text" name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '" placeholder="' . $args['placeholder'] . '" value="' . $args['value'] . '">';
    }
    elseif ($args['type'] == 'select') {
        $html .= '<select name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '">';
        foreach ($args['options'] as $key => $value) {
            $html .= '<option value="' . $key . '">' . $value . '</option>';
        }
        $html .= '</select>';
    }
    elseif ($args['type'] == 'textarea') {
        $html .= '<textarea name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '" placeholder="' . $args['placeholder'] . '">' . $args['value'] . '</textarea>';
    }
    $html .= '</div>';

    return $html;
}


function get__theme_images($file_name, $image_tag = true)
{
    if ($image_tag) {
        return '<img src="' . image_dir . $file_name . '" alt="' . $file_name . '">';
    }
    else {
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
