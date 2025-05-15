<div class="listing-grid-full-details bg-white rounded overflow-hidden position-relative <?= $args['style'] ?>">
  <div class="listing-grid--top d-none d-lg-block">
    <div class="row g-3 justify-content-between mb-1">
      <div class="col-md-6">
        <div class="image-box brand">
          <?= wp_get_attachment_image(190, 'medium') ?>
        </div>
      </div>
      <div class="col-md-6">
        <?= listing__action() ?>
      </div>
    </div>
    <div class="row g-3 justify-content-between">
      <div class="col-md-6">
        <h3>Swift Sprite Quattro FB 2024</h3>
        <div class="desc">
          <p>Now on display - ready to view!</p>
        </div>
      </div>
      <div class="col-md-6">
        <?php
        if ($args['style'] == 'style-2') {
          echo listing__price();
        }
        ?>
      </div>
    </div>
  </div>
  <div class="listing-grid--bottom">
    <div class="row g-0">
      <div class="col-xl-7">
        <div class="listing-grid--left-inner position-relative h-100">
          <?php
          echo listing__gallery($args['id']);
          if ($args['style'] == 'style-1') {
          ?>
            <div class="d-none d-lg-block">
              <?php
              echo listing__price();
              ?>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="col-xl-5">
        <div class="listing-grid--right-inner">
          <div class="listing-grid-right-item">
            <div class="image-box image-style mb-20" style="--fit: contain; --padding: 18%">
              <?= wp_get_attachment_image(189, 'large') ?>
            </div>
            <div class="listing-inner--key-info">
              <?php
              echo listing__key_information();
              ?>
            </div>
          </div>
          <div class="listing-grid-right-item">
            <?php
            if ($args['style'] != 'style-3') {
              echo listing__features(true);
            } else {
              echo listing__price();
            }
            ?>
          </div>
          <div class="listing-grid-right-item">
            <div class="row g-xxs">
              <div class="col-sm-6">
                <div class="listing-grid-item__button mt-3">
                  <a href="#" class="btn btn-primary w-100 btn-lg fw-semibold">
                    View deal
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="listing-grid-item__button mt-3">
                  <a href="#" class="btn btn-outline-dark w-100 btn-lg fw-semibold">
                    Enquire now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>