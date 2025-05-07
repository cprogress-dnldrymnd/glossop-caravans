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

    $listing_fields['berths'] =  form_control(array(
        'type' => 'select',
        'name' => 'Berths',
        'id' => 'Berths',
        'label' => 'Berths',
        'class' => 'form-control-lg',
        'options' => array(
            '' => 'How many berths?',
            'All' => 'All',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
        ),
    ));
    $listing_fields['make'] = form_control(array(
        'type' => 'select',
        'name' => 'Make',
        'id' => 'Make',
        'label' => 'Make',
        'class' => 'form-control-lg',
        'options' => array(
            '' => 'Select Make',
            'Option 1' => 'Option 1',
            'Option 2' => 'Option 2',
            'Option 3' => 'Option 3',
            'Option 4' => 'Option 4',
            'Option 5' => 'Option 5',
            'Option 6' => ' Option6',
        ),
    ));
    $listing_fields['model'] =  form_control(array(
        'type' => 'select',
        'name' => 'Model',
        'id' => 'Model',
        'label' => 'Model',
        'class' => 'form-control-lg',
        'options' => array(
            '' => 'Select Model',
            'Option 1' => 'Option 1',
            'Option 2' => 'Option 2',
            'Option 3' => 'Option 3',
            'Option 4' => 'Option 4',
            'Option 5' => 'Option 5',
            'Option 6' => ' Option6',
        ),
    ));
    $listing_fields['price_min'] = form_control(array(
        'type' => 'select',
        'name' => 'Price-Min',
        'id' => 'Price-Min',
        'label' => 'Price(min.)',
        'class' => 'form-control-lg',
        'options' => array(
            '' => 'Any',
        ),
    ));
    $listing_fields['price_max'] = form_control(array(
        'type' => 'select',
        'name' => 'Price-Max',
        'id' => 'Price-Max',
        'label' => 'Price(max.)',
        'class' => 'form-control-lg',
        'options' => array(
            '' => 'Any',
        ),
    ));
}
add_action('after_setup_theme', 'listings_fields');
