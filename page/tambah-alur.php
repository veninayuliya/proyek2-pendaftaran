<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Alur Pendaftaran</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" style="color:white;">SDN MOJOTENGAH 2</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home-panitia.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="alur_pendaftaran.php">Kelola Alur</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="penerimaan.php">Penerimaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-md-6">
    <h3 class="my-4">Alur Pendaftaran Siswa Baru SDN Mojotengah 2</h3>
    <div class="container">
	  <form method="POST">
            <div class="form-grup">
                <label>Nama Kegiatan</label><br>
                <input type="text" name="nama_kegiatan" placeholder="Masukkan nama kegiatan" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Tanggal Pelaksanaan</label><br>
                <input type="text" name="pelaksanaan" placeholder="Masukkan waktu pelaksanaan (dd-mm-yyyyy)" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Keterangan</label><br>
                <input type="text" name="keterangan" placeholder="Masukkan keterangan kegiatan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Tambah</button><br><br>
        </form>
        <?php
        if(isset(($_POST['submit'])))
        {
            mysqli_query($koneksi,"INSERT INTO alur_pendaftaran (nama_kegiatan,pelaksanaan,keterangan) 
            VALUES('$_POST[nama_kegiatan]','$_POST[pelaksanaan]','$_POST[keterangan]')");

            echo "<script>alert('Data alur pendaftaran telah ditambahkan');</script>";
            echo "<script>location='alur_pendaftaran.php';</script>";
        }
        ?>


    </div>
  </div>
  <!-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 10</p>
    </div>
  </footer> -->
</body>
</html>
