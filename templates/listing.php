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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSort-by" aria-expanded="true" aria-controls="collapseSort-by">
                                        Sort by
                                    </button>
                                </h2>
                                <div id="collapseSort-by" class="accordion-collapse collapse show" data-bs-parent="#accordionFilter" style="">
                                    <div class="accordion-body">
                                    <?= $listing_fields['sortby'] ?>

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