<?php

use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

Container::make('term_meta', __('Manufacturer Properties'))
    ->where('term_taxonomy', '=', 'manufacturer')
    ->add_fields(array(
        Field::make('image', 'small_logo', __('Small Logo')),
        Field::make('image', 'main_logo', __('Main Logo')),
    ));

Container::make('post_meta', __('Caravan Properties'))
    ->where('post_type', '=', 'caravan')
    ->add_fields(array(
        Field::make('image', 'floor_plan', __('Floor Plan')),
        Field::make('text', 'rrp', __('RRP (£)'))->set_attribute('type', 'number')->set_attribute('step', '1')->set_width(33),
        Field::make('text', 'our_price', __('Our Price (£)'))->set_attribute('type', 'number')->set_attribute('step', '1')->set_width(33),
        Field::make('text', 'savings', __('Savings (£)'))->set_attribute('type', 'number')->set_attribute('step', '1')->set_width(33),

        Field::make('select', 'berths', __('Berths'))
            ->set_options(array(
                'all' => 'All',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
            )),
        Field::make('text', 'warranty', __('Warranty')),
        Field::make('text', 'year', __('Year')),
        Field::make('text', 'weight', __('Weight')),
        Field::make('text', 'awning_size', __('Awning Size')),

    ));
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

$style = 'style="font-weight: bold;text-align: center;background-color: #000;color: #fff;padding: 10px;"';

Block::make(__('Icon'))
    ->add_fields(array(
        Field::make('html', 'html_start')->set_html("<div $style>Icon</div>"),
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

Block::make(__('Video Gallery'))
    ->add_fields(array(
        Field::make('html', 'html_start')->set_html("<div $style>Video Gallery Block</div>"),
        Field::make('html', 'html_end')->set_html("<div style='text-align: center'><a class='components-button is-primary target='_blank' href='/wp-admin/edit.php?post_type=videos'>Manage Videos</a></div>"),
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $args = array(
            'post_type' => 'videos',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
?>

    <div class="video-gallery-box <?= $attributes['className'] ?>">
        <div class="row g-4">
            <?php while ($query->have_posts()) { ?>
                <?php $query->the_post() ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="video-box rounded overflow-hidden position-relative">
                        <?php the_content() ?>
                    </div>
                </div>
            <?php } ?>
            <?php wp_reset_postdata() ?>
        </div>
    </div>
<?php
    });


Block::make(__('Accordion'))
    ->add_fields(array(
        Field::make('html', 'html_start')->set_html("<div $style>Accordion Block</div>"),
        Field::make('complex', 'accordion', __('Accordion'))
            ->add_fields(array(
                Field::make('text', 'title', __('Accordion Title')),
                Field::make('rich_text', 'description', __('Accordion Description')),
            ))
            ->set_header_template('<%- title %>')
            ->set_collapsed(true)
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $accordion_items = $fields['accordion'];
?>

    <div class="accordion-box accordion-style-1">
        <div class="accordion-box--iner">
            <div class="accordion rounded border overflow-hidden" id="accordionBlocks-">
                <?php foreach ($accordion_items as $key => $accordion_item) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button orange-color collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?= $key ?>" aria-expanded="false" aria-controls="collapse<?= $key ?>">
                                <span class="orange-color-inner">
                                    <span class="icon-text">
                                        <?= $accordion_item['title'] ?>
                                    </span>
                                </span>
                            </button>
                        </h2>
                        <div id="collapse<?= $key ?>" class="accordion-collapse collapse" data-bs-parent="#accordionBlocks-">
                            <div class="accordion-body">
                                <?= $accordion_item['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php
    });

Block::make(__('Listing Feature'))
    ->add_fields(array(
        Field::make('checkbox', 'berths', __('Berths'))->set_width(33),
        Field::make('checkbox', 'warranty', __('Warannty'))->set_width(33),
        Field::make('checkbox', 'year', __('Year'))->set_width(33),
        Field::make('checkbox', 'weight', __('Weight'))->set_width(33),
        Field::make('checkbox', 'awning_size', __('Awning Size'))->set_width(33),

    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        if ($fields['berths']) {
            $berths = get__post_meta_by_id(get_the_ID(), 'berths', true);
        }
        if ($fields['year']) {
            $year = get__post_meta_by_id(get_the_ID(), 'year', true);
        }
        echo listing__key_information_simple($berths, $year);
    });
