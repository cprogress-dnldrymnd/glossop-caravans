<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFinanceCalculator"
  aria-labelledby="offcanvasFinanceCalculatorLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasFinanceCalculatorLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="offcanvas-body--inner background-white rounded overflow-hidden">
      <div class="offcanvas-form--holder">
        <div class="offcanvas-form--form">
          <div class="offcanvas-form--form-header background-yellow p-20">
            <div class="row g-4 justify-content-between align-items-center g-3">
              <div class="col-lg-6">
                <h4 class="fs-32">Finance calculator</h4>
              </div>
              <div class="col-lg-6">
                <p>
                  7.9% available, calculate the cost of your caravan or motorhome
                </p>
              </div>
            </div>
          </div>
          <div class="offcanvas-form--form-fields">
            <form action="" class="offcanvas-form mb-20">
              <div class="row g-3">
                <div class="col-lg-6">
                  <?php
                  echo form_control(array(
                    'type'  => 'text',
                    'name'  => 'Deposit',
                    'id'    => 'Deposit',
                    'label' => 'Deposit:',
                    'class' => 'form-control-lg',
                  ));
                  ?>
                </div>
                <div class="col-lg-6">
                  <?php
                  echo form_control(array(
                    'type'    => 'select',
                    'name'    => 'Duration',
                    'id'      => 'Duration',
                    'label'   => 'Duration:',
                    'class'   => 'form-control-lg',
                    'options' => array(
                      ''         => 'Select Duration',
                      'Option 1' => 'Option 1',
                      'Option 2' => 'Option 3',
                      'Option 3' => 'Option 3',
                    ),
                  ));
                  ?>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-lg btn-blue w-100"> Calculate </button>
                </div>
              </div>
            </form>

            <div class="desc fs-12">
              <p> Change the deposit and repayment period and the calculator will automatically work out your estimated
                repayments. The APR offered may vary according to a number of factors including deposit paid, status of
                the applicant, fees and charges and frequency of payments. *Final payment includes £10 Option To
                Purchase
                Fee</p>
            </div>
            <div class="offcanvas-form--results fs-16">
              <div class="row g-3">
                <div class="col-lg-3">
                  <?php
                  echo form_control(array(
                    'type'      => 'text',
                    'name'      => 'cash_price',
                    'id'        => 'cash_price',
                    'label'     => 'Cash Price::',
                    'attribute' => 'readonly',
                    'value' => '£8,488'
                  ));
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>