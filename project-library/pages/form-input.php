<?php

    include '../koneksi.php';

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
                <form method="POST" action="../proses/input-proses.php" enctype="multipart/form-data">
                    <label for="judulbuku">Judul Buku</label>
                    <br>
                    <input type="text" name="judulbuku" class="form-control" placeholder="Masukan Judul Buku" required>
                    <br>
                    <label for="namapenerbit">Nama Penerbit</label>
                    <br>
                    <input type="text" name="namapenerbit" class="form-control" placeholder="Masukan Nama Penerbit" required>
                    <br>
                    <label for="tahunterbit">Tahun Terbit</label>
                    <br>
                    <input type="text" name="tahunterbit" class="form-control" placeholder="Masukan Tahun Terbit" required>
                    <br>
                    <label for="coverbuku">Cover Buku</label>
                    <br>
                    <input type="file" name="coverbuku" class="form-control" placeholder="Masukan Tahun Terbit" required>
                    <br>
                    <label for="jenisbuku">Jenis Buku</label>
                    <br>
                    <input type="text" name="jenisbuku" class="form-control" placeholder="Masukan jenis buku" required>
                    <br>
                    <label for="statusbuku">Status Buku</label>
                    <br>
                    <select name="statusbuku" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="baik">baik</option>
                        <option value="rusak">rusak</option>
                    </select>
                    <br>
                    <label for="kondisi">Status Buku</label>
                    <br>
                    <select name="kondisi" class="form-control">
                        <option value="">Silahkan Pilih</option>
                        <option value="dipinjam">dipinjam</option>
                        <option value="tidak dipinjam">tidak dipinjam</option>
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