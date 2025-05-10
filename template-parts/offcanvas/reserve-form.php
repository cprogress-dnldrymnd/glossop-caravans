<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasReserveForm"
  aria-labelledby="offcanvasReserveFormLabel">
  <div class="offcanvas-body">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body--inner background-white rounded overflow-hidden">
      <div class="offcanvas-form--holder">
        <div class="offcanvas-form--form">
          <div class="offcanvas-form--form-header background-gray p-20">
            <h4 class="fs-32">Reserve this caravan for free</h4>
          </div>
          <div class="desc fs-12 mb-20">
            <p> Fill in the form below to reserve the <span class="name"><strong>Elddis Avante 462 2012</strong></span> and a member of the team will be in
              contact with you to arrange a viewing.</p>
          </div>
          <div class="offcanvas-form--form-fields">
            <form action="" class="offcanvas-form mb-20">
              <div class="row g-3">
                <div class="col-lg-6">
                  <?php
                  echo form_control(array(
                    'type'  => 'text',
                    'name'  => 'First_Name',
                    'id'    => 'First_Name',
                    'label' => 'First Name:',
                    'class' => 'form-control',
                    'value' => 'John'
                  ));
                  ?>
                </div>
                <div class="col-lg-6">
                  <?php
                  echo form_control(array(
                    'type'    => 'select',
                    'name'    => 'Last_Name',
                    'id'      => 'Last_Name',
                    'label'   => 'Last Name:',
                    'class'   => 'form-control',
                    'value' => 'Doe'
                  ));
                  ?>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-lg btn-blue w-100"> Calculate </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>