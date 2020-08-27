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
        <h3><b>Leader Data</b></h3>
    </div>
    <a href="<?= base_url('admin/tambahleader'); ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Leader Baru</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Leader Name</th>
                    <th>Line</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($leader as $a) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $a->nama ?></td>
                        <td><?php echo $a->line ?></td>
                        <td><?php echo $a->email ?></td>
                        <td><?php echo $a->Telepon ?></td>
                        <td>
                            <a class="btn btn-warning btn-xs" href=""><span class="glyphicon glyphicon-zoom-in">Edit</span></a>
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