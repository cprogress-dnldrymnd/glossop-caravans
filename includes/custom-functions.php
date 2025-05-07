<?php
function form_control($args)
{
    echo '<div class="form-control-holder">';
    echo '<label for="' . $args['id'] . '">' . $args['label'] . '</label>';

    if ($args['type'] == 'text') {
        echo '<input type="text" name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control" placeholder="' . $args['placeholder'] . '" value="' . $args['value'] . '">';
    } elseif ($args['type'] == 'select') {
        echo '<select name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control">';
        foreach ($args['options'] as $key => $value) {
            echo '<option value="' . $key . '">' . $value . '</option>';
        }
        echo '</select>';
    } elseif ($args['type'] == 'textarea') {
        echo '<textarea name="' . $args['name'] . '" id="' . $args['id'] . '" class="form-control" placeholder="' . $args['placeholder'] . '">' . $args['value'] . '</textarea>';
    }
    echo '</div>';
}
