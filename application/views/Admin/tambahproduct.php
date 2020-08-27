<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Tambah Product!</h1>
            </div>
            <form class="user" method="post" action="<?= base_url('admin/tambahproduct'); ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Product" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <button type="submit" class=" btn btn-primary btn-block">
                Save
              </button>
          </div>
          </form>
          <div class="text-center">
            <a class="small" href="<?= base_url('admin/product'); ?>">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>