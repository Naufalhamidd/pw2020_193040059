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
  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="css/css.css">
</head>

<body>
  <div class="container-lg">
    <table border="1px" ; cellpadding=10; cellspacing="1" class="table table-striped">
      <form action="" method="get">
        <div class="form-row align-items-center mb-1">
          <div class="col-sm-3 my-1">
            <input type="text" class="form-control" id="inlineFormInputName" placeholder="search" name="keyword" autofocus>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary" name="cari">Submit</button>
          </div>
        </div>
      </form>
      <a href="tambah.php"><button class="btn btn-outline-primary mb-1">TambahData!!</button></a>
      <a href="logout.php"><button class="btn btn-outline-danger mb-1 ml-1">Logout:D</button></a>
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