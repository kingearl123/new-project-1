<?php

    $koneksi = mysqli_connect('localhost','root','','projectrpl2');

    if (!$koneksi) {
        die('Could not connect: '. mysqli_connect_error());
    }

?>