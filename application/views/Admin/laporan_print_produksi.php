<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <style type="text/css">
    .table-data {
      width: 100%;
      border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 10pt;
    }
  </style>
  <h3>Laporan Data Hasil Produksi</h3>
  <br />
  <table class="table-data">
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
      foreach ($data_produksi as $b) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $b->line; ?></td>
          <td><?php echo $b->customer; ?></td>
          <td><?php echo $b->nama_product; ?></td>
          <td><?php echo $b->rencana_produksi; ?></td>
          <td><?php echo $b->hasil; ?></td>
          <td><?php echo $b->stok; ?></td>
          <td><?php echo $b->ng; ?></td>
          <td><?php echo $b->note; ?></td>
          <td><?php echo $b->delivery; ?></td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>


  <script type="text/javascript">
    window.print();
  </script>

</body>

</html>