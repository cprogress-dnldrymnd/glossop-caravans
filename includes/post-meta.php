<?php

use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

Block::make(__('Grid Items'))
    ->add_fields(array(
        Field::make('text', 'heading', __('Heading')),
        Field::make('textarea', 'description', __('Description')),
        Field::make('complex', 'grid', __('Grid'))
            ->add_fields(array(
                Field::make('text', 'title', __('Grid Title')),
                Field::make('image', 'image', __('Grid Image')),
                Field::make('textarea', 'description', __('Grid Description')),
                Field::make('text', 'grid_tag', __('Grid Tag')),
            ))
            ->set_layout('tabbed-horizontal')
            ->set_header_template('<%- title %>')
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>

    <div class="block">
        <div class="block__heading">
            <h1><?php echo esc_html($fields['heading']); ?></h1>
        </div><!-- /.block__heading -->

        <div class="block__image">
            <?php echo wp_get_attachment_image($fields['image'], 'full'); ?>
        </div><!-- /.block__image -->

        <div class="block__content">
            <?php echo apply_filters('the_content', $fields['content']); ?>
        </div><!-- /.block__content -->
    </div><!-- /.block -->

<?php
    });
