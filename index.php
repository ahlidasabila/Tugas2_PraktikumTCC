<?php
session_start();
if(empty($_SESSION['username'])) {
  header("location:login.php?pesan=belum_login");
}?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
          <nav class="navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="#">REKAP DATA PEMESANAN KORSA MAHASISWA</a>
              <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
          </ul>
          </div>
      </nav>
      <div class="container mt-3">
         <a href="form.php" class="btn btn-success btn-md mb-3">+ Tambah data</a>
         <table class="table table-striped table-howver table-bordered">
            <thead class="table-dark">
                <tr>
                    <td><center>NIM</center></td>
                    <td><center>NAMA</center></td>
                    <td><center>PRODI</center></td>
                    <td><center>SIZE CHART</center></td>
                    <td><center>E-MAIL</center></td>
                    <td><center>KETERANGAN</center></td>
                  </tr></thead>
                  <?php
                  include 'koneksi.php';
                  $query = mysqli_query($koneksi, "SELECT * from mahasiswa");
                  while($data=mysqli_fetch_array($query)){
                  ?>
            <tbody>
                <tr>
                <td><?php echo $data['nim'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['prodi'];?></td>
                <td><?php echo $data['size'];?></td>
                <td><?php echo $data['email'];?></td>
               <td> 
                 <div class="row">
                 <div class="col d-flex justify-content-center">
                   <a href='edit.php?nim=<?php echo $data ['nim'];?>' class="btn btn-warning">Edit</a>
                  </div>
               
                  <div class="col d-flex justify-content-center">
                   <a href='hapus.php?nim=<?php echo $data ['nim'];?>' class="btn btn-danger">Hapus</a>
                  </div>
                </div>
               </td>
               <?php
                  }
                  ?>
            </tr>
            </tbody>
</table>
<a href="logout.php" ><button  type="button" class="btn btn-dark btn-md mb-3">Logout</button></a>
         </div>
         <br>
          <div class="p-3 text-center bg-dark text-light">©Ahlida Sabila Larasati</div>
</body>
</html>