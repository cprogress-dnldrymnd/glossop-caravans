<?php
global $listing_fields;
?>
<div class="seach-stock-holder">
    <div class="tab-nav-holder">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Caravans-tab" data-bs-toggle="tab" data-bs-target="#Caravans-tab-pane" type="button" role="tab" aria-controls="Caravans-tab-pane" aria-selected="true">Caravans</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Motorhomes-tab" data-bs-toggle="tab" data-bs-target="#Motorhomes-tab-pane" type="button" role="tab" aria-controls="Motorhomes-tab-pane" aria-selected="false">Motorhomes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Statics-tab" data-bs-toggle="tab" data-bs-target="#Statics-tab-pane" type="button" role="tab" aria-controls="Statics-tab-pane" aria-selected="false">Statics</button>
                </li>

            </ul>
        </div>
    </div>
    <div class="tab-cotnent-holder background-secondary">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Caravans-tab-pane" role="tabpanel" aria-labelledby="Caravans-tab" tabindex="0">
                    <form action="" class="form-holder">
                        <div class="row align-items-end search-stock-row">
                            <div class="col-sm-6 col-md-4 col-lg">
                                <?= $listing_fields['type'] ?>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg">
                                <?= $listing_fields['berths'] ?>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg">
                                <?= $listing_fields['make'] ?>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg">
                                <?= $listing_fields['model'] ?>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg">
                                <?= $listing_fields['price_min'] ?>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg">
                                <?= $listing_fields['price_max'] ?>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg">
                                <div class="button-box">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                                </div>
                            </div>
                            <div class="col-12 text-center advance-search-col">
                                <div class="advance-search text-center mt-0 mt-lg-0">
                                    <a href="#" class="text-white fs-14-mobile">Advanced Search</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="Motorhomes-tab-pane" role="tabpanel" aria-labelledby="Motorhomes-tab" tabindex="0">
                    <form action="" class="form-holder">
                        <div class="row align-items-end">
                            <div class="col">
                                <?= $listing_fields['type'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['berths'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['make'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['model'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['price_min'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['price_max'] ?>
                            </div>
                            <div class="col">
                                <div class="button-box">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="Statics-tab-pane" role="tabpanel" aria-labelledby="Statics-tab" tabindex="0">
                    <form action="" class="form-holder">
                        <div class="row align-items-end">
                            <div class="col">
                                <?= $listing_fields['type'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['berths'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['make'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['model'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['price_min'] ?>
                            </div>
                            <div class="col">
                                <?= $listing_fields['price_max'] ?>
                            </div>
                            <div class="col">
                                <div class="button-box">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>