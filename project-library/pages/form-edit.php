<?php

    include '../koneksi.php';
    $idbuku = $_GET['idbuku'];
    $Record = mysqli_query($koneksi, "SELECT * FROM `pustaka` WHERE idbuku = $idbuku");
    $data = mysqli_fetch_array($Record);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form input</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/forminput.css" rel="stylesheet">
</head>

<body>
    <nav class="nav">
        <div class="logo">
            <h2 style="color:#fff">Ngurah Project</h2>
        </div>
        <ul class="nav-menu">
            <li><a href="../pages/homepage.php">Home</a></li>
            <li><a href="../pages/show-tabel.php">Show Data</a></li>
        </ul>
    </nav>

    <section class="home">
        <div class="container">
            <div class="content">
                <form method="POST" action="../proses/editproses.php" enctype="multipart/form-data">
                    <label for="idbuku" hidden>Id Buku</label>
                    <br>
                    <input hidden class="form-control" name="idbuku" value="<?php echo $data['idbuku']?>" placeholder="Masukan Id Buku" required>
                    <br>
                    <label for="judulbuku">Judul Buku</label>
                    <br>
                    <input type="text" value="<?php echo $data['judulbuku'] ?>" name="judulbuku" class="form-control" placeholder="Masukan Judul Buku" required>
                    <br>
                    <label for="namapenerbit">Nama Penerbit</label>
                    <br>
                    <input type="text" name="namapenerbit" value="<?php echo $data['namapenerbit']?>" class="form-control" placeholder="Masukan Nama Penerbit" required>
                    <br>
                    <label for="tahunterbit">Tahun Terbit</label>
                    <br>
                    <input type="text" name="tahunterbit" value="<?php echo $data['tahunterbit']?>" class="form-control" placeholder="Masukan Tahun Terbit" required>
                    <br>
                    <!-- <label for="coverbuku" hidden>Cover Buku</label>
                    <br>
                    <input type="file" name="coverbuku" hidden value="<?php echo $data['coverbuku']?>" class="form-control" placeholder="Masukan Cover Buku" required><img src="<?php echo $data['coverbuku'] ?>" width='200px' height='70px' hidden alt="">
                    <br> -->
                    <label for="jenisbuku">Jenis Buku</label>
                    <br>
                    <input type="text" value="<?php echo $data['jenisbuku']?>" name="jenisbuku" class="form-control" placeholder="Masukan jenis buku" required>
                    <br>
                    <label for="kondisi">Kondisi</label>
                    <br>
                    <select name="statusbuku" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="baik" <?php if ($data['statusbuku'] == "baik") {
                                                echo "selected";}?>>baik</option>
                        <option value="rusak" <?php if ($data['statusbuku'] == "rusak") {
                                                echo "selected";}?>>rusak</option>
                    </select>
                    <br>
                    <label for="kondisi">Kondisi</label>
                    <br>
                    <select name="kondisi" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="dipinjam" <?php if ($data['kondisi'] == "dipinjam") {
                                                echo "selected";}?>>dipinjam</option>
                        <option value="tidak dipinjam" <?php if ($data['kondisi'] == "tidak dipinjam") {
                                                echo "selected";}?>>tidak dipinjam</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="submit" class="btn" value="kirim">
                </form>
            </div>
        </div>
    </section>
</body>

</html>
