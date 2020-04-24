<?php
require 'php/function.php';
$musik = query("SELECT * FROM musik")
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

    <?php
    foreach ($musik as $musikk) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $musikk["no"] ?>">
                <?= $musikk["nama alat musik"] ?>
            </a>
        </p>
    <?php endforeach; ?>

</body>

</html>