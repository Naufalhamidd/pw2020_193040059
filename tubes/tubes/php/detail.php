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
    <h3></h3>
    <div class="card w-25" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/<?= $musik["gambar"] ?>" alt="Card image cap">
        <div class="card-body">
            <h3>NO: <?= $musik['no']; ?></h3>
            <h3>Nama: <?= $musik['nama alat musik']; ?></h3>
            <h3>Cara Main: <?= $musik['cara main']; ?></h3>
            <h3>Harga: <?= $musik['harga']; ?></h3>
            <button><a href="../index.php"> kembali</a></button>
        </div>
    </div>
</body>

</html>