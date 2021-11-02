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

  <title>Edit Alur Pendaftaran</title>

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
        <?php
        $id_alur = ($_GET['id_alur']);
        $query = "SELECT * FROM alur_pendaftaran WHERE id_alur='$id_alur'";
        $result = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($result);
        ?>
	  <form method="POST">
            <div class="form-grup">
                <label>Nama Kegiatan</label><br>
                <input type="text" name="nama_kegiatan" class="form-control" required value="<?php echo $d['nama_kegiatan'];?>"><br>
            </div>
            <div class="form-group">
                <label>Tanggal Pelaksanaan</label><br>
                <input type="text" name="pelaksanaan" class="form-control" required value="<?php echo $d['pelaksanaan'];?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label><br>
                <input type="text" name="keterangan" class="form-control" required value="<?php echo $d['keterangan'];?>">
            </div>
            
            <a href="alur_pendaftaran.php" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-primary" name="update">Update</button><br><br>
        </form>
        <?php
        if(isset(($_POST['update'])))
        {
            mysqli_query($koneksi,"UPDATE alur_pendaftaran SET nama_kegiatan='$_POST[nama_kegiatan]', pelaksanaan='$_POST[pelaksanaan]', keterangan='$_POST[keterangan]'
            WHERE id_alur='$_GET[id_alur]'");
            echo "<script>alert('Data telah diupdate');</script>";
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