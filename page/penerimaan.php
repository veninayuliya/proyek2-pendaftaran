<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Pendaftar</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" style="color:white;">SDN MOJOTENGAH 2</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../page/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page/pendaftaran.php">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../page/penerimaan.php">Penerimaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        include '../koneksi.php';
        $no=1;
        $data=mysqli_query($koneksi,"SELECT * FROM pendaftaran ORDER BY id_pendaftaran DESC LIMIT 1");
        while($d=mysqli_fetch_array($data)){
    ?>


    <div class="container-fluid">
        <div class="col-lg-10"> <br>
            <div class="card body">
                <div class="container" style="margin:30px;text-align:justify;display:grid;">
                    <img src="../img/<?php echo $d['foto'];?>" style="width:180px; height:250px;">
                    <p><b>Nama</b>: <?php echo $d['nama_lengkap']; ?></p>
                    <p><b>Jenis Kelamin</b>: <?php echo $d['jenis_kelamin']; ?></p>
                    <p><b>Asal Sekolah</b>: <?php echo $d['sekolah_asal']; ?></p>
                </div>
            </div><br>
            <div class="alert alert-info">
                    <p>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?php echo $d['status']; ?></b></p>
            </div>
            <?php
                }
            ?>
        </div>
      </div>
    </div>
</body>
</html>