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
        <h3><b>User Data</b></h3>
    </div>
    <a href="<?php echo base_url() . 'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah User</a>
    <br><br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($atur_user as $i) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i->name ?></td>
                        <td><?php echo $i->email ?></td>
                        <td><img src="<?= base_url('assets/img/profile/') . $i->image ?>"></td>
                        <td><?php echo $i->role_id ?></td>


                        <td>
                            <a class="btn btn-warning btn-xs" href=""><span class="glyphicon glyphicon-remove">Edit</span></a>
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