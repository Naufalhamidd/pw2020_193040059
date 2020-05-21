<?php
require 'function.php';

$id = $_GET['id'];
$musikk = query("SELECT * FROM musik WHERE id = $id")[0];

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Alat Musik</title>
</head>

<body>
  <h3>Form Ubah Data Alat Musik</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $musikk['id']; ?>">
    <ul>
      <li>
        <label>Gambar:</label><br>
        <input type="text" name="gambar" required value="<?= $musikk['gambar']; ?>">
      </li>
      <li><label>Nama alat musik:</label><br>
        <input type="text" name="nama alat musik" required value="<?= $musikk['nama alat musik']; ?>">

      </li>
      <li><label>Cara main:</label><br>
        <input type="text" name="cara main" required value="<?= $musikk['cara main']; ?>">
      </li>
      <li><label>Harga:</label><br>
        <input type="text" name="harga" required value="<?= $musikk['harga']; ?>">
      </li><br>
      <li><button type="submit" name="ubah">Ubah Data</button>
      </li>

    </ul>

  </form>
</body>

</html>