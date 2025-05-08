<div class="listing-grid-full-details bg-white rounded overflow-hidden position-relative <?= $args['style'] ?>">
  <div class="listing-grid--top">
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
      <div class="col-lg-7">
        <div class="listing-grid--left-inner position-relative">
          <?php
          echo listing__gallery();
          if ($args['style'] == 'style-1') {
            echo listing__price();
          }
          ?>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="listing-grid--right-inner">
          <div class="image-box image-style mb-20" style="--fit: contain; --padding: 20%">
            <?= wp_get_attachment_image(189, 'large') ?>
          </div>
          <?php
          echo listing__icons();
          echo listing__features(true);
          ?>
        </div>
      </div>
    </div>
  </div>
</div>