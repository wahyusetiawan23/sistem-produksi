<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <div class="kotak">
      <p id="jam"></p>
    </div>
    <div class="kotak">
      <p id="menit"></p>
    </div>
    <div class="kotak">
      <p id="detik"></p>
    </div>|<?php
            echo date('l, d-m-Y');
            ?>
  </h1>
  <?php

  ?>
  <div class="page-header">
    <h3><b>Production Report</b></h3>
  </div>
  <br>
  <table>
    <thead>
      <tr>
        <th width="125"><b>From</b></th>
        <th width="125"><b>To</b></th>
      </tr>
    </thead>

    <tbody>
      <td><input class="form-control" type="date" name="tanggal"></td>
      <td><input class="form-control" type="date" name="tanggal"></td>
      <td><a class="btn btn-primary btn-md" href="">Show</a></td>
    </tbody>
  </table>
  <br>
  <a class="btn btn-primary btn-md" href="<?php echo base_url() . 'admin/laporan_print_anggota' ?>">
    <span class="glyphicon glyphicon-print"></span> Print</a>
  <a class="btn btn-success btn-md" href="<?php echo base_url() . 'admin/laporan_pdf_anggota' ?>">
    <span class="glyphicon glyphicon-print"></span> Excel</a>
  <br><br>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="table-datatable">
      <thead>
        <tr>
          <th>No</th>
          <th>Line</th>
          <th>Customer</th>
          <th>Product</th>
          <th>Production Plan</th>
          <th>Result</th>
          <th>Stock</th>
          <th>NG</th>
          <th>Note</th>
          <th>Delivery</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $no = 1;
        foreach ($laporan as $f) {
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $f->line ?></td>
            <td><?php echo $f->customer ?></td>
            <td><?php echo $f->nama_product ?></td>
            <td><?php echo $f->rencana_produksi ?></td>
            <td><?php echo $f->hasil ?></td>
            <td><?php echo $f->stok ?></td>
            <td><?php echo $f->ng ?></td>
            <td><?php echo $f->note ?></td>
            <td><?php echo $f->delivery ?></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>

  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->