<?php
function form_control($args)
{
    $html = '<div class="form-control-holder">';
    $html .= '<label for="' . $args['id'] . '">' . $args['label'] . '</label>';

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


function listing__price()
{
    ob_start();
    ?>
    <div class="listing-grid-item__prices-holder">
        <div class="listing-grid-item__prices row g-xxs text-center">
            <div class="listing-grid-item__price col-md-4">
                <div class="grid-item__price-inner rounded h-100">
                    <span class="fs-14">RRP</span>
                    <strong><s>£44,125</s></strong>
                </div>
            </div>
            <div class="listing-grid-item__price col-md-4">
                <div class="grid-item__price-inner rounded h-100">
                    <span class="fs-14">Our price</span>
                    <strong>£42,200</strong>
                </div>
            </div>
            <div class="listing-grid-item__price col-md-4">
                <div class="grid-item__price-inner rounded h-100">
                    <span class="fs-14">Save</span>
                    <strong class="text-orange-2">£1,955</strong>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

function listing__action()
{
    ob_start();
    ?>
    <ul class="icon-list d-flex list-inline align-items-center">
        <li> <?= get__theme_images('share.svg') ?> Share</li>
        <li><?= get__theme_images(file_name: 'save.svg') ?> Save</li>
    </ul>
    <?php
    return ob_get_clean();
}