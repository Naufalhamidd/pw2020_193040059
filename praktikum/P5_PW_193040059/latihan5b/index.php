<?php
require 'php/function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
    <table border = "1px"; cellpadding = 10; cellspacing= "1"> 
         <tr>
            <th>no</th>
            <th>nama alat musik</th>
            <th>cara main</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>
            
        <?php
            foreach ($mahasiswa as $mhs) :?> 
                <tr>
                <tr>
                    <td><?= $mhs["no"] ?></td>
                    <td><?= $mhs["nama alat musik"] ?></td>
                    <td><?= $mhs["cara main"] ?></td>
                    <td><?= $mhs["harga"] ?></td>
                    <td> <img src ="assets/img/<?= $mhs["gambar"]?>"></td>
                  
                </tr>
                </tr>
            
       <?php endforeach; ?>
     </table>
</body>
</html> 