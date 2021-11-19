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
        <div class="col-lg-10">
        <h3 class="my-4" align="center">Data Siswa</h3>
            <div class="card body">
                <div class="container" style="margin:30px;display:grid;">
                    <div class="row">
                        <div class="column" style="width:50%;padding:10px;">
                            <h4><u>IDENTITAS SISWA</u></h4>
                            <p><b>Nama Lengkap</b>: <?php echo $d['nama_lengkap']; ?></p>
                            <p><b>Jenis Kelamin</b>: <?php echo $d['jenis_kelamin']; ?></p>
                            <p><b>Tempat, Tanggal Lahir</b>: <?php echo $d['ttl']; ?></p>
                            <p><b>Nomor Induk Kependudukan</b>: <?php echo $d['nik']; ?></p>
                            <p><b>Nomor Akta Lahir</b>: <?php echo $d['no_akta_lahir']; ?></p>
                            <p><b>Agama</b>: <?php echo $d['agama']; ?></p>
                            <p><b>Asal Sekolah</b>: <?php echo $d['sekolah_asal']; ?></p>
                            <p><b>Alamat Rumah</b>: <?php echo $d['alamat']; ?></p>
                            <p><b>Nomor Telepon</b>: <?php echo $d['telepon']; ?></p><br>

                            <h4><u>DATA PERIODIK</u></h4>
                            <p><b>Tinggi Badan</b>: <?php echo $d['tb_siswa']; ?> cm</p>
                            <p><b>Berat Badan</b>: <?php echo $d['bb_siswa']; ?> kg</p>
                            <p><b>Jumlah Saudara</b>: <?php echo $d['jml_saudara']; ?></p>
                            <p><b>Jarak Rumah ke Sekolah</b>: <?php echo $d['jarak']; ?> km</p><br>

                            <h4><u>DATA AYAH KANDUNG</u></h4>
                            <p><b>Nama Ayah</b>: <?php echo $d['nama_ayah']; ?></p>
                            <p><b>NIK Ayah</b>: <?php echo $d['nik_ayah']; ?></p>
                            <p><b>Pekerjaan Ayah</b>: <?php echo $d['pekerjaan_ayah']; ?></p>
                            <p><b>Pendidikan Ayah</b>: <?php echo $d['pend_ayah']; ?></p><br>

                            <h4><u>DATA IBU KANDUNG</u></h4>
                            <p><b>Nama Ibu</b>: <?php echo $d['nama_ibu']; ?></p>
                            <p><b>NIK Ibu</b>: <?php echo $d['nik_ibu']; ?></p>
                            <p><b>Pekerjaan Ibu</b>: <?php echo $d['pekerjaan_ibu']; ?></p>
                            <p><b>Pendidikan Ibu</b>: <?php echo $d['pend_ibu']; ?></p>
                        </div>
                        <div class="column" style="width:400px;padding:10px;">
                            <img src="../img/<?php echo $d['foto'];?>" style="width:180px;height:250px;" align="right">
                        </div>
                    </div>
                </div>
            </div>
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