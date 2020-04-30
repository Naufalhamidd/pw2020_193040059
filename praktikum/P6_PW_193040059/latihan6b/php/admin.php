<?php
require 'function.php';
$musik = query("SELECT * FROM musik");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/css.css">
</head>

<body>
  <table border="1px" ; cellpadding=10; cellspacing="1">
    <div class="tambah"><a href="tambah.php"><button>Tambah</button></a></div>
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama alat musik</th>
      <th>Cara main</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($musik as $musikk) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><a href="#"><button>Ubah</button></a>
          <a href="#"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $musikk['gambar'] ?>"></td>
        <td><?= $musikk["nama alat musik"]; ?></td>
        <td><?= $musikk["cara main"]; ?></td>
        <td><?= $musikk["harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>