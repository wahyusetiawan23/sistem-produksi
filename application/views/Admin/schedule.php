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
                    <th>Product</th>
                    <th>Production Plan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> 1</td>
                    <td>TG4R</td>
                    <td>PT. KICI</td>
                    <td>2VF</td>
                    <td> <input class="form-control center" type="text" id="rencana" name="rencana" placeholder="Production Plan"></td>
                </tr>
                <tr>
                    <td> 2</td>
                    <td>TG4R</td>
                    <td>PT. KICI</td>
                    <td>YR9</td>
                    <td> <input class="form-control" type="text" id="rencana" name="rencana" placeholder="Production Plan"></td>

                </tr>
            </tbody>
        </table>
        <a href="<?php echo base_url() . 'admin/tambah_anggota'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span>Send</a>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->