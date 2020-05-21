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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
    <nav>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
            <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
        </ul>
    </nav>

    <div class="container-md">
        <div class="box">
            <div class="container-1">
                <form action="" method="GET">
                    <input type="text" id="search" name="keyword" placeholder="Search..." class="keyword">
                    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
                </form>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <a href="php\login.php">
                        <button type="button">Admin</button>
                    </a>
                </div>
            </div>
        </div>
        <?php if (empty($musik)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
    </div>
    <section class="home mt-4" id="home">
        <div class="container">
            <hr class="my-4">
            <div class="row">
                <?php foreach ($musik as $musikk) : ?>
                    <div class="col-sm">
                        <div class="card m-3" style="width: 18rem;">
                            <img class="img-responsive" class="card-img-top" src="assets/img/<?= $musikk['gambar'] ?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?= $musikk['nama alat musik']; ?></h4>
                                <a class="btn btn-outline-primary my-2 my-sm-0" href="php/detail.php?id=<?= $musikk['id'] ?>">
                                    <h5>Lihat Detail</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>

</body>

</html>