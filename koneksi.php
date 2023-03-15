<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "database";

    $koneksi = new mysqli($hostname, $username, $password, $database);

    if($koneksi->connect_error) {
        die('Koneksi Ke Database Gagal! : ');
    }
?>