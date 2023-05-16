<?php

include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/tabeldata.css" rel="stylesheet">
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
            <h1>Daftar Buku</h1>
            <a class="button-input-1" href="../pages/form-input.php">Masukkan Data</a>
            <a class="button-input-1" href="../pages/printdata.php">print data</a>
           
            
            <table border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Nama Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th>Cover Buku</th>
                        <th>Jenis Buku</th>
                        <th>kondisi Buku</th>
                        <th>Status Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $no = 1;
                    $query = "SELECT * FROM pustaka";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        $idbuku = $row['idbuku'];
                        $judulbuku = $row['judulbuku'];
                        $namapenerbit = $row['namapenerbit'];
                        $tahunterbit = $row['tahunterbit'];
                        $coverbuku = $row['coverbuku'];
                        $jenisbuku = $row['jenisbuku'];
                        $statusbuku = $row['statusbuku'];
                        $kondisi = $row['kondisi'];
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $judulbuku; ?></td>
                            <td><?php echo $namapenerbit; ?></td>
                            <td><?php echo $tahunterbit; ?></td>
                            <td><?php echo "<img src='$row[coverbuku]' width = '200px'  height = '70px'"; ?></td>
                            <td><?php echo $jenisbuku; ?></td>
                            <td><?php echo $statusbuku; ?></td>
                            <td><?php echo $kondisi; ?></td>
                            <td>
                                <a class="button-input-edit" href="../pages/form-edit.php?idbuku=<?php echo $row['idbuku']; ?>">Edit</a>
                                <a class="button-input-hapus" href="../proses/deleteproses.php?idbuku=<?php echo $row['idbuku']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </section>
</body>

</html>