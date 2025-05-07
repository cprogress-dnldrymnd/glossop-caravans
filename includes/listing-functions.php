<?php

function listings_fields()
{
    global $listing_fields;
    $listing_fields['type'] = form_control(array(
        'type' => 'select',
        'name' => 'Type',
        'id' => 'Type',
        'label' => 'Type',
        'class' => 'form-control-lg',
        'options' => array(
            '' => 'New or Used?',
            'New' => 'New',
            'Used' => 'Used',
            'Both' => 'Both',
        ),
    ));
}
add_action('after_setup_theme', 'listings_fields');
