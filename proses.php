<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama =  $_POST['nama'];
$prodi = $_POST['prodi'];
$size = $_POST['size'];
$email= $_POST['email'];

$query = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim',nama='$nama',prodi='$prodi',size='$size',email='$email' WHERE nim ='$nim'");

if($query){
    header("location:index.php");
}else{
    echo "Data Gagal diubah!";
}
?>