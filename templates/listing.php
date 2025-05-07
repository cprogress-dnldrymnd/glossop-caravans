<?php
/*-----------------------------------------------------------------------------------*/
/* Template Name: Listing Page 
/*-----------------------------------------------------------------------------------*/
?>
<?php get_header() ?>
<?php
global $listing_fields;
?>
<div class="site-content listings background-lightgray">
    <div class="container md-padding-top md-padding-bottom">
        <div class="listings-holder">
            <h2>We found <span class="text-orange">59</span> caravans for you</h2>
            <div class="row">
                <div class="col-lg-3">
                    <div class="listing-filter">
                        <div class="accordion" id="accordionFilter">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSort-by" aria-expanded="false" aria-controls="collapseSort-by">
                                        <span class="icon"><?= get__theme_images('sort-by.svg') ?></span> Sort by
                                    </button>
                                </h2>
                                <div id="collapseSort-by" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['sortby'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNew-Used" aria-expanded="false" aria-controls="collapseNew-Used">
                                        <span class="icon"><?= get__theme_images('new-used.svg') ?></span> New-Used
                                    </button>
                                </h2>
                                <div id="collapseNew-Used" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['type'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBerths" aria-expanded="false" aria-controls="collapseBerths">
                                        <span class="icon"><?= get__theme_images('berths.svg') ?></span> Berths
                                    </button>
                                </h2>
                                <div id="collapseBerths" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['berths'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMake" aria-expanded="false" aria-controls="collapseMake">
                                        <span class="icon"><?= get__theme_images('make.svg') ?></span> Make
                                    </button>
                                </h2>
                                <div id="collapseMake" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['make'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseModel" aria-expanded="false" aria-controls="collapseModel">
                                        <span class="icon"><?= get__theme_images('model.svg') ?></span> Model
                                    </button>
                                </h2>
                                <div id="collapseModel" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['model'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrice" aria-expanded="false" aria-controls="collapsePrice">
                                        <span class="icon"><?= get__theme_images('price.svg') ?></span> Price
                                    </button>
                                </h2>
                                <div id="collapsePrice" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['type'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseYear" aria-expanded="false" aria-controls="collapseYear">
                                        <span class="icon"><?= get__theme_images('year.svg') ?></span> Year
                                    </button>
                                </h2>
                                <div id="collapseYear" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['type'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLayout-type" aria-expanded="false" aria-controls="collapseLayout-type">
                                        <span class="icon"><?= get__theme_images('layout-type.svg') ?></span> Layout-type
                                    </button>
                                </h2>
                                <div id="collapseLayout-type" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['type'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth" aria-expanded="false" aria-controls="collapseWidth">
                                        <span class="icon"><?= get__theme_images('width.svg') ?></span> Width
                                    </button>
                                </h2>
                                <div id="collapseWidth" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['type'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAxles" aria-expanded="false" aria-controls="collapseAxles">
                                        <span class="icon"><?= get__theme_images('axles.svg') ?></span> Axles
                                    </button>
                                </h2>
                                <div id="collapseAxles" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                                    <div class="accordion-body">
                                        <?= $listing_fields['type'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>