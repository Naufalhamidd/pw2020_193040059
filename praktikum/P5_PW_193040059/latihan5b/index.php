<?php
require 'php/function.php';
$musik = query("SELECT * FROM musik");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 190px;
            padding: 20px;
        }

        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <table border="1px" ; cellpadding=10; cellspacing="1">
        <tr>
            <th>no</th>
            <th>nama alat musik</th>
            <th>cara main</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>

        <?php
        foreach ($musik as $musikk) : ?>
            <tr>
            <tr>
                <td><?= $musikk["no"] ?></td>
                <td><?= $musikk["nama alat musik"] ?></td>
                <td><?= $musikk["cara main"] ?></td>
                <td><?= $musikk["harga"] ?></td>
                <td> <img src="assets/img/<?= $musikk["gambar"] ?>"></td>

            </tr>
            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>