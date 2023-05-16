<?php

include '../koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/homepage.css" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <div class="logo">
            <h2 style="color:#fff">Ngurah Project</h2>
        </div>
        <ul class="nav-menu">
            <li><a href="../pages/home.php">Home</a></li>
            <li><a href="../pages/show-tabel.php">Show Data</a></li>
        </ul>
    </nav>

    <section class="home">
        <div class="container">
            <h1>Selamat Datang Di Homepage</h1>


            <!-- card caculator -->
            
            <div class="wrap">

            <?php
                $accsql = "SELECT * FROM pustaka";
                if ($show = mysqli_query($koneksi, $accsql)) {
                    $jumlah = mysqli_num_rows($show);

                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">jumlah buku yang ada</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jumlah) ?></p>
                    </div>
                </div>
                <?php } ?>

                <?php
                $acsql = "SELECT * from pustaka WHERE kondisi <> 'dipinjam'";
                if ($sho = mysqli_query($koneksi, $acsql)) {
                    $jumla = mysqli_num_rows($sho);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">jumlah data buku yang tidak dipinjam</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jumla) ?></p>
                    </div>
                </div>
                <?php }?>

                <!-- buku dipinjam -->
                <?php
                $acsql1 = "SELECT * from pustaka WHERE kondisi <> 'tidak dipinjam'";
                if ($sho1 = mysqli_query($koneksi, $acsql1)) {
                    $jumla1 = mysqli_num_rows($sho1);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">jumlah buku yang dipinjam</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jumla1) ?></p>
                    </div>
                </div>
                <?php }?>

                <?php
                $sql = "SELECT * from pustaka WHERE statusbuku <> 'baik'";
                if ($tampil = mysqli_query($koneksi, $sql)) {
                    $jum = mysqli_num_rows($tampil);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">jumlah buku yang rusak</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $jum) ?></p>
                    </div>
                </div>
                <?php }?>

                <?php
                $sql1 = "SELECT * from pustaka WHERE statusbuku <> 'rusak'";
                if ($sh1 = mysqli_query($koneksi, $sql1)) {
                    $juml1 = mysqli_num_rows($sh1);
                ?>
                <div class="box">
                    <div class="box-top">
                        <div class="title-flex">
                            <h3 class="box-title">jumlah buku yang tidak rusak</h3>
                            <br>
                        </div>
                        <p class="user-follow-info"><?php printf(" %d\n", $juml1) ?></p>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>
    </section>
</body>

</html>