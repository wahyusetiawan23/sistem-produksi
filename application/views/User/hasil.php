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
        <h3><b>Data Produksi</b></h3>
    </div>

    <br><br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Line</th>
                    <th>Customer</th>
                    <th>Product Name</th>
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
                foreach ($hasil as $e) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $e->line ?></td>
                        <td><?php echo $e->customer ?></td>
                        <td><?php echo $e->nama_product ?></td>
                        <td><?php echo $e->rencana_produksi ?></td>
                        <td> <input class="form-control" type="text" id="hasil" name="hasil"></td>
                        <td> <input class="form-control" type="text" id="stok" name="stok"></td>
                        <td> <input class="form-control" type="text" id="NG" name="NG"></td>
                        <td> <input class="form-control" type="text" id="note" name="note"></td>
                        <td> <input class="form-control" type="text" id="delivery" name="delivery"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo base_url() . 'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Send</a>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->