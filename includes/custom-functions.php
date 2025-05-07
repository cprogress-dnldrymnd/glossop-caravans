<?php
function form_control($args)
{
    $html =  '<div class="form-control-holder">';
    $html .=  '<label for="' . $args['id'] . '">' . $args['label'] . '</label>';

    if ($args['type'] == 'text') {
        $html .=  '<input type="text" name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '" placeholder="' . $args['placeholder'] . '" value="' . $args['value'] . '">';
    } elseif ($args['type'] == 'select') {
        $html .=  '<select name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '">';
        foreach ($args['options'] as $key => $value) {
            $html .=  '<option value="' . $key . '">' . $value . '</option>';
        }
        $html .=  '</select>';
    } elseif ($args['type'] == 'textarea') {
        $html .=  '<textarea name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control ' . $args['class'] . '" placeholder="' . $args['placeholder'] . '">' . $args['value'] . '</textarea>';
    }
    $html .=  '</div>';

    return $html;
}


function get__theme_images($file_name)
{
    return image_dir() . $file_name;
}
