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
    <div class="page-header">
        <h3><b>Schedule</b></h3>
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
                    <th>Action</th>
                </tr>
            </thead>

            <tbody><?php
                    $no = 1;
                    foreach ($schedule as $a) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $a->line ?></td>
                        <td><?php echo $a->customer ?></td>
                        <td><?php echo $a->nama_product ?></td>
                        <td><?php echo $a->rencana_produksi ?></td>
                        <td>
                            <a class="btn btn-danger btn-xs" href=""><span class="glyphicon glyphicon-remove">Delete</span></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->