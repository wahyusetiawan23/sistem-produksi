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

  <div class="jumbotron">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets'); ?>/img/npa.jpg" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets'); ?>/img/npa.jpg" class="d-block w-100 h-50" alt="...">
        </div>

      </div>
    </div>

  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->