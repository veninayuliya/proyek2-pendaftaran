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

  <title>Edit Penerimaan</title>

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
    <h3 class="my-4">Penerimaan Siswa Baru SDN Mojotengah 2</h3>
    <div class="container">
        <?php
        $id_pendaftaran = ($_GET['id_pendaftaran']);

        $query = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
        $result = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($result);
        ?>
	  <form method="POST" enctype="multipart/form-data">
            <div class="form-grup">
                <label>Nama Siswa</label><br>
                <input type="text" name="nama_lengkap" class="form-control" readonly value="<?php echo $d['nama_lengkap'];?>"><br>
            </div>
            <div class="form-group">
                <label>TTL</label><br>
                <input type="text" name="ttl" class="form-control" readonly value="<?php echo $d['ttl'];?>"><br>
            </div>
            <div class="form-group">
                <label>Asal Sekolah</label><br>
                <input type="text" name="sekolah_asal" class="form-control" readonly value="<?php echo $d['sekolah_asal'];?>"><br>
            </div>
            <div class="form-group">
                <label>Status</label><br>
                <select class="form-control" name="status">
                    <option value="<?php echo $d['status'];?>"><?php echo $d['status'];?></option>
                    <option value="Tidak Diterima">Tidak Diterima</option>
                    <option value="Diterima">Diterima</option>
                </select>
            </div><br>

            <a href="penerimaan-admin.php" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-primary" name="update">Update</button><br><br>
        </form>
        <?php
        if(isset(($_POST['update'])))
        {
            mysqli_query($koneksi,"UPDATE pendaftaran SET status='$_POST[status]'
            WHERE id_pendaftaran='$_GET[id_pendaftaran]'");	

            echo "<script>alert('Data penerimaan berhasil diperbaharui!');window.location='../page/penerimaan-admin.php';</script>";
        }
        ?>
    </div>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 10</p>
    </div>
  </footer>
</body>
</html>