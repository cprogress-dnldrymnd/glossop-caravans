<?php

use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;
/*
Block::make(__('Grid Items'))
    ->add_fields(array(
        Field::make('complex', 'grid', __('Grid Items'))
            ->add_fields(array(
                Field::make('color', 'bg_color', __('Background Color')),
                Field::make('text', 'title', __('Grid Title')),
                Field::make('image', 'image', __('Grid Image')),
                Field::make('textarea', 'description', __('Grid Description')),
                Field::make('text', 'grid_tag', __('Grid Tag')),
                Field::make('text', 'grid_link', __('Grid Link')),
            ))
            ->set_layout('tabbed-horizontal')
            ->set_header_template('<%- title %>')
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $grid = $fields['grid'];
?>

    <div class="grid-section">
        <div class="row g-4">
            <?php foreach ($grid as $item) : ?>
                <div class="col-lg-4">
                    <a href="<?php echo esc_html($item['grid_link']); ?>" class="grid-inner h-100 d-flex flex-column justif-content-between" style="background-color: <?php echo esc_attr($item['bg_color']); ?>;">
                        <div class="grid-item__image">
                            <?php echo wp_get_attachment_image($item['image'], 'full'); ?>
                            <h3><?php echo esc_html($item['title']); ?></h3>
                            <span class="tag"><?php echo esc_html($item['grid_tag']); ?></span>
                        </div><!-- /.grid-item__image -->
                        <div class="grid-item__content">
                            <p><?php echo esc_html($item['description']); ?></p>
                        </div><!-- /.grid-item__content -->
                    </a>
                </div><!-- /.grid-item -->
            <?php endforeach; ?>
        </div>
    </div>
<?php
    });*/

Block::make(__('Icon'))
    ->add_fields(array(
        Field::make('html', 'html_start')->set_html('<div style="font-weight: bold;text-align: center;background-color: #000;color: #fff;padding: 10px;">Icon</div>'),
        Field::make('color', 'icon_color', __('Color')),
        Field::make('select', 'icon_alignment', __('Alignment'))->set_options(array(
            '' => 'Default',
            'text-center' => 'Center',
            'text-start' => 'Left',
            'text-end' => 'Right',
        ))->set_width(33),
        Field::make('text', 'icon_width', __('Width'))->set_width(33),
        Field::make('text', 'icon_height', __('Height'))->set_width(33),
        Field::make('image', 'icon', __('Icon')),

    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $icon = $fields['icon'];
        $icon_color = $fields['icon_color'];
        $icon_width = $fields['icon_width'];
        $icon_height = $fields['icon_height'];
        $icon_alignment = $fields['icon_alignment'];
?>

    <div class="svg-box <?= $icon_alignment ?> <?= $attributes['className'] ?>" style="color: <?= $icon_color ?>; --svg-width: <?= $icon_width ?>; --svg-height: <?= $icon_height ?>">
        <?= get__media_libray_icons($icon) ?>
    </div>
<?php
    });
