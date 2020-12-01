<?php
require 'koneksi.php';
$transaksi = query("SELECT * FROM transaksi");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ass 2</title>
</head>

<body>

  <h1> tampilan menu </h1>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No</th>
      <th>ID Transaksi</th>
      <th>Nama pemesan</th>
      <th>Nama Makanan</th>
      <th>Harga Makanan</th>
    </tr>

    <?php $i = 1;  ?>
    <?php foreach ($transaksi as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>

        <td><?= $row["id"]; ?></td>
        <td><?= $row["nama_pemesan"]; ?></td>
        <td><?= $row["nama_makanan"]; ?></td>
        <td><?= $row["harga"]; ?></td>

      </tr>
    <?php endforeach; ?>
  </table>


</body>

</html>