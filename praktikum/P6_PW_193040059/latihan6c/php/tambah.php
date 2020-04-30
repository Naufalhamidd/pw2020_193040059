<?php
require 'function.php';

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
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
  <title>Tambah Data Alat Musik</title>
</head>

<body>
  <h3>Form Tambah Data Alat Musik</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>Gambar:</label><br>
        <input type="text" name="gambar" required>
      </li>
      <li><label>Judul:</label><br>
        <input type="text" name="nama alat musik" required>

      </li>
      <li><label>Penulis:</label><br>
        <input type="text" name="cara main" required>
      </li>
      <li><label>Stok:</label><br>
        <input type="text" name="harga" required>
      </li><br>
      <li><button type="submit" name="tambah">Tambah Data</button>
      </li>

    </ul>

  </form>
</body>

</html>