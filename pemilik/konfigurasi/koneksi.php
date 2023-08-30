<?php

//Koneksi Ke Database
$koneksi = mysqli_connect('localhost','root','','listrikasia');

//Cek Koneksi
if (mysqli_connect_error()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

?>