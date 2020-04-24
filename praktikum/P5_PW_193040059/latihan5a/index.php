<?php 
    $conn =  mysqli_connect("localhost","root","") or die("koneksi ke DB gaggal");

    mysqli_select_db($conn,"pw_193040059") or die("Database Salah");
    
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
    <table border = "1px" cellpadding = "10" cellspacing= "1"> 
         <tr>
            <th>no</th>
            <th>nama alat musik</th>
            <th>cara main</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>
            
        <?php
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row["no"] ?></td>
                    <td><?= $row["nama alat musik"] ?></td>
                    <td><?= $row["cara main"] ?></td>
                    <td><?= $row["harga"] ?></td>
                    <td><img src = "assets/img/<?=$row["gambar"];?>"></td>
                  
                </tr>
            <?php endwhile; ?>
        
     </table>
</body>
</html> 