<div class="listing-grid h-100 position-relative rounded <?= $args['style'] ?>">
    <div class="listing-grid-item__top">
        <?php if ($args['style'] == 'style-1') { ?>
            <h3>Swift Elegance Grande 780</h3>
            <div class="desc mb-3 mt-3">
                <p>Step into luxury with the Swift Elegance Grande 780.</p>
            </div>
        <?php } ?>
        <div class="listing-grid__feature fs-13 row g-xxs fw-semibold">
            <div class="listing-grid__feature-item col-auto">
                <div
                    class="grid__feature-inner rounded h-100 d-flex align-items-center justify-content-center text-center">
                    Finance available: 7.9% APR
                </div>
            </div>
            <div class="listing-grid__feature-item col-auto">
                <div
                    class="grid__feature-inner rounded h-100 d-flex flex-column align-items-center justify-content-center text-center">
                    <span class="fs-7 fw-medium">Per month</span>
                    £565.50
                </div>
            </div>
        </div>
        <div class="listing-grid__image image-style">
            <img src="https://newglossopacaravans.theprogressteam.co.uk/wp-content/uploads/2025/05/glossop-img-removebg-preview.png"
                alt="">
        </div>
    </div>
    <div class="listing-grid-item__bottom">
        <?php if ($args['style'] == 'style-2') { ?>
            <h3 class="fs-23">Swift Elegance Grande 780</h3>
            <div class="desc mb-3 mt-3">
                <p>Step into luxury with the Swift Elegance Grande 780.</p>
            </div>
        <?php } ?>
        <?= listing__price() ?>
        <div class="listing-grid-item__button mt-3">
            <a href="#" class="btn btn-primary w-100 btn-lg">
                View deal
            </a>
        </div>
    </div>
</div>