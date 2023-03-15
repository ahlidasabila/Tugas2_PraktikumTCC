<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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
      <div class="w-50 mx-auto">
          <br><center><h3>Formulir pengisian Biodata</h3></center>
     <hr>
     <a href="index.php" class="btn btn-success btn-md mb-3">Kembali ke Halaman Utama</a>
         <p>
          <form method="POST" action="input.php" >
          <div class="form-group row">
             <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nim" placeholder="Inputkan NIM">
              </div>
             </div><br>

            <div class="form-group row">
             <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" placeholder="Inputkan Nama Lengkap">
              </div>
             </div><br>

             <div class="form-group row">
             <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="prodi" placeholder="Inputkan Jurusan">
              </div>
             </div><br>

             <div class="form-group row">
             <label for="size" class="col-sm-2 col-form-label">Size</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="size" placeholder="Inputkan Size Chart">
              </div>
             </div><br>

             <div class="form-group row">
             <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" placeholder="Inputkan Email">
              </div>
             </div><br>

            <div class="col-12">
              <center>
             <button type="submit" class="btn btn-dark">Tambah data</button>
            </div>
          </center><br>
</div>
        </form> </p>
        
          <div class="p-3 text-center bg-dark text-light">©2021</div>
</body>
</html>