<?php
require 'function.php';

if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $musik = query("SELECT * FROM musik 
                  WHERE 
                  gambar LIKE '%$keyword%' OR
                  nama_alat_musik LIKE '%$keyword%' OR
                  cara_main LIKE '%$keyword%' OR
                  harga LIKE '%$keyword%'");
} else {
  $musik = query("SELECT * FROM musik");
}
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
    <form action="" method="get">
      <input type="text" name="keyword" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama alat musik</th>
      <th>Cara main</th>
      <th>Harga</th>
    </tr>
    <?php if (empty($musik)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($musik as $musikk) : ?>
        <tr>
          <td><?= $i; ?></td>

          <td> <button><a href="ubah.php?id=<?= $musikk['id']; ?>">Ubah</a></button> </li>
            <button><a href="hapus.php?id=<?= $musikk['id']; ?>" onclick="return confirm('hapus data?');">Hapus</a></button> </li>
          </td>
          <td><img src="../assets/img/<?= $musikk['gambar'] ?>"></td>
          <td><?= $musikk["nama alat musik"]; ?></td>
          <td><?= $musikk["cara main"]; ?></td>
          <td><?= $musikk["harga"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif ?>
  </table>
</body>

</html>