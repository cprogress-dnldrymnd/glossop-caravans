<div class="listing-grid-full-details bg-white rounded-overflow-hidden">
  <div class="row g-0">
    <div class="col-lg-7">
      <div class="listing-grid--left-inner">
        <div class="listing-grid--gallery">
          <div class="swiper swiper-gallery">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="image-box image-style">
                  <?= wp_get_attachment_image(53, 'large') ?>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-box image-style">
                  <?= wp_get_attachment_image(53, 'large') ?>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-box image-style">
                  <?= wp_get_attachment_image(53, 'large') ?>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <?= listing__price() ?>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="listing-grid--right-inner">
        <div class="image-box image-style">
          <?= wp_get_attachment_image(189, 'large') ?>
        </div>
      </div>
    </div>
  </div>
</div>