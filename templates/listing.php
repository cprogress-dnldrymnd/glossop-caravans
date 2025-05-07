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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>