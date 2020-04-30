<?php
// mengecek apakaha ada id yang dikirim
// jika tidak ada maka akan dikembalikan ke halaman index

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

// mengambil id dari url

$id = $_GET['id'];
// melakukan query dengaan menggunakan id  yang diambil dari url
$musik = query("SELECT * FROM musik WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
    <img src="../assets/img/<?= $musik['gambar'] ?>">
    <p> NO: <?= $musik['no']; ?></p>
    <p> Nama: <?= $musik['nama alat musik']; ?></p>
    <p> Cara Main: <?= $musik['cara main']; ?></p>
    <p> Harga: <?= $musik['harga']; ?></p>
    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
</body>

</html>