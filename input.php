<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$size = $_POST['size'];
$email= $_POST['email'];

$query=mysqli_query($koneksi, " INSERT INTO mahasiswa VALUES('$nim','$nama','$prodi','$size','$email')")
or die (mysqli_error($koneksi));

if ($query){
    header("location:index.php");
    echo"Data berhasil ditambahkan!";
}else{
    echo"Proses input gagal!";
}
?>