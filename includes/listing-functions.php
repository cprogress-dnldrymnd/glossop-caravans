<?php

function listings_fields()
{
    global $listing_fields;

    $listing_fields['sortby'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Type',
        'id'      => 'Type',
        'label'   => 'Type',
        'class'   => 'form-control-lg',
        'options' => array(
            ''         => 'Sort 1',
            'Option 1' => 'Option 1',
            'Option 2' => 'Option 2',
            'Option 3' => 'Option 3',
            'Option 4' => 'Option 4',
            'Option 5' => 'Option 5',
            'Option 6' => ' Option6',
        ),
    ));
    $listing_fields['type'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Type',
        'id'      => 'Type',
        'label'   => 'Type',
        'class'   => 'form-control-lg',
        'options' => array(
            ''     => 'New or Used?',
            'New'  => 'New',
            'Used' => 'Used',
            'Both' => 'Both',
        ),
    ));

    $listing_fields['berths'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Berths',
        'id'      => 'Berths',
        'label'   => 'Berths',
        'class'   => 'form-control-lg',
        'options' => array(
            ''    => 'How many berths?',
            'All' => 'All',
            '2'   => '2',
            '3'   => '3',
            '4'   => '4',
            '5'   => '5',
            '6'   => '6',
        ),
    ));
    $listing_fields['make'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Make',
        'id'      => 'Make',
        'label'   => 'Make',
        'class'   => 'form-control-lg',
        'options' => array(
            ''         => 'Select Make',
            'Option 1' => 'Option 1',
            'Option 2' => 'Option 2',
            'Option 3' => 'Option 3',
            'Option 4' => 'Option 4',
            'Option 5' => 'Option 5',
            'Option 6' => ' Option6',
        ),
    ));
    $listing_fields['model'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Model',
        'id'      => 'Model',
        'label'   => 'Model',
        'class'   => 'form-control-lg',
        'options' => array(
            ''         => 'Select Model',
            'Option 1' => 'Option 1',
            'Option 2' => 'Option 2',
            'Option 3' => 'Option 3',
            'Option 4' => 'Option 4',
            'Option 5' => 'Option 5',
            'Option 6' => ' Option6',
        ),
    ));
    $listing_fields['price_min'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Price-Min',
        'id'      => 'Price-Min',
        'label'   => 'Price(min.)',
        'class'   => 'form-control-lg',
        'options' => array(
            '' => 'Any',
        ),
    ));
    $listing_fields['price_max'] = form_control(array(
        'type'    => 'select',
        'name'    => 'Price-Max',
        'id'      => 'Price-Max',
        'label'   => 'Price(max.)',
        'class'   => 'form-control-lg',
        'options' => array(
            '' => 'Any',
        ),
    ));
}
add_action('after_setup_theme', 'listings_fields');

function listing__features($hide_per_month = false)
{
    ob_start();
    ?>
    <div class="listing-grid__feature-holder">
        <div class="listing-grid__feature fs-13 row g-xxs fw-semibold">
            <div class="listing-grid__feature-item col-auto">
                <div class="grid__feature-inner rounded h-100 d-flex align-items-center justify-content-center text-center">
                    Finance available: 7.9% APR
                </div>
            </div>
            <?php if (!$hide_per_month) { ?>
                <div class="listing-grid__feature-item col-auto">
                    <div
                        class="grid__feature-inner rounded h-100 d-flex flex-column align-items-center justify-content-center text-center">
                        <span class="fs-7 fw-medium">Per month</span>
                        £565.50
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
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
    <ul class="icon-list mb-0 d-flex list-inline align-items-center justify-content-end fw-semibold">
        <li> <?= get__theme_images('share.svg') ?> Share</li>
        <li><?= get__theme_images('save.svg') ?> Save</li>
    </ul>
    <?php
    return ob_get_clean();
}

function listing__gallery($id, $is_thumbnail = false)
{
    ob_start();
    ?>
    <div class="listing-grid--gallery h-100">
        <div class="zoom">
            <?= get__theme_images('zoom.svg') ?>
        </div>
        <div class="swiper <?= $is_thumbnail == false ? 'swiper-gallery h-100' : 'swiper-thumbnails' ?>">
            <div class="swiper-wrapper <?= $is_thumbnail == false ? '' : '' ?>">
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>

                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>

                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>"
                        class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>" class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
                <div class="swiper-slide <?= $is_thumbnail == false ? '' : '' ?>">
                    <a href="<?= wp_get_attachment_image_url(53, $is_thumbnail == false ? 'large' : 'medium') ?>"
                        data-fancybox="<?= $id ?>" class="d-block image-box image-style <?= $is_thumbnail == false ? '' : '' ?>">
                        <?= wp_get_attachment_image(53, 'large') ?>
                    </a>
                </div>
            </div>
            <?php if ($is_thumbnail == false) { ?>
                <div class="swiper-button-next swiper-gallery-next' swiper-button"></div>
                <div class="swiper-button-prev swiper-gallery-prev swiper-button"></div>
                <div class="swiper-pagination swiper-gallery-pagination"></div>
            <?php } ?>

        </div>
    </div>
    <?php
    return ob_get_clean();
}

function listing__icons()
{
    ob_start();
    ?>
    <ul
        class="icon-list mb-0 icon-list-v2 d-flex list-inline align-items-center justify-content-end fw-semibold flex-wrap fs-18">
        <li> <?= get__theme_images('berths.svg') ?> 6 Berth</li>
        <li><?= get__theme_images('warranty.svg') ?> 3 year warranty</li>
        <li><?= get__theme_images('year.svg') ?> Year 2024</li>
        <li><span class="icons"><?= get__theme_images('tire.svg') ?><?= get__theme_images('tire.svg') ?></span>
            Twin axle</li>
        <li><?= get__theme_images('kg.svg') ?> MTPLM 1630kg</li>
        <li><?= get__theme_images('awning-size.svg') ?> 10.52m Awning Size</li>
    </ul>
    <?php
    return ob_get_clean();
}