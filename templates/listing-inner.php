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
            <div class="listing-inner--top">
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
            <div class="listing-inner--bottom">
              <div class="row g-xs">
                <div class="col-lg-3">
                  <div class="swiper-gallery-thumbnails">

                  </div>
                </div>
                <div class="col-lg-9">
                  <?php echo listing__gallery('gallery-1'); ?>
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