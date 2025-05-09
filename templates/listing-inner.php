<?php
/*-----------------------------------------------------------------------------------*/
/* Template Name: Listing Inner Page 
/*-----------------------------------------------------------------------------------*/
?>
<?php get_header() ?>
<?php
global $listing_fields;
?>
<div class="site-content listing-inner">
  <div class="container md-padding-top md-padding-bottom">
    <div class="listing-inner-holder">
      <div class="row g-4">
        <div class="col-lg-9">
          <div class="listing-inner--left">
            <div class="listing-inner--details mb-4">
              <div class="row g-3 justify-content-between align-items-center mb-1">
                <div class="col-md-6">
                  <div class="image-box brand">
                    <?= wp_get_attachment_image(190, 'medium') ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <?= listing__action() ?>
                </div>
              </div>
              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-auto">
                  <h1 class="h3">Swift Sprite Quattro FB 2024</h1>
                </div>
                <div class="col-auto">
                  <div class="available-now fs-18">Available to view</div>
                </div>
              </div>

              <div class="row g-3 justify-content-between align-items-center">
                <div class="col-lg-8">
                  <?php echo listing__price(); ?>
                </div>
                <div class="col-lg-4">
                  <?php
                  echo listing__features(true);
                  ?>
                </div>
              </div>
            </div>
            <div class="listing-inner--tabs xs-margin-bottom border-bottom pb-20">
              <div class="tab-content mb-3" id="listingInner--Tab">
                <div class="tab-pane fade show active" id="gallery-tab-pane" role="tabpanel"
                  aria-labelledby="gallery-tab" tabindex="0">
                  <div class="row g-xs">
                    <div class="col-lg-2">
                      <div class="swiper-gallery-thumbnails">
                        <?php echo listing__gallery('gallery-1', true); ?>
                      </div>
                    </div>
                    <div class="col-lg-10">
                      <div class="listing-inner--gallery-grid-holder position-relative rounded overflow-hidden">
                        <?php echo listing__gallery('gallery-1'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="three-sixty-tab-pane" role="tabpanel" aria-labelledby="three-sixty-tab"
                  tabindex="0">
                  ...</div>
                <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">
                  ...</div>
              </div>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="gallery-tab" data-bs-toggle="tab"
                    data-bs-target="#gallery-tab-pane" type="button" role="tab" aria-controls="gallery-tab-pane"
                    aria-selected="true">
                    <span class="icon"><?= get__theme_icons('gallery.svg') ?></span> Gallery
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="three-sixty-tab" data-bs-toggle="tab"
                    data-bs-target="#three-sixty-tab-pane" type="button" role="tab" aria-controls="three-sixty-tab-pane"
                    aria-selected="false">
                    <span class="icon"><?= get__theme_icons('360.svg') ?></span> 360° TOUR
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane"
                    type="button" role="tab" aria-controls="video-tab-pane" aria-selected="false">
                    <span class="icon"><?= get__theme_icons('video.svg') ?></span> Video
                  </button>
                </li>
              </ul>
            </div>
            <div class="listing-key--info">
              <h4 class="fs-35 mb-5">Key Information</h4>
              <?php
              echo listing__key_information_v2();
              ?>
              <div class="awning-image image-box border-bottom xs-margin-bottom">
                <?= wp_get_attachment_image(189, 'large') ?>
              </div>
            </div>
            <div class="listing-inner--description">
              <h4 class="fs-35">Description</h4>
              <div class="desc">
                <p>The Swift Challenger 530 2008 is a practical and family-friendly caravan, offering a flexible 4-berth
                  layout and a spacious separate end washroom. Designed with comfort and functionality in mind, it's
                  ideal for couples or small families who value a well-organised living space.</p>
                <p><a href="#" class="fw-semibold">Read more</a></p>
              </div>
            </div>
            <div class="listing-inner--specifications">
              <div class="listing-filter accordion-style-1">
                <div class="accordion rounded" id="accordionFilter">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSort-by" aria-expanded="false" aria-controls="collapseSort-by">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('sort-by.svg') ?></span>
                            Sort by
                          </span>
                          <span class="selected fs-14 fw-bold">Price: low to high</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNew-Used" aria-expanded="false" aria-controls="collapseNew-Used">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('new-used.svg') ?></span>
                            New-Used
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseBerths" aria-expanded="false" aria-controls="collapseBerths">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('berths.svg') ?></span> Berths
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseMake" aria-expanded="false" aria-controls="collapseMake">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('make.svg') ?></span> Make
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseModel" aria-expanded="false" aria-controls="collapseModel">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('model.svg') ?></span> Model
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsePrice" aria-expanded="false" aria-controls="collapsePrice">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('price.svg') ?></span> Price
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseYear" aria-expanded="false" aria-controls="collapseYear">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('year.svg') ?></span> Year
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayout-type" aria-expanded="false" aria-controls="collapseLayout-type">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('layout-type.svg') ?></span>
                            Layout-type
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWidth" aria-expanded="false" aria-controls="collapseWidth">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('width.svg') ?></span> Width
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseAxles" aria-expanded="false" aria-controls="collapseAxles">
                        <span class="accordion-button-inner">
                          <span class="icon-text">
                            <span class="icon"><?= get__theme_images('axles.svg') ?></span> Axles
                          </span>
                          <span class="selected fs-14 fw-bold">Value</span>
                        </span>
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
        <div class="col-lg-3">
          <div class="listing-inner--right">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>