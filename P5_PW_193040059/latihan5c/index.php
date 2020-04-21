<?php
require 'php/function.php';
$mahasiswa = query("SELECT * FROM mahasiswa")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height:190px;
            padding: 20px;
        }
        body {
            text-align: center;
        }
    </style>

</head>
<body>
            
        <?php
            foreach ($mahasiswa as $mhs) :?> 
                <p class = "nama">
                   <a href="php/detail.php?id=<?= $mhs["no"]?>">
                   <?= $mhs["nama alat musik"] ?>
                   </a>
                </p>
       <?php endforeach; ?>
       
</body>
</html> 