<div class="deals-swiper-holder">
    <div class="tab-nav-holder">
        <div class="container">
            <ul class="nav nav-tabs nav-tabs-style-2" id="myTabDeals-Swiper" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Weekly-Deals-tab" data-bs-toggle="tab" data-bs-target="#Weekly-Deals-tab-pane" type="button" role="tab" aria-controls="Weekly-Deals-tab-pane" aria-selected="true">Weekly Deals</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="New-Caravan-Offers-tab" data-bs-toggle="tab" data-bs-target="#New-Caravan-Offers-tab-pane" type="button" role="tab" aria-controls="New-Caravan-Offers-tab-pane" aria-selected="false">New Caravan Offers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="New-Motorhome-Offers-tab" data-bs-toggle="tab" data-bs-target="#New-Motorhome-Offers-tab-pane" type="button" role="tab" aria-controls="New-Motorhome-Offers-tab-pane" aria-selected="false">New Motorhome Offers</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Clearance-tab" data-bs-toggle="tab" data-bs-target="#Clearance-tab-pane" type="button" role="tab" aria-controls="Clearance-tab-pane" aria-selected="false">New Motorhome Offers</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-cotnent-holder ">
        <div class="container">
            <div class="tab-content" id="myTabDeals-SwiperContent">
                <div class="tab-pane fade show active" id="Weekly-Deals-tab-pane" role="tabpanel" aria-labelledby="Weekly-Deals-tab" tabindex="0">
                    <form action="" class="form-holder">
                        <div class="row align-items-end">
                            <div class="col">
                                <?php
                                form_control(array(
                                    'type' => 'select',
                                    'name' => 'Type',
                                    'id' => 'Type',
                                    'label' => 'Type',
                                    'class' => 'form-control-lg',
                                    'options' => array(
                                        '' => 'New or Used?',
                                        'New' => 'New',
                                        'Used' => 'Used',
                                        'Both' => 'Both',
                                    ),
                                ));
                                ?>
                            </div>
                            <div class="col">
                                <?php
                                form_control(array(
                                    'type' => 'select',
                                    'name' => 'Berths',
                                    'id' => 'Berths',
                                    'label' => 'Berths',
                                    'class' => 'form-control-lg',
                                    'options' => array(
                                        '' => 'How many berths?',
                                        'All' => 'All',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                    ),
                                ));
                                ?>
                            </div>
                            <div class="col">
                                <?php
                                form_control(array(
                                    'type' => 'select',
                                    'name' => 'Make',
                                    'id' => 'Make',
                                    'label' => 'Make',
                                    'class' => 'form-control-lg',
                                    'options' => array(
                                        '' => 'Select Make',
                                        'Option 1' => 'Option 1',
                                        'Option 2' => 'Option 2',
                                        'Option 3' => 'Option 3',
                                        'Option 4' => 'Option 4',
                                        'Option 5' => 'Option 5',
                                        'Option 6' => ' Option6',
                                    ),
                                ));
                                ?>
                            </div>
                            <div class="col">
                                <?php
                                form_control(array(
                                    'type' => 'select',
                                    'name' => 'Model',
                                    'id' => 'Model',
                                    'label' => 'Model',
                                    'class' => 'form-control-lg',
                                    'options' => array(
                                        '' => 'Select Model',
                                        'Option 1' => 'Option 1',
                                        'Option 2' => 'Option 2',
                                        'Option 3' => 'Option 3',
                                        'Option 4' => 'Option 4',
                                        'Option 5' => 'Option 5',
                                        'Option 6' => ' Option6',
                                    ),
                                ));
                                ?>
                            </div>
                            <div class="col">
                                <?php
                                form_control(array(
                                    'type' => 'select',
                                    'name' => 'Price-Min',
                                    'id' => 'Price-Min',
                                    'label' => 'Price(min.)',
                                    'class' => 'form-control-lg',
                                    'options' => array(
                                        '' => 'Any',
                                    ),
                                ));
                                ?>
                            </div>
                            <div class="col">
                                <?php
                                form_control(array(
                                    'type' => 'select',
                                    'name' => 'Price-Max',
                                    'id' => 'Price-Max',
                                    'label' => 'Price(max.)',
                                    'class' => 'form-control-lg',
                                    'options' => array(
                                        '' => 'Any',
                                    ),
                                ));
                                ?>
                            </div>
                            <div class="col">
                                <div class="button-box">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="New-Caravan-Offers-tab-pane" role="tabpanel" aria-labelledby="New-Caravan-Offers-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="New-Motorhome-Offers-tab-pane" role="tabpanel" aria-labelledby="New-Motorhome-Offers-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="Clearance-tab-pane" role="tabpanel" aria-labelledby="Clearance-tab" tabindex="0">...</div>

            </div>
        </div>
    </div>
</div>