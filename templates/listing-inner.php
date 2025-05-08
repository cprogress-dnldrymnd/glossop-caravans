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
      <div class="col-lg-9">
        <div class="listing-inner--left">
          <div class="listing-inner--top">
            <div class="row g-3 justify-content-between">
              <div class="col-md-6">
                <div class="image-box brand">
                  <?= wp_get_attachment_image(190, 'medium') ?>
                </div>
              </div>
              <div class="col-md-6">
                <?= listing__action() ?>
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

<?php get_footer() ?>