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
            <div class="listing-inner--tabs">
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
              <?php
              echo listing__key_information();
              ?>
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