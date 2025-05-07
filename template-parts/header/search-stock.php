<div class="seach-stock-holder">
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
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Caravans-tab-pane" role="tabpanel" aria-labelledby="Caravans-tab" tabindex="0">
                <form action="">
                    <div class="row">
                        <div class="col-auto">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-control form-control-lg" name="type" id="type">
                                    <option value="New">New</option>
                                    <option value="Used">Used</option>
                                    <option value="Both">Both</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="Motorhomes-tab-pane" role="tabpanel" aria-labelledby="Motorhomes-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="Statics-tab-pane" role="tabpanel" aria-labelledby="Statics-tab" tabindex="0">...</div>
        </div>
    </div>
</div>