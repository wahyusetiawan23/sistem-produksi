<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Tambah Customer!</h1>
            </div>
            <form class="user" method="post" action="<?= base_url('admin/tambahcustomer'); ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Customer" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Address" value="<?= set_value('address'); ?>">
                <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control form-control-user" name="ponsel" placeholder="Nomor Telepon" required />
                <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <button type="submit" class=" btn btn-primary btn-block">
                Save
              </button>
          </div>
          </form>
          <div class="text-center">
            <a class="small" href="<?= base_url('admin/customer'); ?>">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>