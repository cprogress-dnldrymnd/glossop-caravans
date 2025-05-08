<div class="listing-grid-full-details bg-white rounded overflow-hidden position-relative">
  <div class="listing-grid--top">
    <div class="row justify-content-between">
      <div class="col-auto">
        <div class="image-box brand">
          <?= wp_get_attachment_image(190, 'medium') ?>
        </div>
        <h3>Swift Sprite Quattro FB 2024</h3>
        <div class="desc">
          <p>Now on display - ready to view!</p>
          <?= $args['style'] ?>
        </div>
      </div>
      <div class="col-auto">
        <?= listing__action() ?>
      </div>
    </div>
  </div>
  <div class="listing-grid--bottom">
    <div class="row g-0">
      <div class="col-lg-7">
        <div class="listing-grid--left-inner position-relative">
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
              <div class="swiper-button-next swiper-button"></div>
              <div class="swiper-button-prev swiper-button"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <?= listing__price() ?>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="listing-grid--right-inner">
          <div class="image-box image-style" style="--fit: contain">
            <?= wp_get_attachment_image(189, 'large') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>